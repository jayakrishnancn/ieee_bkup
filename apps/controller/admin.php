<?php 
if( (!defined("BASEPATH") )   )
		die("no direct script allowed  ");
/**
* 
*/ 
class admin extends controller
{
	private $model;  
	function __construct()
	{
		log_message("info","** admin ** __construct");
		parent::__construct();
		require  $this->config['model'].'login.php';
		log_message("info","model  login included ");
		$this->model=new loginModel;
		$this->red_non_admin();  

	}
	public function red_non_admin()
	{
			if(!$this->chkadmin())
			{			
				$this->_404error();
				log_message("info","not admin".__FILE__.__LINE__);
				die();
			}
	} 

	public function view($value='')
	{ 
		$this->red_non_admin();

  		log_message("info","entered in admin view");
  		$url=['admin_html_start','admin','html_end']; 
		$data=['title'=>"IEEE SCTCE  | Admin",'sel'=>'admin','config'=>$this->config];
  		$this->_view($url,$data);
  	}

  	public function chkadmin()
  	{

		if($this->model->isloged())
		{
			if($this->model->isadmin())
			{ 
				log_message("info","is admin"); 
					return true; 
			}	
			else{
				log_message("info"," not admin".__FILE__.__LINE__);
			}
		}
		else{
				log_message("info","not loged".__FILE__.__LINE__);
		}

			return false; 
  	}

	 public function logout()
	{
		session_unset();
		session_destroy();
		@log_message("info","session ended");
		if(isset($_SESSION['log']))
		{
			$this->_error("cant logout","session ".__FILE__.__LINE__);
			log_message("error","session  unset".__FILE__.__LINE__);
		}
		else
		{
				redir(HTTPPATH."login");
				log_message("info","log out successful ".__FILE__.__LINE__);
				return; 
		}
	}  
	public function addactivity()
	{	$tmpflag=0;


		if(isset($_POST['addactivity']) && (!empty($_POST['addactivity'])))
		{




if (!empty($_FILES['image']['name']) && (empty($_POST['image1'])) )
{
		$target_dir = BASEPATH.$this->config['image'];
		$target_file = $target_dir . basename($_FILES["image"]["name"]);
		$uploadOk = 1;
		$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
		// Check if image file is a actual image or fake image

		    $check = getimagesize($_FILES["image"]["tmp_name"]);
		    if($check !== false) {
		        echo "File is an image - " . $check["mime"] . ".";
		        $uploadOk = 1;
		    } else {
		        echo "File is not an image.";
		        $uploadOk = 0;
		    }

		// Check if file already exists
		if (file_exists($target_file)) {
		    echo "Sorry, file already exists.";
		    $uploadOk = 0;
		}
		// Check file size
		if ($_FILES["image"]["size"] > 5000000) {
		    echo "Sorry, your file is too large.";
		    $uploadOk = 0;
		}
		// Allow certain file formats
		if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
		&& $imageFileType != "gif" ) {
		    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
		    $uploadOk = 0;
		}
		// Check if $uploadOk is set to 0 by an error
		if ($uploadOk == 0) {
		    echo "Sorry, your file was not uploaded.".$target_file;
		    return;
		// if everything is ok, try to upload file
		} else {
		    if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
		        echo "The file ". basename( $_FILES["image"]["name"]). " has been uploaded.";
		    } else {
		        echo "Sorry, there was an error uploading your file.";
		        return;
		    }
		} 

}
else{
	$target_file=$_POST['image1'];
	$tmpflag=1;
}





