<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Question $question
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Question'), ['action' => 'edit', $question->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Question'), ['action' => 'delete', $question->id], ['confirm' => __('Are you sure you want to delete # {0}?', $question->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Questions'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Question'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="questions view large-9 medium-8 columns content">
    <h3><?= h($question->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Content') ?></th>
            <td><?= h($question->content) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('ChoiceA') ?></th>
            <td><?= h($question->choiceA) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('ChoiceB') ?></th>
            <td><?= h($question->choiceB) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('ChoiceC') ?></th>
            <td><?= h($question->choiceC) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('ChoiceD') ?></th>
            <td><?= h($question->choiceD) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($question->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Type') ?></th>
            <td><?= $this->Number->format($question->type) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Level') ?></th>
            <td><?= $this->Number->format($question->level) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('CorrectAnswer') ?></th>
            <td><?= $this->Number->format($question->correctAnswer) ?></td>
        </tr>
    </table>
</div>
