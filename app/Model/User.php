<?php

App::uses('AppModel', 'Model');

/**
 * User Model
 *
 */
class User extends AppModel {

    /**
     * Display field
     *
     * @var string
     */
    public $displayField = 'username';

    /**
     * Validation rules
     *
     * @var array
     */
    public $validate = array(
        'username' => array(
            'required' => (array(
                'rule' => array('notEmpty'),
                'message' => 'Necessario informar um Usuario cadastrado!',
            )
            ),
        ),
        'passwrd' => array(
            'reqireed' => array(
                'rule' => array('notEmpyt'),
                'message' => 'Your custom message here'
            )
        ),
        'role' => array(
            'rule' => array('inlist', array('admin', 'user')),
            'message' => 'Escolha um campo valido!',
            'allowEmpty' => false,
        ),
        'rola' => array(
            'notEmpty' => array(
                'rule' => array('notEmpty'),
            //'message' => 'Your custom message here',
            //'allowEmpty' => false,
            //'required' => false,
            //'last' => false, // Stop validation after this rule
            //'on' => 'create', // Limit validation to 'create' or 'update' operations
            ),
            'inList' => array(
                'rule' => array('inList'),
            //'message' => 'Your custom message here',
            //'allowEmpty' => false,
            //'required' => false,
            //'last' => false, // Stop validation after this rule
            //'on' => 'create', // Limit validation to 'create' or 'update' operations
            ),
        ),
    );

}
