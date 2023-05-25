<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	error_reporting(0);
	session_start();

	class Admin extends CI_Controller {

		var $data  		=	array();

		# This is a constructor. It is invoked each time this class is called
		# -------------------------------------------------------------------	
		public function __construct(){
			parent::__construct();
			require_once('adminsitegenerics.php');
			$this->load->model('adminmodel');
			//get activated transaction year
			// $this->adminmodel->getactivetransactionyear();
		}

		# Section for calling views
		# -------------------------
		public function index(){	
			$this->load->view('admin/sipupglobal/login',$this->data);		
		}

		public function loadregister(){	
			$this->load->view('admin/sipupglobal/register',$this->data);		
		}

		public function register(){
			$result = $this->adminmodel->register();
			echo $result;	            
		}		
		public function login(){
			$result = $this->adminmodel->login();
			echo $result;	            
		}	

		public function landingpage(){
			if(isset($_SESSION['userinformation']) && !empty($_SESSION['userinformation'])){
				$this->load->view('admin/sipupglobal/landingpage',$this->data);	
			}else{
				$this->load->view('admin/sipupglobal/login',$this->data);
			}			            
		}		
		public function createaccount(){
			if(isset($_SESSION['userinformation']) && !empty($_SESSION['userinformation'])){
				$this->load->view('sipupglobal/createaccount',$this->data);	
			}else{
				$this->load->view('sipupglobal/login',$this->data);
			}			            
		}			

		public function userprofile(){

			if(isset($_SESSION['userinformation']) && !empty($_SESSION['userinformation'])){
				$this->load->view('admin/sipupglobal/userprofile',$this->data);	
			}else{
				$this->load->view('admin/sipupglobal/login',$this->data);
			}			            
		}	

		public function updateuserprofile(){
			$_SESSION['picture_handler'] = "";
			$result = $this->adminmodel->updateuserprofile();
			if ($result !=-1 && $_SESSION['user_profile_picture']!=''){
				extract($_POST);	
				$CountArray = count(explode(".",$_FILES["userfile"]["name"]));
				$value = $_FILES['userfile']['name'];  // This gets the file name
				$value = trim($value);
				$fileNameParts   = explode(".",$value); // explode file name to two parts
				$fileExtension   = end($fileNameParts); // give extension
				$fileExtension   = strtolower($fileExtension); // convert to lower case
				if ($CountArray>=2){
					$folderName = "staffpicture";
					$_SESSION['sessdir'] = './'.$folderName;
					$upload_dir = './'.$folderName.'/';
					if(is_dir($upload_dir)){
						//Directory already exist
					}else{
						mkdir($upload_dir);
					}
					$_SESSION['picture_handler'] = $_SESSION['user_profile_picture'];
					$this->do_upload();
				}
			}
			echo $result;
			exit;
		}	

		public function logout(){
			session_start();
			session_destroy();
			$_SESSION['email'] = '';
			$_SESSION['userinformation'] = '';

			$this->load->view('admin/sipupglobal/login',$this->data);
		}		


		/*
		|------------------------------ 
		| Picture/image upload section
		|------------------------------ 
		*/				
		function do_upload(){
		    $this->load->library('upload');
			$_FILES['userfile']['name']= $_SESSION['picture_handler'];//dealing with one picture
		    $this->upload->initialize($this->set_upload_options());
		    $this->upload->do_upload();
		}

		/*
		|------------------------------ 
		| File upload settings
		|------------------------------ 
		*/				
		private function set_upload_options(){   
			$upload_dir = $_SESSION['sessdir']; 
		    $config = array();
		    $config['upload_path'] 		= 	$upload_dir;
		    $config['allowed_types'] 	= 	'gif|jpg|png|jpeg';
		    $config['max_size']      	= 	'0';
		    $config['overwrite']     	= 	TRUE;
		    return $config;
		}
















		
		public function applicants(){
			$this->load->view('admin/sipupglobal/applicants',$this->data);		
		}	
		
		public function loadapplicantview(){
			$this->load->view('admin/sipupglobal/applicantionview',$this->data);		
		}	

		public function fetchapplicants(){
			$result = $this->adminmodel->fetchapplicants();
			echo $result;	             
		}		
		
		public function getapplication(){
			$result = $this->adminmodel->getapplication();
			echo $result;	            
		}		
			
		public function messages(){
			$this->load->view('admin/sipupglobal/messages',$this->data);		
		}	
		
		public function eventprospects(){
			$this->load->view('admin/sipupglobal/eventprospects',$this->data);		
		}	


		public function fetchmessages(){
			$result = $this->adminmodel->fetchmessages();
			echo $result;	            
		}			

		public function fetcheventprospect(){
			$result = $this->adminmodel->fetcheventprospect();
			echo $result;	            
		}			
	
		





























			}
?>