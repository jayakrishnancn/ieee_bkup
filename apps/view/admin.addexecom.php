<style type="text/css">.inp{min-width: 200px;padding:5px;margin:5px;max-width: 400px;}table{text-align: center;}
h2{font-weight:bold;font-size: 16px;line-height: 25px;text-transform: capitalize;margin:5px 20px;}</style>
<div style='width:80%;max-width:500px;margin:0 auto;background:#fff;border:1px solid #ccc;'>
	<table style="width:80%;max-width:500px;margin:5% auto;">
		<a style='padding:20px 10px' href='<?php echo HTTPPATH;?>admin'>back</a>
<h2>add member</h2>
<form action='<?php echo HTTPPATH;?>admin/addexecom' enctype="multipart/form-data" method='post'>
	<input type='hidden' value='addexecom' name='addexecom'>
<table style="width:100%">
  <tr>
    <td>name</td>
    <td><input class='inp' name='name' maxlength="200"></td>  
  </tr> 
  <tr>
    <td>year</td>
    <td>
	<select name='year'><?php 
  for($i=date("Y");$i>2004;$i--)
		echo "<option>".$i."</option>";
  ?>
	</select>
</td>  
  </tr>
   
  <tr>
    <td>image link</td>
    <td><input type="file" class='inp' name='image'></td>  
  </tr>
  <tr>
    <td>post</td>
    <td><input class='inp' name='post'></td>  
  </tr>  
  <tr>
    <td>mailid</td>
    <td><input class='inp' name='mailid'></td>  
  </tr> 
  <tr>
    <td>fb</td>
    <td><input class='inp' name='fb'></td>  
  </tr> 
  <tr>
    <td>twitter</td>
    <td><input class='inp' name='twitter'></td>  
  </tr> 
  <tr>
    <td>phno</td>
    <td><input class='inp' name='phno'></td>  
  </tr>  
    <td><button>Submit</button></td>
    <td> </td>  
  </tr> 
</table>

</form>

</div>