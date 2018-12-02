<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Image[]|\Cake\Collection\CollectionInterface $images
 */
?>

<style type="text/css">
    .gallery{
        width: 90%;
        margin: 50px;
        border: solid 1px;
    }
    .gallery ul{
        margin:0;
        padding:0;
        list-style-type:none;
    }
    .gallery ul li{
        padding:10px;
        border: 2px solid #ccc;
        float:left; 
        margin:10px 5px;
    }
</style>

<nav class="large-1 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Image'), ['action' => 'add']) ?></li>
    </ul>
</nav>

<div class="images form large-11 medium-8 columns content">
    <?= $this->Form->create($image, ['type'=>'file']) ?>
    <fieldset>
        <legend><?= __('Add Image') ?></legend>
        <h3>Drag & Drop Images...</h3>
        <p>Start by uploading images from your computer that you want to turn into a video.</p>
        <div style="float: right;">
            <?php
                echo $this->Form->input('path', ['label' =>'Votre Image (au format jpg ou png)','type'=>'file', 'class' => 'form-control']);
            ?>
        </div>    
    </fieldset>
    <?php echo $this->Form->button(__('Upload File'), ['type'=>'submit', 'class' => 'button']); ?>
    <?= $this->Form->end() ?>
</div>

<div class="images index large-11 medium-8 columns content">
    <h3><?= __('Images') ?></h3>
    <div class="gallery">
        <ul>
            <?php 
            foreach ($images as $key => $value) { ?>
                <li id="image_li_<?php echo $value['id']; ?>" class="ui-sortable-handle">
                    <?php 
                        echo "<img src=\"/img/$value->path\" style=\"width: 180px; height: 100px;\">";
                    ?> 
                </li>         
            <?php } ?>
        </ul>
    </div>

    <div style="float: right;">
        <?php echo $this->Html->link(
            'RE-ORDER RESSOURCE',
            '/images/order',
            ['class' => 'button']
                ); 
        ?>
    </div>
    
<br><br><br><br><br>
</div>
