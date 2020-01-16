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
            <?= $this->Html->link(__('List Prod'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="prod form content">
            <?= $this->Form->create($prod) ?>
            <fieldset>
                <legend><?= __('Add Prod') ?></legend>
                <?php
                    echo $this->Form->control('id_categorias');
                    echo $this->Form->control('id_users');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
