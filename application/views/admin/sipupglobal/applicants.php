<?php
	// print_r($_SESSION['loan_details']);
	// print_r($_SESSION['userinformation']);
	// die();
?>
<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from codervent.com/syndash/demo/vertical/form-layouts.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 04 Jan 2021 15:11:36 GMT -->
<head>
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
		</header>
		<!--end header-->
		<!--page-wrapper-->
		<div class="page-wrapper">
			<!--page-content-wrapper-->
			<div class="page-content-wrapper">
				<div class="page-content">
					<!--breadcrumb-->
					<div class="page-breadcrumb d-none d-md-flex align-items-center mb-3">
						<div class="breadcrumb-title pr-3">List of Applicant(s)</div>
						<div class="pl-3">
							<nav aria-label="breadcrumb">
								<ol class="breadcrumb mb-0 p-0">
									<li class="breadcrumb-item"><a href="javascript:;"><i class='bx bx-home-alt'></i></a>
									</li>
									<li class="breadcrumb-item active" aria-current="page">Applicant(s)</li>
								</ol>
							</nav>
						</div>
					</div>
			
					<div class="card radius-15">
						<div class="card-body">
							<div class="card-title">
								<h4 class="mb-0">Applicant(s)</h4>
							</div>
							<hr/>
							<div class="table-responsive">
								<table class="table table-striped">
									<thead>
										<tr>
											<th scope="col">#</th>
											<th scope="col">Fullname</th>
											<th scope="col">Gender</th>
										</tr>
									</thead>
									<tbody id="tbl_applicants">
										<!-- <tr>
											<th scope="row">1</th>
											<td>Mark</td>
											<td>Male</td>
											<td>
												<button type='button' id='' name='' class='btn btn-success px-2' onclick='activateAccountingYear(this.id)'>
													Active
												</button>
											</td>
										</tr> -->
									</tbody>
								</table>
							</div>
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
        <?php
            echo $footer;
        ?>
		<!-- end footer -->
	</div>
	<!-- end wrapper -->
	<!--start switcher-->
	<?php 
		// echo $switcher;
	?>
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
            $.get(baseUrl + "admin/fetchapplicants").done(function(data){
                var tableObjBuilder = ""; var recordCount = 0; var btnAction = "";
                if(data != "" && data!=0){
					var data = $.parseJSON(data);
                    for(var i = 0; i < data.length; i++) {
						btnAction = "<button type='button' id='"+data[i].application_number +"' name='"+data[i].application_number +"' class='btn btn-success px-2' onclick='viewApplicant(this.id)'>View</button>";
                        recordCount ++;
						$fullname = data[i].applicant_firstname + " " + data[i].applicant_middlename + " " + data[i].applicant_surname;
                        tableObjBuilder +="<tr>"
                            tableObjBuilder +="<td>"+recordCount+"</td>"
                            tableObjBuilder +="<td>"+$fullname+"</td>"
                            tableObjBuilder +="<td>"+data[i].applicant_gender+"</td>"
                            tableObjBuilder +="<td>"+btnAction+"</td>"
                        tableObjBuilder +="</tr>"
                        btnAction = "";
                    }
                    $("#tbl_applicants").html(tableObjBuilder);
                }else if(data == 0) {
                    // do nothing
                }else{
                    // alert(data);
                }
            });
        });

		function viewApplicant(getApplicationNumber){
			// $.get(baseUrl + "admin/loadapplicantview").done(function(data){
			
			// });
			window.location.href = baseUrl + "admin/loadapplicantview?application_number=" + getApplicationNumber;
		}

    </script>
</body>

</html>