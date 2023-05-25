<?php 
	// print_r($_SESSION['loan_advancement_agreement_debtor_information']);
	// exit;
	$application_number = $_GET['application_number'];
?>
<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from codervent.com/syndash/demo/vertical/user-profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 04 Jan 2021 15:12:04 GMT -->
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
	<title>Agape Intl - AGAPE Internatiional Primary & Secondary School</title> 
	<link rel="shortcut icon" href="<?php echo base_url() . 'resources/images/agape_favicon.ico'; ?>" type="image/x-icon">
	<!--plugins-->
	<link href="<?php echo base_url() . 'adminresources/plugins/simplebar/css/simplebar.css'; ?>" rel="stylesheet" />
	<link href="<?php echo base_url() . 'adminresources/plugins/perfect-scrollbar/css/perfect-scrollbar.css'; ?>" rel="stylesheet" />
	<link href="<?php echo base_url() . 'adminresources/plugins/metismenu/css/metisMenu.min.css'; ?>" rel="stylesheet" />
	<!-- loader-->
	<link href="<?php echo base_url() . 'adminresources/css/pace.min.css'; ?>" rel="stylesheet" />
	<script src="<?php echo base_url() . 'adminresources/js/pace.min.js'; ?>"></script>
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="<?php echo base_url() . 'adminresources/css/bootstrap.min.css'; ?>" />
	<!-- Icons CSS -->
	<link rel="stylesheet" href="<?php echo base_url() . 'adminresources/css/icons.css'; ?>" />
	<!-- App CSS -->
	<link rel="stylesheet" href="<?php echo base_url() . 'adminresources/css/app.css'; ?>" />
	<link rel="stylesheet" href="<?php echo base_url() . 'adminresources/css/dark-sidebar.css'; ?>" />
	<link rel="stylesheet" href="<?php echo base_url() . 'adminresources/css/dark-theme.css'; ?>" />
</head>

