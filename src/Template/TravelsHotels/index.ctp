<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\TravelsHotel[]|\Cake\Collection\CollectionInterface $travelsHotels
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Travels Hotel'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Travels'), ['controller' => 'Travels', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Travel'), ['controller' => 'Travels', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Hotels'), ['controller' => 'Hotels', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Hotel'), ['controller' => 'Hotels', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="travelsHotels index large-9 medium-8 columns content">
    <h3><?= __('Travels Hotels') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('travel_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('hotel_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($travelsHotels as $travelsHotel): ?>
            <tr>
                <td><?= $this->Number->format($travelsHotel->id) ?></td>
                <td><?= $travelsHotel->has('travel') ? $this->Html->link($travelsHotel->travel->id, ['controller' => 'Travels', 'action' => 'view', $travelsHotel->travel->id]) : '' ?></td>
                <td><?= $travelsHotel->has('hotel') ? $this->Html->link($travelsHotel->hotel->name, ['controller' => 'Hotels', 'action' => 'view', $travelsHotel->hotel->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $travelsHotel->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $travelsHotel->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $travelsHotel->id], ['confirm' => __('Are you sure you want to delete # {0}?', $travelsHotel->id)]) ?>
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
