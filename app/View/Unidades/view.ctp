<div class="unidades view">
<h2><?php echo __('Unidade'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($unidade['Unidade']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Descricao'); ?></dt>
		<dd>
			<?php echo h($unidade['Unidade']['descricao']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Sigla'); ?></dt>
		<dd>
			<?php echo h($unidade['Unidade']['sigla']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($unidade['Unidade']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($unidade['Unidade']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Unidade'), array('action' => 'edit', $unidade['Unidade']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Unidade'), array('action' => 'delete', $unidade['Unidade']['id']), array(), __('Are you sure you want to delete # %s?', $unidade['Unidade']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Unidades'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Unidade'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Produtos'), array('controller' => 'produtos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Produto'), array('controller' => 'produtos', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Produtos'); ?></h3>
	<?php if (!empty($unidade['Produto'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Descricao'); ?></th>
		<th><?php echo __('Unidade Id'); ?></th>
		<th><?php echo __('Cod Bar'); ?></th>
		<th><?php echo __('Preco Custo'); ?></th>
		<th><?php echo __('Margem'); ?></th>
		<th><?php echo __('Preco Venda'); ?></th>
		<th><?php echo __('Desconto'); ?></th>
		<th><?php echo __('Estoque'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($unidade['Produto'] as $produto): ?>
		<tr>
			<td><?php echo $produto['id']; ?></td>
			<td><?php echo $produto['descricao']; ?></td>
			<td><?php echo $produto['unidade_id']; ?></td>
			<td><?php echo $produto['cod_bar']; ?></td>
			<td><?php echo $produto['preco_custo']; ?></td>
			<td><?php echo $produto['margem']; ?></td>
			<td><?php echo $produto['preco_venda']; ?></td>
			<td><?php echo $produto['desconto']; ?></td>
			<td><?php echo $produto['estoque']; ?></td>
			<td><?php echo $produto['created']; ?></td>
			<td><?php echo $produto['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'produtos', 'action' => 'view', $produto['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'produtos', 'action' => 'edit', $produto['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'produtos', 'action' => 'delete', $produto['id']), array(), __('Are you sure you want to delete # %s?', $produto['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Produto'), array('controller' => 'produtos', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
