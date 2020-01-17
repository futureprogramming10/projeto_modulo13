<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\CategoriasUser[]|\Cake\Collection\CollectionInterface $categoriasUsers
 */
?>
<div class="categoriasUsers index content">
    <?= $this->Html->link(__('New Categorias User'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Categorias Users') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id_prod') ?></th>
                    <th><?= $this->Paginator->sort('categorias_id') ?></th>
                    <th><?= $this->Paginator->sort('users_id') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($categoriasUsers as $categoriasUser): ?>
                <tr>
                    <td><?= $this->Number->format($categoriasUser->id_prod) ?></td>
                    <td><?= $categoriasUser->has('categoria') ? $this->Html->link($categoriasUser->categoria->nome_categoria, ['controller' => 'Categorias', 'action' => 'view', $categoriasUser->categoria->id_categorias]) : '' ?></td>
                    <td><?= $categoriasUser->has('user') ? $this->Html->link($categoriasUser->user->nome, ['controller' => 'Users', 'action' => 'view', $categoriasUser->user->id_users]) : '' ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $categoriasUser->id_prod]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $categoriasUser->id_prod]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $categoriasUser->id_prod], ['confirm' => __('Are you sure you want to delete # {0}?', $categoriasUser->id_prod)]) ?>
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
