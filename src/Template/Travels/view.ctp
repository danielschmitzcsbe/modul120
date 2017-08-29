<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Travel $travel
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Travel'), ['action' => 'edit', $travel->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Travel'), ['action' => 'delete', $travel->id], ['confirm' => __('Are you sure you want to delete # {0}?', $travel->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Travels'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Travel'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Countries'), ['controller' => 'Countries', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Country'), ['controller' => 'Countries', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Customers'), ['controller' => 'Customers', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Customer'), ['controller' => 'Customers', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Hotels'), ['controller' => 'Hotels', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Hotel'), ['controller' => 'Hotels', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="travels view large-9 medium-8 columns content">
    <h3><?= h($travel->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Country') ?></th>
            <td><?= $travel->has('country') ? $this->Html->link($travel->country->name, ['controller' => 'Countries', 'action' => 'view', $travel->country->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Guide') ?></th>
            <td><?= h($travel->guide) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('NameGuide') ?></th>
            <td><?= h($travel->nameGuide) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($travel->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Price') ?></th>
            <td><?= $this->Number->format($travel->price) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Start') ?></th>
            <td><?= h($travel->start) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('End') ?></th>
            <td><?= h($travel->end) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Customers') ?></h4>
        <?php if (!empty($travel->customers)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Salutation') ?></th>
                <th scope="col"><?= __('Firstname') ?></th>
                <th scope="col"><?= __('Lastname') ?></th>
                <th scope="col"><?= __('Name Addition') ?></th>
                <th scope="col"><?= __('Street') ?></th>
                <th scope="col"><?= __('Plz') ?></th>
                <th scope="col"><?= __('Location') ?></th>
                <th scope="col"><?= __('Phone') ?></th>
                <th scope="col"><?= __('Mobile') ?></th>
                <th scope="col"><?= __('Email') ?></th>
                <th scope="col"><?= __('Web') ?></th>
                <th scope="col"><?= __('Birthdate') ?></th>
                <th scope="col"><?= __('Pass Nr') ?></th>
                <th scope="col"><?= __('Nationality') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($travel->customers as $customers): ?>
            <tr>
                <td><?= h($customers->id) ?></td>
                <td><?= h($customers->salutation) ?></td>
                <td><?= h($customers->firstname) ?></td>
                <td><?= h($customers->lastname) ?></td>
                <td><?= h($customers->name_addition) ?></td>
                <td><?= h($customers->street) ?></td>
                <td><?= h($customers->plz) ?></td>
                <td><?= h($customers->location) ?></td>
                <td><?= h($customers->phone) ?></td>
                <td><?= h($customers->mobile) ?></td>
                <td><?= h($customers->email) ?></td>
                <td><?= h($customers->web) ?></td>
                <td><?= h($customers->birthdate) ?></td>
                <td><?= h($customers->pass_nr) ?></td>
                <td><?= h($customers->nationality) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Customers', 'action' => 'view', $customers->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Customers', 'action' => 'edit', $customers->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Customers', 'action' => 'delete', $customers->id], ['confirm' => __('Are you sure you want to delete # {0}?', $customers->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Hotels') ?></h4>
        <?php if (!empty($travel->hotels)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Name') ?></th>
                <th scope="col"><?= __('Location') ?></th>
                <th scope="col"><?= __('Rating') ?></th>
                <th scope="col"><?= __('Manager') ?></th>
                <th scope="col"><?= __('Amount Of Rooms') ?></th>
                <th scope="col"><?= __('Daily Price') ?></th>
                <th scope="col"><?= __('Phone') ?></th>
                <th scope="col"><?= __('Email') ?></th>
                <th scope="col"><?= __('Web') ?></th>
                <th scope="col"><?= __('Country Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($travel->hotels as $hotels): ?>
            <tr>
                <td><?= h($hotels->id) ?></td>
                <td><?= h($hotels->name) ?></td>
                <td><?= h($hotels->location) ?></td>
                <td><?= h($hotels->rating) ?></td>
                <td><?= h($hotels->manager) ?></td>
                <td><?= h($hotels->amount_of_rooms) ?></td>
                <td><?= h($hotels->daily_price) ?></td>
                <td><?= h($hotels->phone) ?></td>
                <td><?= h($hotels->email) ?></td>
                <td><?= h($hotels->web) ?></td>
                <td><?= h($hotels->country_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Hotels', 'action' => 'view', $hotels->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Hotels', 'action' => 'edit', $hotels->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Hotels', 'action' => 'delete', $hotels->id], ['confirm' => __('Are you sure you want to delete # {0}?', $hotels->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
