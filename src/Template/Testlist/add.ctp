<?php

/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Testlist $testlist
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Testlist'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="testlist form large-9 medium-8 columns content">
    <?= $this->Form->create($testlist) ?>
    <fieldset>
        <legend><?= __('Add Testlist') ?></legend>
        <?php
            echo $this->Form->control('name');
            echo $this->Form->control('author');
            echo $this->Form->control('level');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
   
</div>