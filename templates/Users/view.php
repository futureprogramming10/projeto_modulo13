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
                <?php if (!empty($user->user)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id Users') ?></th>
                            <th><?= __('Nome') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                            <?php foreach ($users as $user): ?>
                                <tr>
                                    <td><?= $this->Number->format($user->id_users) ?></td>
                                    <td><?= h($user->nome) ?></td>
                                    <td class="actions">
                                        <?= $this->Html->link(__('View'), ['action' => 'view', $user->id_users]) ?>
                                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $user->id_users]) ?>
                                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $user->id_users], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id_users)]) ?>
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
