<style type="text/css">.inp{min-width: 200px;padding:5px;margin:5px;max-width: 400px;}table{text-align: center;}
h2{font-weight:bold;font-size: 16px;line-height: 25px;text-transform: capitalize;margin:5px 20px;}</style>
<div style='width:80%;max-width:500px;margin:0 auto;background:#fff;border:1px solid #ccc;'>
	<table style="width:80%;max-width:500px;margin:5% auto;">
		<a style='padding:20px 10px' href='<?php echo HTTPPATH;?>admin'>back</a>
<h2>add member</h2>
<form action='<?php echo HTTPPATH;?>admin/adduser' enctype="multipart/form-data" method='post'>
	<input type='hidden' value='addexecom' name='addexecom'>
<table style="width:100%">
  <tr>
    <td>User Name </td>
    <td><input class='inp' name='name' maxlength="200"></td>  
    <input type='hidden' value='adduser' name='adduser'>
  </tr>  <tr>
    <td><button>Submit</button></td>
    <td> </td>  
  </tr> 
</table>

</form>

</div>