<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Question'), ['action' => 'edit', $question->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Question'), ['action' => 'delete', $question->id], ['confirm' => __('Are you sure you want to delete # {0}?', $question->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Question'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Question'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="question view large-9 medium-8 columns content">
    <h3><?= h($question->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Name') ?></th>
            <td><?= h($question->name) ?></td>
        </tr>
        <tr>
            <th><?= __('Answer') ?></th>
            <td><?= h($question->answer) ?></td>
        </tr>
        <tr>
            <th><?= __('Type Name') ?></th>
            <td><?= h($question->type_name) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($question->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Offset') ?></th>
            <td><?= $this->Number->format($question->offset) ?></td>
        </tr>
        <tr>
            <th><?= __('Type') ?></th>
            <td><?= $this->Number->format($question->type) ?></td>
        </tr>
    </table>
</div>
