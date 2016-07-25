<?php
function sel($value,$sel)
{
	if(strtolower($value)==strtolower($sel))
	echo " class='sel' ";
}
?> 
<!-- nav top-nav--> 
<div class="nav">
	<div class="center">
		<ul>
			<li <?= sel('home',$sel);?>><a href="<?php echo HTTPPATH;?>" >Home</a></li>
			<li <?= sel('tutorials',$sel);?>><a href="<?php echo HTTPPATH;?>tutorials" >Tutorials</a></li>
			<li <?= sel('download',$sel);?>><a href="<?php echo HTTPPATH;?>download" >Download</a></li>
		</ul>
		<ul>
			<li <?= sel('login',$sel);?>><a href="<?php echo HTTPPATH;?>login" >Login</a></li>
			<li <?= sel('reportproblem',$sel);?>><a href="<?php echo HTTPPATH;?>reportproblem" >Report an Error</a></li>
		</ul>
	</div>
</div>