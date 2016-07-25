<style type="text/css">.inp{min-width: 200px;padding:5px;margin:5px;max-width: 400px;}table{text-align: center;}
h2{font-weight:bold;font-size: 16px;line-height: 25px;text-transform: capitalize;margin:5px 20px;}</style>
<div style='width:80%;max-width:500px;margin:0 auto;background:#fff;border:1px solid #ccc;'>
	<table style="width:80%;max-width:500px;margin:5% auto;">
		<a style='padding:20px 10px' href='<?php echo HTTPPATH;?>admin'>back</a>
<h2>add activity</h2>
<form action='<?php echo HTTPPATH;?>admin/addactivity' enctype="multipart/form-data" method='post'>
	<input type='hidden' value='addactivity' name='addactivity'>
<table style="width:100%">
  <tr>
    <td>event heading</td>
    <td><input class='inp' name='event_heading' maxlength="100"></td>  
  </tr>
  <tr>
    <td>event</td>
    <td><textarea class='inp' name='event' style='height:170px;'></textarea></td>  
  </tr>
  <tr>
    <td>show_in_home_page</td>
    <td>
	<select name='show_in_home_page'>
		<option value="1">Yes</option>
		<option value="0">No</option> 
	</select>
</td>  
  </tr>
  <tr>
    <td>open</td>
    <td>	
    <select name='open'>
		<option value="1">Yes</option>
		<option value="0">No</option> 
	</select>
  </td>  
  </tr>
  <tr>
    <td>image link</td>
    <td><input class='inp' name='image1'>OR <input type="file" class='inp' name='image'></td>  
  </tr>
  <tr>
    <td>event_date</td>
    <td><input class='inp' name='event_date'></td>  
  </tr>
  <tr>
    <td>type</td>
    <td>	
    <select name='type'>
		<option>workshops</option> 
		<option>visits</option> 
		<option>wie</option> 
		<option>friday_talks</option> 
		<option>others</option> 
	</select>
  </td>  
  </tr> 
  <tr>
    <td>shortlink</td>
    <td><input class='inp' name='shortlink' maxlength='100'></td>  
  </tr> 
  <tr>
    <td>subdec</td>
    <td><input class='inp' name='subdec' maxlength='100'></td>  
  </tr> 
  <tr>
    <td>subcontent</td>
    <td><input class='inp' name='subcontent'></td>  
  </tr> 
  <tr>
    <td>sublink</td>
    <td><input class='inp' name='sublink' ></td>  
  </tr> 
  <tr>
    <td><button>Submit</button></td>
    <td> </td>  
  </tr> 
</table>

</form>

</div>