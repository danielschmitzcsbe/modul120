<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Hotels'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Countries'), ['controller' => 'Countries', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Country'), ['controller' => 'Countries', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Hotel Images'), ['controller' => 'HotelImages', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Hotel Image'), ['controller' => 'HotelImages', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Travels'), ['controller' => 'Travels', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Travel'), ['controller' => 'Travels', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="hotels form large-9 medium-8 columns content">
    <?= $this->Form->create($hotel) ?>
    <fieldset>
        <legend><?= __('Add Hotel') ?></legend>
        <?php
            echo $this->Form->control('name');
            echo $this->Form->control('location');
            echo $this->Form->control('rating');
            echo $this->Form->control('manager');
            echo $this->Form->control('amount_of_rooms');
            echo $this->Form->control('daily_price');
            echo $this->Form->control('phone');
            echo $this->Form->control('email');
            echo $this->Form->control('web');
            echo $this->Form->control('country_id', ['options' => $countries]);
            echo $this->Form->control('travels._ids', ['options' => $travels]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
