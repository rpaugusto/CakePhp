<?php
/**
 * ProdutoFixture
 *
 */
class ProdutoFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'produto';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'descricao' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 100, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'unidade_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'cod_bar' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 13, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'preco_custo' => array('type' => 'float', 'null' => true, 'default' => null, 'length' => '10,2', 'unsigned' => false),
		'margem' => array('type' => 'float', 'null' => true, 'default' => null, 'length' => '2,1', 'unsigned' => false),
		'preco_venda' => array('type' => 'float', 'null' => true, 'default' => null, 'length' => '10,2', 'unsigned' => false),
		'desconto' => array('type' => 'float', 'null' => true, 'default' => null, 'length' => '2,1', 'unsigned' => false),
		'estoque' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'fk_und_id' => array('column' => 'unidade_id', 'unique' => 0)
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
			'descricao' => 'Lorem ipsum dolor sit amet',
			'unidade_id' => 1,
			'cod_bar' => 'Lorem ipsum',
			'preco_custo' => 1,
			'margem' => 1,
			'preco_venda' => 1,
			'desconto' => 1,
			'estoque' => 1,
			'created' => '2015-02-03 00:55:26',
			'modified' => '2015-02-03 00:55:26'
		),
	);

}
