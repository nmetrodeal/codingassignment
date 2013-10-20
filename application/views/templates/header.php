<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title><?php echo $this->config->item('SYSTEM_NAME'); ?></title>
	
	<link href="/media/css/smoothness/jquery-ui.css" rel="stylesheet">
	<link href="/media/css/validationEngine.jquery.css" rel="stylesheet">
	<link href="/media/css/flexigrid.pack.css" rel="stylesheet">

	<script src="/media/scripts/jquery-1.8.3.js"></script>
	<script src="/media/scripts/jquery-ui-1.9.2.custom.js"></script>
	<script src="/media/scripts/flexigrid.js"></script>
	<script src="/media/scripts/jquery.validationEngine.js"></script>
	<script src="/media/scripts/jquery.validationEngine-en.js"></script>
	<script src="/media/scripts/functions.js"></script>
	<style type="text/css">
		*{
			padding:0;
			margin: 0;
		}
		html,body{
			margin:0px;
			padding:0px;
			height:100%;
		}
		body{
			background: url('<?php echo base_url() ?>media/images/bg.png');
			font-size: 12px;
		}
		a{
			text-decoration: none;
			color:#000;
			font-weight: bold;
			font-family: Verdana,Arial,'Times New Roman';
		}
		a:hover{
			text-decoration: underline;
		}
		.wrapper{
			height: 100%;
			min-width: 800px;
		}
		.mid_content{
			width:100%;
			display:block;
			height: 100%;
			min-width: 1000px !important;
		}
		.right_panel{
			padding: 20px;
			min-width: 500px;
			/*max-width: 750px;
			width: 85%;*/
			height: 100%;
			/*float: left;*/
			padding-left: 220px;
			display: block;
		}

		#dlg_contact{
			background-color:	#fff;
			-webkit-box-shadow: 0 0 8px #eee;
			box-shadow: 0 0 8px #eee;
			width: 300px;
			margin: 10px;
			padding-bottom: 10px;
		}
		#dlg_contact .header{
			padding: 5px;
			background-color: #5F5F5F;
			color: #fff;
			margin-bottom: 10px;
		}
		form .header .title{
			font-size: 18px;
		}
		form .field{
			padding-left: 10px;
		}
		form .field .label{
			width: 150px;
			display: inline-block;
			margin-bottom: 10px;	
		}
		span.error{
			color: red;
		}
		input.error{
			border-color: red;
		}
	</style>
</head>
<body>
<div class="wrapper">
	<div class="mid_content">