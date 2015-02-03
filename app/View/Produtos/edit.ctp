<div class="produtos form">
<?php echo $this->Form->create('Produto'); ?>
	<fieldset>
		<legend><?php echo __('Edit Produto'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('descricao');
		echo $this->Form->input('unidade_id');
		echo $this->Form->input('cod_bar');
		echo $this->Form->input('preco_custo');
		echo $this->Form->input('margem');
		echo $this->Form->input('preco_venda');
		echo $this->Form->input('desconto');
		echo $this->Form->input('estoque');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Produto.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Produto.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Produtos'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Unidades'), array('controller' => 'unidades', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Unidade'), array('controller' => 'unidades', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Estoques'), array('controller' => 'estoques', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Estoque'), array('controller' => 'estoques', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Itens Pedidos'), array('controller' => 'itens_pedidos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Itens Pedido'), array('controller' => 'itens_pedidos', 'action' => 'add')); ?> </li>
	</ul>
</div>
