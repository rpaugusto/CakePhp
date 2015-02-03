<div class="pedidos index">
    <h2><?php echo __('Pedidos'); ?></h2>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?php echo $this->Paginator->sort('Pedido'); ?></th>
                <th><?php echo $this->Paginator->sort('Cliente'); ?></th>
                <th><?php echo $this->Paginator->sort('Data'); ?></th>
                <th class="actions"><?php echo __('Ações'); ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($pedidos as $pedido): ?>
                <tr>
                    <td><?php echo h($pedido['Pedido']['id']); ?></td>
                    <td>
                        <?php echo $this->Html->link($pedido['Cliente']['nome'], array('controller' => 'clientes', 'action' => 'view', $pedido['Cliente']['id'])); ?>
                    </td>
                    <td><?php echo h($this->time->format('d / m / Y ',$pedido['Pedido']['created'])); ?></td>
                    <td class="actions">
                        <?php echo $this->Html->link(__('View'), array('action' => 'view', $pedido['Pedido']['id'])); ?>
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
        echo $this->Paginator->prev('< ' . __('Anterior'), array(), null, array('class' => 'prev disabled'));
        echo $this->Paginator->numbers(array('separator' => ''));
        echo $this->Paginator->next(__('Proximo') . ' >', array(), null, array('class' => 'next disabled'));
        ?>
    </div>
</div>
<div class="actions">
    <h3><?php echo __('Ações'); ?></h3>
    <ul>
        <li><?php echo $this->Html->link(__('Novo Pedido'), array('action' => 'add')); ?></li>
        <li><?php echo $this->Html->link(__('Listar Clientes'), array('controller' => 'clientes', 'action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('Novo Cliente'), array('controller' => 'clientes', 'action' => 'add')); ?> </li>
    </ul>
</div>
