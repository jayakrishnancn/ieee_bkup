<?php if( (!defined("BASEPATH") )   )
		die("no direct script allowed  ");
/**
* 
*/
class feedback extends controller
{


  
  public function __construct()
  {
    parent::__construct();
    include_once $this->config['model'].'login.php';
      log_message("info","login model included ");
      $this->actmodel=new loginModel;
  }
  
	public function send($value='')
	{
    if(!isset($_POST['fedbk']))
    {
      redir('../');
   }
   else
   { 
    if(empty($_POST['name']))
    {
      $name="Anonymous";
    }
    else
    {
      $name=$_POST['name'];
    }
   if($this->actmodel->insertFeedback($name,$_POST['fedbk']))
      redir('../?msg=feedback send');
    else 
      redir('../?msg=feedback error ! probably already send');
   }

  }
	 
	
}