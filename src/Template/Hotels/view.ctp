<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Hotel $hotel
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Hotel'), ['action' => 'edit', $hotel->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Hotel'), ['action' => 'delete', $hotel->id], ['confirm' => __('Are you sure you want to delete # {0}?', $hotel->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Hotels'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Hotel'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Countries'), ['controller' => 'Countries', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Country'), ['controller' => 'Countries', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Hotel Images'), ['controller' => 'HotelImages', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Hotel Image'), ['controller' => 'HotelImages', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Travels'), ['controller' => 'Travels', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Travel'), ['controller' => 'Travels', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="hotels view large-9 medium-8 columns content">
    <h3><?= h($hotel->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($hotel->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Location') ?></th>
            <td><?= h($hotel->location) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Manager') ?></th>
            <td><?= h($hotel->manager) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Phone') ?></th>
            <td><?= h($hotel->phone) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Country') ?></th>
            <td><?= $hotel->has('country') ? $this->Html->link($hotel->country->name, ['controller' => 'Countries', 'action' => 'view', $hotel->country->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($hotel->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Rating') ?></th>
            <td><?= $this->Number->format($hotel->rating) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Amount Of Rooms') ?></th>
            <td><?= $this->Number->format($hotel->amount_of_rooms) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Daily Price') ?></th>
            <td><?= $this->Number->format($hotel->daily_price) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Email') ?></h4>
        <?= $this->Text->autoParagraph(h($hotel->email)); ?>
    </div>
    <div class="row">
        <h4><?= __('Web') ?></h4>
        <?= $this->Text->autoParagraph(h($hotel->web)); ?>
    </div>
    <div class="related">
        <h4><?= __('Related Hotel Images') ?></h4>
        <?php if (!empty($hotel->hotel_images)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Hotel Id') ?></th>
                <th scope="col"><?= __('Ordering') ?></th>
                <th scope="col"><?= __('Picture') ?></th>
                <th scope="col"><?= __('Description') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($hotel->hotel_images as $hotelImages): ?>
            <tr>
                <td><?= h($hotelImages->id) ?></td>
                <td><?= h($hotelImages->hotel_id) ?></td>
                <td><?= h($hotelImages->ordering) ?></td>
                <td><?= h($hotelImages->picture) ?></td>
                <td><?= h($hotelImages->description) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'HotelImages', 'action' => 'view', $hotelImages->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'HotelImages', 'action' => 'edit', $hotelImages->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'HotelImages', 'action' => 'delete', $hotelImages->id], ['confirm' => __('Are you sure you want to delete # {0}?', $hotelImages->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Travels') ?></h4>
        <?php if (!empty($hotel->travels)): ?>
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
            <?php foreach ($hotel->travels as $travels): ?>
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
