<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Categoria $categoria
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Categoria'), ['action' => 'edit', $categoria->id_categorias], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Categoria'), ['action' => 'delete', $categoria->id_categorias], ['confirm' => __('Are you sure you want to delete # {0}?', $categoria->id_categorias), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Categorias'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Categoria'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="categorias view content">
            <h3><?= h($categoria->nome_categoria) ?></h3>
            <table>
                <tr>
                    <th><?= __('Nome Categoria') ?></th>
                    <td><?= h($categoria->nome_categoria) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id Categorias') ?></th>
                    <td><?= $this->Number->format($categoria->id_categorias) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($categoria->created) ?></td>
                </tr>
            </table>
            <div class="related">
                <?php if (!empty($categoria->categoria)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('ID Curso') ?></th>
                            <th><?= __('Curso') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($categorias as $categoria): ?>
                            <tr>
                                <td><?= $this->Number->format($categoria->id_categorias) ?></td>
                                <td><?= h($categoria->nome_categoria) ?></td>
                                <td><?= h($categoria->created) ?></td>
                                <td><?= h($categoria->modified) ?></td>
                                <td class="actions">
                                    <?= $this->Html->link(__('View'), ['action' => 'view', $categoria->id_categorias]) ?>
                                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $categoria->id_categorias]) ?>
                                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $categoria->id_categorias], ['confirm' => __('Are you sure you want to delete # {0}?', $categoria->id_categorias)]) ?>
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
