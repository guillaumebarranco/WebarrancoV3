<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $quizz->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $quizz->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Quizz'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="quizz form large-9 medium-8 columns content">
    <?= $this->Form->create($quizz) ?>
    <fieldset>
        <legend><?= __('Edit Quizz') ?></legend>
        <?php
            echo $this->Form->input('name');
            echo $this->Form->input('data');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
