
<!-- activities -->
<div id="activities" class="activities" style="margin:10px auto;">
	<div class="grp">
			

<?php 

$size=['medium','small','max'];
if(isset($activities)&&is_array($activities))
foreach ($activities as $key => $value) {

?>
		<div class="grp-container <?php echo $size[(($key)%3)];?> shadow2">
			<?php 
			if(isset($activities[$key]['image']) && strlen($activities[$key]['image'])>3 ) {?>
			<div class="fill" style='background-image:url("<?php echo $activities[$key]['image'];?>evt.jpg");'></div>
			<?php }
			else{
				echo "<div style='min-height:50px;'></div>";
			}?>
			<div class="activity-name shadow3"><?php echo $activities[$key]['event_heading'];?></div>
			<p>
				<?php 
				$activities[$key]['event']=html_entity_decode($activities[$key]['event']);
				if(strlen($activities[$key]['event'])>300)
				echo 	substr($activities[$key]['event'],0,300)."...";
				else
					echo $activities[$key]['event'];
				?>
			</p>
	<div class="more-details">
<div class="share ripple" data-title='<?php echo html_entity_decode($activities[$key]['event_heading']);?>' data='<?php echo $activities[$key]['id'];?>'></div>
				<h2># <?php echo $activities[$key]['type'];?></h2><a class="more ripple "      data-ripple-color="#555555" href="<?php echo $activities[$key]['shortlink'];?>">more details <span class="dots3">&nbsp;</span></a>

			</div> 
		
		</div>

<?php }?>
		

 
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