<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\CategoriasUser $categoriasUser
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Categorias User'), ['action' => 'edit', $categoriasUser->id_prod], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Categorias User'), ['action' => 'delete', $categoriasUser->id_prod], ['confirm' => __('Are you sure you want to delete # {0}?', $categoriasUser->id_prod), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Categorias Users'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Categorias User'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="categoriasUsers view content">
            <h3><?= h($categoriasUser->id_prod) ?></h3>
            <table>
                <tr>
                    <th><?= __('Categoria') ?></th>
                    <td><?= $categoriasUser->has('categoria') ? $this->Html->link($categoriasUser->categoria->nome_categoria, ['controller' => 'Categorias', 'action' => 'view', $categoriasUser->categoria->id_categorias]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('User') ?></th>
                    <td><?= $categoriasUser->has('user') ? $this->Html->link($categoriasUser->user->nome, ['controller' => 'Users', 'action' => 'view', $categoriasUser->user->id_users]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id Prod') ?></th>
                    <td><?= $this->Number->format($categoriasUser->id_prod) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
