$(document).ready(function () {
    // "use strict";
	// baseUrl = window.location.origin+"/agapeintl/";
	// baseUrl = window.location.origin + "/";
	physicalChallenge = "";
	medicalCondition = "";
	
	var d = new Date();
	var applicationNumberPreText = "AGP_" + d.getFullYear();
	applicationNumberPreText += "_";
	var applicantionNumber = "";

	autoGeneration();
	
	$("#enable_application_number_field").change(function(){
		if(this.checked == true){
			$("#application_number").focus();
			$("#application_number").prop("readonly", false);
			// $("#application_number").val('');	
		}else{
			autoGeneration();
		}
	});	

	function autoGeneration(){
		$("#application_number").prop("readonly", true);
		$.get(baseUrl + "clients/generateapplicantionnumber").done(function(data){
			if(data == 0){
				applicantionNumber = applicationNumberPreText + "000001";
				$("#application_number").val(applicantionNumber);
				$("#application_number_hidden").val(applicantionNumber);
			}else if(data > 0 && data < 9){
				data = parseInt(data) + 1;
				applicantionNumber = applicationNumberPreText + "00000" + data;
				$("#application_number").val(applicantionNumber);
				$("#application_number_hidden").val(applicantionNumber);
			}else if(data >= 9 && data < 99){
				data = parseInt(data) + 1;
				applicantionNumber = applicationNumberPreText + "0000" + data;
				$("#application_number").val(applicantionNumber);
				$("#application_number_hidden").val(applicantionNumber);
			}else if(data >= 99 && data < 999){
				data = parseInt(data) + 1;
				applicantionNumber = applicationNumberPreText + "000" + data;
				$("#application_number").val(applicantionNumber);
				$("#application_number_hidden").val(applicantionNumber);
			}else if(data >= 999 && data < 9999){
				data = parseInt(data) + 1;
				applicantionNumber = applicationNumberPreText + "00" + data;
				$("#application_number").val(applicantionNumber);
				$("#application_number_hidden").val(applicantionNumber);
			}else if(data >= 9999 && data < 99999){
				data = parseInt(data) + 1;
				applicantionNumber = applicationNumberPreText + "0" + data;
				$("#application_number").val(applicantionNumber);
				$("#application_number_hidden").val(applicantionNumber);
			}else{
				alert("Account number exhausted, please contact system administrator");							
			}
		});	
	}

	$("#applicantImage").focus();

});


function getState(getCountry){
	if(getCountry != '--'){
		if(getCountry == 'others'){
			var stateInput = "<input autocomplete='off' type='text' class='required form-control' id='states' name='states' style='height:50px;' placeholder='State'>";
			stateInput += "<input type='hidden' class='form-control' id='otherstatesTag' name='otherstatesTag' value='T'>";
			$("#states_div").html('');
			$("#states_div").append(stateInput);

			var LGAInput = "<input autocomplete='off' type='text' class='required form-control' id='lgas' name='lgas' required style='height:50px;' placeholder='LGA of Origin'>";
			LGAInput += "<input type='hidden' class='form-control' id='otherlgasTag' name='otherlgasTag' value='T'>";
			$("#LGAs_div").html('');
			$("#LGAs_div").append(LGAInput);
			
		}else{
			$.get(baseUrl + "clients/getState").done(function(data){
				if(data !='') {
					$("#states_div").html('');
					$("#states_div").html(data);

					var LGAInput = "<input autocomplete='off' class='required form-control' name='lgas' id='lgas' placeholder='LGA of Origin' type='text' disabled>";
					$("#LGAs_div").html('');
					$("#LGAs_div").append(LGAInput);	

				}else {
					var stateInput = "<input autocomplete='off' class='required form-control' name='states' id='states' placeholder='State' type='text' disabled>";
					$stateInput += "<input type='hidden' class='form-control' id='otherstatesTag' name='otherstatesTag' value='F'>";
					$("#states_div").html('');
					$("#states_div").append(stateInput);

					var LGAInput = "<input autocomplete='off' class='required form-control' name='lgas' id='lgas' placeholder='LGA of Origin' type='text' disabled>";
					$("#LGAs_div").html('');
					$("#LGAs_div").append(LGAInput);					
			
					// var LGAInput = "<input autocomplete='off' class='required form-control' name='lgas' id='lgas' placeholder='LGA of Origin' type='text' disabled>";
					// $LGAInput += "<input type='hidden' class='form-control' id='otherlgasTag' name='otherlgasTag' value='F'>";

					// $("#LGAs_div").html('');
					// $("#LGAs_div").append(LGAInput);	
				}
			});
		}
	}else{
		var stateInput = "<input autocomplete='off' class='required form-control' name='states' id='states' placeholder='State' type='text' disabled>";
		stateInput += "<input type='hidden' class='form-control' id='otherstatesTag' name='otherstatesTag' value='F'>";
		$("#states_div").html('');
		$("#states_div").append(stateInput);	

		var LGAInput = "<input autocomplete='off' type='text' class='required form-control' id='lgas' name='lgas' required style='height:50px;' placeholder='LGA of Origin' disabled>";
		LGAInput += "<input type='hidden' class='form-control' id='otherlgasTag' name='otherlgasTag' value='F'>";
		$("#LGAs_div").html('');
		$("#LGAs_div").append(LGAInput);		
	}
}

