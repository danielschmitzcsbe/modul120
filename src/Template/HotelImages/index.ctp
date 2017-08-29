<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\HotelImage[]|\Cake\Collection\CollectionInterface $hotelImages
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Hotel Image'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Hotels'), ['controller' => 'Hotels', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Hotel'), ['controller' => 'Hotels', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="hotelImages index large-9 medium-8 columns content">
    <h3><?= __('Hotel Images') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('hotel_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('ordering') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($hotelImages as $hotelImage): ?>
            <tr>
                <td><?= $this->Number->format($hotelImage->id) ?></td>
                <td><?= $hotelImage->has('hotel') ? $this->Html->link($hotelImage->hotel->name, ['controller' => 'Hotels', 'action' => 'view', $hotelImage->hotel->id]) : '' ?></td>
                <td><?= $this->Number->format($hotelImage->ordering) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $hotelImage->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $hotelImage->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $hotelImage->id], ['confirm' => __('Are you sure you want to delete # {0}?', $hotelImage->id)]) ?>
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
