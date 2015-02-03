<?php $id = $this->request->param; ?>

<div class="itensPedidos form">
<?php echo $this->Form->create('ItensPedido'); ?>
	<fieldset>
		<legend><?php echo __('Add Itens Pedido'); ?></legend>
	<?php
		echo $this->Form->input('produto_id');
		echo $this->Form->input('valor', array('value'=> $this->request->data['produtos']['preco']));
		echo $this->Form->input('qtd');
		echo $this->Form->input('pedido_id', array('type' => 'hidden','value' => $id));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Itens Pedidos'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Produtos'), array('controller' => 'produtos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Produto'), array('controller' => 'produtos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Pedidos'), array('controller' => 'pedidos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Pedido'), array('controller' => 'pedidos', 'action' => 'add')); ?> </li>
	</ul>
</div>
