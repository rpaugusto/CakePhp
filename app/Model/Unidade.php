<?php
App::uses('AppModel', 'Model');
/**
 * Unidade Model
 *
 * @property Produto $Produto
 */
class Unidade extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'unidade';

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'sigla';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'descricao' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'sigla' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
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
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Produto' => array(
			'className' => 'Produto',
			'foreignKey' => 'unidade_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);

}
