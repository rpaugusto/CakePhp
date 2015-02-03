<?php

App::uses('AppController', 'Controller');

/**
 * Pedidos Controller
 *
 * @property Pedido $Pedido
 * @property PaginatorComponent $Paginator
 */
class PedidosController extends AppController {

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
        $this->Pedido->recursive = 0;
        $this->set('pedidos', $this->Paginator->paginate());
    }

    /**
     * view method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function view($id = null) {
        if (!$this->Pedido->exists($id)) {
            throw new NotFoundException(__('Invalid pedido'));
        }
        $options = array('conditions' => array('Pedido.' . $this->Pedido->primaryKey => $id));
        $this->set('pedido', $this->Pedido->find('first', $options));
    }

    /**
     * add method
     *
     * @return void
     */
    public function add($id) {

        if (empty($id)) {
            $this->Session->setFlash(__('Necessario selecionar o cliente!'));
            return $this->redirect(array('controller' => 'Clientes', 'action' => 'index'));
        }
        $this->Pedido->create();
        $this->request->data['cliente_id'] = $id;
        if ($this->Pedido->save($this->request->data)) {
            return $this->redirect(array('controller' => 'itensPedidos', 'action' => 'add', $this->Pedido->getLastInsertID()));
        } else {
            $this->Session->setFlash(__('The pedido could not be saved. Please, try again.'));
        }

        $clientes = $this->Pedido->Cliente->find('list');
        $this->set(compact('clientes'));
    }

    /**
     * edit method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function edit($id = null) {
        if (!$this->Pedido->exists($id)) {
            throw new NotFoundException(__('Invalid pedido'));
        }
        if ($this->request->is(array('post', 'put'))) {
            if ($this->Pedido->save($this->request->data)) {
                $this->Session->setFlash(__('The pedido has been saved.'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The pedido could not be saved. Please, try again.'));
            }
        } else {
            $options = array('conditions' => array('Pedido.' . $this->Pedido->primaryKey => $id));
            $this->request->data = $this->Pedido->find('first', $options);
        }
        $clientes = $this->Pedido->Cliente->find('list');
        $this->set(compact('clientes'));
    }

    /**
     * delete method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function delete($id = null) {
        $this->Pedido->id = $id;
        if (!$this->Pedido->exists()) {
            throw new NotFoundException(__('Invalid pedido'));
        }
        $this->request->allowMethod('post', 'delete');
        if ($this->Pedido->delete()) {
            $this->Session->setFlash(__('The pedido has been deleted.'));
        } else {
            $this->Session->setFlash(__('The pedido could not be deleted. Please, try again.'));
        }
        return $this->redirect(array('action' => 'index'));
    }

}
