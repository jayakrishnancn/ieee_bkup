
<!-- activities -->
<div id="activities" class="activities" style='margin:10px auto;'>
	<div class="grp" style='width:100%;margin:0 auto;max-width:900px;'>
					
		<?php 
		if(isset($news)&&is_array($news))
		{
		echo '		<div class="grp-container small shadow2" style="max-height:initial;width:100%;max-width:900px;">
					<h1>News</h1>';
		foreach ($news as $key => $value) {

			?>

					<div class="news-blk main-news-blk " style="max-height:initial;">
						 	<?php echo $news[$key]['news_heading'];?> <p class='ripple' style='white-space:pre-wrap'><?php echo $news[$key]['news'];?></p>
					</div>
		<?php 
		}
		if(!isset($nextoffset))
		{
			$nextoffset=0;
		}
		echo '
				<div class="more-details">
					<a class="more ripple "      data-ripple-color="#555555" href="'.HTTPPATH.'news/view/'.$nextoffset.'">next >
					</a>
				</div> 
			</div><!-- news ends -->';
		}
		?>
		</div> <!--grp end-->
</div><!--activities end-->