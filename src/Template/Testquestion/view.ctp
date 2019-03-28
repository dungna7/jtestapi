<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Testquestion $testquestion
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Testquestion'), ['action' => 'edit', $testquestion->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Testquestion'), ['action' => 'delete', $testquestion->id], ['confirm' => __('Are you sure you want to delete # {0}?', $testquestion->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Testquestion'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Testquestion'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="testquestion view large-9 medium-8 columns content">
    <h3><?= h($testquestion->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($testquestion->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('TestID') ?></th>
            <td><?= $this->Number->format($testquestion->testID) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('QuestionID') ?></th>
            <td><?= $this->Number->format($testquestion->questionID) ?></td>
        </tr>
    </table>
</div>
