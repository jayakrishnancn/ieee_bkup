
<div class="footer">

<div class="footer-container">
	<h2>About SCTCE</h2>
	<p>The college is a realisation of a long felt need for an institution catering to a growing number of undergraduates opting for technical education. It seeks to promote education and research in the field of technology; to accumulate effective ideas and techniques likely to promote the socio-economic welfare of the people of Kerala and be able to provide proper guidance and support to young men and women who can make these ideas work. Campus recruitments are on the rise with a growing number of companies recruiting every year.</p>
</div>
<div class="footer-container" style="text-align:center">
	<h2>Get in touch</h2>
	<p>
		sctce@ieeesctsb.org.in<br/><br/>
		<a href='http://facebook.com/pages/IEEE-SCT-SB/185952358113136?ref=ts&fref=ts'><span style='display:inline-block' class='fb-icon'>&nbsp;&nbsp;&nbsp;</span></a>
		<a href='https://www.linkedin.com/company/ieee-sct-sb'><span style='display:inline-block' class='in-icon'>&nbsp;&nbsp;&nbsp;</span></a>
<a style="text-decoration:none" target="_blank" href="https://www.google.co.in/maps/place/Sree+Chitra+Thirunal+College+of+Engineering/@8.4709187,76.9804072,17z/data=!4m2!3m1!1s0x3b05baee56e6b99b:0x4ce024c88eb0ddcb">
					<img style="width:30px;height:30px;vertical-align:top;background:#9DABD4" src="<?php echo HTTPPATH;?>apps/image/map-marker-radius (1).png">
</a>
	</p>
</div>
<div class="footer-container">
	<h2>IEEE</h2>
	<p>IEEE is the world's largest professional association dedicated to advancing technological innovation and excellence for the benefit of humanity. Visit ieee.org</p>
</div>


</div><!--footer-->
<div id="totop" class="totop shadow2">
 <div class="totop-arrow  ripple" style='border-radius:50%' data-ripple-color="#FF5A58"></div> 
</div>



<div class="feedback "> </div>
<!--feedback-->

<div class="feedback-blackbox">
	<div class="fedbk">

		<div class="grn_fedbk_icn">&nbsp;</div>
		<h1>Feedback</h1>
		<div class="close-icon">X</div>
		<p>
 Hurry ! We welcome problem reports, feature ideas and general comments .Thanks in Advance.
		</p>
		<form action="./feedback/send" method="post">
		<input name="name"  style='width:95%;margin:10px 10px 0 10px;' placeholder="Name or E-mail id" class="inp-prim"><br/>
		<textarea name="fedbk"    class="fedbk-txtarea inp-prim"></textarea>
		<div class="fedbk-footer"><button class="bu bu-white">Submit</button></div>
		</form>
	</div>
</div>

<!--feedback ends-->
<?php 

if(isset($_GET['msg']) && (!empty($_GET['msg'])))
{


echo " <div class='msg' style='display:none'>".htmlentities($_GET['msg'])."</div>"; 


}

?>
 
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js"></script>
<script src='<?php echo HTTPPATH.$config['js'];?>ripple.js'></script>
<script type="text/javascript">
	/*scroll totop*/

$(document).on("scroll",function(){
	if($(this).scrollTop()>550)
	{
		$("#totop").fadeIn(600);
	}
	else {
		$("#totop").fadeOut(600);
	}
});
btm=70;
$(document).ready(function(){
$('.msg').each(function(){
	$(this).fadeIn();
	 $(this).animate({
	 	"bottom":btm+"px"
	 });
	btm+=50;
	}); 
$('.msg').delay(5000).fadeOut(1000);

$(".share-box .share-content").click(function(e) {
        e.stopPropagation();
});

$(".share-box").click(function(e) {
	$('.share-box .share-content').animate({"margin-top":"100%"},300); 
        $(this).delay(300).hide(0);
});


$(".feedback-blackbox .fedbk").click(function(e) {
        e.stopPropagation();
});
$(".feedback-blackbox ").click(function(e) {
	$('.feedback-blackbox .fedbk').animate({"margin-top":"100%"},300); 
        $(this).delay(300).hide(0);
});

$('.close-icon').click(function(){
	$('.feedback-blackbox').hide();
});

$(".feedback").click(function(){
	$('.feedback-blackbox').show();
	$('.feedback-blackbox .fedbk').css("margin-top","100%"); 
	$('.feedback-blackbox .fedbk').animate({"margin-top":"8%"},300); 
});

$(".share").click(function(){
	$('.share-box').delay(500).show(0);
 
	$('.share-box .share-content').css("margin-top","100%"); 
	$('.share-box .share-content').delay(600).animate({"margin-top":"8%"},300); 
	$('.share-content a').attr('data','<?php echo HTTPPATH;?>activities/contents/'+$(this).attr('data'));
	$('.share-content a').attr('data-title',$(this).attr('data-title'));

});

$("#totop").click(function(){
	$("html,body").animate({scrollTop:0},600);
return false;
});



$('#fb-share-it').click(function(){
var url=$(this).attr('data');
	setTimeout(function(){
		window.open('http://www.facebook.com/sharer/sharer.php?u=' + encodeURIComponent(url) + '&title=' + encodeURIComponent(url));
		return false;
	},700);
});

$('#tweet-it').click(function(){
var url=$(this).attr('data');
var title=$(this).attr('data-title');
	setTimeout(function(){
		window.open('https://twitter.com/intent/tweet?text=' + encodeURIComponent(title) + ':%20' + encodeURIComponent(url)); return false;
	},700);
});


$('#gp-share-it').click(function(){
var url=$(this).attr('data');
	setTimeout(function(){
		window.open('https://plus.google.com/share?url=' + encodeURIComponent(url));
		 return false;
	},700);
});

var feedbackshuffle=function(){
$('.feedback').animate({"bottom":"10px"},100);
$('.feedback').animate({"bottom":"0px"},100);
$('.feedback').animate({"bottom":"5px"},100);
}

setTimeout(function(){
	feedbackshuffle();	feedbackshuffle();	feedbackshuffle();	feedbackshuffle();	feedbackshuffle();
}, 800);

$('.main-news-blk').css({'max-height':'150px','overflow':'hidden','cursor':'pointer'});
$('.main-news-blk').click(function(){
	$(this).css('max-height','initial');

});




});
</script>