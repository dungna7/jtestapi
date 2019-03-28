<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Testquestion $testquestion
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Testquestion'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="testquestion form large-9 medium-8 columns content">
    <?= $this->Form->create($testquestion) ?>
    <fieldset>
        <legend><?= __('Add Testquestion') ?></legend>
        <?php
            echo $this->Form->control('testID');
            echo $this->Form->control('questionID');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
