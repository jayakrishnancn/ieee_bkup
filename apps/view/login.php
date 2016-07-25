<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?php echo $title;?></title>
</head>
<link rel="stylesheet" href="<?php echo HTTPPATH.$config['vendor'];?>css/normalize.css">  
<link rel="stylesheet" href="<?php echo HTTPPATH.$config['css'];?>default/buttons.css">
<style type="text/css"> 
	#ml-main{
		background: #f46d57;
		text-align: center;
		padding: 0;
	}
	#ml-main img{
		margin: 150px 0;
	}
	#main .center{
		margin: 0 auto;
		width: 80%;
		min-height: 500px;
	}
	#ml-msg{
		background-color:#fff1bd;
		font-size: 15px;
		text-align: left;
		padding: 5px 15px;
		border: 1px solid #e37600;
		margin: 15px 0;
		width: 92%;
		color: #666;
		display: none;
	}
	#main{
		background-color: #fff;
		width: 400px;
		margin: 3% auto;
		text-align: left;
		padding:10px  30px  50px 30px;
		border-radius: 5px;
		border: 1px solid #e5e5e5;
	}
	#main h1{
	    line-height: 30px;
	    font-size: 25px;
	    color: #F46D57;
	}

</style>
<script type="text/javascript">
	function  loginchk() {
		var uname=(document.getElementById('uname'));
		var pass=(document.getElementById('pass')); 
		var msg="";
		var log=0;
		var ret=true;
		uname.className=pass.className="inp inp-blue";
		if(uname.value.length<4)
		{	
			uname.className="inp inp-red-alt";
			msg+=" Invalid Username <br/>";
			ret=false;
			log=uname;
		}
		if( pass.value.length<6)  
		{

			pass.className="inp inp-red-alt"; 
			msg+="Password length mustbe at least 6 <br/> ";
			ret=false;
			if(log==0)log=pass;
	
		} 
		if(log!=0)
		{
			log.focus();
			document.getElementById('ml-msg').innerHTML=msg;
			document.getElementById('ml-msg').style.display="block";
		}
		return ret;
	}
</script>
<body> 
<div id="main" style="width:300px;margin:3% auto;text-align: left;">
<h1>Log In</h1>
<div id='ml-msg' <?php 

if(isset($_GET['msg'])&&(!empty($_GET['msg'])))
	$msg=$_GET['msg'];
	if(isset($msg))
	echo " style='display:block' > {$msg}";
	else
		echo ">";
?>

</div>

	<form action="<?php echo BASEPATH ;?>?" onsubmit="return loginchk();" method="post">
		<input id="uname" type="text" placeholder='user name' name="uname" class="inp inp-blue" autocomplete="off"  autofocus><br/><br/>
		<input id="pass" type="password" placeholder='password' name="pass" class="inp inp-blue" ><br/><br/>
		<input type="hidden" name="redir" value="<?php 
		if( isset($_GET['redir']) && (!empty($_GET['redir'])) )echo $_GET['redir'];?>" >
		<div style="width:100%;margin:10px auto;text-align:left">
			<a class="bu bu-white" style="float:right" href="signup">Create an account</a>
			<button class="bu bu-blue">Log in</button>
		</div>
	</form>
</div>
</body>
</html>