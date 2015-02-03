<?php
App::uses('Unidade', 'Model');

/**
 * Unidade Test Case
 *
 */
class UnidadeTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.unidade',
		'app.produto',
		'app.estoque',
		'app.itens_pedido',
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
		$this->Unidade = ClassRegistry::init('Unidade');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Unidade);

		parent::tearDown();
	}

}
