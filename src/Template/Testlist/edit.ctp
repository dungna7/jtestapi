<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Testlist $testlist
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $testlist->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $testlist->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Testlist'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="testlist form large-9 medium-8 columns content">
    <?= $this->Form->create($testlist) ?>
    <fieldset>
        <legend><?= __('Edit Testlist') ?></legend>
        <?php
            echo $this->Form->control('name');
            echo $this->Form->control('author');
            echo $this->Form->control('level');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
      <div class="questions columns">
        <h3><?= __('Questions') ?></h3>
        <table cellpadding="0" cellspacing="0">
            <thead>
                <tr>
                    <th scope="col">choice</th>
                    <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                    <th scope="col"><?= $this->Paginator->sort('content') ?></th>
                    <th scope="col"><?= $this->Paginator->sort('choiceA') ?></th>
                    <th scope="col"><?= $this->Paginator->sort('choiceB') ?></th>
                    <th scope="col"><?= $this->Paginator->sort('choiceC') ?></th>
                    <th scope="col"><?= $this->Paginator->sort('choiceD') ?></th>
                    <th scope="col"><?= $this->Paginator->sort('level') ?></th>
                </tr>
            </thead>
            <tbody>
            <?php foreach ($questions as $question): ?>
                <tr>
                     <td><input type="checkbox" name="choice[]" value="0" /></td>
                    <td><?= $this->Number->format($question->questionID) ?></td>
                    <td><?= h($question->content) ?></td>
                    <td><?= h($question->choiceA) ?></td>
                    <td><?= h($question->choiceB) ?></td>
                    <td><?= h($question->choiceC) ?></td>
                    <td><?= h($question->choiceD) ?></td>
                    <td><?= $this->Number->format($question->level) ?></td>
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
</div>
