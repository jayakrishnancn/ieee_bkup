<?php if( (!defined("BASEPATH") )   )
    die("no direct script allowed  ");
/**
* 
*/
class chapters extends controller
{


  public function __construct()
  {
    parent::__construct();
  }
  
  public function view($value=0)
  { 
      $url=['html_start','nav','chapters', 'feedback','html_end'];
      $extcss=['chapters'];
      $data=['title'=>"IEEE SCTCE  | chapters",'sel'=>'chapters','extcss'=>$extcss,'config'=>$this->config];
      $this->_view($url,$data);
    
  }
  
}