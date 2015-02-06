<?php
App::uses('AppController', 'Controller');
/**
 * Providers Controller
 *
 * @property Provider $Provid
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class ProvidersController extends AppController {

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
		if (isset($this->request->data['Search'])){
			$nameProvider = $this->request->data['Search']['name'];
			$nameTag = $this->request->data['Search']['tag'];
			
			$options['fields'] = array('DISTINCT Provider.id', 'Provider.name');

			$options['joins'] = array(
					array('table' => 'tags_providers',
						'alias' => 'TagProvider',
						'type' => 'inner',
						'conditions' => array(
							'Provider.id = TagProvider.id_provider'
						)
					),
					array('table' => 'tags',
						'alias' => 'Tag',
						'type' => 'inner',
						'conditions' => array(
							'TagProvider.id_tag = Tag.id'
						)
					)
				);

			if($nameProvider != '' && $nameTag != '')
			{
				$options['conditions'] = array(
					'Provider.name LIKE ' => '%'.$nameProvider.'%', 'OR' => array(
					'Tag.name IN ' => '('.$nameTag.')'));
			}
			elseif($nameProvider != '')
			{
				$options['conditions'] = array(
					'Provider.name LIKE ' => '%'.$nameProvider.'%');
			}
			elseif($nameTag != '')
			{
				$options['conditions'] = array(
					'Tag.name IN ' => '('.$nameTag.')');
			}

			$providers_found = $this->Provider->find('all', $options);			
			$this->set('providers', $providers_found);
		}
		else
		{
			$this->set('providers', $this->Provider->find('all'));
		}
		
		if (isset($this->request->data['PROVIDER']))
		{
			$provider_name = $this->request->data['Provider']['name'];

			$this->Paginator->settings = array(
				'fields' => array('Provider.id', 'Provider.name'),
		        'conditions' => array('Provider.name LIKE' => '%'.$provider_name.'%'),
		        'limit' => 10
		    );
		    $providers = $this->Paginator->paginate('Provider');
		    $this->set(compact('providers'));
		}
		else
		{
			$this->set('providers', $this->Paginator->paginate('Provider'));
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
		if (!$this->Provider->exists($id)) {
			throw new NotFoundException(__('Invalid provider'));
		}
		$options = array('conditions' => array('Provider.' . $this->Provider->primaryKey => $id));
		$this->set('provider', $this->Provider->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Provider->create();
			if ($this->Provider->save($this->request->data)) {
				$this->Session->setFlash(__('The provider has been saved.'));
				return $this->redirect(array('action' => 'index', $id));
			} else {
				$this->Session->setFlash(__('The provider could not be saved. Please, try again.'));
			}
		}
		$createUsers = $this->Provider->CreateUser->find('list');
		$modifyUsers = $this->Provider->ModifyUser->find('list');
		$products = $this->Provider->Product->find('list');
		$tags = $this->Provider->Tag->find('list');
		$this->set(compact('createUsers', 'modifyUsers', 'products', 'tags'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Provider->exists($id)) {
			throw new NotFoundException(__('Invalid provider'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Provider->save($this->request->data)) {
				$this->Session->setFlash(__('The provider has been saved.'));
				return $this->redirect(array('action' => 'edit', $id));
			} else {
				$this->Session->setFlash(__('The provider could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Provider.' . $this->Provider->primaryKey => $id));
			$this->request->data = $this->Provider->find('first', $options);
		}
		$createUsers = $this->Provider->CreateUser->find('list');
		$modifyUsers = $this->Provider->ModifyUser->find('list');
		$products = $this->Provider->Product->find('list');
		$tags = $this->Provider->Tag->find('list');
		$this->set(compact('createUsers', 'modifyUsers', 'products', 'tags'));	
		
		$this->Provider->recursive = 0;
		if (isset($this->request->data['Provider']))
		{

			$provider_name = $this->request->data['Provider']['name'];

			$this->Paginator->settings = array(
		        'conditions' => array('Provider.name LIKE' => '%'.$provider_name.'%'),
		        'limit' => 10
		    );
		    $providers = $this->Paginator->paginate('Provider');
		    $this->set(compact('providers'));
		}
		else
		{
			$this->set('providers', $this->Paginator->paginate('Provider'));
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
		$this->Provider->id = $id;
		if (!$this->Provider->exists()) {
			throw new NotFoundException(__('Invalid provider'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Provider->delete()) {
			$this->Session->setFlash(__('The provider has been deleted.'));
		} else {
			$this->Session->setFlash(__('The provider could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
