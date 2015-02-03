<?php
/**
 * ItensPedidoFixture
 *
 */
class ItensPedidoFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'itens_pedido';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'produto_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'valor' => array('type' => 'float', 'null' => true, 'default' => null, 'length' => '10,2', 'unsigned' => false),
		'qtd' => array('type' => 'float', 'null' => true, 'default' => null, 'length' => '10,4', 'unsigned' => false),
		'pedido_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'id' => array('type' => 'integer', 'null' => false, 'default' => '0', 'unsigned' => false, 'key' => 'primary'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'fk_ped_id' => array('column' => 'pedido_id', 'unique' => 0),
			'fk_ped_pro' => array('column' => 'produto_id', 'unique' => 0)
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
			'produto_id' => 1,
			'valor' => 1,
			'qtd' => 1,
			'pedido_id' => 1,
			'id' => 1
		),
	);

}
