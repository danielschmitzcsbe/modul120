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
                ['action' => 'delete', $customer->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $customer->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Customer'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Customers Travels'), ['controller' => 'CustomersTravels', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Customers Travel'), ['controller' => 'CustomersTravels', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="customer form large-9 medium-8 columns content">
    <?= $this->Form->create($customer) ?>
    <fieldset>
        <legend><?= __('Edit Customer') ?></legend>
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
            echo $this->Form->control('birthdate');
            echo $this->Form->control('pass_nr');
            echo $this->Form->control('nationality');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
