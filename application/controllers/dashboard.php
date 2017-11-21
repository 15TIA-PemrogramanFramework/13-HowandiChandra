<?php 
/**
* 
*/
class dashboard extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		
	}
	function index()
	{
		//print_r($this->mahasiswa_model->ambil_data());
		
		$this->load->view("dashboard");
	}
}
 ?>