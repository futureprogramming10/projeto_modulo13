<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Produto $produto
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Produto'), ['action' => 'edit', $produto->id_produtos], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Produto'), ['action' => 'delete', $produto->id_produtos], ['confirm' => __('Are you sure you want to delete # {0}?', $produto->id_produtos), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Produtos'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Produto'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="produtos view content">
            <h3><?= h($produto->nome_produto) ?></h3>
            <table>
                <tr>
                    <th><?= __('Nome Produto') ?></th>
                    <td><?= h($produto->nome_produto) ?></td>
                </tr>
                <tr>
                    <th><?= __('Categoria') ?></th>
                    <td><?= $produto->has('categoria') ? $this->Html->link($produto->categoria->nome_categoria, ['controller' => 'Categorias', 'action' => 'view', $produto->categoria->id_categorias]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id Produtos') ?></th>
                    <td><?= $this->Number->format($produto->id_produtos) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($produto->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($produto->modified) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
