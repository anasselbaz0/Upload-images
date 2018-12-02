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

<script type="text/javascript" src="js/jquery-1.8.3.min.js"></script>
<script type="text/javascript" src="js/jquery-ui.js"></script>
<script type="text/javascript">
    var el = document.getElementById('items');
    var sortable = Sortable.create(el);
</script>


<nav class="large-1 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Image'), ['action' => 'add']) ?></li>
    </ul>
</nav>

<div class="images form large-11 medium-8 columns content">
    <legend><?= __('REORDER YOUR RESSOURCES') ?></legend>
    <h3>ORDERRING</h3>
    <p>Set which one you woul like to start with in your ressources that you want to turn into a video.</p>
    <center><button class="btn reorder_link" id="save">SHUFFLE & REORDER PHOTOS</button></center>
    <div class="gallery">
        <ul>
            <?php 
            foreach ($images as $key => $value) { ?>
                <li id="image_li_<?php echo $value['id']; ?>" class="ui-sortable-handle">
                    <?php echo "<img src=\"/img/$value->path\" style=\"width: 180px; height: 100px;\">" ?> 
                </li>         
            <?php } ?>
        </ul>
    </div>
    <div id="reorder-details" class="light_box" style="display:none;">DRAG PHOTOS TO SHUFFLE & REORDER THE POSITION & SAVE IF FINISH</div>
</div>