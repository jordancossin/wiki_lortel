<?php
App::uses('AppModel', 'Model');
/**
 * Faq Model
 *
 * @property Categorie $Categorie
 * @property Produit $Produit
 * @property Fournisseur $Fournisseur
 */
class Faq extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'question';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'question' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
			'maxLength' => array(
				'rule' => array('maxLength'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'reponse' => array(
			'maxLength' => array(
				'rule' => array('maxLength'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'creation' => array(
			'datetime' => array(
				'rule' => array('datetime'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'modification' => array(
			'datetime' => array(
				'rule' => array('datetime'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Categorie' => array(
			'className' => 'Categorie',
			'foreignKey' => 'id_categorie',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Produit' => array(
			'className' => 'Produit',
			'foreignKey' => 'id_produit',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Fournisseur' => array(
			'className' => 'Fournisseur',
			'foreignKey' => 'id_fournisseur',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
