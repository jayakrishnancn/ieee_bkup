<?php

if( (!defined("BASEPATH") )   )
		die("no direct script allowed  ");
/**
* 
*/
log_message("info"," loginModel.php included");

class loginModel 
{
	private $model;
	private $db;
	function __construct()
	{  
			global $model;
			global $config;
			$this->model=$model;
			$this->config=$config;
			$this->db=new db($this->model); 
				
		log_message("info" ,"".$this->config['db']['prefix']."login model __construct invoked");
	} 
	public function checkuser($uname='',$pass='')
	{ 
			$re=$this->db->Query("Select * from ".$this->config['db']['prefix']."login where uname='".$uname."' and pass='".$pass."'");
			return $re;
		
	}
	public function findsalt($uname='')
	{
		if(empty($uname))
			return 'f4ak2e0sa5l6t'; 
		$re=$this->db->Query("select salt from ".$this->config['db']['prefix']."login where uname='".$uname."' ");
		$num=mysqli_num_rows($re);
		
		if($num==1)
		{
			$r=mysqli_fetch_assoc($re);
				log_message("info","loged".__FILE__.__LINE__);  
				return $r['salt'];
		} 	
		return "f4ak2e0sa5l6t";
		
	}

	public function isloged()
	{
		 
		if(isset($_SESSION['log'])&&(isset($_SESSION['ml-time']))    )
		{
			
		if( ($_SESSION['ml-time']+$this->config['session_max_time'])>time() )
			{
				$re=$this->db->Query("select isadmin from ".$this->config['db']['prefix']."login where uname='".$_SESSION['uname']."' ");
				$num=mysqli_num_rows($re);
				
				if($num==1)
				{
						log_message("info","loged".__FILE__.__LINE__);
						return true;
				}
			}			 

		}
		log_message("info","not loged".__FILE__.__LINE__);
		return false;

	}
	public function isadmin()
	{
		if(!isset($_SESSION['uname']) || (empty($_SESSION['uname'])))
			return false;
		$re=$this->db->Query("select isadmin from ".$this->config['db']['prefix']."login where uname='".$_SESSION['uname']."' "); 
		$r=mysqli_fetch_assoc($re);

		if($r['isadmin']==1)
		{
			return true;
		}

		return false;			
	}
	public function userexist($u='')
	{
		$re=$this->db->Query("select isadmin from ".$this->config['db']['prefix']."login where uname='".$u."' "); 
		$r=mysqli_num_rows($re);
		if($r==1)
		{
			return true;
		}
	
		return false;			
	}

	public function insertUser($uname,$pass,$salt='m0DAEc1OZr')
	{
		if(isset($uname) && isset($pass) && (!empty($uname)) &&  (!empty($pass)) )
		{
			
			if($this->db->Query("INSERT INTO ".$this->config['db']['prefix']."login (uname,pass,isadmin,salt) values('".$uname."','".$pass."',1,'".$salt."')"))
				return true;
			else
			{
				log_message("error","Query error");
			}
		}
		else
		{
			log_message("error","uname or pass empty");
		}


		return false;

	}
	public function allusers()
	{
		if(isset($_SESSION['log']))
		{
			log_message("info","allusers model ");
			 $r=$this->db->Query("select uname from ".$this->config['db']['prefix']."login");
			 $a=array();
			 while($re=mysqli_fetch_assoc($r))
			 {
				array_push($a,$re['uname']);
			 }
			 return $a;

		}
		return false;
	}
	public function rowins($a,$b)
	{
		return $this->db->rowinsert($a,$b);
	}
	
public function viewallactivity($table='activities')
	 {


		$re=$this->db->Query("select * from ".$this->config['db']['prefix'].$table."  order by id desc   ");
			$i=0;
		$a=false;

		while ($r=mysqli_fetch_assoc($re)) {
		
			$a[$i]=$r; 
			$i++;
		} 
		return $a;
	 } 

	public function deleteallact($value=NULL,$table='activities')
	{
		
		if($value!=NULL)
		{

			if($this->db->Query("delete from ".$table." where id=".$value." "))
				return true;

		}
		return false;
	}
	public function findid($key,$value,$table='activities')
	{
		if($re=$this->db->Query("Select id from ".$table." where ".$key."=".$value." "))
			{
				$r=mysqli_fetch_assoc($re);
				return $r['id'];
			}

		return false;
	}
	public function viewallusers()	
	{
		if(!$re=$this->db->Query("select uname,isadmin from ".$this->config['db']['prefix']."login  order by uname   "))
			return false;
			$i=0;
		$a=false;

		while ($r=mysqli_fetch_assoc($re)) {
		
			$a[$i]=$r; 
			$i++;
		} 
		return $a;
	}
	public function insertFeedback($name,$feed)	
	{ 
$ip = $_SERVER['REMOTE_ADDR']?:($_SERVER['HTTP_X_FORWARDED_FOR']?:$_SERVER['HTTP_CLIENT_IP']);

		if(isset($_SESSION['sendfeedtime']))
		{
			if(time()<$_SESSION['sendfeedtime']+5000)
				return false;
			else
				$_SESSION['sendfeedtime']=time();
		}
		if($this->db->Query("INSERT INTO ".$this->config['db']['prefix']."feedback (name,feedback,ip) values('".$name."','".$feed."','".$ip."')"))
				{
					$_SESSION['sendfeedtime']=time();
					return true;
				}
			else
			{
				log_message("error","Query error");
				return false;
			}
	}
}