// get LGAs
function getLGAs(getState){
	if(getState != '--'){
		$.post(baseUrl + "clients/getLGAs", 'sentState=' + getState).done(function(data){
			if(data !='') {
				$("#LGAs_div").html('');
				$("#LGAs_div").html(data);
			}else {
				var LGAInput = "<input autocomplete='off' class='required form-control' name='lgas' id='lgas' placeholder='LGA of Origin' type='text' disabled>";
				$LGAInput += "<input type='hidden' class='form-control' id='otherlgasTag' name='otherlgasTag' value='F'>";
				$("#LGAs_div").html('');
				$("#LGAs_div").append(LGAInput);	
			}
		});
	}else{
		var LGAInput = "<input autocomplete='off' class='required form-control' name='lgas' id='lgas' placeholder='LGA of Origin' type='text' disabled>";
		$LGAInput += "<input type='hidden' class='form-control' id='otherlgasTag' name='otherlgasTag' value='F'>";
		$("#LGAs_div").html('');
		$("#LGAs_div").append(LGAInput);	
	}		
}

function physicalChallengeRadioButton(){
	// let physicalChallenge = ""; 
	var physicalChallengeStatus = false; 
	physicalChallengeStatus = document.getElementById("physical_challenge_yes").checked; 
	if(physicalChallengeStatus == true){
		physicalChallenge = "yes";
		let physicalChallengeDivUI = "<div class='col-lg-12 col-md-6 col-sm-12 col-xs-12 form-group'>";
				physicalChallengeDivUI += "<input type='hidden' id='physical_challenge_details_hidden_tag' name='physical_challenge_details_hidden_tag' value='F'>";
				physicalChallengeDivUI += "<textarea class='required form-control' placeholder='If yes, please give details' name='physical_challenge_details' id='physical_challenge_details' rows='3' style='resize: none;'></textarea>";
			physicalChallengeDivUI += "</div>";
		$("#physical_challenge_div").html('');
		$("#physical_challenge_div").append(physicalChallengeDivUI);
	}else{
		physicalChallengeStatus = document.getElementById("physical_challenge_no").checked; 
		let physicalChallengeDivUI = "<div class='col-lg-12 col-md-6 col-sm-12 col-xs-12 form-group'>";
			physicalChallengeDivUI += "<input type='hidden' id='physical_challenge_details_hidden_tag' name='physical_challenge_details_hidden_tag' value='T'>";		
			// physicalChallengeDivUI += "<textarea class='required hidden form-control' placeholder='empty text area' name='physical_challenge_details' id='physical_challenge_details' rows='3' style='resize: none;' value='empty value'></textarea>";
		physicalChallengeDivUI += "</div>";		
		if(physicalChallengeStatus == true){
			physicalChallenge = "no";
			$("#physical_challenge_div").html('');
			$("#physical_challenge_div").append(physicalChallengeDivUI);
		}else{
			physicalChallenge = "no";
			$("#physical_challenge_div").html('');
			$("#physical_challenge_div").append(physicalChallengeDivUI);
		}
	}
}

function medicalConditionRadioButton(){
	// let medicalCondition = ""; 
	var medicalConditionStatus = false; 
	medicalConditionStatus = document.getElementById("medical_condition_yes").checked; 
	if(medicalConditionStatus == true){
		medicalCondition = "yes";
		let medicalConditionDivUI = "<div class='col-lg-12 col-md-6 col-sm-12 col-xs-12 form-group'>";
				medicalConditionDivUI += "<input type='hidden' id='medical_condition_details_hidden_tag' name='medical_condition_details_hidden_tag' value='F'>";
				medicalConditionDivUI += "<textarea class='required form-control' placeholder='If yes, please give details' name='medical_condition_details' id='medical_condition_details' rows='3' style='resize: none;'></textarea>";
			medicalConditionDivUI += "</div>";
		$("#medical_condition_div").html('');
		$("#medical_condition_div").append(medicalConditionDivUI);
	}else{
		medicalConditionStatus = document.getElementById("medical_condition_no").checked; 
		let medicalConditionDivUI = "<div class='col-lg-12 col-md-6 col-sm-12 col-xs-12 form-group'>";
			medicalConditionDivUI += "<input type='hidden' id='medical_condition_details_hidden_tag' name='medical_condition_details_hidden_tag' value='T'>";
			// medicalConditionDivUI += "<textarea class='required hidden form-control' placeholder='empty text area' name='medical_condition_details' id='medical_condition_details' rows='3' style='resize: none;' value='empty value'></textarea>";
		medicalConditionDivUI += "</div>";			
		if(medicalConditionStatus == true){
			medicalCondition = "no";
			$("#medical_condition_div").html('');
			$("#medical_condition_div").append(medicalConditionDivUI);
		}else{
			medicalCondition = "no";
			$("#medical_condition_div").html('');
			$("#medical_condition_div").append(medicalConditionDivUI);			
		}
	}
}


