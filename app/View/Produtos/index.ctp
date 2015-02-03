<div class="produtos index">
	<h2><?php echo __('Produtos'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('descricao'); ?></th>
			<th><?php echo $this->Paginator->sort('unidade_id'); ?></th>
			<th><?php echo $this->Paginator->sort('cod_bar'); ?></th>
			<th><?php echo $this->Paginator->sort('preco_custo'); ?></th>
			<th><?php echo $this->Paginator->sort('margem'); ?></th>
			<th><?php echo $this->Paginator->sort('preco_venda'); ?></th>
			<th><?php echo $this->Paginator->sort('desconto'); ?></th>
			<th><?php echo $this->Paginator->sort('estoque'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($produtos as $produto): ?>
	<tr>
		<td><?php echo h($produto['Produto']['id']); ?>&nbsp;</td>
		<td><?php echo h($produto['Produto']['descricao']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($produto['Unidade']['sigla'], array('controller' => 'unidades', 'action' => 'view', $produto['Unidade']['id'])); ?>
		</td>
		<td><?php echo h($produto['Produto']['cod_bar']); ?>&nbsp;</td>
		<td><?php echo h($produto['Produto']['preco_custo']); ?>&nbsp;</td>
		<td><?php echo h($produto['Produto']['margem']); ?>&nbsp;</td>
		<td><?php echo h($produto['Produto']['preco_venda']); ?>&nbsp;</td>
		<td><?php echo h($produto['Produto']['desconto']); ?>&nbsp;</td>
		<td><?php echo h($produto['Produto']['estoque']); ?>&nbsp;</td>
		<td><?php echo h($produto['Produto']['created']); ?>&nbsp;</td>
		<td><?php echo h($produto['Produto']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $produto['Produto']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $produto['Produto']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $produto['Produto']['id']), array(), __('Are you sure you want to delete # %s?', $produto['Produto']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Produto'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Unidades'), array('controller' => 'unidades', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Unidade'), array('controller' => 'unidades', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Estoques'), array('controller' => 'estoques', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Estoque'), array('controller' => 'estoques', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Itens Pedidos'), array('controller' => 'itens_pedidos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Itens Pedido'), array('controller' => 'itens_pedidos', 'action' => 'add')); ?> </li>
	</ul>
</div>
