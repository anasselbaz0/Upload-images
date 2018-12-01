<!DOCTYPE html>
<html>
<head>
	<title>Image Drag & Drop Shuffle & Reorder Position</title>
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
</head>
<?php
include_once("db.php");
	$db = new database();
?>
<body>
<div style="margin-top:50px;">
<a href="javascript:void(0);" class="btn outlined mleft_no reorder_link" id="save">SHUFFLE & REORDER PHOTOS</a>
	<div class="gallery">
		<ul class="reorder_ul reorder-photos-list">
		<?php
			$rows = $db->getRows();
			foreach($rows as $row): ?>
			<li id="image_li_<?php echo $row['id']; ?>" class="ui-sortable-handle"><a href="javascript:void(0);" style="float:none;" class="image_link"><img src="images/<?php echo $row['image']; ?>" alt=""></a></li>
		<?php endforeach; ?>
		</ul>
	</div>
</div>
<div id="reorder-details" class="light_box" style="display:none;">DRAG PHOTOS TO SHUFFLE & REORDER THE POSITION & SAVE IF FINISH</div>
</body>
</html>