			if(isset($_POST['event_heading']) && (!empty($_POST['event_heading'])))
			{
				if(isset($_POST['event']) && (!empty($_POST['event'])))
				{
					if(isset($_POST['type']) && (!empty($_POST['type'])))
					{				
				if(isset($_POST['show_in_home_page']) && isset($_POST['event_date']) 
					&& isset($_POST['sublink'])
					 && isset($_POST['shortlink'])
					&& isset($_POST['subdec']) && isset($_POST['subcontent']) ){
		
				
				if(!isset($target_file)||(empty($target_file)))$target_file=NULL;
					if($tmpflag==0) $target_file=HTTPPATH.$target_file;


						
						$ar=array(
							'event_heading'=>$_POST['event_heading'],
							'event'=>$_POST['event'],
							'show_in_home_page'=>$_POST['show_in_home_page'],
							'image'=>$target_file,
							'event_date'=>$_POST['event_date'],
							'type'=>$_POST['type'],
							'shortlink'=>$_POST['shortlink'],
							'subdec'=>$_POST['subdec'],
							'subcontent'=>$_POST['subcontent'],
							'sublink'=>$_POST['sublink'],
							'post_date'=>date("Y-m-d")
							);
						if($this->model->rowins('activities',$ar))
								{
						if(!empty($_POST['shortlink'])){
							$id=$this->model->findid('event_heading','event_heading');

							$lik=array(
							'from_link'=>$_POST['shortlink'],
							'to_link'=>'activities/content/'.$id,

							);
							if($this->model->rowins('links',$lik))
								echo "inserted";
						
						}
						else{
								echo "inserted";
							}
							}

					else echo "<b>insert error probably duplicate heading<b>";
						
					}
					}
				}
			}

		}
		log_message("info","Entered in admin addpost");
		$url=['admin_html_start',"admin.addactivity",'html_end']; 
		$data=['title'=>"IEEE SCTCE  | Addactivity",'sel'=>'addactivity','config'=>$this->config];
		$this->_view($url,$data); 

	}
	public function viewallactivity()
	{
		$url=['admin_html_start',"admin.viewactivity",'html_end']; 
		$info=$this->model->viewallactivity();
		$data=['title'=>"IEEE SCTCE  | All activities",'sel'=>'viewactivities','info'=>$info,'config'=>$this->config];
		$this->_view($url,$data); 


	}
	public function editactivity()
	{
		$url=['admin_html_start',"admin.editactivity",'html_end']; 
		$info=$this->model->viewallactivity();
		$data=['title'=>"IEEE SCTCE  | edit activities",'sel'=>'editactivities','info'=>$info,'config'=>$this->config];
		$this->_view($url,$data); 


	}
	public function deleteactivity()
	{
		if(isset($_POST['confirm'])&&(!empty($_POST['id'])))
		{
			if($this->model->deleteallact($_POST['id']))
				redir(HTTPPATH."admin/?msg=deleted");

			return;
		}
		if(!isset($_GET['id'])){
			redir(HTTPPATH."admin/?msg=not a  valid activity");
			return;
		} 

		$url=['admin_html_start',"admin.deleteactivity",'html_end']; 

		$data=['title'=>"IEEE SCTCE  | delete activities",'sel'=>'deleteactivities','config'=>$this->config];
		$this->_view($url,$data); 
	}
public function addnews()
	{

		if(isset($_POST['addnews']) && (!empty($_POST['addnews'])))
		{
			if(isset($_POST['news_heading']) && (!empty($_POST['news_heading'])))
			{
				if(isset($_POST['news']) && (!empty($_POST['news'])))
				{ 
						$ar=array(
							'news_heading'=>$_POST['news_heading'],
							'news'=>$_POST['news'],
							'news_date'=>date("Y-m-d")
							);
						if($this->model->rowins('news',$ar))
						echo "inserted";
					else echo "insert error";
						
				}
			}

		}
		log_message("info","Entered in admin addnews");
		$url=['admin_html_start',"admin.addnews",'html_end']; 
		$data=['title'=>"IEEE SCTCE  | Add NEWS",'sel'=>'addnews','config'=>$this->config];
		$this->_view($url,$data); 
	}
public function deletenews()
	{
		if(isset($_POST['confirm'])&&(!empty($_POST['id'])))
		{
			if($this->model->deleteallact($_POST['id'],"news"))
				redir(HTTPPATH."admin/?msg=news deleted ");

			return;
		}
		if(!isset($_GET['id'])){
			redir(HTTPPATH."admin/?msg=not a  valid news");
			return;
		}

		$url=['admin_html_start',"admin.deletenews",'html_end']; 

		$data=['title'=>"IEEE SCTCE  | delete activities",'sel'=>'deleteactivities','config'=>$this->config];
		$this->_view($url,$data); 
	}
	public function viewallnews()
	{
		$url=['admin_html_start',"admin.viewnews",'html_end']; 
		$info=$this->model->viewallactivity("news");
		$data=['title'=>"IEEE SCTCE  | All  news",'sel'=>'viewactivities','info'=>$info,'config'=>$this->config];
		$this->_view($url,$data); 


	}
	public function editnews()
	{
		$url=['admin_html_start',"admin.editnews",'html_end']; 
		$info=$this->model->viewallactivity("news");
		$data=['title'=>"IEEE SCTCE  | edit news",'sel'=>'editactivities','info'=>$info,'config'=>$this->config];
		$this->_view($url,$data); 


	}
