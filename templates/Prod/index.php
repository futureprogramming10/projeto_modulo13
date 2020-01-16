<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Prod[]|\Cake\Collection\CollectionInterface $prod
 */
?>
<div class="prod index content">
    <?= $this->Html->link(__('New Prod'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Prod') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('Prod') ?></th>
                    <th><?= $this->Paginator->sort('Categorias') ?></th>
                    <th><?= $this->Paginator->sort('Users') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($prod as $prod): ?>
                <tr>
                    <td><?= $this->Number->format($prod->id_prod) ?></td>
                    <td><?= $this->Number->format($prod->id_categorias) ?></td>
                    <td><?= $this->Number->format($prod->id_users) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $prod->id_prod]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $prod->id_prod]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $prod->id_prod], ['confirm' => __('Are you sure you want to delete # {0}?', $prod->id_prod)]) ?>
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
