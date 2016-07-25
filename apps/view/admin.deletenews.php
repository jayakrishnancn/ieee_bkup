<style type="text/css">.inp{min-width: 200px;padding:5px;margin:5px;max-width: 400px;}table{text-align: center;}
h2{font-weight:bold;font-size: 16px;line-height: 25px;text-transform: capitalize;margin:5px 20px;}</style>
<div style='width:80%;max-width:500px;margin:5% auto;background:#fff;border:1px solid #ccc;text-align:center'>
  delete NEWS?<br/>
  <a href="<?php echo HTTPPATH;?>admin/">cancel</a>
  <form style='display:inline-block' action="<?php echo HTTPPATH;?>admin/deletenews?id=<?php echo $_GET['id'];?>" method="post">
    <input type="hidden" value="<?php echo $_GET['id'];?>" name="id">
    <input type="hidden" value="yes" name="confirm">
    <button>Confirm</button>
  </form>
</div>