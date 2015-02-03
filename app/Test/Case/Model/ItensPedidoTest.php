<?php
App::uses('ItensPedido', 'Model');

/**
 * ItensPedido Test Case
 *
 */
class ItensPedidoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.itens_pedido',
		'app.produto',
		'app.unidade',
		'app.estoque',
		'app.pedido',
		'app.cliente'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->ItensPedido = ClassRegistry::init('ItensPedido');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->ItensPedido);

		parent::tearDown();
	}

}
