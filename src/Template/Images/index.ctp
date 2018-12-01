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
    <?= $this->Form->create($image, ['type'=>'file']) ?>
    <fieldset>
        <legend><?= __('Add Image') ?></legend>
        <h3>Drag & Drop Images...</h3>
        <p>Start by uploading images from your computer that you want to turn into a video.</p>
        <?php
            echo $this->Form->input('path', ['label' =>'Votre Image (au format jpg ou png)','type'=>'file', 'class' => 'form-control']);
        ?>
    </fieldset>
    <?php echo $this->Form->button(__('Upload File'), ['type'=>'submit', 'class' => 'button']); ?>
    <?= $this->Form->end() ?>
</div>
<div class="images index large-11 medium-8 columns content">
    <h3><?= __('Images') ?></h3>
    <table cellpadding="0" cellspacing="0">
        
        <?php
            $paths = array();
            $orders = array();
            foreach ($images as $key => $value) {
                $paths[] = '/img/'.$value->path;
                $orders[] = $value->ordre;
            }
            $nImages = 8; 
            $nl = (int) (sizeof($images)/$nImages)+1; // nombre de lignes

            for ($i=0; $i < $nl; $i++) { 
                echo '<tr>';
                    for ($j=0; $j < $nImages; $j++) {
                        echo '<td>';
                            $indice = (($nImages-1)*$i)+($i+$j);
                            // echo "indice = $indice<br>";
                            // echo "path = $paths[$indice]";
                            if (!empty($paths[$indice])) {
                                echo "<img src=\"$paths[$indice]\">";
                            } else {
                                echo '';
                            }
                        echo '</td>';
                    }
                echo '</tr>';
            }
        
        ?>

    </table>
<br>
    <div style="float: right;">
        <?php echo $this->Html->link(
            'RE-ORDER RESSOURCE',
            '/img/shuffle_reorder/index.php',
            ['class' => 'button']
                ); 
        ?>
    </div>
<br><br><br><br><br>
</div>
