<?php $sel=strtolower($sel);?>	<div class="nav">
		<div class="left">
			<img src="<?php echo HTTPPATH.$config['image']."sctsb_logo.png";?>" alt="sbicon">
		</div>
		<div class="right">
			<li><a  href="<?php echo HTTPPATH;?>"  <?php 
			if($sel=='home'){
				echo ' class="sel" ';
			}
			?>' >Home</a></li>
			<li>
				<a  href="#" <?php 
			if(in_array($sel,['allactivities','activities','fridaytalks','friday_talks','wie','workshops','news'])) {
				echo ' class="sel" ';
			}
			?> >Activities</a>
				<ul class="shadow1">
					<li>
					<div class="arrow-up"></div>
						<a class='ripple' href="<?php echo HTTPPATH;?>activities">all Activities</a></li> 
					<li><a class='ripple' href="<?php echo HTTPPATH;?>activities/fridaytalks">friday talks</a></li> 
					<li><a class='ripple' href="<?php echo HTTPPATH;?>activities/wie">Wie</a></li> 
					<li><a class='ripple' href="<?php echo HTTPPATH;?>activities/workshops">Workshops</a></li> 
					<li><a class='ripple' href="<?php echo HTTPPATH;?>news">Latest news</a></li> 
				</ul><!-- Activities ul end -->
			</li>
			<li>
				<a  href="#" <?php 
			if(in_array($sel,['wie sct','ieee sight','chapters'])) {
				echo ' class="sel" ';
			}
			?> >Chapters</a> 
				<ul class="shadow1">
					<li>
					<div class="arrow-up"></div>
						<a class='ripple' href="<?php echo HTTPPATH;?>chapters#wie">WiE SCT</a></li>
					<li><a class='ripple' href="<?php echo HTTPPATH;?>chapters#ieeesight">IEEE Sight</a></li> 
				</ul><!-- Chapters ul end -->
			</li>
			<li>
				<a  href="#" <?php 
			if(in_array($sel,['IEEE','about ieee'])) {
				echo ' class="sel" ';
			}
			?> >IEEE</a>
			<ul class="shadow1">
					<li>
						<div class="arrow-up"></div>
						<a class='ripple' href="<?php echo HTTPPATH;?>ieee#AboutIEEE">About IEEE</a>
					</li>
					<li><a class='ripple' href="<?php echo HTTPPATH;?>ieee#indiacouncil">IEEE INDIA COUNCIL</a></li> 
					<li><a class='ripple' href="<?php echo HTTPPATH;?>ieee#keralasection">IEEE KERALA SECTION</a></li> 
					<li><a class='ripple' href="<?php echo HTTPPATH;?>ieee#benefits">Membership Benefits</a></li> 
					<li><a class='ripple' href="<?php echo HTTPPATH;?>ieee#whyjoin">Why Join IEEE?</a></li> 
					<li><a class='ripple' href="<?php echo HTTPPATH;?>ieee#reg10">REGION 10</a></li> 
					<li><a class='ripple' href="<?php echo HTTPPATH;?>ieee#joinnow">Join IEEE</a></li> 
				</ul><!-- Activities ul end -->
			</li>
			<li>
				<a  href="#" <?php 
			if(in_array($sel,['ieee sb sct','ieee sb execom','about sctce'])) {
				echo ' class="sel" ';
			}
			?> >IEEE SB SCT</a>
				<ul class="shadow1">
					<li>
						<div class="arrow-up"></div>
						<a class='ripple' href="<?php echo HTTPPATH;?>execom">IEEE SB EXECOM</a>
					</li>
					<li><a class='ripple' href="<?php echo HTTPPATH;?>ieee/sctsb">About SCTCE</a></li>   
					<li><a class='ripple' href="#">Alumni</a></li>   
				</ul><!-- Activities ul end -->
			
			</li>
			<li>
				<a  href="#"  <?php 
			if(in_array($sel,['more','magazines','contact us'])) {
				echo ' class="sel" ';
			}
			?>>More</a>
				<ul class="shadow1">
					<li>
					<div class="arrow-up"></div>
						<a class='ripple' href="<?php echo HTTPPATH;?>more">magazines</a></li>
					<li><a class='ripple' href="<?php echo HTTPPATH;?>more/contactus">Contact Us</a></li>
					<li><a class='ripple' href="<?php echo HTTPPATH;?>more/faq">F.A.Q</a></li>
					<li><a class='ripple' href="<?php echo HTTPPATH;?>more/webteam">Web Team</a></li>
				</ul><!-- more ul end -->
			</li>
		</div><!-- right end -->
	</div><!-- nav end -->
