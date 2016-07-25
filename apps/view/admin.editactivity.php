<style type="text/css">.inp{min-width: 200px;padding:5px;margin:5px;max-width: 400px;}table{text-align: center;}
h2{font-weight:bold;font-size: 16px;line-height: 25px;text-transform: capitalize;margin:5px 20px;}</style>
<div style='width:80%;max-width:500px;margin:0 auto;background:#fff;border:1px solid #ccc;'>
	<table style="width:80%;max-width:500px;margin:5% auto;">
		<a style='padding:20px 10px' href='<?php echo HTTPPATH;?>admin'>back</a>
<h2>add activity</h2>
  
<table style="width:100%">
  <?php 
if(isset($info)&&is_array($info))
for($i=0;$i<sizeof($info);$i++){
  echo "<tr style='border-top:5px solid #ddd;'><td></td><td></td></tr>";
  foreach ($info[$i] as $key => $value) {
   
echo"  <tr>";
echo" 
    <td style='max-width:300px;text-align:right;padding:5px 15px ;'>".$key."</td>
    <td style='max-width:300px;text-align:left;padding:5px 15px ;'>".$value."</td>
 ";
echo "  </tr>";
      
       }
      echo "<tr>
      <td> </td> <td><a href='".HTTPPATH."admin/editactivity?id=".$info[$i]['id']."'>edit </a>&nbsp;&nbsp;&nbsp;&nbsp;
     <a href='".HTTPPATH."admin/deleteactivity?id=".$info[$i]['id']."'>delete</a></td>
      </tr>";
     }?>
</table>
 

</div>