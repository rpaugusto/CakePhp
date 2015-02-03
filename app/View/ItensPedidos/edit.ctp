<div class="itensPedidos form">
<?php echo $this->Form->create('ItensPedido'); ?>
	<fieldset>
		<legend><?php echo __('Edit Itens Pedido'); ?></legend>
	<?php
		echo $this->Form->input('produto_id');
		echo $this->Form->input('valor');
		echo $this->Form->input('qtd');
		echo $this->Form->input('pedido_id');
		echo $this->Form->input('id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('ItensPedido.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('ItensPedido.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Itens Pedidos'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Produtos'), array('controller' => 'produtos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Produto'), array('controller' => 'produtos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Pedidos'), array('controller' => 'pedidos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Pedido'), array('controller' => 'pedidos', 'action' => 'add')); ?> </li>
	</ul>
</div>
