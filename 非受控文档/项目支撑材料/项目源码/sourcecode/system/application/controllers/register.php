<?php
	class Register extends Controller {
		function Register() {
			parent::Controller();
			$this->load->helper('form');
			$this->load->model('casemodel');
			$this->load->model('usermodel');
			$this->load->model('bbsmodel');
		}
		
		function index(){
			$this->load->view('register/register');
		}
		
		
	}