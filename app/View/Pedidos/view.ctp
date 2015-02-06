<div class="pedidos view">
    <h2><?php echo __('Pedido'); ?></h2>
    <dl>
        <dt><?php echo __('Pedido:'); ?></dt>
        <dd>
            <?php echo h($pedido['Pedido']['id']); ?>
        </dd>
        <dt><?php echo __('Cliente:'); ?></dt>
        <dd>
            <?php echo $this->Html->link($pedido['Cliente']['nome'], array('controller' => 'clientes', 'action' => 'view', $pedido['Cliente']['id'])); ?>
        </dd>
        <dt><?php echo __('Data:'); ?></dt>
        <dd>
            <?php echo h($this->time->format('d / m / Y ', $pedido['Pedido']['created'])); ?>
        </dd>
        <dt><?php echo __('Total'); ?></dt>
        <dd>
            <?php echo 'R$ ' . h($pedido['Pedido']['total']); ?>
        </dd>
    </dl>
    <hr />
        <?php echo $this->Html->link(__('Adicionar Produtos'), array('controller' => 'itensPedidos', 'action' => 'add', '?' => array('id' => $pedido['Pedido']['id']))); ?>
</div>
<div class="actions">
    <h3><?php echo __('Actions'); ?></h3>
    <ul>
        <li><?php echo $this->Html->link(__('Novo Pedido'), array('action' => 'add')); ?> </li>
        <li><?php echo $this->Html->link(__('Listar Pedidos'), array('action' => 'index')); ?> </li>
        <li></li>
    </ul>
</div>
