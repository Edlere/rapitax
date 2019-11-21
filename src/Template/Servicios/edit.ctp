<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Servicio $servicio
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $servicio->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $servicio->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Servicios'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Clientes'), ['controller' => 'Clientes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Cliente'), ['controller' => 'Clientes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Choferes'), ['controller' => 'Choferes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Chofere'), ['controller' => 'Choferes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Vehiculos'), ['controller' => 'Vehiculos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Vehiculo'), ['controller' => 'Vehiculos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Tiposervicios'), ['controller' => 'Tiposervicios', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Tiposervicio'), ['controller' => 'Tiposervicios', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="servicios form large-9 medium-8 columns content">
    <?= $this->Form->create($servicio) ?>
    <fieldset>
        <legend><?= __('Edit Servicio') ?></legend>
        <?php
            echo $this->Form->control('cliente_id', ['options' => $clientes]);
            echo $this->Form->control('chofere_id', ['options' => $choferes]);
            echo $this->Form->control('vehiculo_id', ['options' => $vehiculos]);
            echo $this->Form->control('tiposervicio_id', ['options' => $tiposervicios]);
            echo $this->Form->control('fecha');
            echo $this->Form->control('origen');
            echo $this->Form->control('destinoref');
            echo $this->Form->control('destinoreal');
            echo $this->Form->control('precio');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
