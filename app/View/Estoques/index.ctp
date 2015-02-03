<div class="estoques index">
	<h2><?php echo __('Estoques'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('tipo'); ?></th>
			<th><?php echo $this->Paginator->sort('qtd'); ?></th>
			<th><?php echo $this->Paginator->sort('produto_id'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($estoques as $estoque): ?>
	<tr>
		<td><?php echo h($estoque['Estoque']['id']); ?>&nbsp;</td>
		<td><?php echo h($estoque['Estoque']['tipo']); ?>&nbsp;</td>
		<td><?php echo h($estoque['Estoque']['qtd']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($estoque['Produto']['descricao'], array('controller' => 'produtos', 'action' => 'view', $estoque['Produto']['id'])); ?>
		</td>
		<td><?php echo h($estoque['Estoque']['created']); ?>&nbsp;</td>
		<td><?php echo h($estoque['Estoque']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $estoque['Estoque']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $estoque['Estoque']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $estoque['Estoque']['id']), array(), __('Are you sure you want to delete # %s?', $estoque['Estoque']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Estoque'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Produtos'), array('controller' => 'produtos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Produto'), array('controller' => 'produtos', 'action' => 'add')); ?> </li>
	</ul>
</div>
