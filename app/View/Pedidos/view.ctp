<div class="pedidos view">
<h2><?php echo __('Pedido'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($pedido['Pedido']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cliente'); ?></dt>
		<dd>
			<?php echo $this->Html->link($pedido['Cliente']['nome'], array('controller' => 'clientes', 'action' => 'view', $pedido['Cliente']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($pedido['Pedido']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Total'); ?></dt>
		<dd>
			<?php echo h($pedido['Pedido']['total']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Pedido'), array('action' => 'edit', $pedido['Pedido']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Pedido'), array('action' => 'delete', $pedido['Pedido']['id']), array(), __('Are you sure you want to delete # %s?', $pedido['Pedido']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Pedidos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Pedido'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Clientes'), array('controller' => 'clientes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cliente'), array('controller' => 'clientes', 'action' => 'add')); ?> </li>
	</ul>
</div>