public function addexecom()
	{
 
		if(isset($_POST['addexecom']) && (!empty($_POST['addexecom'])))
		{

if (!empty($_FILES['image']['name']))
{
		$target_dir = BASEPATH.$this->config['image'];
		$target_file = $target_dir . basename($_FILES["image"]["name"]);
		$uploadOk = 1;
		$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
		// Check if image file is a actual image or fake image

		    $check = getimagesize($_FILES["image"]["tmp_name"]);
		    if($check !== false) {
		        echo "File is an image - " . $check["mime"] . ".";
		        $uploadOk = 1;
		    } else {
		        echo "File is not an image.";
		        $uploadOk = 0;
		    }

		// Check if file already exists
		if (file_exists($target_file)) {
		    echo "Sorry, file already exists.";
		    $uploadOk = 0;
		}
		// Check file size
		if ($_FILES["image"]["size"] > 5000000) {
		    echo "Sorry, your file is too large.";
		    $uploadOk = 0;
		}
		// Allow certain file formats
		if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
		&& $imageFileType != "gif" ) {
		    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
		    $uploadOk = 0;
		}
		// Check if $uploadOk is set to 0 by an error
		if ($uploadOk == 0) {
		    echo "Sorry, your file was not uploaded.";
		    return;
		// if everything is ok, try to upload file
		} else {
		    if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
		        echo "The file ". basename( $_FILES["image"]["name"]). " has been uploaded.";
		    } else {
		        echo "Sorry, there was an error uploading your file.";
		        return;
		    }
		}

}

			if(isset($_POST['name']) && (!empty($_POST['name'])))
			{
				if(isset($_POST['year']) && (!empty($_POST['year'])))
				{ 
				if( isset($_POST['mailid']) 
					&& isset($_POST['post']) 
					&& isset($_POST['fb']) && isset($_POST['twitter'])
					&& isset($_POST['phno'])  ){
			
		if(!isset($target_file)||(empty($target_file)))$target_file=NULL;
					else $target_file=HTTPPATH.$target_file;
						$ar=array(
							'name'=>$_POST['name'], 
							'year'=>$_POST['year'],
							'image'=>$target_file,
							'mailid'=>$_POST['mailid'],
							'twitter'=>$_POST['twitter'],
							'post'=>$_POST['post'],
							'fb'=>$_POST['fb'],
							'phno'=>$_POST['phno']
							);
						if($this->model->rowins('execom',$ar))
						echo "inserted";
					else echo "insert error";
				}
						
				}
			}

		}
		log_message("info","Entered in admin addexecom");
		$url=['admin_html_start',"admin.addexecom",'html_end']; 
		$data=['title'=>"IEEE SCTCE  | Add EXECOM",'sel'=>'addnews','config'=>$this->config];
		$this->_view($url,$data); 
	}


	public function viewexecom()
	{
		$url=['admin_html_start',"admin.viewexecom",'html_end']; 
		$info=$this->model->viewallactivity("execom");
		$data=['title'=>"IEEE SCTCE  | All  execom",'sel'=>'viewexecom','info'=>$info,'config'=>$this->config];
		$this->_view($url,$data); 


	}
	public function viewuser()
	{
		$url=['admin_html_start',"admin.viewuser",'html_end']; 
		$info=$this->model->viewallusers();
		$data=['title'=>"IEEE SCTCE  | All  Users",'sel'=>'viewusers','info'=>$info,'config'=>$this->config];
		$this->_view($url,$data); 


	}
	public function adduser()
	{
		if(isset($_POST['adduser']) && isset($_POST['name']) &&(!empty($_POST['name'])))
		{ 
				$password=$this->guard->passenc('password')[0];
				$salt=$this->guard->passenc('password')[1]; 
						if($this->model->insertUser($_POST['name'],$password,$salt))
						echo "inserted";
					else echo "insert error Maybe already Exist";
		}
		$url=['admin_html_start',"admin.adduser",'html_end'];  
		$data=['title'=>"IEEE SCTCE  | Add  Users",'sel'=>'addusers','config'=>$this->config];
		$this->_view($url,$data); 


	}
	 
}