$("#submitApplication").click(function(){
    // assigning form values to variables
    let applicant_image_hidden_tag  = $("#applicant_image_hidden_tag").val();
    let application_number          = $("#application_number").val();
    let surname          			= $("#surname").val().trim();
    let firstname          			= $("#firstname").val().trim();
    let middlename          		= $("#middlename").val().trim();
	let address          			= $("#address").val().trim();
	let country_of_birth          	= $("#country_of_birth").val().trim();
	let hometown          			= $("#hometown").val().trim();
	let nationality          		= $("#nationality").val();
	let states          			= $("#states").val();
	let lgas          				= $("#lgas").val();
	let DOB          				= $("#DOB").val();
	let bloodgroup          		= $("#bloodgroup").val();
	let genotype          			= $("#genotype").val();
	let allergy          			= $("#allergy").val().trim();
	let parent_surname_1          	= $("#parent_surname_1").val().trim();
	let othernames_1          		= $("#othernames_1").val().trim();
	let occupation_1          		= $("#occupation_1").val().trim();
	let relationship_to_child_1     = $("#relationship_to_child_1").val().trim();
	let address_1          			= $("#address_1").val().trim();
	let phone_number_1_1          	= $("#phone_number_1_1").val().trim();
	let phone_number_1_2          	= $("#phone_number_1_2").val().trim();
	let email_1          			= $("#email_1").val().trim();
	let parent_1_image_hidden_tag   = $("#parent_1_image_hidden_tag").val();
	let parent_surname_2          	= $("#parent_surname_2").val().trim();
	let othernames_2          		= $("#othernames_2").val().trim();
	let occupation_2          		= $("#occupation_2").val().trim();
	let relationship_to_child_2     = $("#relationship_to_child_2").val().trim();
	let address_2          			= $("#address_2").val().trim();
	let phone_number_2_1          	= $("#phone_number_2_1").val().trim();
	let phone_number_2_2          	= $("#phone_number_2_2").val().trim();
	let email_2          			= $("#email_2").val().trim();
	let parent_2_image_hidden_tag   = $("#parent_2_image_hidden_tag").val();
	let fullname          			= $("#fullname").val().trim();
	let phone_number          		= $("#phone_number").val().trim();
	let relationship_to_child_3     = $("#relationship_to_child_3").val().trim();
	let address_3          			= $("#address_3").val().trim();


	let validateCounterTag = 0;

	//validate religion
	var religion = ""; var religionStatus = false; 
	religionStatus = document.getElementById("christianity").checked; 
	if(religionStatus == true){
		religion = "christianity";
		validateCounterTag += 1;
		$("#religion_error").attr('hidden', true);  
	}else{
		religionStatus = document.getElementById("islam").checked; 
		if(religionStatus == true){
			religion = "islam";
			validateCounterTag += 1;
			$("#religion_error").attr('hidden', true);  
		}else{
			religionStatus = document.getElementById("others").checked; 
			if(religionStatus == true){
				religion = "others";
				validateCounterTag += 1;
				$("#religion_error").attr('hidden', true);  
			}else{
				religion = "nill";
				validateCounterTag = 0;
				$("#religion_error").show();
				// $("#religion_error").fadeOut();  
				//$(window).scrollTop(0);				
			}
		}
	}

	//validate gender
	let gender = ""; var sexStatus = false; 
	sexStatus = document.getElementById("male").checked; 
	if(sexStatus == true){
		gender = "male";
		validateCounterTag += 1;
		$("#gender_error").attr('hidden', true);  
	}else{
		sexStatus = document.getElementById("female").checked; 
		if(sexStatus == true){
			gender = "female";
			validateCounterTag += 1;
			$("#gender_error").attr('hidden', true);  
		}else{
			gender = "nill";
			validateCounterTag = 0;
			$("#gender_error").show();
			// $("#gender_error").fadeOut();  
			//$(window).scrollTop(0);			
		}
	}

    //check form inputs is properly filled
    if(applicant_image_hidden_tag == 'F' ){
        validateCounterTag = 0;
        $("#applicantImage").focus();
        $("#applicantImage_error").show();
        // $("#applicantImage_error").fadeOut();  
        //$(window).scrollTop(0);
    }else{
        validateCounterTag += 1;
		$("#applicantImage_error").attr('hidden', true);  
    }

    if(application_number == '' ){
        validateCounterTag = 0;
        $("#application_number").focus();
        $("#application_number_error").show();
        // $("#application_number_error").fadeOut();  
        //$(window).scrollTop(0);
    }else{
        validateCounterTag += 1;
		$("#application_number_error").attr('hidden', true);  
    }

    if(surname == '' ){
        validateCounterTag = 0;
        $("#surname").focus();
        $("#surname_error").show();
        // $("#surname_error").fadeOut();  
        //$(window).scrollTop(0);
    }else{
        validateCounterTag += 1;
		$("#surname_error").attr('hidden', true);  
    }

    if(surname == '' ){
        validateCounterTag = 0;
        $("#surname").focus();
        $("#surname_error").show();
        // $("#surname_error").fadeOut();  
        //$(window).scrollTop(0);
    }else{
        validateCounterTag += 1;
		$("#surname_error").attr('hidden', true);  
    }

    if(firstname == '' ){
        validateCounterTag = 0;
        $("#firstname").focus();
        $("#firstname_error").show();
        // $("#firstname_error").fadeOut();  
        //$(window).scrollTop(0);
    }else{
        validateCounterTag += 1;
		$("#firstname_error").attr('hidden', true);  
    }

    if(middlename == '' ){
        validateCounterTag = 0;
        $("#middlename").focus();
        $("#middlename_error").show();
        // $("#middlename_error").fadeOut();  
        //$(window).scrollTop(0);
    }else{
        validateCounterTag += 1;
		$("#middlename_error").attr('hidden', true);  
    }


    if(address == '' ){
        validateCounterTag = 0;
        $("#address").focus();
        $("#address_error").show();
        // $("#address_error").fadeOut();  
        // //$(window).scrollTop(0);
    }else{
        validateCounterTag += 1;
		$("#address_error").attr('hidden', true);  
    }

    if(country_of_birth == '' ){
        validateCounterTag = 0;
        $("#country_of_birth").focus();
        $("#country_of_birth_error").show();
        // $("#country_of_birth_error").fadeOut();  
        //$(window).scrollTop(0);
    }else{
        validateCounterTag += 1;
		$("#country_of_birth_error").attr('hidden', true);  
    }

    if(hometown == '' ){
        validateCounterTag = 0;
        $("#hometown").focus();
        $("#hometown_error").show();
        // $("#hometown_error").fadeOut();  
        //$(window).scrollTop(0);
    }else{
        validateCounterTag += 1;
		$("#hometown_error").attr('hidden', true);  
    }

    if(nationality == '--' ){
        validateCounterTag = 0;
        $("#nationality").focus();
        $("#nationality_error").show();
        // $("#nationality_error").fadeOut();  
        //$(window).scrollTop(0);
    }else{
        validateCounterTag += 1;
		$("#nationality_error").attr('hidden', true);  
    }

    if(states == '--' ){
        validateCounterTag = 0;
        $("#states").focus();
        $("#states_error").show();
        // $("#states_error").fadeOut();  
        //$(window).scrollTop(0);
    }else{
        validateCounterTag += 1;
		$("#states_error").attr('hidden', true);  
    }

    if(lgas == '--' ){
        validateCounterTag = 0;
        $("#lgas").focus();
        $("#lgas_error").show();
        // $("#lgas_error").fadeOut();  
        //$(window).scrollTop(0);
    }else{
        validateCounterTag += 1;
		$("#lgas_error").attr('hidden', true);  
    }

    if(DOB == '' ){
        validateCounterTag = 0;
        $("#DOB").focus();
        $("#DOB_error").show();
        // $("#DOB_error").fadeOut();  
        //$(window).scrollTop(0);
    }else{
        validateCounterTag += 1;
		$("#DOB_error").attr('hidden', true);  
    }

    if(bloodgroup == '--' ){
        validateCounterTag = 0;
        $("#bloodgroup").focus();
        $("#bloodgroup_error").show();
        // $("#bloodgroup_error").fadeOut();  
        //$(window).scrollTop(0);
    }else{
        validateCounterTag += 1;
		$("#bloodgroup_error").attr('hidden', true);  
    }

    if(genotype == '--' ){
        validateCounterTag = 0;
        $("#genotype").focus();
        $("#genotype_error").show();
        // $("#genotype_error").fadeOut();  
        //$(window).scrollTop(0);
    }else{
        validateCounterTag += 1;
		$("#genotype_error").attr('hidden', true);  
    }

    if(allergy == '' ){
        validateCounterTag = 0;
        $("#allergy").focus();
        $("#allergy_error").show();
        // $("#allergy_error").fadeOut();  
        //$(window).scrollTop(0);
    }else{
        validateCounterTag += 1;
		$("#allergy_error").attr('hidden', true);  
    }

    if(parent_surname_1 == '' ){
        validateCounterTag = 0;
        $("#parent_surname_1").focus();
        $("#parent_surname_1_error").show();
        // $("#parent_surname_1_error").fadeOut();  
        //$(window).scrollTop(0);
    }else{
        validateCounterTag += 1;
		$("#parent_surname_1_error").attr('hidden', true);  
    }

    if(othernames_1 == '' ){
        validateCounterTag = 0;
        $("#othernames_1").focus();
        $("#othernames_1_error").show();
        // $("#othernames_1_error").fadeOut();  
        //$(window).scrollTop(0);
    }else{
        validateCounterTag += 1;
		$("#othernames_1_error").attr('hidden', true);  
    }

    if(occupation_1 == '' ){
        validateCounterTag = 0;
        $("#occupation_1").focus();
        $("#occupation_1_error").show();
        // $("#occupation_1_error").fadeOut();  
        //$(window).scrollTop(0);
    }else{
        validateCounterTag += 1;
		$("#occupation_1_error").attr('hidden', true);  
    }

    if(relationship_to_child_1 == '' ){
        validateCounterTag = 0;
        $("#relationship_to_child_1").focus();
        $("#relationship_to_child_1_error").show();
        // $("#relationship_to_child_1_error").fadeOut();  
        //$(window).scrollTop(0);
    }else{
        validateCounterTag += 1;
		$("#relationship_to_child_1_error").attr('hidden', true);  
    }

    if(address_1 == '' ){
        validateCounterTag = 0;
        $("#address_1").focus();
        $("#address_1_error").show();
        // $("#address_1_error").fadeOut();  
        //$(window).scrollTop(0);
    }else{
        validateCounterTag += 1;
		$("#address_1_error").attr('hidden', true);  
    }

    if(phone_number_1_1 == '' ){
        validateCounterTag = 0;
        $("#phone_number_1_1").focus();
        $("#phone_number_1_1_error").show();
        // $("#phone_number_1_1_error").fadeOut();  
        //$(window).scrollTop(0);
    }else{
        validateCounterTag += 1;
		$("#phone_number_1_1_error").attr('hidden', true);  
    }

    if(phone_number_1_2 == '' ){
        validateCounterTag = 0;
        $("#phone_number_1_2").focus();
        $("#phone_number_1_2_error").show();
        // $("#phone_number_1_2_error").fadeOut();  
        //$(window).scrollTop(0);
    }else{
        validateCounterTag += 1;
		$("#phone_number_1_2_error").attr('hidden', true); 
    }

    if(email_1 == '' ){
        validateCounterTag = 0;
        $("#email_1").focus();
        $("#email_1_error").show();
        // $("#email_1_error").fadeOut();  
        //$(window).scrollTop(0);
    }else{
        // validate email
        var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
        if(email_1.match(mailformat)) { 
			$("#email_1_error").attr('hidden', true); 
			validateCounterTag += 1;
        }else{
			validateCounterTag = 0;
			$("#email_1").focus();
            $("#email_1_error").text('email format is required');
			$("#email_1_error").show();			
        }  		
    }

    if(parent_1_image_hidden_tag == 'F' ){
        validateCounterTag = 0;
        $("#parent1Image").focus();
        $("#parentImage1_error").show();
        // $("#parentImage1_error").fadeOut();  
        //$(window).scrollTop(0);
    }else{
        validateCounterTag += 1;
		$("#parentImage1_error").attr('hidden', true); 
    }

    if(parent_surname_2 == '' ){
        validateCounterTag = 0;
        $("#parent_surname_2").focus();
        $("#parent_surname_2_error").show();
        // $("#parent_surname_2_error").fadeOut();  
        //$(window).scrollTop(0);
    }else{
        validateCounterTag += 1;
		$("#parent_surname_2_error").attr('hidden', true); 
    }

    if(othernames_2 == '' ){
        validateCounterTag = 0;
        $("#othernames_2").focus();
        $("#othernames_2_error").show();
        // $("#othernames_2_error").fadeOut();  
        //$(window).scrollTop(0);
    }else{
        validateCounterTag += 1;
		$("#othernames_2_error").attr('hidden', true); 
    }

    if(occupation_2 == '' ){
        validateCounterTag = 0;
        $("#occupation_2").focus();
        $("#occupation_2_error").show();
        // $("#occupation_2_error").fadeOut();  
        //$(window).scrollTop(0);
    }else{
        validateCounterTag += 1;
		$("#occupation_2_error").attr('hidden', true); 
    }

    if(relationship_to_child_2 == '' ){
        validateCounterTag = 0;
        $("#relationship_to_child_2").focus();
        $("#relationship_to_child_2_error").show();
        // $("#relationship_to_child_2_error").fadeOut();  
        //$(window).scrollTop(0);
    }else{
        validateCounterTag += 1;
		$("#relationship_to_child_2_error").attr('hidden', true); 
    }

    if(address_2 == '' ){
        validateCounterTag = 0;
        $("#address_2").focus();
        $("#address_2_error").show();
        // $("#address_2_error").fadeOut();  
        //$(window).scrollTop(0);
    }else{
        validateCounterTag += 1;
		$("#address_2_error").attr('hidden', true); 
    }

    if(phone_number_2_1 == '' ){
        validateCounterTag = 0;
        $("#phone_number_2_1").focus();
        $("#phone_number_2_1_error").show();
        // $("#phone_number_2_1_error").fadeOut();  
        //$(window).scrollTop(0);
    }else{
        validateCounterTag += 1;
		$("#phone_number_2_1_error").attr('hidden', true); 
    }

    if(phone_number_2_2 == '' ){
        validateCounterTag = 0;
        $("#phone_number_2_2").focus();
        $("#phone_number_2_2_error").show();
        // $("#phone_number_2_2_error").fadeOut();  
        //$(window).scrollTop(0);
    }else{
        validateCounterTag += 1;
		$("#phone_number_2_2_error").attr('hidden', true); 
    }

    if(email_2 == '' ){
        validateCounterTag = 0;
        $("#email_2").focus();
        $("#email_2_error").show();
        // $("#email_2_error").fadeOut();  
        //$(window).scrollTop(0);
    }else{
        var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
        if(email_2.match(mailformat)) { 
			$("#email_2_error").attr('hidden', true); 
			validateCounterTag += 1;
        }else{
			validateCounterTag = 0;
			$("#email_2").focus();
            $("#email_2_error").text('email format is required');
			$("#email_2_error").show();			
        }  				
    }

    if(parent_2_image_hidden_tag == 'F' ){
        validateCounterTag = 0;
        $("#parent2Image").focus();
        $("#parent2Image_error").show();
        // $("#parent2Image_error").fadeOut();  
        //$(window).scrollTop(0);
    }else{
        validateCounterTag += 1;
		$("#parent2Image_error").attr('hidden', true); 
    }

	// physicalChallenge          		= physicalChallenge;
	// let physical_challenge_details  = "";
	// if(physical_challenge_details_hidden_tag = "T"){
	// 	physical_challenge_details = "";
	// }else{
	// 	physical_challenge_details  = $("#physical_challenge_details").val().trim();
	// }

	// medicalCondition          		= medicalCondition;
	// let medical_condition_details  = "";
	// if(medical_condition_details_hidden_tag = "T"){
	// 	medical_condition_details  = "";
	// }else{
	// 	medical_condition_details   = $("#medical_condition_details").val().trim();
	// }


    if(physicalChallenge == 'no' ){   
        validateCounterTag += 1;
		$("#physical_challenge_details_error").attr('hidden', true); 
    }else{
		physical_challenge_details = $("#physical_challenge_details").val();
		if(physical_challenge_details == ""){
			validateCounterTag = 0;
			$("#physical_challenge_details").focus();
			$("#physical_challenge_details_error").show();
			// $("#physical_challenge_details_error").fadeOut();  
			// window.scroll(0, 170);  
		}else{
			validateCounterTag += 1;
			$("#physical_challenge_details_error").attr('hidden', true); 
		}
    }

    if(medicalCondition == 'no' ){   
        validateCounterTag += 1;
		$("#medical_condition_details_error").attr('hidden', true); 
    }else{
		medical_condition_details = $("#medical_condition_details").val();
		if(medical_condition_details == ""){
			validateCounterTag = 0;
			$("#medical_condition_details").focus();
			$("#medical_condition_details_error").show();
			// $("#medical_condition_details_error").fadeOut();  
			// window.scroll(0, 170);  
		}else{
			validateCounterTag += 1;
			// $("#medical_condition_details_error").css('color', 'blue'); 
			$("#medical_condition_details_error").attr('hidden', true); 
		}
    }


    if(fullname == '' ){
        validateCounterTag = 0;
        $("#fullname").focus();
        $("#fullname_error").show();
        // $("#fullname_error").fadeOut();  
        //$(window).scrollTop(0);
    }else{
        validateCounterTag += 1;
		$("#fullname_error").attr('hidden', true); 
    }	

    if(phone_number == '' ){
        validateCounterTag = 0;
        $("#phone_number").focus();
        $("#phone_number_error").show();
        // $("#phone_number_error").fadeOut();  
        //$(window).scrollTop(0);
    }else{
        validateCounterTag += 1;
		$("#phone_number_error").attr('hidden', true); 
    }	

    if(relationship_to_child_3 == '' ){
        validateCounterTag = 0;
        $("#relationship_to_child_3").focus();
        $("#relationship_to_child_3_error").show();
        // $("#relationship_to_child_3_error").fadeOut();  
        //$(window).scrollTop(0);
    }else{
        validateCounterTag += 1;
		$("#relationship_to_child_3_error").attr('hidden', true); 
    }	

    if(address_3 == '' ){
        validateCounterTag = 0;
        $("#address_3").focus();
        $("#address_3_error").show();
        // $("#address_3_error").fadeOut();  
        //$(window).scrollTop(0);
    }else{
        validateCounterTag += 1;
		$("#address_3_error").attr('hidden', true); 
    }	

	if(validateCounterTag > 41){
		var formdata = new FormData($("#admissionform")[0]);
		var response = confirm("Are you sure you want to submit this form?");
		var formurl =baseUrl + "clients/submitapplication";
		if(response == true){
			$.ajax({
				url: formurl,
				type: 'POST',
				data: formdata,
				async: false,
				cache: false,
				contentType: false,
				processData: false,
				success: function (data){ 
					if(data == 1){
						alert("Admission successfully saved");
						clearFields();
						$("#application_number").focus('');
					}else if(data == 2){
						alert("Admission record successfully updated");
						clearFields();
						$("#application_number").focus('');
					}else{
						alert("Error occured trying to Insert/Update record");
					}
				}
			}); 
		}		
	}else{
		alert("One or more fields is empty, please kindly fill it");
		window.scroll(0, 170);  
	}
	
});

