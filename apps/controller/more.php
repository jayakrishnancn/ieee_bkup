<?php if( (!defined("BASEPATH") )   )
    die("no direct script allowed  ");
/**
* 
*/
class more extends controller
{


  public function __construct()
  {
    parent::__construct();
    $this->actmodel=NULL;
  }
  
  public function view($value=0)
  { 
      $url=['html_start','nav','magazine', 'feedback','html_end'];
      $extcss=['chapters'];
      $data=['title'=>"IEEE SCTCE  | Magazine",'sel'=>'more','extcss'=>$extcss,'config'=>$this->config];
      $this->_view($url,$data);
    
  }
  public function magazine($value='')
  {
    $this->view();
  }
  
  public function faq($value='')
  {
      $url=['html_start','nav','faq', 'feedback','html_end'];
      $extcss=['chapters'];
      $data=['title'=>"IEEE SCTCE  | F.A.Q",'sel'=>'more','extcss'=>$extcss,'config'=>$this->config];
      $this->_view($url,$data);

  } 
  public function webteam($value='')
  {
      $url=['html_start','nav','web', 'feedback','html_end'];
      $extcss=['members'];
      $data=['title'=>"IEEE SCTCE  | webteam",'sel'=>'more','extcss'=>$extcss,'config'=>$this->config];
      $this->_view($url,$data);

  }
  public function contactus($value='')
  {
 
    include_once $this->config['model'].'publicmodel.php';
    log_message("info","public model included ");

    $this->actmodel=new publicmodel;

      $url=['html_start','nav','contactus', 'feedback','html_end'];
      $extcss=['members'];
      $contacts=$this->actmodel->getcontacts();  
     
      $data=['title'=>"IEEE SCTCE  | Contact us",'sel'=>'more','extcss'=>$extcss,'contacts'=>$contacts,'config'=>$this->config];
      $this->_view($url,$data);

  }

}