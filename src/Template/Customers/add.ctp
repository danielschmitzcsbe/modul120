<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Customers'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Travels'), ['controller' => 'Travels', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Travel'), ['controller' => 'Travels', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="customers form large-9 medium-8 columns content">
    <?= $this->Form->create($customer) ?>
    <fieldset>
        <legend><?= __('Add Customer') ?></legend>
        <?php
            echo $this->Form->control('salutation');
            echo $this->Form->control('firstname');
            echo $this->Form->control('lastname');
            echo $this->Form->control('name_addition');
            echo $this->Form->control('street');
            echo $this->Form->control('plz');
            echo $this->Form->control('location');
            echo $this->Form->control('phone');
            echo $this->Form->control('mobile');
            echo $this->Form->control('email');
            echo $this->Form->control('web');
            echo $this->Form->control('birthdate', ['empty' => true]);
            echo $this->Form->control('pass_nr');
            echo $this->Form->control('nationality');
            echo $this->Form->control('travels._ids', ['options' => $travels]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
