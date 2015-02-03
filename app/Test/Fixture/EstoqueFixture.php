<?php
/**
 * EstoqueFixture
 *
 */
class EstoqueFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'estoque';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'tipo' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 1, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'qtd' => array('type' => 'float', 'null' => true, 'default' => null, 'length' => '10,4', 'unsigned' => false),
		'produto_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'fk_est_pro' => array('column' => 'produto_id', 'unique' => 0)
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'tipo' => 'Lorem ipsum dolor sit ame',
			'qtd' => 1,
			'produto_id' => 1,
			'created' => '2015-02-03 01:16:14',
			'modified' => '2015-02-03 01:16:14'
		),
	);

}
