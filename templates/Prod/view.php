<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Prod $prod
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Prod'), ['action' => 'edit', $prod->id_prod], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Prod'), ['action' => 'delete', $prod->id_prod], ['confirm' => __('Are you sure you want to delete # {0}?', $prod->id_prod), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Prod'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Prod'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="prod view content">
            <h3><?= h($prod->id_prod) ?></h3>
            <table>
                <tr>
                    <th><?= __('Id Prod') ?></th>
                    <td><?= $this->Number->format($prod->id_prod) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id Categorias') ?></th>
                    <td><?= $this->Number->format($prod->id_categorias) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id Users') ?></th>
                    <td><?= $this->Number->format($prod->id_users) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
