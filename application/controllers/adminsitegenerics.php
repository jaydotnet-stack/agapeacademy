<?php
	//Initiate session
	// session_start();
	# FRONT-END GENERICS
	# ------------------ 
	$this->data['sitecss'] 			=	$this->load->view('adminsitegenerics/sitecss','', TRUE);
	$this->data['sidebar']			=	$this->load->view('adminsitegenerics/sidebar','', TRUE);
	$this->data['header']		=	$this->load->view('adminsitegenerics/header','', TRUE);
	// $this->data['status']			=	$this->load->view('adminsitegenerics/status','', TRUE);
	$this->data['footer']		=	$this->load->view('adminsitegenerics/footer','', TRUE);
	$this->data['switcher']		=	$this->load->view('adminsitegenerics/switcher','', TRUE);
	$this->data['sitescript']		=	$this->load->view('adminsitegenerics/sitescript','', TRUE);
	$this->data['custom_js']		=	$this->load->view('adminsitegenerics/custom_js','', TRUE);
	
	
?>

