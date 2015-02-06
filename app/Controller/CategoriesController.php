<?php
App::uses('AppController', 'Controller');
/**
 * Categories Controller
 *
 * @property Category $Category
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class CategoriesController extends AppController {

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
	public function index($id_provider = 0, $id_category = 0) 
	{
		$this->Category->recursive = 0;
		$this->set('menuCategories', $this->Category->find('all'));
		
		// Recherche d'une catégorie
		if (isset($this->request->data['Search']))
		{
			
			$nameCategory = $this->request->data['Search']['name'];
				$options['conditions'] = array(
				'Category.name LIKE ' => '%'.$nameCategory.'%');
				$categories = $this->Category->find('all', $options);
				
			$options2['fields'] = array('DISTINCT Products.id', 'Products.name', 'Products.reference, Category.name');

			$options2['joins'] = array(
				array('table' => 'categories',
					'alias' => 'categori',
					'type' => 'inner',
					'conditions' => array(
						'categori.id = Products.id_category'
					)
				)
			);
			$options2['conditions'] = array(
				'categori.name LIKE ' => '%'.$nameCategory.'%');
				$products = $this->Category->Products->find('all', $options2);
			
			if(isset($products) && !empty($products))
			{
				$this->set('products', $products);
			}
			
			if(isset($categories) && !empty($categories))
			{
				$this->set('categories', $categories);
			}
		}	 
		elseif($id_provider > 0) //Affichage de tous les produits d'un fournisseur dont l'id est passé en paramètre
		{
			$options['fields'] = array('DISTINCT Products.id', 'Products.name', 'Products.reference, Category.name');

			$options['joins'] = array(
					array('table' => 'products_providers',
						'alias' => 'ProdProviders',
						'type' => 'inner',
						'conditions' => array(
							'Products.id = ProdProviders.id_product'
						)
					),
					array('table' => 'providers',
						'alias' => 'Pro',
						'type' => 'inner',
						'conditions' => array(
							'ProdProviders.id_provider = Pro.id'
						)
					)
				);
			$options['conditions'] = array(
				'Pro.id = ' => $id_provider);
				
			$products = $this->Category->Products->find('all', $options);
			if(isset($products) && !empty($products))
			{
				$this->set('products', $products);
			}
		}
		elseif($id_category > 0) //Affichage d'une catégorie après avoir cliqué sur le menu des catégories
		{
			$options = array('conditions' => array('Category.' . $this->Category->primaryKey => $id_category));
			$infoCategory = $this->Category->find('first', $options);
			$this->set('infoCategory', $infoCategory);
			
			$options['fields'] = array('DISTINCT Products.id', 'Products.name', 'Products.reference, Category.name');
			$options['conditions'] = array(
				'Products.id_category = ' => $id_category
			);
			$products = $this->Category->Products->find('all', $options);
			
			if(isset($products) && !empty($products))
			{
				$this->set('products', $products);
			}
		}
		
	}
/**documents_desc
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Category->exists($id)) {
			throw new NotFoundException(__('Invalid category'));
		}
		$options = array('conditions' => array('Category.' . $this->Category->primaryKey => $id));
		$this->set('category', $this->Category->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Category->create();
			if ($this->Category->save($this->request->data)) {
				$this->Session->setFlash(__('The category has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The category could not be saved. Please, try again.'));
			}
		}
		$parentCategories = $this->Category->ParentCategory->find('list');
		$createdUsers = $this->Category->CreatedUser->find('list');
		$modifiedUsers = $this->Category->ModifiedUser->find('list');
		$this->set(compact('parentCategories', 'createdUsers', 'modifiedUsers'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Category->exists($id)) {
			throw new NotFoundException(__('Invalid category'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Category->save($this->request->data)) {
				$this->Session->setFlash(__('The category has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The category could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Category.' . $this->Category->primaryKey => $id));
			$this->request->data = $this->Category->find('first', $options);
		}
		$parentCategories = $this->Category->ParentCategory->find('list');
		$createdUsers = $this->Category->CreatedUser->find('list');
		$modifiedUsers = $this->Category->ModifiedUser->find('list');
		$this->set(compact('parentCategories', 'createdUsers', 'modifiedUsers'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Category->id = $id;
		if (!$this->Category->exists()) {
			throw new NotFoundException(__('Invalid category'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Category->delete()) {
			$this->Session->setFlash(__('The category has been deleted.'));
		} else {
			$this->Session->setFlash(__('The category could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
