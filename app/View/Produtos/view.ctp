<div class="produtos view">
<h2><?php echo __('Produto'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($produto['Produto']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Descricao'); ?></dt>
		<dd>
			<?php echo h($produto['Produto']['descricao']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Unidade'); ?></dt>
		<dd>
			<?php echo $this->Html->link($produto['Unidade']['sigla'], array('controller' => 'unidades', 'action' => 'view', $produto['Unidade']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cod Bar'); ?></dt>
		<dd>
			<?php echo h($produto['Produto']['cod_bar']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Preco Custo'); ?></dt>
		<dd>
			<?php echo h($produto['Produto']['preco_custo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Margem'); ?></dt>
		<dd>
			<?php echo h($produto['Produto']['margem']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Preco Venda'); ?></dt>
		<dd>
			<?php echo h($produto['Produto']['preco_venda']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Desconto'); ?></dt>
		<dd>
			<?php echo h($produto['Produto']['desconto']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Estoque'); ?></dt>
		<dd>
			<?php echo h($produto['Produto']['estoque']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($produto['Produto']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($produto['Produto']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Produto'), array('action' => 'edit', $produto['Produto']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Produto'), array('action' => 'delete', $produto['Produto']['id']), array(), __('Are you sure you want to delete # %s?', $produto['Produto']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Produtos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Produto'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Unidades'), array('controller' => 'unidades', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Unidade'), array('controller' => 'unidades', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Estoques'), array('controller' => 'estoques', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Estoque'), array('controller' => 'estoques', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Itens Pedidos'), array('controller' => 'itens_pedidos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Itens Pedido'), array('controller' => 'itens_pedidos', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Estoques'); ?></h3>
	<?php if (!empty($produto['Estoque'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Tipo'); ?></th>
		<th><?php echo __('Qtd'); ?></th>
		<th><?php echo __('Produto Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($produto['Estoque'] as $estoque): ?>
		<tr>
			<td><?php echo $estoque['id']; ?></td>
			<td><?php echo $estoque['tipo']; ?></td>
			<td><?php echo $estoque['qtd']; ?></td>
			<td><?php echo $estoque['produto_id']; ?></td>
			<td><?php echo $estoque['created']; ?></td>
			<td><?php echo $estoque['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'estoques', 'action' => 'view', $estoque['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'estoques', 'action' => 'edit', $estoque['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'estoques', 'action' => 'delete', $estoque['id']), array(), __('Are you sure you want to delete # %s?', $estoque['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Estoque'), array('controller' => 'estoques', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Itens Pedidos'); ?></h3>
	<?php if (!empty($produto['ItensPedido'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Produto Id'); ?></th>
		<th><?php echo __('Valor'); ?></th>
		<th><?php echo __('Qtd'); ?></th>
		<th><?php echo __('Pedido Id'); ?></th>
		<th><?php echo __('Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($produto['ItensPedido'] as $itensPedido): ?>
		<tr>
			<td><?php echo $itensPedido['produto_id']; ?></td>
			<td><?php echo $itensPedido['valor']; ?></td>
			<td><?php echo $itensPedido['qtd']; ?></td>
			<td><?php echo $itensPedido['pedido_id']; ?></td>
			<td><?php echo $itensPedido['id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'itens_pedidos', 'action' => 'view', $itensPedido['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'itens_pedidos', 'action' => 'edit', $itensPedido['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'itens_pedidos', 'action' => 'delete', $itensPedido['id']), array(), __('Are you sure you want to delete # %s?', $itensPedido['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Itens Pedido'), array('controller' => 'itens_pedidos', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
