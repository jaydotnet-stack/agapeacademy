<?php

	error_reporting(0);
	// session_start();
	
	ini_set('max_execution_time',0);
	ini_set('memory_limit','256M');
	
	class Adminmodel extends CI_Model
	{	
		
		//refine post 
		public function refineInput($data) {	
			$data = trim($data);
			$data = stripslashes($data);
			$data = htmlspecialchars($data);
			return $data;
		}		

		# Login
		# -------------------
		public function login(){
			$_SESSION['userinformation']	=	"";
			// $_SESSION['usercategory']	=	"";
			// $_SESSION['noofinstructors']	=	"";
			// $_SESSION['noofregisteredcourses']	=	"";
			extract($_POST);
			$email  		= trim($email);
			$password 		= MD5(trim($password));

			$query = $this->db->get_where('users_account', array('email'=>$email));
			if ($query->num_rows() == 1){
				$dbpassword 	= $query->row(0)->users_account_password;
				if($dbpassword==$password){
					$_SESSION['userinformation'] 	=	$query->row(0);
				    return 1;
				}else{
					return -2;
				}
			}else{	
				return 2;	
			}	
		}

		# Login
		# -------------------
		public function register(){
			//setting session variables			
			$_SESSION['email']	=	"";
			//extract posted form fields
			extract($_POST);

			$sqlstr	= "SELECT * FROM users_account";
			$query = $this->db->query($sqlstr);
			$recordno = $query->num_rows();
			$useruniquenumber = '';
			$useruniquenopretext = 'User_';
			if($recordno == 0){
				$useruniquenumber = $useruniquenopretext."000001";
			}elseif($recordno > 0 && $recordno < 9){
				$recordno = $recordno + 1;
				$useruniquenumber = $useruniquenopretext."00000".$recordno;
			}elseif($recordno >=9 && $recordno < 99){
				$recordno = $recordno + 1;
				$useruniquenumber = $useruniquenopretext."0000".$recordno;
			}elseif($recordno >=99 && $recordno < 999){
				$recordno = $recordno + 1;
				$useruniquenumber = $useruniquenopretext."000".$recordno;
			}elseif($recordno >=999 && $recordno < 9999){
				$recordno = $recordno + 1;
				$useruniquenumber = $useruniquenopretext."00".$recordno;
			}elseif($recordno >=9999 && $recordno < 99999){
				$recordno = $recordno + 1;
				$useruniquenumber = $useruniquenopretext."0".$recordno;
			}else{
				echo -3;
				exit;	
			}
			
			$DataArray 	= array(
				'users_unique_number'				=> $this->refineInput($useruniquenumber),			
				'email'								=> $this->refineInput($email),			
				'users_account_firstname'			=> ucwords($this->refineInput($firstname)),
				'users_account_lastname'			=> ucwords($this->refineInput($lastname)),
				'users_account_sex'					=> $gender,
				'users_account_phone_number'		=> $this->refineInput($phone_number),
				'users_account_password'			=> md5($this->refineInput($password)),
				'users_account_approval_status'	=> 'F'
			);			

			$query = $this->db->get_where('users_account', array('email'=>trim($email)));
			if ($query->num_rows() > 0){
				return 2;
			}else{
				$this->db->insert('users_account',$DataArray);
				// $query = $this->db->get_where('users_account', array('email'=>trim($email)));	
				$_SESSION['email'] 	=	$email;
				return 1;	
			}	
		}

		public function updateuserprofile(){
			extract($_POST);	
			$_SESSION['user_profile_picture'] ="";
			$email = $_SESSION['userinformation']->email;
			// $username = $_SESSION['username'];
			$CountArray = count(explode(".",$_FILES["userfile"]["name"]));
			if($CountArray>=2){
				$DataArray 	= array(
					'users_account_firstname'		=> trim($firstname),
					'users_account_lastname'		=> trim($lastname),
					'users_account_sex'				=> $gender,
					'users_account_phone_number'	=> trim($phone_number),
					'users_account_address'			=> trim($address),
					'users_account_dob'				=> $dob,
					'users_account_lga'				=> $lga,
					'users_account_passport_tag'	=> 'T'
				);	
			}else{
				$DataArray 	= array(
					'users_account_firstname'		=> trim($firstname),
					'users_account_lastname'		=> trim($lastname),
					'users_account_sex'				=> $gender,
					'users_account_phone_number'	=> trim($phone_number),
					'users_account_address'			=> trim($address),
					'users_account_dob'				=> $dob,
					'users_account_lga'				=> $lga
				);	
			}
			$query = $this->db->get_where('users_account', array('email'=>$email));
			if ($query->num_rows() > 0){
				$userId =  $query->row(0)->users_account_id;
				if($this->db->where(array('email'=>$email))->update('users_account',$DataArray)){
					$_SESSION['user_profile_picture'] = $userId . ".jpg";
					//get user updated information
					$query1 = $this->db->get_where('users_account', array('email'=>$email));
					if ($query1->num_rows() == 1){
						$_SESSION['userinformation'] = '';
						$_SESSION['userinformation'] 	=	$query1->row(0);
						return $userId;	
					}			
				}else{
					return -1;
				}
			}
		}

















		
		public function fetchapplicants(){
			$sqlstr	= "SELECT * FROM applicant";
			$query = $this->db->query($sqlstr);
			if ($query->num_rows() > 0){
				foreach($query->result() as $row){
					$mdata[] = $row;
				}
				return json_encode($mdata);
			}else{
				return 0;
			}
		}

		public function getapplication(){
			$sentString = $_POST['sentString'];
			$sqlstr	= "SELECT * FROM applicant WHERE application_number='$sentString'";
			$query = $this->db->query($sqlstr);
			if ($query->num_rows() > 0){
				$row = $query->result();
				return json_encode($row);
			}else{
				return 0;
			}
		}


		public function fetchmessages(){
			$sqlstr	= "SELECT * FROM contact_us";
			$query = $this->db->query($sqlstr);
			if ($query->num_rows() > 0){
				foreach($query->result() as $row){
					$mdata[] = $row;
				}
				return json_encode($mdata);
			}else{
				return 0;
			}
		}
		

		public function fetcheventprospect(){
			$sqlstr	= "SELECT * FROM event_prospects";
			$query = $this->db->query($sqlstr);
			if ($query->num_rows() > 0){
				foreach($query->result() as $row){
					$mdata[] = $row;
				}
				return json_encode($mdata);
			}else{
				return 0;
			}
		}		

	}	
?>