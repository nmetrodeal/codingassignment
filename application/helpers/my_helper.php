<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if ( ! function_exists('load_page'))
{
	function load_page($view_name, $data=array()){
		$ci = &get_instance();

		$ci->load->vars($data);
		$ci->load->view('templates/header',array());
		$ci->load->view($view_name);
		$ci->load->view('templates/footer');
	}
}

function print_obj($data){
	echo "<pre>";
	print_r($data);
	echo "</pre>";
}