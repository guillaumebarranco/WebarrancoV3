<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Quizz'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="quizz index large-9 medium-8 columns content">
    <h3><?= __('Quizz') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('name') ?></th>
                <th><?= $this->Paginator->sort('data') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($quizz as $quizz): ?>
            <tr>
                <td><?= $this->Number->format($quizz->id) ?></td>
                <td><?= h($quizz->name) ?></td>
                <td><?= h($quizz->data) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $quizz->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $quizz->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $quizz->id], ['confirm' => __('Are you sure you want to delete # {0}?', $quizz->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>
