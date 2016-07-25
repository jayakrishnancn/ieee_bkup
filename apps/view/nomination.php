
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
			<div class="activity-name shadow3">Nomination Form</div>
			<p style='white-space: pre-wrap;height:1150px;'>
				
				 <iframe src="https://docs.google.com/forms/d/1GYGGm-izDS-h6Ptj6e4wOCanbbuNZYyxCHijJHd_RUE/viewform?embedded=true" style="width:100%;height:100%;" frameborder="0" marginheight="0" marginwidth="0">Loading...</iframe>
			</p>
	<div class="more-details white-details">
 
			</div> 
		
		</div>

 
		

 
	</div>
</div>
<!-- activities ends--> 