<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\CustomersTravel[]|\Cake\Collection\CollectionInterface $customersTravels
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Customers Travel'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Customers'), ['controller' => 'Customers', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Customer'), ['controller' => 'Customers', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Travels'), ['controller' => 'Travels', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Travel'), ['controller' => 'Travels', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="customersTravels index large-9 medium-8 columns content">
    <h3><?= __('Customers Travels') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('customer_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('travel_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($customersTravels as $customersTravel): ?>
            <tr>
                <td><?= $this->Number->format($customersTravel->id) ?></td>
                <td><?= $customersTravel->has('customer') ? $this->Html->link($customersTravel->customer->id, ['controller' => 'Customers', 'action' => 'view', $customersTravel->customer->id]) : '' ?></td>
                <td><?= $customersTravel->has('travel') ? $this->Html->link($customersTravel->travel->id, ['controller' => 'Travels', 'action' => 'view', $customersTravel->travel->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $customersTravel->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $customersTravel->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $customersTravel->id], ['confirm' => __('Are you sure you want to delete # {0}?', $customersTravel->id)]) ?>
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
