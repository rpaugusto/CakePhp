<div class="clientes view">
    <h2><?php echo __('Cliente'); ?></h2>
    <dl>
        <dt><?php echo __('Codigo'); ?></dt>
        <dd>
            <?php echo h($cliente['Cliente']['id']); ?>
        </dd>
        <dt><?php echo __('Nome'); ?></dt>
        <dd>
            <?php echo h($cliente['Cliente']['nome']); ?>
        </dd>
        <dt><?php echo __('Telefone'); ?></dt>
        <dd>
            <?php echo h($cliente['Cliente']['telefone']); ?>
        </dd>
        <dt><?php echo __('Celular'); ?></dt>
        <dd>
            <?php echo h($cliente['Cliente']['celular']); ?>
        </dd>

    </dl>
</div>

<div class="actions"> <!-- menu lateral de Controles -->
    <h3><?php echo __('Controles'); ?></h3>
    <ul>
        <li><?php echo $this->Html->link(__('Novo'), array('action' => 'add')); ?> </li>
        <li><?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $cliente['Cliente']['id'])); ?> </li>
        <li><?php echo $this->Form->postLink(__('Excluir'), array('action' => 'delete', $cliente['Cliente']['id']), array(), __('Are you sure you want to delete # %s?', $cliente['Cliente']['id'])); ?> </li>
        <li><?php echo $this->Html->link(__('Listar'), array('action' => 'index')); ?> </li>
    </ul>
</div> <!-- menu lateral de Controles -->


<div class="related"> <!-- Lista de Pedidos do cliente selecionado -->
    <h3><?php echo __('Pedidos Relacionados'); ?></h3>
    <div class="actions">
        <ul>
            <li><?php echo $this->Html->link(__('Novo Pedido'), array('controller' => 'pedidos', 'action' => 'add', $cliente['Cliente']['id'])); ?> </li>
        </ul>
    </div>
    
    <?php if (!empty($cliente['Pedido'])): ?>
        <table cellpadding = "0" cellspacing = "0">
            <tr>
                <th><?php echo __('Pedido'); ?></th>
                <th><?php echo __('Data'); ?></th>
                <th><?php echo __('Valor'); ?></th>
                <th class="actions"></th>
            </tr>
            <?php foreach ($cliente['Pedido'] as $pedido): ?>
                <tr>
                    <td><?php echo $pedido['id']; ?></td>
                    <td><?php echo $pedido['created']; ?></td>
                    <td><?php echo $pedido['total']; ?></td>
                    <td class="actions">
                        <?php echo $this->Html->link(__('View'), array('controller' => 'pedidos', 'action' => 'view', $pedido['id'])); ?>
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>
    <?php endif; ?>

</div> <!-- Lista de Pedidos do cliente selecionado -->
