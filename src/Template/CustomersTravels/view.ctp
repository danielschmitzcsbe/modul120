<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\CustomersTravel $customersTravel
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Customers Travel'), ['action' => 'edit', $customersTravel->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Customers Travel'), ['action' => 'delete', $customersTravel->id], ['confirm' => __('Are you sure you want to delete # {0}?', $customersTravel->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Customers Travels'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Customers Travel'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Customers'), ['controller' => 'Customers', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Customer'), ['controller' => 'Customers', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Travels'), ['controller' => 'Travels', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Travel'), ['controller' => 'Travels', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="customersTravels view large-9 medium-8 columns content">
    <h3><?= h($customersTravel->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Customer') ?></th>
            <td><?= $customersTravel->has('customer') ? $this->Html->link($customersTravel->customer->id, ['controller' => 'Customers', 'action' => 'view', $customersTravel->customer->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Travel') ?></th>
            <td><?= $customersTravel->has('travel') ? $this->Html->link($customersTravel->travel->id, ['controller' => 'Travels', 'action' => 'view', $customersTravel->travel->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($customersTravel->id) ?></td>
        </tr>
    </table>
</div>
