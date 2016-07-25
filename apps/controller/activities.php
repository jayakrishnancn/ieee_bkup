<?php if( (!defined("BASEPATH") )   )
		die("no direct script allowed  ");
/**
* 
*/
class activities extends controller
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
      $url=['html_start','nav','activities', 'feedback','html_end'];
      $extcss=['activities'];
      $activities=$this->actmodel->getallact($value);  
      $data=['title'=>"IEEE SCTCE  | All Activities",'sel'=>'activities','extcss'=>$extcss, 'activities'=>$activities,'config'=>$this->config];
      $this->_view($url,$data);
    
  }
  public function content($value=0)
	{  
  if(!is_array($value))
   {
    $this->view();
    return;
  }   
  if(!isset($value[0]))
  {
    $this->view();
    return;
  }
$x=$this->actmodel->actexist($value[0]);  

  if($this->actmodel->actexist($value[0])===false){
    $this->view();
    return;
  } 
     $url=['html_start','nav','activity', 'feedback','html_end'];
      $extcss=['activities'];
      $activities=$this->actmodel->getact($value[0]);  
      $data=['title'=>"IEEE SCTCE  | ".$activities['event_heading'],'sel'=>'activities','extcss'=>$extcss, 'activities'=>$activities,'config'=>$this->config];
      $this->_view($url,$data);
 
  	
    }
  public function fridaytalks()
  {
       $url=['html_start','nav','activities', 'feedback','html_end'];
      $extcss=['activities'];
      $activities=$this->actmodel->getsome("where type='fridaytalks' or type='friday_talks'");  
      $data=['title'=>"IEEE SCTCE  | Friday Talks",'sel'=>'activities','extcss'=>$extcss, 'activities'=>$activities,'config'=>$this->config];
      $this->_view($url,$data);
 
  }
  public function wie()
  {
       $url=['html_start','nav','activities', 'feedback','html_end'];
      $extcss=['activities'];
      $activities=$this->actmodel->getsome("where type='wie' ");  
      $data=['title'=>"IEEE SCTCE  | WIE",'sel'=>'activities','extcss'=>$extcss, 'activities'=>$activities,'config'=>$this->config];
      $this->_view($url,$data);
 
  }
  public function workshops()
  {
       $url=['html_start','nav','activities', 'feedback','html_end'];
      $extcss=['activities'];
      $activities=$this->actmodel->getsome("where type='workshops' ");  
      $data=['title'=>"IEEE SCTCE  | Workshops",'sel'=>'activities','extcss'=>$extcss, 'activities'=>$activities,'config'=>$this->config];
      $this->_view($url,$data);
 
  }
/* for nomination */
  public function nomination($value=0)
  {   
     $url=['html_start','nav','nomination', 'feedback','html_end'];
      $extcss=['activities']; 
      $data=['title'=>"IEEE SCTCE  | Nomination Form ",'sel'=>'activities','extcss'=>$extcss, 'config'=>$this->config];
      $this->_view($url,$data);
 
    
    }
	 
	
}