<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Filequestion[]|\Cake\Collection\CollectionInterface $filequestion
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Filequestion'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="filequestion index large-9 medium-8 columns content">
    <h3><?= __('Filequestion') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('authorId') ?></th>
                <th scope="col"><?= $this->Paginator->sort('level') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('type') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($filequestion as $filequestion): ?>
            <tr>
                <td><?= $this->Number->format($filequestion->id) ?></td>
                <td><?= h($filequestion->name) ?></td>
                <td><?= $this->Number->format($filequestion->authorId) ?></td>
                <td><?= $this->Number->format($filequestion->level) ?></td>
                <td><?= h($filequestion->created) ?></td>
                <td><?= $this->Number->format($filequestion->type) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $filequestion->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $filequestion->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $filequestion->id], ['confirm' => __('Are you sure you want to delete # {0}?', $filequestion->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
