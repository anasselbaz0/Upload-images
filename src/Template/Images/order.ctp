<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Order</title>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <style>
      #sortable { 
        list-style-type: none;  
        margin-left: 20%;
        margin-top: 2%; 
      }
      #sortable li {
        width: 300px;
        margin: 5px;
        padding: 5px 60px;
        font-size: 1.2em; 
      }
      .ui-state-highlight { 
        height: 110px; 
        line-height: 1.2em; 
      }
  </style>
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
  $( function() {
    $( "#sortable" ).sortable({
      placeholder: "ui-state-highlight"
    });
    $( "#sortable" ).disableSelection();
  } );
  </script>
</head>
<body>
 
    <nav class="large-1 medium-4 columns" id="actions-sidebar">
        <ul class="side-nav">
            <li class="heading"><?= __('Actions') ?></li>
            <li><?= $this->Html->link(__('New Image'), ['action' => 'add']) ?></li>
        </ul>
    </nav>

    <ul id="sortable">
        <?php 
        foreach ($images as $key => $value) { ?>
            <li style="min-height: 100px; " class="ui-state-default" id="image_li_<?php echo $value['id']; ?>">
                <?php echo "<img src=\"/img/$value->path\" style=\"width: 180px; height: 100px;\">" ?> 
            </li>         
        <?php } ?>
    </ul>

</body>
</html>