<!DOCTYPE html>
<html lang="en">
<head>	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?php echo $title;?></title>
	<link rel="stylesheet" href="<?php echo HTTPPATH.$config['vendor'];?>css/normalize.css">
	<link rel="stylesheet" href="<?php echo HTTPPATH.$config['css'];?>buttons.css"> 
	<link rel="stylesheet" href="<?php echo HTTPPATH.$config['css'];?>common.css">
	<meta name="googlebot" content="noindex">
	<meta name="robots" content="noindex">
	<?php 

		if(isset($extcss))
		{	
			foreach ($extcss as $key => $value) {
				# code...
			echo '<link rel="stylesheet" href="'.HTTPPATH.$config['css'].$value.'.css">
			';
			}
		}
	?>
</head>
<body>
<div id="jwarp" style='padding:10px 0;'>
	<a href='<?php echo HTTPPATH;?>admin/logout' style='color:red;padding:5px;text-decoration:none;background:white;position:fixed;top: 20px;right: -2px;border:1px solid #ccc;text-align:center;display:inline-block;margin:0 auto;width:80px;'>logout</a>
