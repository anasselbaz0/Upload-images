<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Image $image
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Images'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="images form large-9 medium-8 columns content">
    <?= $this->Form->create($image, ['type'=>'file']) ?>
    <fieldset>
        <legend><?= __('Add Image') ?></legend>
        <h3>Drag & Drop Images...</h3>
        <p>Start by uploading images from your computer that you want to turn into a video.</p>
        <?php
            echo $this->Form->input('path', ['label' =>'Votre Image (au format jpg ou png)','type'=>'file', 'class' => 'form-control']);
        ?>
    </fieldset>
    <?php echo $this->Form->button(__('Upload File'), ['type'=>'submit', 'class' => 'form-controlbtn btn-default']); ?>
    <?= $this->Form->end() ?>
</div>


        
        <?php 
          // $this->Form->create(null, array('type'=>'file'));
          // echo $this->Form->input('path', ['label' =>'Votre Image (au format jpg ou png)','type'=>'file']);
          // echo $this->Form->button(__('Import')); 
          // echo $this->Form->end();
        ?>