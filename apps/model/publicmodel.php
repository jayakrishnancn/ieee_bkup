<?php

if( (!defined("BASEPATH") )   )
		die("no direct script allowed  ");
/**
* 
*/
log_message("info"," publicmodel.php included");

class publicmodel 
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

	 public function gethomeact($condition=NULL)
	 {

		 

		$re=$this->db->Query("select event_heading,event,image,type,shortlink,id from ".$this->config['db']['prefix']."activities  
			where show_in_home_page=1 order by post_date desc,id desc limit 6 ");
		$i=0;
		$a=false;
		while ($r=mysqli_fetch_assoc($re)) {
		
			$a[$i]['event_heading']=$r['event_heading'];
			$a[$i]['event']=$r['event'];
			$a[$i]['id']=$r['id'];
			$a[$i]['image']=$r['image'];
			$a[$i]['shortlink']=$r['shortlink'];
			if(strlen($a[$i]['shortlink'])<2)
				$a[$i]['shortlink']=HTTPPATH.'activities/content/'.$a[$i]['id'];
			$a[$i]['type']=$r['type'];
			$i++;
		} 
		return $a;
	 }
	 public function gethomenews($condition=NULL)
	 {

		 

		$re=$this->db->Query("select id,news_heading from ".$this->config['db']['prefix']."news  order by news_date desc,id desc limit 4 ");
		$i=0;
		$a=false;
		while ($r=mysqli_fetch_assoc($re)) {
		
			$a[$i]['news_heading']=$r['news_heading']; 
			$a[$i]['id']=$r['id'];
 
			$i++;
		} 
		return $a;
	 }
	 public function gethomemembers()
	 {

		 

		$re=$this->db->Query("select name,image,post,mailid,phno from ".$this->config['db']['prefix']."execom
		 where (( LOWER(post)='chair' or LOWER(post)='vice chair' or LOWER(post)='secretary')
		 and (  year=(select max(year)from execom) ) ) order by  year desc ,post ");
		$i=0;
		$a=false;
		while ($r=mysqli_fetch_assoc($re)) {
		
			$a[$i]['name']=$r['name'];
			$a[$i]['image']=$r['image'];
			$a[$i]['post']=$r['post'];
			$a[$i]['mailid']=$r['mailid'];
			$a[$i]['phno']=$r['phno'];
			if(strlen($a[$i]['image'])<4)
				$a[$i]['image']='prof.png';
			$i++;
		} 
		return $a;
	 } public function getallact($offset=0)
	 {

		 
	 	if(!is_int($offset))$offset=0;
		$re=$this->db->Query("select * from ".$this->config['db']['prefix']."activities  order by post_date desc,id desc LIMIT  ".$offset.",10   ");
			$i=0;
		$a=false;

		while ($r=mysqli_fetch_assoc($re)) {
		
			$a[$i]=$r;
			$a[$i]['shortlink']=$r['shortlink'];
			if(strlen($a[$i]['shortlink'])<2)
				$a[$i]['shortlink']=HTTPPATH.'activities/content/'.$a[$i]['id'];
			$a[$i]['type']=$r['type'];
			$i++;
		} 
		return $a;
	 } 

	 public function actexist($id=0)
	 {

		if(!$re=$this->db->Query("select * from ".$this->config['db']['prefix']."activities  where id=".$id."    "))
			return false;
		$a=false;
		$num=mysqli_num_rows($re);  
		if($num==1)
			$a=true; 
		return $a;
  
	 }
	 public function getact($id=1)
	 { 
		if(!$re=$this->db->Query("select * from ".$this->config['db']['prefix']."activities  WHERE id= ".$id." order by id desc "))
		 return false;
		$a=false; 
		if(mysqli_num_rows($re)!=1)
		return false;
		$r=mysqli_fetch_assoc($re);
		
			$a=$r; 
			$a['shortlink']=$r['shortlink']; 
			if(strlen($a['shortlink'])<2)
				$a['shortlink']=HTTPPATH.'activities/content/'.$a['id']; 
		 
		
		return $a;
	 }
	 public function getsome($condition=" ",$offset=0)
	 {

	 	if(!is_int($offset))$offset=0;
		$re=$this->db->Query("select * from ".$this->config['db']['prefix']."activities  ".$condition." order by post_date desc ,id desc LIMIT  ".$offset.",10   ");
			$i=0;
		$a=false;

		while ($r=mysqli_fetch_assoc($re)) {
		
			$a[$i]['event_heading']=$r['event_heading'];
			$a[$i]['event']=$r['event'];
			$a[$i]['id']=$r['id'];
			$a[$i]['image']=$r['image'];
			$a[$i]['shortlink']=$r['shortlink'];
			if(strlen($a[$i]['shortlink'])<2)
				$a[$i]['shortlink']=HTTPPATH.'activities/content/'.$a[$i]['id'];
			$a[$i]['type']=$r['type'];
			$i++;
		} 
		return $a;
	 } 

	 public function getallnews($offset=0)
	 {

if($offset==true)
	$offset=1; 
	 if(!$re=$this->db->Query("select news_heading,news,news_date from ".$this->config['db']['prefix']."news 
	  order by news_date desc,id desc LIMIT  ".$offset.",8   "))
	 	return false;
			$i=0;
		$a=false;

		while ($r=mysqli_fetch_assoc($re)) {
		
			$a[$i]['news_heading']=$r['news_heading'];
			$a[$i]['news']=$r['news'];
			$a[$i]['news_date']=$r['news_date']; 
			$i++;
		} 
		return $a;
	 }  


	 public function getmembers($year=0)
	 {
	 	$condition=" ";
	 	if($year>=2004)
	 		$condition=" WHERE year=".$year." ";
	 	else{
	 		return false;
	 	}
	 if(!$re=$this->db->Query("select * from ".$this->config['db']['prefix']."execom  ".$condition."
	  order by  (post='chair') desc,(post='Secretary') desc,(post='Vice Chair') desc ,year desc,id desc     "))
	 	return false;
			$i=0;
		$a=false;

		while ($r=mysqli_fetch_assoc($re)) {
		
			$a[$i]=$r;
			$i++;
		} 
		return $a;
	 }  

	 public function getcontacts()
	 {
	 	if(!$re=$this->db->Query("select * from ".$this->config['db']['prefix']."contactus  where year=(select max(year) from contactus) or year=0000  ORDER BY YEAR"))
	 	return false;
			$i=0;
		$a=false;

		while ($r=mysqli_fetch_assoc($re)) {
		
			$a[$i]['name']=$r['name'];
			$a[$i]['year']=$r['year'];
			$a[$i]['phno']=$r['phno'];
			$a[$i]['mail']=$r['mail'];   
			$a[$i]['pos']=$r['pos'];   
			$i++;
		} 
		return $a;
	 }  
 public function getallexecomyears()
	 {
	 
	 if(!$re=$this->db->Query("select distinct(year) from ".$this->config['db']['prefix']."execom  
	  order by year desc     "))
	 	return false;
			$i=0;
		$a=false;

		while ($r=mysqli_fetch_assoc($re)) {
		
			$a[$i]=$r;
			$i++;
		} 
		return $a;
	 }  

}


