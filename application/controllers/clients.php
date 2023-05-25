<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	error_reporting(0);
	session_start();

	class Clients extends CI_Controller {

		var $data  		=	array();

		# This is a constructor. It is invoked each time this class is called
		# -------------------------------------------------------------------	
		public function __construct(){
			parent::__construct();
			require_once('sitegenerics.php');
			$this->load->model('clientsmodel');
			//get next application number
			// $this->adminmodel->getactivetransactionyear();
		}

		# Section for calling views
		# -------------------------
		public function index(){
			$this->load->view('eduread/theme/landingpage',$this->data);		
		}


		# Section for calling views
		# -------------------------
		public function admissionform(){
			$this->load->view('eduread/theme/admissionform',$this->data);		
		}	

		public function getState(){
			$result = $this->clientsmodel->getState();
			echo $result;	            
		}

		public function getLGAs(){
			$result = $this->clientsmodel->getLGAs();
			echo $result;	            
		}

		public function generateapplicantionnumber(){
			$result = $this->clientsmodel->generateapplicantionnumber();
			echo $result;	            
		}

		public function getapplication(){
			$result = $this->clientsmodel->getapplication();
			echo $result;	            
		}

		public function subscribe(){
			$result = $this->clientsmodel->subscribe();
			echo $result;	            
		}

		public function studentpage(){
			$this->load->view('eduread/theme/studentpage',$this->data);		            
		}

		public function staffpage(){
			$this->load->view('eduread/theme/staffpage',$this->data);		            
		}

		public function staffprofile(){
			$this->load->view('eduread/theme/staffprofile',$this->data);		            
		}

		public function boardmembers(){
			$this->load->view('eduread/theme/boardmembers',$this->data);		            
		}

		public function boardmembersprofile(){
			$this->load->view('eduread/theme/boardmembersprofile',$this->data);		            
		}

		public function events(){
			$this->load->view('eduread/theme/events',$this->data);		            
		}

		public function eventsdetails(){
			$this->load->view('eduread/theme/eventsdetails',$this->data);		            
		}

		public function contact(){
			$this->load->view('eduread/theme/contact',$this->data);		            
		}

		public function eventscopy(){
			$this->load->view('eduread/theme/eventscopy',$this->data);		            
		}

		public function joinevent(){
			$result = $this->clientsmodel->joinevent();
			echo $result;	             
		}

		public function contactus(){
			$result = $this->clientsmodel->contactus();
			echo $result;	             
		}

		public function submitapplication(){
			$_SESSION['applicant_picture'] = "";
			$_SESSION['parent1_picture'] = "";
			$_SESSION['parent2_picture'] = "";
			$result = $this->clientsmodel->submitapplication();
			$applicantspictureuploadstatus = 0; 
			$parent1picturestatus = 0;
			$parent2picturestatus = 0;

			$filename = ""; 
			$filenamex = ""; 

			if($result != "" && $_SESSION['applicant_picture'] != "" && $_SESSION['parent1_picture'] != "" && $_SESSION['parent2_picture'] != ""){
				extract($_POST); 
				$i = 0;
				while($i < count($_FILES["files"]["name"])){
					$filenamex .= $_FILES['files']['name'][$i].",";
					if($_FILES['files']['name'][$i] == ""){
						//Do nothing because image is not selected
					}else{
						if($i == 0){//applicant picture
							$CountArray = count(explode(".",$_FILES["files"]["name"][$i]));
							$filename = $_FILES['files']['name'][$i]; //gets the file name
							$filename = trim($filename);
							$filenamex .= trim($filename);
							$fileNameParts   = explode(".",$filename); // explode file name to two parts
							$fileExtension   = end($fileNameParts); // give extension
							$fileExtension   = strtolower($fileExtension); // convert to lower case
							if ($CountArray>=2){
								$folderName = "applicant_picture";
								$_SESSION['sessdir'] = './'.$folderName;
								$upload_dir = './'.$folderName.'/';
								if(is_dir($upload_dir)){
									//Directory already exist
								}else{
									mkdir($upload_dir);
								}
								$this->load->library('upload');//loading the library
								$imagePath = realpath(APPPATH . '../applicant_picture');
								$_FILES['userfile']['name']     = $_FILES['files']['name'][$i];
								$_FILES['userfile']['type']     = $_FILES['files']['type'][$i];
								$_FILES['userfile']['tmp_name'] = $_FILES['files']['tmp_name'][$i];
								$_FILES['userfile']['error']    = $_FILES['files']['error'][$i];
								$_FILES['userfile']['size']     = $_FILES['files']['size'][$i];
								//configuration for upload your images
								$config = array(
									'file_name'     => $_SESSION['applicant_picture'],
									'allowed_types' => 'jpg|jpeg|png|gif',
									'max_size'      => 3000,
									'overwrite'     => TRUE,
									'upload_path'
									=>$imagePath
								);	
								$this->upload->initialize($config);
								if (!$this->upload->do_upload())
								{
									$applicantspictureuploadstatus = 0;
								}else{
									$filename = $this->upload->data();
									$applicantspictureuploadstatus = 1;
								}
							}
						}else if($i == 1){//parent 1
							$CountArray = count(explode(".",$_FILES["files"]["name"][$i]));
							$filename = $_FILES['files']['name'][$i]; //gets the file name
							$filename = trim($filename);
							$filenamex .= trim($filename);
							$fileNameParts   = explode(".",$filename); // explode file name to two parts
							$fileExtension   = end($fileNameParts); // give extension
							$fileExtension   = strtolower($fileExtension); // convert to lower case
							if ($CountArray>=2){
								$folderName = "parent1_picture";
								$_SESSION['sessdir'] = './'.$folderName;
								$upload_dir = './'.$folderName.'/';
								if(is_dir($upload_dir)){
									//Directory already exist
								}else{
									mkdir($upload_dir);
								}
								$this->load->library('upload');//loading the library
								$imagePath = realpath(APPPATH . '../parent1_picture');
								$_FILES['userfile']['name']     = $_FILES['files']['name'][$i];
								$_FILES['userfile']['type']     = $_FILES['files']['type'][$i];
								$_FILES['userfile']['tmp_name'] = $_FILES['files']['tmp_name'][$i];
								$_FILES['userfile']['error']    = $_FILES['files']['error'][$i];
								$_FILES['userfile']['size']     = $_FILES['files']['size'][$i];
								//configuration for upload your images
								$config = array(
									'file_name'     => $_SESSION['parent1_picture'],
									'allowed_types' => 'jpg|jpeg|png|gif',
									'max_size'      => 3000,
									'overwrite'     => TRUE,
									'upload_path'
									=>$imagePath
								);	
								$this->upload->initialize($config);
								if (!$this->upload->do_upload())
								{
									$parent1picturestatus = 0;
								}else{
									$filename = $this->upload->data();
									$parent1picturestatus = 1;
								}
							}
						}else if($i == 2){//parent 2
							$CountArray = count(explode(".",$_FILES["files"]["name"][$i]));
							$filename = $_FILES['files']['name'][$i]; //gets the file name
							$filename = trim($filename);
							$filenamex .= trim($filename);
							$fileNameParts   = explode(".",$filename); // explode file name to two parts
							$fileExtension   = end($fileNameParts); // give extension
							$fileExtension   = strtolower($fileExtension); // convert to lower case
							if ($CountArray>=2){
								$folderName = "parent2_picture";
								$_SESSION['sessdir'] = './'.$folderName;
								$upload_dir = './'.$folderName.'/';
								if(is_dir($upload_dir)){
									//Directory already exist
								}else{
									mkdir($upload_dir);
								}
								$this->load->library('upload');//loading the library
								$imagePath = realpath(APPPATH . '../parent2_picture');
								$_FILES['userfile']['name']     = $_FILES['files']['name'][$i];
								$_FILES['userfile']['type']     = $_FILES['files']['type'][$i];
								$_FILES['userfile']['tmp_name'] = $_FILES['files']['tmp_name'][$i];
								$_FILES['userfile']['error']    = $_FILES['files']['error'][$i];
								$_FILES['userfile']['size']     = $_FILES['files']['size'][$i];
								//configuration for upload your images
								$config = array(
									'file_name'     => $_SESSION['parent2_picture'],
									'allowed_types' => 'jpg|jpeg|png|gif',
									'max_size'      => 3000,
									'overwrite'     => TRUE,
									'upload_path'
									=>$imagePath
								);	
								$this->upload->initialize($config);
								if (!$this->upload->do_upload())
								{
									$parent2picturestatus = 0;
								}else{
									$filename = $this->upload->data();
									$parent2picturestatus = 1;
								}
							}
						}						
					}

					$i++;
				}
			}

			echo $result;

			// $return = [$guarantorsignatureuploadstatus, $customersignatureuploadstatus, $result];
			// $return = array(
			// 	'guarantorsignatureuploadstatus'=> $guarantorsignatureuploadstatus,
			// 	'customersignatureuploadstatus'=> $customersignatureuploadstatus,
			// 	'result'=> $result,
			// );
			// echo json_encode($return);
			// echo json_encode($filenamex);
		}	















		
		



		
		public function createaccount(){
			if(isset($_SESSION['userinformation']) && !empty($_SESSION['userinformation'])){
				$this->load->view('sipupglobal/createaccount',$this->data);	
			}else{
				$this->load->view('sipupglobal/login',$this->data);
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
					$folderName = "userspicture";
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

		public function accountingyear(){
			if(isset($_SESSION['userinformation']) && !empty($_SESSION['userinformation'])){
				$this->load->view('sipupglobal/accountingyear',$this->data);	
			}else{
				$this->load->view('sipupglobal/login',$this->data);
			}			            
		} 						

		
		
		
			

									

		public function processcontributionrepaymment(){
			$result = $this->adminmodel->processcontributionrepaymment();
			echo $result;	            
		}									

		public function populatloan25thdaydefualtertable(){
			$result = $this->adminmodel->populatloan25thdaydefualtertable();
			echo $result;	            
		}									
															
		public function logout(){
			session_start();
			session_destroy();
			$_SESSION['activetransactionyear'] = '';
			$_SESSION['email'] = '';
			$_SESSION['userinformation'] = '';
			$_SESSION['customerinformation'] = '';
			$_SESSION['loan_advancement_agreement_debtor_information'] = '';
			$_SESSION['applicant_passport'] = '';
			$_SESSION['guarantor_signature'] = '';
			$_SESSION['grantor_signature'] = '';
			$_SESSION['applicant_signature'] = '';
			$_SESSION['picture_handler'] = '';
			$_SESSION['loan_advance_agreement_information']  = "";
			$_SESSION['approved_contribution_information']  = "";


			$_SESSION['loan_details'] = "";
			$_SESSION['contribution_setup_information'] = "";
			$this->load->view('sipupglobal/login',$this->data);
		}

		/*
		|------------------------------ 
		| Picture/image upload section
		|------------------------------ 
		*/				
		function do_upload(){
		    $this->load->library('upload');
			$_FILES['userfile']['name']= $_SESSION['picture_handler'];
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
	}
?>