function clearFields(){
	$("#applicant_image_hidden_tag").val('F');
	$("#applicantImage").val('');
	$("#applicant_image").attr('src', baseUrl + 'resources/images/passport_dummy_image.png' + `?v=${new Date().getTime()}`); 

	// $("#application_number").val('');
	// $("#application_number_hidden").val('');
	$("#enable_application_number_field").prop('checked', false);

	$("#surname").val('');
	$("#firstname").val('');
	$("#middlename").val('');

	$("#christianity").prop("checked", false);
	$("#islam").prop("checked", false);
	$("#others").prop("checked", false);

	$("#address").val('');
	$("#country_of_birth").val('');
	$("#hometown").val('');
	$("#nationality").val('');
	$("#states").val('');
	$("#lgas").val('');
	$("#DOB").val('');

	$("#male").prop('checked', false);
	$("#female").prop('checked', false);

	$("#bloodgroup").val('');
	$("#genotype").val('');
	$("#allergy").val('');
	$("#parent_surname_1").val('');
	$("#othernames_1").val('');
	$("#occupation_1").val('');
	$("#relationship_to_child_1").val('');
	$("#address_1").val('');
	$("#phone_number_1_1").val('');
	$("#phone_number_1_2").val('');
	$("#email_1").val('');

	$("#parent_1_image_hidden_tag").val('F');
	$("#parent1Image").val('');
	$("#parent_1_image").attr('src', baseUrl + 'resources/images/passport_dummy_image.png' + `?v=${new Date().getTime()}`); 

	$("#parent_surname_2").val('');
	$("#othernames_2").val('');
	$("#occupation_2").val('');
	$("#relationship_to_child_2").val('');
	$("#address_2").val('');
	$("#phone_number_2_1").val('');
	$("#phone_number_2_2").val('');
	$("#email_2").val('');

	$("#parent_2_image_hidden_tag").val('F');
	$("#parent2Image").val('');
	$("#parent_2_image").attr('src', baseUrl + 'resources/images/passport_dummy_image.png' + `?v=${new Date().getTime()}`); 
	
	$("#physical_challenge_yes").prop('checked', false);
	$("#physical_challenge_no").prop('checked', false);
	// $("#physical_challenge_details_hidden_tag").val('F');
	$("#physical_challenge_div").html('');
	
	$("#medical_condition_yes").prop('checked', false);
	$("#medical_condition_no").prop('checked', false);
	// $("#medical_condition_details_hidden_tag").val('F');
	$("#medical_condition_div").html('');

	$("#fullname").val('');
	$("#phone_number").val('');
	$("#relationship_to_child_3").val('');
	$("#address_3").val('');

}

