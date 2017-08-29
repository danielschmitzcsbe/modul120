<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Country $country
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Country'), ['action' => 'edit', $country->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Country'), ['action' => 'delete', $country->id], ['confirm' => __('Are you sure you want to delete # {0}?', $country->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Countries'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Country'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Hotels'), ['controller' => 'Hotels', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Hotel'), ['controller' => 'Hotels', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Travels'), ['controller' => 'Travels', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Travel'), ['controller' => 'Travels', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="countries view large-9 medium-8 columns content">
    <h3><?= h($country->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($country->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Shortname') ?></th>
            <td><?= h($country->shortname) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($country->id) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Hotels') ?></h4>
        <?php if (!empty($country->hotels)): ?>
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
            <?php foreach ($country->hotels as $hotels): ?>
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
    <div class="related">
        <h4><?= __('Related Travels') ?></h4>
        <?php if (!empty($country->travels)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Country Id') ?></th>
                <th scope="col"><?= __('Start') ?></th>
                <th scope="col"><?= __('End') ?></th>
                <th scope="col"><?= __('Price') ?></th>
                <th scope="col"><?= __('Guide') ?></th>
                <th scope="col"><?= __('NameGuide') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($country->travels as $travels): ?>
            <tr>
                <td><?= h($travels->id) ?></td>
                <td><?= h($travels->country_id) ?></td>
                <td><?= h($travels->start) ?></td>
                <td><?= h($travels->end) ?></td>
                <td><?= h($travels->price) ?></td>
                <td><?= h($travels->guide) ?></td>
                <td><?= h($travels->nameGuide) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Travels', 'action' => 'view', $travels->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Travels', 'action' => 'edit', $travels->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Travels', 'action' => 'delete', $travels->id], ['confirm' => __('Are you sure you want to delete # {0}?', $travels->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
