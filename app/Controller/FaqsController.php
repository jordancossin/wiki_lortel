<?php
App::uses('AppController', 'Controller');
/**
 * Faqs Controller
 *
 * @property Faq $Faq
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class FaqsController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator', 'Session');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Faq->recursive = 0;
		$this->set('faqs', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Faq->exists($id)) {
			throw new NotFoundException(__('Invalid faq'));
		}
		$options = array('conditions' => array('Faq.' . $this->Faq->primaryKey => $id));
		$this->set('faq', $this->Faq->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add()
	{
		
		if (isset($this->request->data['Faq']['id_product']))
		{
			//Ajout d'un faq sur un produit
			if ($this->request->is('post')) {
				$this->Faq->create();
				if ($this->Faq->save($this->request->data)) 
				{
					$this->Session->setFlash(__('Votre question a bien été sauvegardée.'));
					return $this->redirect(array('controller' => 'Products', 'action' => 'edit', $this->request->data['Faq']['id_product']));
				} 
				else 
				{
					$this->Session->setFlash(__('The faq could not be saved. Please, try again.'));
				}
			}	
		}
		elseif (isset($this->request->data['Faq']['id_category']))
		{
			//Ajout d'un faq sur une catégorie
			return $this->redirect(array('controller' => 'Categories', 'action' => 'index', 0, $id_category));
		}
		elseif (isset( $this->request->data['Faq']['id_provider']))
		{
			//Ajout d'un faq sur un fournisseur
			if ($this->Faq->save($this->request->data)) 
			{
				$this->Session->setFlash(__('Votre question a bien été sauvegardée.'));
				return $this->redirect(array('controller' => 'Providers', 'action' => 'edit', $this->request->data['Faq']['id_provider']));
			}
			else 
			{
				$this->Session->setFlash(__('The faq could not be saved. Please, try again.'));
			}
		} 
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Faq->exists($id)) {
			throw new NotFoundException(__('Invalid faq'));
		}
		if ($this->request->is(array('post', 'put'))) {
			$this->Faq->create();
			if ($this->Faq->save($this->request->data)) {
				$this->Session->setFlash(__('The faq has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The faq could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Faq.' . $this->Faq->primaryKey => $id));
			$this->request->data = $this->Faq->find('first', $options);
		}
		$categories = $this->Faq->Category->find('list');
		$products = $this->Faq->Product->find('list');
		$providers = $this->Faq->Provider->find('list');
		$createUsers = $this->Faq->CreateUser->find('list');
		$modifyUsers = $this->Faq->ModifyUser->find('list');
		$this->set(compact('categories', 'products', 'providers', 'createUsers', 'modifyUsers'));
		
		$this->Faq->recursive = 0;
		if (isset($this->request->data['FAQ']))
		{
			$faq_name = $this->request->data['Faq']['name'];

			$this->Paginator->settings = array(
				'fields' => array('Faq.id', 'Faq.question', 'Faq.answer'),
		        'conditions' => array('Faq.name LIKE' => '%'.$faq_name.'%'),
		        'limit' => 10
		    );
		    $faqs = $this->Paginator->paginate('Faq');
		    $this->set(compact('faqs'));
		}
		else
		{
			$this->set('faqs', $this->Paginator->paginate('Faq'));
		}
		
		
    }

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) 
	{
		$this->Faq->id = $id;
		if (!$this->Faq->exists()) 
		{
			throw new NotFoundException(__('Invalid faq'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Faq->delete()) 
		{
			$this->Session->setFlash(__('The faq has been deleted.'));
		} else 
		{
			$this->Session->setFlash(__('The faq could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
		
	}
   
	
}