function getApplication(getString){
	// alert(getString);
	var sentString = getString;
	$.post(baseUrl + "clients/getapplication", "sentString="+sentString).done(function(data){
		if(data != 0 && data != ""){
			data = $.parseJSON(data);
			console.log(data);
	
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
					physicalChallengeDivUI += "<textarea class='required form-control' placeholder='If yes, please give details' name='physical_challenge_details' id='physical_challenge_details' rows='3' style='resize: none;'></textarea>";
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
					medicalConditionDivUI += "<textarea class='required form-control' placeholder='If yes, please give details' name='medical_condition_details' id='medical_condition_details' rows='3' style='resize: none;'></textarea>";
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
				$("#applicant_image").attr('src', baseUrl + 'applicant_picture/' + data[0].application_number + '.jpg' +`?v=${new Date().getTime()}`); 
				$("#applicant_image_hidden_tag").val('T');

				$("#parent_1_image").attr('src', baseUrl + 'parent1_picture/' + data[0].application_number + '.jpg' +`?v=${new Date().getTime()}`); 
				$("#parent_1_image_hidden_tag").val('T');

				$("#parent_2_image").attr('src', baseUrl + 'parent2_picture/' + data[0].application_number + '.jpg' +`?v=${new Date().getTime()}`); 
				$("#parent_2_image_hidden_tag").val('T');
			}else{
				$("#applicant_image").attr('src', baseUrl + 'resources/images/passport_dummy_image.png' + `?v=${new Date().getTime()}`);  

				$("#parent_1_image").attr('src', baseUrl + 'resources/images/passport_dummy_image.png' + `?v=${new Date().getTime()}`);  

				$("#parent_2_image").attr('src', baseUrl + 'resources/images/passport_dummy_image.png' + `?v=${new Date().getTime()}`);  
			}
		}else{
			//do nothing
			// alert('nothing');
		}
	});			
}	

