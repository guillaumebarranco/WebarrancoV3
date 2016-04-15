<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Quizz'), ['action' => 'edit', $quizz->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Quizz'), ['action' => 'delete', $quizz->id], ['confirm' => __('Are you sure you want to delete # {0}?', $quizz->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Quizz'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Quizz'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="quizz view large-9 medium-8 columns content">
    <h3><?= h($quizz->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Name') ?></th>
            <td><?= h($quizz->name) ?></td>
        </tr>
        <tr>
            <th><?= __('Data') ?></th>
            <td><?= h($quizz->data) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($quizz->id) ?></td>
        </tr>
    </table>
</div>
