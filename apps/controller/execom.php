<?php if( (!defined("BASEPATH") )   )
		die("no direct script allowed  ");
/**
* 
*/
class execom extends controller
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
      $url=['html_start','nav','years', 'feedback','html_end'];
      $extcss=['members'];
      $years=$this->actmodel->getallexecomyears();  
      $data=['title'=>"IEEE SCTCE  | All Activities",'sel'=>'activities','extcss'=>$extcss, 'years'=>$years,'config'=>$this->config];
      $this->_view($url,$data);
    
  }
  public function year($value=0)
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

 

  if(!($members=$this->actmodel->getmembers($value[0]))){
    $this->view();
    return;
  } 
     $url=['html_start','nav','members', 'feedback','html_end'];
      $extcss=['members'];

      $data=['title'=>"IEEE SCTCE  | Execom ".$members[0]['year'],'sel'=>'execom','extcss'=>$extcss, 'members'=>$members,'config'=>$this->config];
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
	 
	
}