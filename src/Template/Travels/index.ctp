<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Travel[]|\Cake\Collection\CollectionInterface $travels
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Travel'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Countries'), ['controller' => 'Countries', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Country'), ['controller' => 'Countries', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Customers'), ['controller' => 'Customers', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Customer'), ['controller' => 'Customers', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Hotels'), ['controller' => 'Hotels', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Hotel'), ['controller' => 'Hotels', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="travels index large-9 medium-8 columns content">
    <h3><?= __('Travels') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('country_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('start') ?></th>
                <th scope="col"><?= $this->Paginator->sort('end') ?></th>
                <th scope="col"><?= $this->Paginator->sort('price') ?></th>
                <th scope="col"><?= $this->Paginator->sort('guide') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nameGuide') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($travels as $travel): ?>
            <tr>
                <td><?= $this->Number->format($travel->id) ?></td>
                <td><?= $travel->has('country') ? $this->Html->link($travel->country->name, ['controller' => 'Countries', 'action' => 'view', $travel->country->id]) : '' ?></td>
                <td><?= h($travel->start) ?></td>
                <td><?= h($travel->end) ?></td>
                <td><?= $this->Number->format($travel->price) ?></td>
                <td><?= h($travel->guide) ?></td>
                <td><?= h($travel->nameGuide) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $travel->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $travel->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $travel->id], ['confirm' => __('Are you sure you want to delete # {0}?', $travel->id)]) ?>
                </td>
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
