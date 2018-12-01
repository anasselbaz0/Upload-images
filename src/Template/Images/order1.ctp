<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Image[]|\Cake\Collection\CollectionInterface $images
 */
?>
<link rel="stylesheet" type="text/css" href="css/style.css"/>
<script type="text/javascript" src="js/jquery-1.8.3.min.js"></script>
<script type="text/javascript" src="js/jquery-ui.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
		$('.reorder_link').on('click',function(){
			$("ul.reorder-photos-list").sortable({ tolerance: 'pointer' });
			$('#reorder-details').slideDown('slow');
			$('.reorder_link').html('save shuffled image');
			$('.reorder_link').attr("id","save");
			$('.image_link').attr("href","javascript:void(0);");
			$('.image_link').css("cursor","move");
			$("#save").click(function( e ){
				if( !$("#save i").length )
				{
					$(this).html('').prepend('<img src="images/loading.gif"/>');
					$("ul.reorder-photos-list").sortable('destroy');
					var h = [];
					$("ul.reorder-photos-list li").each(function() {  h.push($(this).attr('id').substr(9));  });
					$.ajax({
						type: "POST",
						url: "update.php",
						data: {ids: " " + h + ""},
						success: function(html) 
						{
							window.location.reload();
						}
					});	
					return false;
				}	
				e.preventDefault();		
			});
		});
	});
</script>


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
	    
	<div style="margin-top:50px;">
	<a href="javascript:void(0);" class="btn outlined mleft_no reorder_link" id="save">SHUFFLE & REORDER PHOTOS</a>
	<br>
		<div class="gallery">
			<ul class="reorder_ul reorder-photos-list">
			<?php
				foreach($images as $image): ?>
				<li id="image_li_<?php echo $image['id']; ?>" class="ui-sortable-handle">
					<a href="javascript:void(0);" style="float:none;" class="image_link">
						<img src="/img/<?php echo $image['path']; ?>" alt="" style="width: 100px;">
					</a>
				</li>
			<?php endforeach; ?>
			</ul>
		</div>
	</div>
	<div id="reorder-details" class="light_box" style="display:none;">DRAG PHOTOS TO SHUFFLE & REORDER THE POSITION & SAVE IF FINISH</div>

</div>



