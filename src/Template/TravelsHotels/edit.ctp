<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $travelsHotel->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $travelsHotel->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Travels Hotels'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Travels'), ['controller' => 'Travels', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Travel'), ['controller' => 'Travels', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Hotels'), ['controller' => 'Hotels', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Hotel'), ['controller' => 'Hotels', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="travelsHotels form large-9 medium-8 columns content">
    <?= $this->Form->create($travelsHotel) ?>
    <fieldset>
        <legend><?= __('Edit Travels Hotel') ?></legend>
        <?php
            echo $this->Form->control('travel_id', ['options' => $travels]);
            echo $this->Form->control('hotel_id', ['options' => $hotels]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
