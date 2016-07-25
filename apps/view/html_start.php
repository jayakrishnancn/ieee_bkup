<!DOCTYPE html>
<html lang="en">
<head>
<meta property="og:type" content="website" />
<meta property="og:title" content="IEEE SCTCE" />
<meta property="og:description" content="IEEE Students Branch, SREE CHITRA THIRUNAL COLLEGE OF ENGINEERING" />
<meta property="og:url" content="http://ieeesctsb.org.in/index.php" />
<meta property="og:image" content="http://ieeesctsb.org.in/apps/images/wide-pic.jpg" /> 
<meta property="og:locale" content="en_US" />
 <meta name = "keywords" content = "IEEE Students Branch, SREE CHITRA THIRUNAL COLLEGE OF ENGINEERING,IEEE SCTSB,">
 <meta name="title" content="IEEE SB SCT | IEEE SCTCE on ieeesctsb.org.in" />
 <meta name="description" content="IEEE Students Branch, SREE CHITRA THIRUNAL COLLEGE OF ENGINEERING,IEEE SCTSB,SCT STUDENT BRANCH, SBSCT , SCTCE , IEEE, SB ACTIVITY, HOME IEEESCTSB" />
	<meta charset="UTF-8"><link rel="shortcut icon" sizes="32x32" href="favicon.ico" >
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?php echo $title;?></title>
	<link rel="stylesheet" href="<?php echo HTTPPATH.$config['vendor'];?>css/normalize.css">
	<link rel="stylesheet" href="<?php echo HTTPPATH.$config['css'];?>buttons.css"> 
	<link rel="stylesheet" href="<?php echo HTTPPATH.$config['css'];?>common.css">
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
<div id="jwarp">
