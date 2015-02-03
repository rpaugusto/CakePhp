<div class="clientes index">
    <h2><?php echo __('Clientes'); ?></h2>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?php echo $this->Paginator->sort('Codigo'); ?></th>
                <th><?php echo $this->Paginator->sort('Nome'); ?></th>
                <th><?php echo $this->Paginator->sort('Endereco'); ?></th>
                <th><?php echo $this->Paginator->sort('Cidade'); ?></th>
                <th><?php echo $this->Paginator->sort('UF'); ?></th>
                <th><?php echo $this->Paginator->sort('Telefone'); ?></th>
                <th><?php echo $this->Paginator->sort('Celular'); ?></th>
                <th><?php echo $this->Paginator->sort('Cadastrado'); ?></th>
                <th class="actions"></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($clientes as $cliente): ?>
                <tr>
                    <td><?php echo h($cliente['Cliente']['id']); ?></td>
                    <td><?php echo h($cliente['Cliente']['nome']); ?></td>
                    <td><?php echo h($cliente['Cliente']['endereco']); ?></td>
                    <td><?php echo h($cliente['Cliente']['cidade']); ?></td>
                    <td><?php echo h($cliente['Cliente']['estado']); ?></td>
                    <td><?php echo h($cliente['Cliente']['telefone']); ?></td>
                    <td><?php echo h($cliente['Cliente']['celular']); ?></td>
                    <td><?php echo h($cliente['Cliente']['created']); ?></td>

                    <td class="actions">
                        <?php echo $this->Html->link(__('Ver'), array('action' => 'view', $cliente['Cliente']['id'])); ?>
                        <?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $cliente['Cliente']['id'])); ?>
                        <?php echo $this->Form->postLink(__('Excluir'), array('action' => 'delete', $cliente['Cliente']['id']), array(), __('Are you sure you want to delete # %s?', $cliente['Cliente']['id'])); ?>
                    </td>
                </tr>
            <?php
                endforeach;
                unset($cliente);
            ?>
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
    <h3><?php echo __('Cotroles'); ?></h3>
    <ul>
        <li><?php echo $this->Html->link(__('Novo Cliente'), array('action' => 'add')); ?></li>
    </ul>
</div>
