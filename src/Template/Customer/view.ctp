<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Customer $customer
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Customer'), ['action' => 'edit', $customer->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Customer'), ['action' => 'delete', $customer->id], ['confirm' => __('Are you sure you want to delete # {0}?', $customer->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Customer'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Customer'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Customers Travels'), ['controller' => 'CustomersTravels', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Customers Travel'), ['controller' => 'CustomersTravels', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="customer view large-9 medium-8 columns content">
    <h3><?= h($customer->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Salutation') ?></th>
            <td><?= h($customer->salutation) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Firstname') ?></th>
            <td><?= h($customer->firstname) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Lastname') ?></th>
            <td><?= h($customer->lastname) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Name Addition') ?></th>
            <td><?= h($customer->name_addition) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Street') ?></th>
            <td><?= h($customer->street) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Plz') ?></th>
            <td><?= h($customer->plz) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Location') ?></th>
            <td><?= h($customer->location) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Phone') ?></th>
            <td><?= h($customer->phone) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Mobile') ?></th>
            <td><?= h($customer->mobile) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Email') ?></th>
            <td><?= h($customer->email) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Pass Nr') ?></th>
            <td><?= h($customer->pass_nr) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Nationality') ?></th>
            <td><?= h($customer->nationality) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($customer->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Birthdate') ?></th>
            <td><?= h($customer->birthdate) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Web') ?></h4>
        <?= $this->Text->autoParagraph(h($customer->web)); ?>
    </div>
    <div class="related">
        <h4><?= __('Related Customers Travels') ?></h4>
        <?php if (!empty($customer->customers_travels)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Customer Id') ?></th>
                <th scope="col"><?= __('Travel Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($customer->customers_travels as $customersTravels): ?>
            <tr>
                <td><?= h($customersTravels->id) ?></td>
                <td><?= h($customersTravels->customer_id) ?></td>
                <td><?= h($customersTravels->travel_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'CustomersTravels', 'action' => 'view', $customersTravels->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'CustomersTravels', 'action' => 'edit', $customersTravels->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'CustomersTravels', 'action' => 'delete', $customersTravels->id], ['confirm' => __('Are you sure you want to delete # {0}?', $customersTravels->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
