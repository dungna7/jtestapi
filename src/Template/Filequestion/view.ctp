<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Filequestion $filequestion
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Filequestion'), ['action' => 'edit', $filequestion->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Filequestion'), ['action' => 'delete', $filequestion->id], ['confirm' => __('Are you sure you want to delete # {0}?', $filequestion->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Filequestion'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Filequestion'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="filequestion view large-9 medium-8 columns content">
    <h3><?= h($filequestion->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($filequestion->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($filequestion->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('AuthorId') ?></th>
            <td><?= $this->Number->format($filequestion->authorId) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Level') ?></th>
            <td><?= $this->Number->format($filequestion->level) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Type') ?></th>
            <td><?= $this->Number->format($filequestion->type) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($filequestion->created) ?></td>
        </tr>
    </table>
</div>
