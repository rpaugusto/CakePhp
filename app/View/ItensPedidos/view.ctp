<div class="itensPedidos view">
<h2><?php echo __('Itens Pedido'); ?></h2>
	<dl>
		<dt><?php echo __('Produto'); ?></dt>
		<dd>
			<?php echo $this->Html->link($itensPedido['Produto']['descricao'], array('controller' => 'produtos', 'action' => 'view', $itensPedido['Produto']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Valor'); ?></dt>
		<dd>
			<?php echo h($itensPedido['ItensPedido']['valor']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Qtd'); ?></dt>
		<dd>
			<?php echo h($itensPedido['ItensPedido']['qtd']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Pedido'); ?></dt>
		<dd>
			<?php echo $this->Html->link($itensPedido['Pedido']['id'], array('controller' => 'pedidos', 'action' => 'view', $itensPedido['Pedido']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($itensPedido['ItensPedido']['id']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Itens Pedido'), array('action' => 'edit', $itensPedido['ItensPedido']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Itens Pedido'), array('action' => 'delete', $itensPedido['ItensPedido']['id']), array(), __('Are you sure you want to delete # %s?', $itensPedido['ItensPedido']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Itens Pedidos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Itens Pedido'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Produtos'), array('controller' => 'produtos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Produto'), array('controller' => 'produtos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Pedidos'), array('controller' => 'pedidos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Pedido'), array('controller' => 'pedidos', 'action' => 'add')); ?> </li>
	</ul>
</div>
