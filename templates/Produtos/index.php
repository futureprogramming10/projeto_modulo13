<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Produto[]|\Cake\Collection\CollectionInterface $produtos
 */
?>
<div class="produtos index content">
    <?= $this->Html->link(__('Criar Novo Produto'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Produtos') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('ID Produto') ?></th>
                    <th><?= $this->Paginator->sort('Produto') ?></th>
                    <th><?= $this->Paginator->sort('Categoria') ?></th>
                    <th><?= $this->Paginator->sort('Criado') ?></th>
                    <th><?= $this->Paginator->sort('Modificado') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($produtos as $produto): ?>
                <tr>
                    <td><?= $this->Number->format($produto->id_produtos) ?></td>
                    <td><?= h($produto->nome_produto) ?></td>
                    <td><?= $produto->has('categoria') ? $this->Html->link($produto->categoria->nome_categoria, ['controller' => 'Categorias', 'action' => 'view', $produto->categoria->id_categorias]) : '' ?></td>
                    <td><?= h($produto->created) ?></td>
                    <td><?= h($produto->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $produto->id_produtos]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $produto->id_produtos]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $produto->id_produtos], ['confirm' => __('Are you sure you want to delete # {0}?', $produto->id_produtos)]) ?>
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