<body>
	<!-- wrapper -->
	<div class="wrapper">
		<!--sidebar-wrapper-->
        <?php 
            echo $sidebar;
        ?>
		<!--end sidebar-wrapper-->
		<!--header-->
        <?php 
            echo $header;
        ?>
		<!--end header-->
		<!--page-wrapper-->
		<div class="page-wrapper">
			<!--page-content-wrapper-->
			<div class="page-content-wrapper">
				<div class="page-content">
					<!--breadcrumb-->
					<div class="page-breadcrumb d-none d-md-flex align-items-center mb-3">
						<div class="breadcrumb-title pr-3">Applicant</div>
						<div class="pl-3">
							<nav aria-label="breadcrumb">
								<ol class="breadcrumb mb-0 p-0">
									<li class="breadcrumb-item"><a href="javascript:;"><i class='bx bx-home-alt'></i></a>
									</li>
									<li class="breadcrumb-item active" aria-current="page">Admission form</li>
								</ol>
							</nav>
						</div>
						<div class="ml-auto">
							<!-- <div class="btn-group">
								<button type="button" class="btn btn-primary">Settings</button>
								<button type="button" class="btn btn-primary bg-split-primary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown">	<span class="sr-only">Toggle Dropdown</span>
								</button>
								<div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-left">	<a class="dropdown-item" href="javascript:;">Action</a>
									<a class="dropdown-item" href="javascript:;">Another action</a>
									<a class="dropdown-item" href="javascript:;">Something else here</a>
									<div class="dropdown-divider"></div>	<a class="dropdown-item" href="javascript:;">Separated link</a>
								</div>
							</div> -->
						</div>
					</div>
					<!--end breadcrumb-->
					<div class="user-profile-page">
						<div class="card radius-15">
							<form id="form_contribution_setup" name="form_contribution_setup">	
								<div class="card-body">
									<div class="row">
										<div class="col-12 col-lg-7 border-right">
											<div class="d-md-flex align-items-center">
												<div class="mb-md-0 mb-3">
													<img src="<?php echo base_url() . 'adminresources/images/avatars/avatar-1.png'; ?>" id="applicantImage" name="applicantImage" class="rounded-circle shadow" width="130" height="130" alt="" />
												</div>
												<div class="ml-md-4 flex-grow-1">
													<div class="d-flex align-items-center mb-1">
														<h4 class="mb-0">
													                                                      
														</h4>
														<!-- <p class="mb-0 ml-auto">$44/hr</p> -->
													</div>
													<p class="mb-0 text-muted">
													</p>
													<!-- <p class="text-primary"><i class='bx bx-buildings'></i> Epic Coders</p>
													<button type="button" class="btn btn-primary">Connect</button>
													<button type="button" class="btn btn-outline-secondary ml-2">Resume</button> -->
												</div>
											</div>
										</div>
										<div class="col-12 col-lg-5" id="userfile_div">
											<div id="img">
												<div class="form-group">
													<label>Applicant Picture</label>
													<input type="hidden" id="applicant_picture_hidden_tag" name="applicant_picture_hidden_tag" value="F"> 
													<input type="file" name="userfile" id="userfile" required="true" onchange="preveiwImage3(this)" value="" class="form-control" disabled>
												</div>                                  
											</div>
										</div>
									</div>
									<!--end row-->
									<br>
									<ul class="nav nav-pills">
										<li class="nav-item"> 
											<a class="nav-link active" data-toggle="tab" href="#biodata" id="biodataX" name="biodataX">
												<span class="p-tab-name" onclick="bioDataFormShow()">Bio Data (CAF)</span><i class='bx bx-donate-blood font-24 d-sm-none'></i>
											</a>
										</li>

										<!-- <li class="nav-item"> <a class="nav-link" id="profile-tab" data-toggle="tab" href="#approvecontribution"><span class="p-tab-name" onclick="getContributionBaseCustomerInfo()">Approve Contribution</span><i class='bx bxs-user-rectangle font-24 d-sm-none'></i></a>
										</li> -->

										<!-- <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#LoanAgreement"><span class="p-tab-name" onclick="loadAgreementFormShow()">Loan Agreement</span><i class='bx bx-message-edit font-24 d-sm-none'></i></a>
										</li> -->

									</ul>
									<div class="tab-content mt-3">

										<div class="tab-pane fade show active" id="biodata">
											<div class="card shadow-none border mb-0 radius-15">
												<div class="card-body">
													<div class="form-body">
														<div class="row">
															<div class="col-12 col-lg-5 border-right">
																<div class="form-row">
																	<div class="form-group col-md-12" id="">
																		<div id="customer_unique_number_input">

																			<input type="hidden" id="application_number_hidden" name="application_number_hidden" value="<?php echo $application_number; ?>">

																			<label>Application Number</label>
																			<input type="text" id="application_number" name="application_number" 
																				value="" class="form-control" placeholder="" readonly>																		
																							
																		</div>
																	</div>
																	<div class="form-group col-md-6">
																		<!-- <label style="visibility:hidden">Declaration</label>
																		<div class="form-check">
																			<input class="form-check-input" type="checkbox" value="" id="customer_unique_number_generator" name="customer_unique_number_generator" >
																			<label class="form-check-label" for="">Assign unique number</label>
																		</div> -->
																	</div>																																	
																</div>
																<div class="form-row">
																	<div class="form-group col-md-6">
																		<label>Surname</label>
																		<input type="text" id="surname" name="surname" 
																				value="" class="form-control" placeholder="" readonly>																
				
																	</div>
																	<div class="form-group col-md-6">
																		<label>Firstname</label>
																		<input type="text" id="firstname" name="firstname" 
																				value="" class="form-control" placeholder="" readonly>												
																	</div>																	
																</div>
																<div class="form-row">
																	<div class="form-group col-md-6">
																		<label>Middlename</label>
																		<input type="text" id="middlename" name="middlename" 
																				value="" class="form-control" placeholder="" readonly>	
																	</div>
																	<div class="form-group col-md-6">
																		<label>Religion</label>
																		<select id="religion" name="religion" class="form-control" disabled>
																			<option value="christianity">Christianity</option>
																			<option value="islam">Islam</option>
																			<option value="others">Others</option>
																		</select>
																	</div>
																</div>
																<div class="form-group">
																	<label>Address</label>
																		<input type="text" id="address" name="address" 
																				value="" class="form-control" placeholder="" readonly>	
																</div>
																<div class="form-row">
																	<div class="form-group col-md-6">
																		<label>Country of Birth</label>
																		<input type="text" id="country_of_birth" name="country_of_birth" 
																				value="" class="form-control" placeholder="" readonly>	
																	</div>
																	<div class="form-group col-md-6">
																		<label>Home Town</label>
																		<input type="text" id="hometown" name="hometown" 
																				value="" class="form-control" placeholder="" readonly>	
																	</div>
																</div>
																<div class="form-row"> 
																	<!-- <div class="form-group"> -->
																		<div class="form-group col-md-6">
																			<label>Nationality</label>
																			<select id="nationality" name="nationality" class="form-control" onchange="getState(this.value)" disabled>
																				<option value="--" selected>Nationality</option>
																				<option value="nigeria">Nigeria</option>
																				<option value="others">Others</option>
																			</select>
																		</div>
																		<div class="form-group col-md-6">
																			<label>State</label>
																			<div id="states_div">															<input type="text" id="states" name="states" 
																					value="" class="form-control" placeholder="" readonly>					
																			</div>	
																		</div>

																	<!-- </div>	 -->
																</div>																												
																<div class="form-row"> 
																	<div class="form-group col-md-6">
																		<label>LGA</label>
																		<div 		id="LGAs_div">															<input type="text" id="lgas" name="lgas" 
																				value="" class="form-control" placeholder="" readonly>					
																		</div>	
																	</div>
																	<div class="form-group col-md-6">
																		<label>DOB</label>
																		<input type="date" id="DOB" name="DOB" 
																				value="" class="form-control" placeholder="" readonly>
																	</div>																		
																</div>																												
																																											
																<div class="form-row"> 
																	<div class="form-group col-md-6">
																		<label>Gender</label>
																		<select id="gender" name="gender" class="form-control" disabled>
																			<option value="male">Male</option>
																			<option value="female">Female</option>
																		</select>
																	</div>
																	<div class="form-group col-md-6">
																		<label>Blood Group</label>
																		<select id="bloodgroup" name="bloodgroup" class="form-control" disabled>
																			<option value='--'>--</option>
																			<option value='a+'>A+</option>
																			<option value='a-'>A-</option>
																			<option value='b+'>B+</option>
																			<option value='b-'>B-</option>
																			<option value='o+'>O+</option>
																			<option value='o-'>O-</option>
																			<option value='ab+'>AB+</option>
																			<option value='ab-'>AB-</option>
																		</select>
																	</div>																		
																</div>																																																																		
																																											
																<div class="form-row"> 
																	<div class="form-group col-md-6">
																		<label>Genotype</label>
																		<select id="genotype" name="genotype" class="form-control" disabled>
																			<option value='--'>--</option>
																			<option value='aa'>AA</option>
																			<option value='as'>AS</option>
																			<option value='ac'>AC</option>
																			<option value='ss'>SS</option>
																			<option value='sc'>SC</option>
																		</select>
																	</div>
																	<div class="form-group col-md-6">
																		
																	</div>																		
																</div>																											
																<div class="form-group">
																	<label>Allergy</label>
																		<input type="text" id="allergy" name="allergy" 
																				value="" class="form-control" placeholder="" readonly>	
																</div>	
																
																
																<p class="default-color" id="personal-details-section" style="color:red">
																	<u>PARENT/GUARDIAN I DETAILS</u>
																</p>
																<div class="form-row">
																	<div class="form-group col-md-6">
																		<label>Surname</label>
																		<input type="text" id="parent_surname_1" name="parent_surname_1" 
																				value="" class="form-control" placeholder="" readonly>	
																	</div>
																	<div class="form-group col-md-6">
																		<label>Othername</label>
																		<input type="text" id="othernames_1" name="othernames_1" 
																				value="" class="form-control" placeholder="" readonly>	
																	</div>
																</div>

																<div class="form-row">
																	<div class="form-group col-md-6">
																		<label>Occupation</label>
																		<input type="text" id="occupation_1" name="occupation_1" 
																				value="" class="form-control" placeholder="" readonly>	
																	</div>
																	<div class="form-group col-md-6">
																		<label>Relationship with Child</label>
																		<input type="text" id="relationship_to_child_1" name="relationship_to_child_1" 
																				value="" class="form-control" placeholder="" readonly>	
																	</div>
																</div>
																
																<div class="form-row">
																	<div class="form-group col-md-6">
																		<label>Address</label>
																		<input type="text" id="address_1" name="address_1" 
																				value="" class="form-control" placeholder="" readonly>	
																	</div>
																	<div class="form-group col-md-6">
																		<label>Phone number 1</label>
																		<input type="text" id="phone_number_1_1" name="phone_number_1_1" 
																				value="" class="form-control" placeholder="" readonly>	
																	</div>
																</div>	
																


															</div>
															<div class="col-12 col-lg-7">




																<div class="form-row">
																	<div class="form-group col-md-6">
																		<label>Phone number 2</label>
																		<input type="text" id="phone_number_1_2" name="phone_number_1_2" 
																				value="" class="form-control" placeholder="" readonly>	
																	</div>
																	<div class="form-group col-md-6">
																		<label>Email</label>
																		<input type="text" id="email_1" name="email_1" 
																				value="" class="form-control" placeholder="" readonly>	
																	</div>
																</div>	

																<hr>

																<p class="default-color" id="personal-details-section"  style="color:red">
																	<u>PARENT/GUARDIAN II DETAILS</u>
																</p>
																<div class="form-row">
																	<div class="form-group col-md-6">
																		<label>Surname</label>
																		<input type="text" id="parent_surname_2" name="parent_surname_2" 
																				value="" class="form-control" placeholder="" readonly>	
																	</div>
																	<div class="form-group col-md-6">
																		<label>Othername</label>
																		<input type="text" id="othernames_2" name="othernames_2" 
																				value="" class="form-control" placeholder="" readonly>	
																	</div>
																</div>

																<div class="form-row">
																	<div class="form-group col-md-6">
																		<label>Occupation</label>
																		<input type="text" id="occupation_2" name="occupation_2" 
																				value="" class="form-control" placeholder="" readonly>	
																	</div>
																	<div class="form-group col-md-6">
																		<label>Relationship with Child</label>
																		<input type="text" id="relationship_to_child_2" name="relationship_to_child_2" 
																				value="" class="form-control" placeholder="" readonly>	
																	</div>
																</div>
																<hr>
																
																<div class="form-row">
																	<div class="form-group col-md-6">
																		<label>Address</label>
																		<input type="text" id="address_2" name="address_2" 
																				value="" class="form-control" placeholder="" readonly>	
																	</div>
																	<div class="form-group col-md-6">
																		<label>Phone number 1</label>
																		<input type="text" id="phone_number_2_1" name="phone_number_2_1" 
																				value="" class="form-control" placeholder="" readonly>	
																	</div>
																</div>	

																<div class="form-row">
																	<div class="form-group col-md-6">
																		<label>Phone number 2</label>
																		<input type="text" id="phone_number_2_2" name="phone_number_2_2" 
																				value="" class="form-control" placeholder="" readonly>	
																	</div>
																	<div class="form-group col-md-6">
																		<label>Email</label>
																		<input type="text" id="email_2" name="email_2" 
																				value="" class="form-control" placeholder="" readonly>	
																	</div>
																</div>	
																	<hr>											
																	<p class="default-color" id="personal-details-section"  style="color:red">
																		<u>GENERAL HEALTH INFORMATION</u>
																	</p>

																	<div class="form-row"> 
																		<div class="form-group col-md-6">
																			<label>Any special need/physical challenge?</label>
																			<select id="physical_challenge" name="physical_challenge" class="form-control" onchange="" disabled>
																				<option value="yes">Yes</option>
																				<option value="no">No</option>
																			</select>
																		</div>
																		<div class="form-group col-md-6">
																			<label>Physical Challenges</label>
																			<div id="physical_challenge_div">															<input type="text" id="" name="" 
																					value="" class="form-control" placeholder="" readonly>					
																			</div>	
																		</div>
																	</div>																		
																	<div class="form-row"> 
																		<div class="form-group col-md-6">
																			<label>Any medical condition?</label>
																			<select id="medical_condition" name="medical_condition" class="form-control" onchange="" disabled>
																				<option value="yes">Yes</option>
																				<option value="no">No</option>
																			</select>
																		</div>
																		<div class="form-group col-md-6">
																			<label>Medical Challenges</label>
																			<div id="medical_condition_div">															<input type="text" id="" name="" 
																					value="" class="form-control" placeholder="" readonly>					
																			</div>	
																		</div>
																	</div>	
																	
																	<hr>											
																	<p class="default-color" id="personal-details-section"  style="color:red">
																		<u>EMERGENCY CONTACT DETAILS</u>
																	</p>				

																	<div class="form-group">
																		<label>Fullname</label>
																			<input type="text" id="fullname" name="fullname" 
																					value="" class="form-control" placeholder="" readonly>	
																	</div>																		

																	<div class="form-row">
																		<div class="form-group col-md-6">
																			<label>Phone number</label>
																			<input type="text" id="phone_number" name="phone_number" 
																					value="" class="form-control" placeholder="" readonly>	
																		</div>
																		<div class="form-group col-md-6">
																			<label>Relationship with Child</label>
																			<input type="text" id="relationship_to_child_3" name="relationship_to_child_3" 
																					value="" class="form-control" placeholder="" readonly>	
																		</div>
																	</div>

																	<div class="form-group">
																		<label>Address</label>
																		<input type="text" id="address_3" name="address_3" 
																					value="" class="form-control" placeholder="" readonly>	
																	</div>	
																	
																	<hr>
																	<div class="form-row">
																		<div class="form-group col-md-4">
																			<!-- <button type="button" id="btn_create_customer_account" name="btn_create_customer_account" class="btn btn-primary px-3" onclick="createCustomerAccount()">View</button>		 -->

																			<button type="button" id="btn_edit_applicant" name="btn_edit_applicant" class="btn btn-warning px-3" onclick="">Edit</button>

																		</div>
																	</div>	
																</div>																			
																

															</div>
														</div>
													</div>
												</div>
											</div>
										</div>

										<div class="tab-pane fade" id="approvecontribution">
											<div class="card shadow-none border mb-0 radius-15">
												<div class="card-body">
													<div class="form-body">
														<div class="row">
															<div class="col-12 col-lg-5 border-right">
																<label style='font-size:18px'>Inspector's Info</label>
																<hr>	
																<div class="form-group">
																	<label>Fullname</label>
																	<input type="text" id="inspector_form_fullname" name="inspector_form_fullname" value="" class="form-control" placeholder="Firtname Lastname" readonly>
																</div>																
																<div class="form-group">
																	<label>Position</label>
																	<input type="text" id="inspector_form_position" name="inspector_form_position" value="" class="form-control" readonly>
																</div>																
																<div class="form-group">
																	<label>Location to Inspect</label>
																	<input type="text" id="location_to_inspect" name="location_to_inspect" value="" class="form-control" readonly>
																</div>

																<div class="form-group">
																	<label>LGA</label>
																	<input type="text" id="inspector_form_lga" name="inspector_form_lga" value="" class="form-control" readonly>
																</div>																
																<div class="form-group">
																<label>Office Area</label>
																	<input type="text" id="inspector_form_office_area" name="inspector_form_office_area"value="" class="form-control" readonly>
																</div>
															</div>
															<div class="col-12 col-lg-7">									
															<label style='font-size:18px'>Contributor's Info</label>
																<hr>	
															<div class="form-row">
																	<div class="form-group col-md-6">
																		<label>Firstname</label>
																		<input type="text" id="applicant_firstname" name="applicant_firstname" value="" class="form-control" readonly>
																	</div>
																	<div class="form-group col-md-6">
																		<label>Surname</label>
																		<input type="text" id="applicant_surname" name="applicant_surname" value="" class="form-control" readonly>
																	</div>
																</div>

	
																<div class="form-row">
																	<div class="form-group col-md-6">
																		<label>Phone number</label>
																		<input type="text" id="applicant_phone_number" name="applicant_phone_number" value="" class="form-control" placeholder="" readonly>
																	</div>
																	<div class="form-group col-md-6">
																		<label>Type of Business</label>
																		<input type="text" id="applicant_type_of_business" name="applicant_type_of_business" value="" class="form-control" readonly>
																	</div>
																</div>

																<div class="form-row">
																	<div class="form-group col-md-6">
																		<label>Account Number</label>
																		<input type="text" id="contributor_account_number2" name="contributor_account_number2" value="" class="form-control" placeholder="" readonly/>
																	</div>
																	<div class="form-group col-md-6">
																		<label>BVN</label>
																		<input type="text" id="contributor_bvn2" name="contributor_bvn2" value="" class="form-control" readonly/>
																	</div>
																</div>

																<div class="form-row">
																	<div class="form-group col-md-6">
																		<label>Bank Name</label>
																		<input type="text" id="contributor_bank_name2" name="contributor_bank_name2" value="" class="form-control" placeholder="" readonly/>
																	</div>
																	<div class="form-group col-md-6">
																	<label>Address</label>
																	<input type="text" id="applicant_address" name="applicant_address" value="" class="form-control" readonly>
																	</div>
																</div>
																											
																<div class="form-row">
																	<div class="form-group col-md-6">
																		<label>Contribution Amount</label>
																		<input type="text" id="contribution_amount" name="contribution_amount" value="" class="form-control" onkeypress="return restrictAlphabets(event)">							
																	</div>
																	<div class="form-group col-md-6">
																		<label>Date</label>
																		<input type="date" id="contribution_date" name="contribution_date" value="" class="form-control">
																	</div>
																</div>
																<hr>											
																<div class="form-row">
																	<div class="form-group col-md-6">
																	
																	</div>
																	<div class="form-group col-md-6">
																	<button type="button" id="btn_setup_contribution_form" name="btn_setup_contribution_form" class="btn btn-primary px-3" onclick="approveContribution()">Setup Contribution</button>
																	</div>
																</div>																		
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>

									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
			<!--end page-content-wrapper-->
		</div>
		<!--end page-wrapper-->
		<!--start overlay-->
		<div class="overlay toggle-btn-mobile"></div>
		<!--end overlay-->
		<!--Start Back To Top Button--> <a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
		<!--End Back To Top Button-->
		<!--footer -->
		<div class="footer">
			<p class="mb-0">SIP-UP Global Ventures <?php  echo date('Y') ;?> | Developed By : Jaydotnet<a href="" target="_blank"></a>
			</p>
		</div>
		<!-- end footer -->
	</div>
	<!-- end wrapper -->
	<!--start switcher-->
	<div class="switcher-wrapper">
		<div class="switcher-btn"> <i class='bx bx-cog bx-spin'></i>
		</div>
		<div class="switcher-body">
			<h5 class="mb-0 text-uppercase">Theme Customizer</h5>
			<hr/>
			<h6 class="mb-0">Theme Styles</h6>
			<hr/>
			<div class="d-flex align-items-center justify-content-between">
				<div class="custom-control custom-radio">
					<input type="radio" id="darkmode" name="customRadio" class="custom-control-input">
					<label class="custom-control-label" for="darkmode">Dark Mode</label>
				</div>
				<div class="custom-control custom-radio">
					<input type="radio" id="lightmode" name="customRadio" checked class="custom-control-input">
					<label class="custom-control-label" for="lightmode">Light Mode</label>
				</div>
			</div>
			<hr/>
			<div class="custom-control custom-switch">
				<input type="checkbox" class="custom-control-input" id="DarkSidebar">
				<label class="custom-control-label" for="DarkSidebar">Dark Sidebar</label>
			</div>
			<hr/>
			<div class="custom-control custom-switch">
				<input type="checkbox" class="custom-control-input" id="ColorLessIcons">
				<label class="custom-control-label" for="ColorLessIcons">Color Less Icons</label>
			</div>
		</div>
	</div>
	<!--end switcher-->
	<!-- JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="<?php echo base_url() . 'adminresources/js/jquery.min.js'; ?>"></script>
	<script src="<?php echo base_url() . 'adminresources/js/popper.min.js'; ?>"></script>
	<script src="<?php echo base_url() . 'adminresources/js/bootstrap.min.js'; ?>"></script>
	<!--plugins-->
	<script src="<?php echo base_url() . 'adminresources/plugins/simplebar/js/simplebar.min.js'; ?>"></script>
	<script src="<?php echo base_url() . 'adminresources/plugins/metismenu/js/metisMenu.min.js'; ?>"></script>
	<script src="<?php echo base_url() . 'adminresources/plugins/perfect-scrollbar/js/perfect-scrollbar.js'; ?>"></script>
	<!-- App JS -->
	<script src="<?php echo base_url() . 'adminresources/js/app.js'; ?>"></script>
	<?php 
		echo $custom_js; 
	?> 	
	<script>
		$(document).ready(function(){
			baseUrl = window.location.origin+"/agapeintl/";
			var applicationNumber = $("#application_number_hidden").val();
			$.post(baseUrl + "admin/getapplication", "sentString="+applicationNumber).done(function(data){
				if(data != 0 && data != ""){
					data = $.parseJSON(data);
					$("#application_number").val(data[0].application_number);
					$("#surname").val(data[0].applicant_surname);
					$("#firstname").val(data[0].applicant_firstname);
					$("#middlename").val(data[0].applicant_middlename);
					$("#" + data[0].applicant_religion).prop('checked', true);
					$("#address").val(data[0].applicant_address);
					$("#country_of_birth").val(data[0].applicant_country_of_birth);
					$("#hometown").val(data[0].applicant_hometown);
					$("#nationality").val(data[0].applicant_nationality);

					$("#states").attr('disabled', false);
					$("#states").val(data[0].applicant_states);
					$("#lgas").prop('disabled', false);
					$("#lgas").val(data[0].applicant_lgas);


					$("#DOB").val(data[0].applicant_DOB);
					$("#" + data[0].applicant_gender).prop('checked', true);
					$("#bloodgroup").val(data[0].applicant_bloodgroup);
					$("#genotype").val(data[0].applicant_genotype);
					$("#allergy").val(data[0].applicant_allergy);
					$("#parent_surname_1").val(data[0].applicant_parent_surname_1);
					$("#othernames_1").val(data[0].applicant_othernames_1);
					$("#occupation_1").val(data[0].applicant_occupation_1);
					$("#relationship_to_child_1").val(data[0].applicant_relationship_to_child_1);
					$("#address_1").val(data[0].applicant_address_1);
					$("#phone_number_1_1").val(data[0].applicant_phone_number_1_1);
					$("#phone_number_1_2").val(data[0].applicant_phone_number_1_2);
					$("#email_1").val(data[0].applicant_email_1);
					$("#parent_surname_2").val(data[0].applicant_parent_surname_2);
					$("#othernames_2").val(data[0].applicant_othernames_2);
					$("#occupation_2").val(data[0].applicant_occupation_2);
					$("#relationship_to_child_2").val(data[0].applicant_relationship_to_child_2);
					$("#address_2").val(data[0].applicant_address_2);
					$("#phone_number_2_1").val(data[0].applicant_phone_number_2_1);
					$("#phone_number_2_2").val(data[0].applicant_phone_number_2_2);
					$("#email_2").val(data[0].applicant_email_2);
					
					if(data[0].applicant_physical_challenge == ''){
						$("#physical_challenge_no").prop('checked', true);
						let physicalChallengeDivUI = "<div class='col-lg-12 col-md-6 col-sm-12 col-xs-12 form-group'>";
							physicalChallengeDivUI += "<input type='hidden' id='physical_challenge_details_hidden_tag' name='physical_challenge_details_hidden_tag' value='T'>";
						physicalChallengeDivUI += "</div>";
						$("#physical_challenge_div").html('');
						$("#physical_challenge_div").append(physicalChallengeDivUI);
					}else{
						$("#physical_challenge_yes").prop('checked', true);
						let physicalChallengeDivUI = "<div class='col-lg-12 col-md-6 col-sm-12 col-xs-12 form-group'>";
							physicalChallengeDivUI += "<input type='hidden' id='physical_challenge_details_hidden_tag' name='physical_challenge_details_hidden_tag' value='F'>";
							physicalChallengeDivUI += "<textarea class='required form-control' placeholder='If yes, please give details' name='physical_challenge_details' id='physical_challenge_details' rows='3' style='resize: none;' readonly></textarea>";
						physicalChallengeDivUI += "</div>";
						$("#physical_challenge_div").html('');
						$("#physical_challenge_div").append(physicalChallengeDivUI);
						$("#physical_challenge_details").val(data[0].applicant_physical_challenge);
					}
					
					if(data[0].applicant_medical_condition == ''){
						$("#medical_condition_no").prop('checked', true);
						let medicalConditionDivUI = "<div class='col-lg-12 col-md-6 col-sm-12 col-xs-12 form-group'>";
							medicalConditionDivUI += "<input type='hidden' id='medical_condition_details_hidden_tag' name='medical_condition_details_hidden_tag' value='T'>";
						medicalConditionDivUI += "</div>";
						$("#medical_condition_div").html('');
						$("#medical_condition_div").append(medicalConditionDivUI);
					}else{
						$("#medical_condition_yes").prop('checked', true);
						let medicalConditionDivUI = "<div class='col-lg-12 col-md-6 col-sm-12 col-xs-12 form-group'>";
							medicalConditionDivUI += "<input type='hidden' id='medical_condition_details_hidden_tag' name='medical_condition_details_hidden_tag' value='F'>";
							medicalConditionDivUI += "<textarea class='required form-control' placeholder='If yes, please give details' name='medical_condition_details' id='medical_condition_details' rows='3' style='resize: none;' readonly></textarea>";
						medicalConditionDivUI += "</div>";
						$("#medical_condition_div").html('');
						$("#medical_condition_div").append(medicalConditionDivUI);
						$("#medical_condition_details").val(data[0].applicant_medical_condition);
					}

					$("#fullname").val(data[0].applicant_fullname);
					$("#phone_number").val(data[0].applicant_phone_number);
					$("#relationship_to_child_3").val(data[0].applicant_relationship_to_child_3);
					$("#address_3").val(data[0].applicant_address_3);

					let urlToFile = baseUrl + 'applicant_picture/' + data[0].application_number + '.jpg';
					let xhr = new XMLHttpRequest();
					xhr.open('HEAD', urlToFile, false);
					xhr.send();
					if(xhr.status != 404){
						$("#applicantImage").attr('src', baseUrl + 'applicant_picture/' + data[0].application_number + '.jpg' +`?v=${new Date().getTime()}`); 
						$("#applicant_picture_hidden_tag").val('T');
					}else{
						$("#applicantImage").attr('src', baseUrl + 'dminresources/images/avatars/avatar-1.png' + `?v=${new Date().getTime()}`);
						$("#applicant_picture_hidden_tag").val('F');  
					}
				}else{
					//do nothing
					// alert('nothing');
				}
			});	
		});


		
	</script>

</body>
</html>