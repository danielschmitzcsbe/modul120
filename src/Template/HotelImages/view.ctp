<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\HotelImage $hotelImage
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Hotel Image'), ['action' => 'edit', $hotelImage->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Hotel Image'), ['action' => 'delete', $hotelImage->id], ['confirm' => __('Are you sure you want to delete # {0}?', $hotelImage->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Hotel Images'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Hotel Image'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Hotels'), ['controller' => 'Hotels', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Hotel'), ['controller' => 'Hotels', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="hotelImages view large-9 medium-8 columns content">
    <h3><?= h($hotelImage->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Hotel') ?></th>
            <td><?= $hotelImage->has('hotel') ? $this->Html->link($hotelImage->hotel->name, ['controller' => 'Hotels', 'action' => 'view', $hotelImage->hotel->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($hotelImage->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Ordering') ?></th>
            <td><?= $this->Number->format($hotelImage->ordering) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Description') ?></h4>
        <?= $this->Text->autoParagraph(h($hotelImage->description)); ?>
    </div>
</div>
