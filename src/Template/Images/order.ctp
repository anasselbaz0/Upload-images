<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Image[]|\Cake\Collection\CollectionInterface $images
 */
?>

<nav class="large-1 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Image'), ['action' => 'add']) ?></li>
    </ul>
</nav>

<div class="images form large-11 medium-8 columns content">
    <legend><?= __('Re-Order your Ressources') ?></legend>
    <h3>Orderring</h3>
    <p>Set which one you woul like to start with in your ressources that you want to turn into a video.</p>
    <table style="margin-left: 15%" class="panel images form large-8 medium-8 columns content">
        <thead>
            <td>Ressource</td>
            <td>Order</td>
            <td>New Order</td>
            <td></td>
        </thead>
        <tbody>
            <?php 
            foreach ($images as $key => $value) { ?>
                <tr>
                    <?php $this->Form->create(null, ['url'=>['action'=>'edit']]) ?>
                        <td> <?php echo "<img src=\"/img/$value->path\" style=\"width: 100px;\">" ?> </td>
                        <td> <?php echo $value->ordre ?> </td>
                        <td> <?php echo $this->Form->input('New order') ?> </td>
                        <td> <?php echo $this->Form->button(__('Change Order'), ['type'=>'submit', 'class' => 'button']); ?> </td>
                    </form>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>