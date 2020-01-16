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
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $categoriasUser->id_prod],
                ['confirm' => __('Are you sure you want to delete # {0}?', $categoriasUser->id_prod), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Categorias Users'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="categoriasUsers form content">
            <?= $this->Form->create($categoriasUser) ?>
            <fieldset>
                <legend><?= __('Edit Categorias User') ?></legend>
                <?php
                    echo $this->Form->control('categorias_id', ['options' => $categorias, 'empty' => true]);
                    echo $this->Form->control('users_id', ['options' => $users, 'empty' => true]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