//to preview image
function preveiwApplicantImage(getImage)
{
	// alert('fdfd');
	var fileType = document.getElementById('applicantImage').files[0].type;
	var fileSize = document.getElementById('applicantImage').files[0].size;
	/*******CONVERT IMAGE FILE TO KILOBYTE*******/
	var fileSize = Math.floor(fileSize/(1024));
	if (getImage.files && getImage.files[0]) 
	{
		if(fileType == 'image/jpg' || fileType == 'image/jpeg')
		{
			/******IMAGE SIZE MUST NOT BE MORE THAN 1 MB******/
			if(fileSize<1025)    
			{
				var imgReader = new FileReader();
				imgReader.onload = function(e) 
				{
					$('#applicant_image').attr('src', e.target.result);
					$("#applicant_image_hidden_tag").val("T");
				}
				imgReader.readAsDataURL(getImage.files[0]);       
			}
			else
			{
				alert("Image Size too large for Upload!");
				$("#applicantImage").val('');
			}
		}  
		else
		{
			alert("File format not Supported/Allowed for Upload!, Please Choose another.");
			$("#applicantImage").val('');
		}
	}
}

//to preview image
function preveiwImageParent1Image(getImage)
{
	// alert('fdfd');
	var fileType = document.getElementById('parent1Image').files[0].type;
	var fileSize = document.getElementById('parent1Image').files[0].size;
	/*******CONVERT IMAGE FILE TO KILOBYTE*******/
	var fileSize = Math.floor(fileSize/(1024));
	if (getImage.files && getImage.files[0]) 
	{
		if(fileType == 'image/jpg' || fileType == 'image/jpeg')
		{
			/******IMAGE SIZE MUST NOT BE MORE THAN 1 MB******/
			if(fileSize<1025)    
			{
				var imgReader = new FileReader();
				imgReader.onload = function(e) 
				{
					$('#parent_1_image').attr('src', e.target.result);
					$("#parent_1_image_hidden_tag").val("T");
				}
				imgReader.readAsDataURL(getImage.files[0]);       
			}
			else
			{
				alert("Image Size too large for Upload!");
				$("#parent1Image").val('');
			}
		}  
		else
		{
			alert("File format not Supported/Allowed for Upload!, Please Choose another.");
			$("#parent1Image").val('');
		}
	}
}

//to preview image
function preveiwParent2Image(getImage)
{
	// alert('fdfd');
	var fileType = document.getElementById('parent2Image').files[0].type;
	var fileSize = document.getElementById('parent2Image').files[0].size;
	/*******CONVERT IMAGE FILE TO KILOBYTE*******/
	var fileSize = Math.floor(fileSize/(1024));
	if (getImage.files && getImage.files[0]) 
	{
		if(fileType == 'image/jpg' || fileType == 'image/jpeg')
		{
			/******IMAGE SIZE MUST NOT BE MORE THAN 1 MB******/
			if(fileSize<1025)    
			{
				var imgReader = new FileReader();
				imgReader.onload = function(e) 
				{
					$('#parent_2_image').attr('src', e.target.result);
					$("#parent_2_image_hidden_tag").val("T");
				}
				imgReader.readAsDataURL(getImage.files[0]);       
			}
			else
			{
				alert("Image Size too large for Upload!");
				$("#parent2Image").val('');
			}
		}  
		else
		{
			alert("File format not Supported/Allowed for Upload!, Please Choose another.");
			$("#parent2Image").val('');
		}
	}
}
