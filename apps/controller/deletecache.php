<?php if( (!defined("BASEPATH") )   )
		die("no direct script allowed  ");
/**
* 
*/
class deletecache extends controller
{

 
  public function __construct()
  {
    parent::__construct(); 
  }
  
	public function view($value='')
	{
		if($handle=opendir($this->config['cache']))
		{

				while (false!==($file=readdir($handle))) 
				{
					if($file!='.' and $file!='..')
					{
						echo $file.' deleted.<br/>';
						unlink($this->config['cache']."/".$file);
					}
				}
						redir(HTTPPATH."?msg=cahce deleted",5," deleted all Cache ..");
		}
		redir(HTTPPATH,5,"cant delete Cache ..");
 	}
	 
	
}