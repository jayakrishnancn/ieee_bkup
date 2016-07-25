<style type="text/css">.inp{min-width: 200px;padding:5px;margin:5px;max-width: 400px;}table{text-align: center;}
h2{font-weight:bold;font-size: 16px;line-height: 25px;text-transform: capitalize;margin:5px 20px;}</style>
<div style='width:80%;max-width:500px;margin:0 auto;background:#fff;border:1px solid #ccc;'>
	<table style="width:80%;max-width:500px;margin:5% auto;">
		<a style='padding:20px 10px' href='<?php echo HTTPPATH;?>admin'>back</a>
<h2>add News</h2>
<form action='<?php echo HTTPPATH;?>admin/addnews' method='post'>
	<input type='hidden' value='addnews' name='addnews'>
<table style="width:100%">
  <tr>
    <td> news_heading</td>
    <td><input class='inp' name='news_heading' maxlength="100"></td>  
  </tr>
  <tr>
    <td>news</td>
    <td><textarea class='inp' name='news' style='height:170px;'></textarea></td>  
  </tr> 
  <tr>
    <td><button>Submit</button></td>
    <td> </td>  
  </tr> 
</table>

</form>

</div>