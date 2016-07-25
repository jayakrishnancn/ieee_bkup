<script type="text/javascript">
document.body.style.background = "#ffffff";
document.getElementById('jwarp').style.background='#ffffff';
</script>
<div class="divider-gray shadow2" style='height:150px;background:#ededed;width:100%'>
&nbsp;<h2 style='padding: 5px;margin: 0px auto;font-size: 20px;line-height: 20px;width: 80%;color: #666;max-width: 950px;'>Contact Us</h2>
</div>
<div class="contacts shadow2" style='min-height:150px;position:relative;margin:-75px auto 50px auto;background:#ffffff;width:80%;'>
	
	<div class="con">
		<h1>SCT STUDENT BRANCH</h1>
		<p>Sree Chitra Thirunal College Of Engineering (Under Govt. Of Kerala) 
			<br/>&nbsp;&nbsp;(AICTE Approved, ISO 9001-2000 Certified. Affliated To University Of Kerala) Pappanamcode,
			<br/> India,Thiruvananthapuram, Kerala, 695018</p>
			
				<a style='text-decoration:none' target='_blank' href='https://www.google.co.in/maps/place/Sree+Chitra+Thirunal+College+of+Engineering/@8.4709187,76.9804072,17z/data=!4m2!3m1!1s0x3b05baee56e6b99b:0x4ce024c88eb0ddcb'>
					<img   style='width:30px;height:30px;vertical-align:middle;background:#9DABD4' src='<?php echo HTTPPATH.$config['image'];?>map-marker-radius (1).png'>
				</a>
				<div style=' margin:15px 5px;'class='call-icon'>&nbsp;</div>0471 249 0572
			
	</div>
		
	<div class="con">
		
		<?php 

if(isset($contacts)&&is_array($contacts))
foreach ($contacts as $key => $value) {


if(strtolower($contacts[$key]['pos'])=='branch counsellor'){
			$a=$contacts[$key];
}

if(strtolower($contacts[$key]['pos'])==strtolower('IEEE Chairman')){
			$b=$contacts[$key];
}

if(strtolower($contacts[$key]['pos'])==strtolower('Webmaster') ){
			$c=$contacts[$key];
}
}

echo "
<h1>".$a['pos']."</h1>
<p>".$a['name']."</p>
<div style=' margin:15px 5px;'class='call-icon'>&nbsp;</div>".$a['phno']."
	<div style=' margin:15px 'class='mail-icon'>&nbsp;</div>".$a['mail']."";
echo "
<h1>".$b['pos']."</h1>
<p>".$b['name']."</p>
<div style=' margin:15px 5px;'class='call-icon'>&nbsp;</div>".$b['phno']."
	<div style=' margin:15px 'class='mail-icon'>&nbsp;</div>".$b['mail']."";
echo "
<h1>".$c['pos']."</h1>
<p>".$c['name']."</p>
<div style=' margin:15px 5px;'class='call-icon'>&nbsp;</div>".$c['phno']."
	<div style=' margin:15px 'class='mail-icon'>&nbsp;</div>".$c['mail']."";

?> 	
	</div>
	<div class="con">
		
	</div>


</div>