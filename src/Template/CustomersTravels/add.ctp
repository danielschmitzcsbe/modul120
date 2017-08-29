<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Customers Travels'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Customers'), ['controller' => 'Customers', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Customer'), ['controller' => 'Customers', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Travels'), ['controller' => 'Travels', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Travel'), ['controller' => 'Travels', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="customersTravels form large-9 medium-8 columns content">
    <?= $this->Form->create($customersTravel) ?>
    <fieldset>
        <legend><?= __('Add Customers Travel') ?></legend>
        <?php
            echo $this->Form->control('customer_id', ['options' => $customers]);
            echo $this->Form->control('travel_id', ['options' => $travels]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
