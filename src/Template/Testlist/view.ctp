<?php

/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Testlist $testlist
 */
?>
<?= $this->Html->css('jquery.dataTables.min.css') ?>
<?= $this->Html->script('jquery.dataTables.min.js') ?>
<script>

    $(document).ready(function () {
        var table = $('#example').DataTable({
//        "processing": true,
//        "serverSide": true,
            "ajax": {
                "url": "/testlist/getQuestionDetail/<?= $testID?>.json",
            },
            "columns": [
                {"data": "questionID"},
                {"data": "content"},
                {"data": "choiceA"},
                {"data": "choiceB"},
                {"data": "choiceC"},
                {"data": "choiceD"},
                {"data": "type"},
                {"data": "level"},
            ]
        });
    });
</script>
<nav class="large-3 medium-3 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Testlist'), ['action' => 'edit', $testlist->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Testlist'), ['action' => 'delete', $testlist->id], ['confirm' => __('Are you sure you want to delete # {0}?', $testlist->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Testlist'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Testlist'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="testlist view large-9 medium-9 columns content">
    <h3><?= h($testlist->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($testlist->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Author') ?></th>
            <td><?= h($testlist->author) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($testlist->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Level') ?></th>
            <td><?= $this->Number->format($testlist->level) ?></td>
        </tr>
    </table>
    <div class="questions columns">
        <h3><?= __('Questions') ?></h3>
        <table id="example" class="display" style="width:100%">
            <thead>
                <tr>
                    <th>First name</th>
                    <th>Last name</th>
                    <th>Position</th>
                    <th>Office</th>
                    <th>Start date</th>
                    <th>Salary</th>
                    <th>Start date</th>
                    <th>Salary</th>
                </tr>
            </thead>
            <tfoot>
                <tr>
                    <th>First name</th>
                    <th>Last name</th>
                    <th>Position</th>
                    <th>Office</th>
                    <th>Start date</th>
                    <th>Salary</th>
                    <th>Start date</th>
                    <th>Salary</th>
                </tr>
            </tfoot>
        </table>
    </div>
</div>
