<?php 
require $config['view']."nav.php";

?>
<!-- banner content -->
<div class="banner" style="position:relative">
	&nbsp;
</div>
<!-- banner content ends -->
<!-- vis-mis content  -->
<div class="vis-mis" id='vis-mis'>
	<div class="vission shadow1">
		<img  src="<?php echo HTTPPATH.$config['image'];?>vision.png" alt="vission">
		<h1>Vision</h1>
		<p>
			IEEE Will Be Essential To The Global Technical Community And To Technical Professionals Everywhere, And Be Universally Recognized For The Contributions Of Technology And Of Technical Professionals In Improving Global Conditions.
		</p>
	</div>
	<div class="mission shadow1">
		<img src="<?php echo HTTPPATH.$config['image'];?>mission.png" alt="mission">
		<h1>Mission</h1>
		<p>
			IEEE's Core Purpose Is To Foster Technological Innovation And Excellence For The Benefit Of Humanity.
		</p>
	</div>
</div>

<!-- vis-mis content ends -->
<!-- activities -->
<div id="activities" class="activities">
	<div class="grp">
	<?php 
if(isset($news)&&is_array($news))
{
echo '		<div class="grp-container small shadow2">
			<h1>News</h1>';
foreach ($news as $key => $value) {

	?>

			<div class="news-blk">
				<a href="<?php echo HTTPPATH;?>news">
					<?php echo $news[$key]['news_heading'];?>
			    </a>
			</div>
<?php 
}
echo '
	<div class="more-details"><a class="more ripple "      data-ripple-color="#555555" href="'.HTTPPATH.'news/">mores details <span class="dots3">&nbsp;</span></a></div> 
	</div><!-- news ends -->';
}
?>
			

<?php 

$size=['small','medium','max'];
if(isset($activities)&&is_array($activities))
foreach ($activities as $key => $value) {

?>
		<div class="grp-container <?php echo $size[(($key+1)%3)];?> shadow2">
			<?php 
			if(isset($activities[$key]['image']) && strlen($activities[$key]['image'])>3 ) {?>
			<div class="fill" style='background-image:url("<?php echo $activities[$key]['image'];?>");'></div>
			<?php }
			else{
				echo "<div style='min-height:50px;'></div>";
			}?>
			<div class="activity-name shadow3"><?php echo $activities[$key]['event_heading'];?></div>
			<p>
				<?php 
				if(strlen($activities[$key]['event'])>300)
				echo 	substr($activities[$key]['event'],0,300)."...";
				else
					echo $activities[$key]['event'];
				?>
			</p>
	<div class="more-details">
<div class="share ripple" data-title='<?php echo $activities[$key]['event_heading'];?>' data='<?php echo $activities[$key]['id'];?>'></div>
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
<div id="members" class="members">

<?php 
if(isset($members)&&(is_array($members)))
{
foreach ($members as $key => $value) 
	{
	?>
		<div class="member-details shadow1">
		<div class="img" style='background:url("<?php echo $members[$key]['image'];?>");'>&nbsp;</div>
		<div class="name"><?php echo $members[$key]['name'];?></div>
		<div class="position"><?php echo $members[$key]['post'];?></div>
		<div class="number"><?php echo $members[$key]['phno'];?></div>
		<div class="number"><?php echo $members[$key]['mailid'];?></div>
	</div>
<?php 
}	

}
?>
</div><!-- members ends-->
