<?php
App::uses('AppController', 'Controller');
/**
 * ItensPedidos Controller
 *
 * @property ItensPedido $ItensPedido
 * @property PaginatorComponent $Paginator
 */
class ItensPedidosController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->ItensPedido->recursive = 0;
		$this->set('itensPedidos', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->ItensPedido->exists($id)) {
			throw new NotFoundException(__('Invalid itens pedido'));
		}
		$options = array('conditions' => array('ItensPedido.' . $this->ItensPedido->primaryKey => $id));
		$this->set('itensPedido', $this->ItensPedido->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->ItensPedido->create();
			if ($this->ItensPedido->save($this->request->data)) {
				$this->Session->setFlash(__('The itens pedido has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The itens pedido could not be saved. Please, try again.'));
			}
		}
		$produtos = $this->ItensPedido->Produto->find('list');
		$pedidos = $this->ItensPedido->Pedido->find('list');
		$this->set(compact('produtos', 'pedidos'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->ItensPedido->exists($id)) {
			throw new NotFoundException(__('Invalid itens pedido'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->ItensPedido->save($this->request->data)) {
				$this->Session->setFlash(__('The itens pedido has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The itens pedido could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('ItensPedido.' . $this->ItensPedido->primaryKey => $id));
			$this->request->data = $this->ItensPedido->find('first', $options);
		}
		$produtos = $this->ItensPedido->Produto->find('list');
		$pedidos = $this->ItensPedido->Pedido->find('list');
		$this->set(compact('produtos', 'pedidos'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->ItensPedido->id = $id;
		if (!$this->ItensPedido->exists()) {
			throw new NotFoundException(__('Invalid itens pedido'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->ItensPedido->delete()) {
			$this->Session->setFlash(__('The itens pedido has been deleted.'));
		} else {
			$this->Session->setFlash(__('The itens pedido could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
