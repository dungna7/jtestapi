<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Question[]|\Cake\Collection\CollectionInterface $questions
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Question'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="questions index large-9 medium-8 columns content">
    <h3><?= __('Questions') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('content') ?></th>
                <th scope="col"><?= $this->Paginator->sort('choiceA') ?></th>
                <th scope="col"><?= $this->Paginator->sort('choiceB') ?></th>
                <th scope="col"><?= $this->Paginator->sort('choiceC') ?></th>
                <th scope="col"><?= $this->Paginator->sort('choiceD') ?></th>
                <th scope="col"><?= $this->Paginator->sort('type') ?></th>
                <th scope="col"><?= $this->Paginator->sort('level') ?></th>
                <th scope="col"><?= $this->Paginator->sort('correctAnswer') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($questions as $question): ?>
            <tr>
                <td><?= $this->Number->format($question->id) ?></td>
                <td><?= h($question->content) ?></td>
                <td><?= h($question->choiceA) ?></td>
                <td><?= h($question->choiceB) ?></td>
                <td><?= h($question->choiceC) ?></td>
                <td><?= h($question->choiceD) ?></td>
                <td><?= $this->Number->format($question->type) ?></td>
                <td><?= $this->Number->format($question->level) ?></td>
                <td><?= $this->Number->format($question->correctAnswer) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $question->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $question->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $question->id], ['confirm' => __('Are you sure you want to delete # {0}?', $question->id)]) ?>
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
