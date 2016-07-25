<?php if( (!defined("BASEPATH") )   )
    die("no direct script allowed  ");
/**
* 
*/
class ieee extends controller
{


  public function __construct()
  {
    parent::__construct();
  }
  
  public function view($value=0)
  { 
      $url=['html_start','nav','ieee', 'feedback','html_end'];
      $extcss=['chapters'];
      $data=['title'=>"IEEE SCTCE  | ieee",'sel'=>'chapters','extcss'=>$extcss,'config'=>$this->config];
      $this->_view($url,$data);
    
  }
  public function sctsb($value=0)
  {
      $url=['html_start','nav','sctsb', 'feedback','html_end'];
      $extcss=['chapters'];
      $data=['title'=>"IEEE SCTCE  | SCT SB",'sel'=>'ieee sb sct','extcss'=>$extcss,'config'=>$this->config];
      $this->_view($url,$data);

  }
  
}