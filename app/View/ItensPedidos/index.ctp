<div class="itensPedidos index">
    <h2><?php echo __('Itens Pedidos'); ?></h2>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?php echo $this->Paginator->sort('Produto'); ?></th>
                <th><?php echo $this->Paginator->sort('Preço - Und'); ?></th>
                <th><?php echo $this->Paginator->sort('Quantidade'); ?></th>
                <th><?php echo $this->Paginator->sort('Preço - total'); ?></th>
                <th class="actions"></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($itensPedidos as $itensPedido): ?>
                <tr>
                    <td>
                        <?php echo $this->Html->link($itensPedido['Produto']['descricao'], array('controller' => 'produtos', 'action' => 'view', $itensPedido['Produto']['id'])); ?>
                    </td>
                    <td><?php echo 'R$ '.h($itensPedido['ItensPedido']['valor']); ?></td>
                    <td><?php echo h($itensPedido['ItensPedido']['qtd']); ?></td>
                    <td><?php echo 'R$ '.h(($itensPedido['ItensPedido']['valor']) * ($itensPedido['ItensPedido']['qtd'])); ?></td>
                    <td class="actions">
                        <?php echo $this->Html->link(__('Alterar'), array('action' => 'edit', $itensPedido['ItensPedido']['id'])); ?>
                        <?php echo $this->Form->postLink(__('Excluir'), array('action' => 'delete', $itensPedido['ItensPedido']['id']), array(), __('Are you sure you want to delete # %s?', $itensPedido['ItensPedido']['id'])); ?>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <p>
        <?php
        echo $this->Paginator->counter(array(
            'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
        ));
        ?>	</p>
    <div class="paging">
        <?php
        echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
        echo $this->Paginator->numbers(array('separator' => ''));
        echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
        ?>
    </div>
</div>
<div class="actions">
    <h3><?php echo __('Actions'); ?></h3>
    <ul>
        <li><?php echo $this->Html->link(__('New Itens Pedido'), array('action' => 'add')); ?></li>
        <li><?php echo $this->Html->link(__('List Produtos'), array('controller' => 'produtos', 'action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('New Produto'), array('controller' => 'produtos', 'action' => 'add')); ?> </li>
        <li><?php echo $this->Html->link(__('List Pedidos'), array('controller' => 'pedidos', 'action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('New Pedido'), array('controller' => 'pedidos', 'action' => 'add')); ?> </li>
    </ul>
</div>
