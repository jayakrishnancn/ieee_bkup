<?php if( (!defined("BASEPATH") )   )
		die("no direct script allowed  ");
/**
* 
*/
class news extends controller
{


  private $actmodel;
  public function __construct()
  {
    parent::__construct();
    include_once $this->config['model'].'publicmodel.php';
      log_message("info","public model included ");
      $this->actmodel=new publicmodel;
  }
  
  public function view($value=0)
  { 

    if(!isset($value[0])||(empty($value[0]))||(!is_array($value)))
      $value[0]=0;
    
    if($value[0]==true)
      $value[0]=1; 
      $url=['html_start','nav','news', 'feedback','html_end'];
      $extcss=['activities'];
      $news=$this->actmodel->getallnews($value[0]);  
      $data=['title'=>"IEEE SCTCE  | NEWS",'sel'=>'activities','extcss'=>$extcss,'nextoffset'=>($value[0]+8) ,'news'=>$news,'config'=>$this->config];
      $this->_view($url,$data);
    
  } 
	 
	
}