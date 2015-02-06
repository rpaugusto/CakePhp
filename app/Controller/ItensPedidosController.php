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
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
                        $itens = $this->request->data;
			$this->ItensPedido->create();
			if ($this->ItensPedido->save($itens)) {
				$this->Session->setFlash(__('Item adicionado ao pedido '.$itens['pedido_id']));
				//return $this->redirect(array('controller' => 'pedidos','action' => 'view', $itens['pedido_id']));
			} else {
				$this->Session->setFlash(__('item não pode ser adicionado ao pedido.'));
			}
		}
		$produtos = $this->ItensPedido->Produto->find('list');
		$pedidos = $this->ItensPedido->Pedido->find('list');
		$this->set(compact('produtos', 'pedidos'));
	}

/**
 * delete method
 *
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
