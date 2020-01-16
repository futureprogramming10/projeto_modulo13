<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Categoria[]|\Cake\Collection\CollectionInterface $categorias
 */
?>
<div class="categorias index content">
    <?= $this->Html->link(__('Criar Nova Categoria'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Categorias') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('ID Categoria') ?></th>
                    <th><?= $this->Paginator->sort('Categoria') ?></th>
                    <th><?= $this->Paginator->sort('Criada') ?></th>
                    <th><?= $this->Paginator->sort('Modificada') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($categorias as $categoria): ?>
                <tr>
                    <td><?= $this->Number->format($categoria->id_categorias) ?></td>
                    <td><?= h($categoria->nome_categoria) ?></td>
                    <td><?= h($categoria->created) ?></td>
                    <td><?= h($categoria->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $categoria->id_categorias]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $categoria->id_categorias]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $categoria->id_categorias], ['confirm' => __('Are you sure you want to delete # {0}?', $categoria->id_categorias)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>
