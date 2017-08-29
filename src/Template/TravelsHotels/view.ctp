<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\TravelsHotel $travelsHotel
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Travels Hotel'), ['action' => 'edit', $travelsHotel->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Travels Hotel'), ['action' => 'delete', $travelsHotel->id], ['confirm' => __('Are you sure you want to delete # {0}?', $travelsHotel->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Travels Hotels'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Travels Hotel'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Travels'), ['controller' => 'Travels', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Travel'), ['controller' => 'Travels', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Hotels'), ['controller' => 'Hotels', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Hotel'), ['controller' => 'Hotels', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="travelsHotels view large-9 medium-8 columns content">
    <h3><?= h($travelsHotel->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Travel') ?></th>
            <td><?= $travelsHotel->has('travel') ? $this->Html->link($travelsHotel->travel->id, ['controller' => 'Travels', 'action' => 'view', $travelsHotel->travel->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Hotel') ?></th>
            <td><?= $travelsHotel->has('hotel') ? $this->Html->link($travelsHotel->hotel->name, ['controller' => 'Hotels', 'action' => 'view', $travelsHotel->hotel->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($travelsHotel->id) ?></td>
        </tr>
    </table>
</div>
