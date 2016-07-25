<?php 
if(isset($years)&&(is_array($years)))
{
echo "
<h1 style='display: block;width:90%;max-width: 900px;margin: 10px auto;color: #999;font-size: 17px;line-height: 25px;'>Members of exicom ".$members[0]['year']."</h1>
<div id='member' style='width:90%;max-width:900px;' class='members'>
";
foreach ($years as $key => $value) 
	{
	?>
		<a href='<?php echo HTTPPATH;?>execom/year/<?php echo $years[$key]['year'];?> ' class='ripple' style='text-decoration:blink'>
		<div class="member-details main-member-details   " style='height:50px;min-height:0;padding:50px;line-height:50px;'>
			<div class="number"><?php echo $years[$key]['year'];?></div>
	</div>
		</a>
<?php 
}	

}
?>
</div><!-- members ends-->
