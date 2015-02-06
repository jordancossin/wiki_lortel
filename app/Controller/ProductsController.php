<?php
App::uses('AppController', 'Controller');
/**
 * Products Controller
 *
 * @property Product $Product
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class ProductsController extends AppController {

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
	public function index() 
	{
		
		if (isset($this->request->data['Product']))
		{

			$product_name = $this->request->data['Product']['name'];

			$this->Paginator->settings = array(
				'fields' => array('Product.id', 'Product.name'),
		        'conditions' => array('Product.name LIKE' => '%'.$product_name.'%'),
		        'limit' => 10
		    );
		    $products = $this->Paginator->paginate('Product');
		    $this->set(compact('products'));
		}
		else
		{
			$this->set('products', $this->Paginator->paginate('Product'));
		}
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Product->exists($id)) {
			throw new NotFoundException(__('Invalid product'));
		}
		$options = array('conditions' => array('Product.' . $this->Product->primaryKey => $id));
		$this->set('product', $this->Product->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Product->create();
			if ($this->Product->save($this->request->data)) {
				$this->Session->setFlash(__('The product has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The product could not be saved. Please, try again.'));
			}
		}
		$categories = $this->Product->Category->find('list');
		$createUsers = $this->Product->CreateUser->find('list');
		$modifyUsers = $this->Product->ModifyUser->find('list');
		$providers = $this->Product->Provider->find('list');
		$this->set(compact('categories', 'createUsers', 'modifyUsers', 'providers'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) 
	{
		if (!$this->Product->exists($id))
		{
			throw new NotFoundException(__('Invalid product'));
		}
		if ($this->request->is(array('post', 'put'))) 
		{
			if ($this->Product->save($this->request->data)) 
			{
				$this->Session->setFlash(__('The product has been saved.'));
				return $this->redirect(array('action' => 'edit', $id ));
			} 
			else 
			{
				$this->Session->setFlash(__('The product could not be saved. Please, try again.'));
			}
		} 
		else 
		{
			$options = array('conditions' => array('Product.' . $this->Product->primaryKey => $id));
			$this->request->data = $this->Product->find('first', $options);
		}
		$categories = $this->Product->Category->find('list');
		$createUsers = $this->Product->CreateUser->find('list');
		$modifyUsers = $this->Product->ModifyUser->find('list');
		$providers = $this->Product->Provider->find('list');
		$this->set(compact('categories', 'createUsers', 'modifyUsers', 'providers'));

		$this->Product->recursive = 0;
		$this->set('products' ,$this->Paginator->paginate());
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Product->id = $id;
		if (!$this->Product->exists()) {
			throw new NotFoundException(__('Invalid product'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Product->delete()) {
			$this->Session->setFlash(__('The product has been deleted.'));
		} else {
			$this->Session->setFlash(__('The product could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
	
	
}
