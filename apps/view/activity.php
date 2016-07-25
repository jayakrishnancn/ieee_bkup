
<!-- activities -->
<div id="activities" style='margin:10px auto;position:relative' class="activities">
	<div class="grp" style='position:relative'>
			
<a href='<?php echo HTTPPATH;?>activities' class="back-btn shadow2 ripple"  data-ripple-color="#555555"></a>

 
		<div class="grp-container  max shadow2" style='max-height:initial'>
			<?php 
			if(isset($activities['image']) && strlen($activities['image'])>3 ) {?>
			<div class="fill" style='height:400px;background:url("<?php echo $activities['image'];?>evt.jpg")center center no-repeat;background-size:cover'></div>
			<?php }
			else{
				echo "<div style='min-height:50px;'></div>";
			}?>
			<div class="activity-name shadow3"><?php echo $activities['event_heading'];?></div>
			<p style='white-space: pre-wrap;'>
				<?php  
					echo html_entity_decode($activities['event']);
				?>
			</p>
	<div class="more-details white-details">
<?php 
			if(isset($activities['subdec']) && strlen($activities['subdec'])>3 ) {?>

		<a  href='<?php echo empty($activities['sublink'])? "#":$activities['sublink'];?>' 
		 class="activity-name shadow3 ripple"><?php echo $activities['subdec'];?></a>

		 <?php }?>
<div class="share ripple" data-title='<?php echo $activities['event_heading'];?>' data='<?php echo $activities['id'];?>'></div>
			
<?php 
			if(isset($activities['subcontent']) && strlen($activities['subcontent'])>3 ) {?>
		<h2><?php echo html_entity_decode($activities['subcontent']);?></h2><?php }
		else{echo "<h2># ".$activities['type']."</h2>";}
			?>
		 
			</div> 
		
		</div>

 
		

 
	</div>
</div>
<!-- activities ends-->
<!--share content -->
<div class="share-box">
	<div class="share-content  shadow2">
		<h1>Share on</h1>
		<a href="#" data=''	data-title='' class='ripple' id="fb-share-it" target="_blank" title="Share on Facebook" >Facebook</a>
		<a href="#" data='' data-title='' class='ripple' id="tweet-it" target="_blank" title="Tweet" >Twitter</a>
		<a href="#" data='' data-title='' class='ripple' id="gp-share-it" target="_blank" title="Share on Google+" >Google +</a>
	</div>
</div>
<!--share content ends-->