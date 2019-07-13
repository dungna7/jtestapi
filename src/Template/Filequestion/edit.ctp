<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Filequestion $filequestion
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $filequestion->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $filequestion->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Filequestion'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="filequestion form large-9 medium-8 columns content">
    <?= $this->Form->create($filequestion) ?>
    <fieldset>
        <legend><?= __('Edit Filequestion') ?></legend>
        <?php
            echo $this->Form->control('name');
            echo $this->Form->control('authorId');
            echo $this->Form->control('level');
            echo $this->Form->control('type');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
