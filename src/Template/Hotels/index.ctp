<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Hotel[]|\Cake\Collection\CollectionInterface $hotels
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Hotel'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Countries'), ['controller' => 'Countries', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Country'), ['controller' => 'Countries', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Hotel Images'), ['controller' => 'HotelImages', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Hotel Image'), ['controller' => 'HotelImages', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Travels'), ['controller' => 'Travels', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Travel'), ['controller' => 'Travels', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="hotels index large-9 medium-8 columns content">
    <h3><?= __('Hotels') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('location') ?></th>
                <th scope="col"><?= $this->Paginator->sort('rating') ?></th>
                <th scope="col"><?= $this->Paginator->sort('manager') ?></th>
                <th scope="col"><?= $this->Paginator->sort('amount_of_rooms') ?></th>
                <th scope="col"><?= $this->Paginator->sort('daily_price') ?></th>
                <th scope="col"><?= $this->Paginator->sort('phone') ?></th>
                <th scope="col"><?= $this->Paginator->sort('country_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($hotels as $hotel): ?>
            <tr>
                <td><?= $this->Number->format($hotel->id) ?></td>
                <td><?= h($hotel->name) ?></td>
                <td><?= h($hotel->location) ?></td>
                <td><?= $this->Number->format($hotel->rating) ?></td>
                <td><?= h($hotel->manager) ?></td>
                <td><?= $this->Number->format($hotel->amount_of_rooms) ?></td>
                <td><?= $this->Number->format($hotel->daily_price) ?></td>
                <td><?= h($hotel->phone) ?></td>
                <td><?= $hotel->has('country') ? $this->Html->link($hotel->country->name, ['controller' => 'Countries', 'action' => 'view', $hotel->country->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $hotel->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $hotel->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $hotel->id], ['confirm' => __('Are you sure you want to delete # {0}?', $hotel->id)]) ?>
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
