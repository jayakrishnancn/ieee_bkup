<?php 
if(isset($members)&&(is_array($members)))
{
echo "
<h1 style='display: block;width:90%;max-width: 900px;margin: 10px auto;color: #999;font-size: 17px;line-height: 25px;'>
<a href='".HTTPPATH."execom/' style='text-decoration:underline;color: #999'>
Members of exicom </a> ".$members[0]['year']."</h1>
<div id='member' style='width:90%;max-width:900px;' class='members'>
";
foreach ($members as $key => $value) 
	{
	?>
		<div class="member-details main-member-details  shadow1">
		<div class="img" style='background:url("<?php echo $members[$key]['image'];?>");'>&nbsp;</div>
		<div class="name"><?php echo $members[$key]['name'];?></div>
		<div class="position"><?php if(!empty($members[$key]['post'])&&(isset($members[$key]['post'])))echo $members[$key]['post'];?></div>
		<div class="number"><?php if(!empty($members[$key]['phno'])&&(isset($members[$key]['phno'])))echo $members[$key]['phno'];?></div>
		<div class="number"><?php if(!empty($members[$key]['mailid'])&&(isset($members[$key]['mailid'])))echo $members[$key]['mailid'];?></div>
	</div>
<?php 
}	

}
?>
</div><!-- members ends-->
