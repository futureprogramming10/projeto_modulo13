<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit User'), ['action' => 'edit', $user->id_users], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete User'), ['action' => 'delete', $user->id_users], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id_users), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Users'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New User'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="users view content">
            <h3><?= h($user->nome) ?></h3>
            <table>
                <tr>
                    <th><?= __('Nome') ?></th>
                    <td><?= h($user->nome) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id Users') ?></th>
                    <td><?= $this->Number->format($user->id_users) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Categorias') ?></h4>
                <?php if (!empty($user->categorias)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id Categorias') ?></th>
                            <th><?= __('Nome Categoria') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($user->categorias as $categorias) : ?>
                        <tr>
                            <td><?= h($categorias->id_categorias) ?></td>
                            <td><?= h($categorias->nome_categoria) ?></td>
                            <td><?= h($categorias->created) ?></td>
                            <td><?= h($categorias->modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Categorias', 'action' => 'view', $categorias->id_categorias]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Categorias', 'action' => 'edit', $categorias->id_categorias]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Categorias', 'action' => 'delete', $categorias->id_categorias], ['confirm' => __('Are you sure you want to delete # {0}?', $categorias->id_categorias)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
