<?php
App::uses('AppController', 'Controller');
/**
 * Documents Controller
 *
 * @property Document $Document
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class DocumentsController extends AppController {

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
		$this->Document->recursive = 0;
		$this->set('documents', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Document->exists($id)) {
			throw new NotFoundException(__('Invalid document'));
		}
		$options = array('conditions' => array('Document.' . $this->Document->primaryKey => $id));
		$this->set('document', $this->Document->find('first', $options));
		
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Document->save($this->request->data)) {
				$this->Session->setFlash(__('The document has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The document could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Document.' . $this->Document->primaryKey => $id));
			$this->request->data = $this->Document->find('first', $options);
		}
		$products = $this->Document->Product->find('list');
		$providers = $this->Document->Provider->find('list');
		$categories = $this->Document->Category->find('list');
		$createUsers = $this->Document->CreateUser->find('list');
		$modifyUsers = $this->Document->ModifyUser->find('list');
		$this->set(compact('products', 'providers', 'categories', 'createUsers', 'modifyUsers'));
	
	
	$this->Document->recursive = 0;
		if (isset($this->request->data['Doc']))
		{

			$document_name = $this->request->data['Document']['name'];

			$this->Paginator->settings = array(
		        'conditions' => array('Document.name LIKE' => '%'.$document_name.'%'),
		        'limit' => 10
		    );
		    $documents = $this->Paginator->paginate('Document');
		    $this->set(compact('documents'));
		}
		else
		{
			$this->set('documents', $this->Paginator->paginate('Document'));
		}
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Document->create();
			if ($this->Document->save($this->request->data)) {
				$this->Session->setFlash(__('The document has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The document could not be saved. Please, try again.'));
			}
		}
		$products = $this->Document->Product->find('list');
		$providers = $this->Document->Provider->find('list');
		$categories = $this->Document->Category->find('list');
		$createUsers = $this->Document->CreateUser->find('list');
		$modifyUsers = $this->Document->ModifyUser->find('list');
		$this->set(compact('products', 'providers', 'categories', 'createUsers', 'modifyUsers'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		
		if (!$this->Document->exists($id)) {
			throw new NotFoundException(__('Invalid document'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Document->save($this->request->data)) {
				$this->Session->setFlash(__('The document has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The document could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Document.' . $this->Document->primaryKey => $id));
			$this->request->data = $this->Document->find('first', $options);
		}
		$products = $this->Document->Product->find('list');
		$providers = $this->Document->Provider->find('list');
		$categories = $this->Document->Category->find('list');
		$createUsers = $this->Document->CreateUser->find('list');
		$modifyUsers = $this->Document->ModifyUser->find('list');
		$this->set(compact('products', 'providers', 'categories', 'createUsers', 'modifyUsers'));
	
	
	$this->Document->recursive = 0;
		if (isset($this->request->data['Doc']))
		{

			$document_name = $this->request->data['Document']['name'];

			$this->Paginator->settings = array(
		        'conditions' => array('Document.name LIKE' => '%'.$document_name.'%'),
		        'limit' => 10
		    );
		    $documents = $this->Paginator->paginate('Document');
		    $this->set(compact('documents'));
		}
		else
		{
			$this->set('documents', $this->Paginator->paginate('Document'));
		}
}
/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Document->id = $id;
		if (!$this->Document->exists()) {
			throw new NotFoundException(__('Invalid document'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Document->delete()) {
			$this->Session->setFlash(__('The document has been deleted.'));
		} else {
			$this->Session->setFlash(__('The document could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
