<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/estilo.css">
	<link rel="stylesheet" href="css/icono.css">
	<link rel="stylesheet" href="css/style2.css">
	<link rel="stylesheet" href="css/style3.css">
	<link rel="stylesheet" href="css/lightbox.min.css">
	<link rel="stylesheet" href="css/sweetalert.css">
	<script src="js/jquery-3.3.1.min.js"></script>
  	<script src="js/bootstrap.js"></script>
	<script src="js/ir-arriba.js"></script>
	<script src="js/lightbox.min.js"></script>
	<script src="js/sweetalert.min.js"></script>
	<title>prueba</title>
	
	<style>
	.th{
		background-color: rgb(39,78,107);
		color: #fff;
	}
	.tabla tr:nth-child(odd){
  background-color: #F8F8F8;
}

.tabla tr:nth-child(even){
  background-color: #CFCFCF;
}
 tr:first-child th:first-child{border-top-left-radius: 10px;}
 tr:first-child th:last-child{border-top-right-radius: 10px;}

 tr:last-child td:first-child{border-bottom-left-radius: 10px;}
 tr:last-child td:last-child{border-bottom-right-radius: 10px;}

 .frame{
				width: 100%;
				height: 600px;
			}
		.carousel-inner img {
      			width: 100%;
     		 height: 100%;
  		}
		.tele{
			color: white;
			text-decoration: none;;
		}
		.tele:hover{
			color:white;
		}
		.item {
      		display: block;
     		 width: 100%;
     		 height: 200px;
		}
		.item img {
     		height: 100%;
      		width: 100%;
		}
		.ir-arriba{
			display: none;
			padding: 10px;
			background-color: rgb(39,78,107);
			color: #fff;
			font-size: 35px;
			border-radius: 10px;
			box-shadow: -7px 5px 5px 0px rgba(0,0,0,0.5); 
			cursor: pointer;
			position: fixed;
			bottom: 20px;
			right: 20px;
			z-index: 1;

		}

		.whats{
			display: block;
			padding: 10px;
			background-color: #00ED2F;
			color: #fff;
			font-size: 35px;
			border-radius: 10px;
			box-shadow: -7px 5px 5px 0px rgba(0,0,0,0.5); 
			cursor: pointer;
			position: fixed;
			bottom: 20px;
			right: 80px;
			z-index: 1;

		}
		/*--------------------fuente----------*/
		.texto{
			padding-bottom: 150px;
			padding-top: 150px;
		}
		@media screen (max-width: 500px) {
			.tit{
			padding: 10px;
			font-size: 20px;
		}
		.tx{
			font-size: 10px;
			padding-bottom: 10px;
		}
		
		}
		.tx{

			font-size: 15px;
			padding-bottom: 20px;
		}
		/*---------------------botones-----------*/

		.bot{

			box-shadow: -7px 5px 5px 0px rgba(0,0,0,0.2); 
			width: 50%;
			margin-bottom: 30px;
			border-radius: 10px;
			border-style: double;
			border-color: black;
			transition-duration: 0.9s;
		}
		.bot:hover{
			color: #fff;
			background-color: rgb(39,78,107);
			transition-duration: 0.9s;
		}
		/* -------------------- cajas de texto--------------------*/
		.caj{
			box-shadow: -7px 5px 5px 0px rgba(0,0,0,0.2);
			width: 100%;
			border-color: #000;
			padding-right: 20px;
			padding-left: 20px;
			margin-bottom: 10px;

		}
		/*--------------------------footer------------------------*/
		.footer {
   			
   			left: 0;
   			bottom: 0;
   			width: auto;
   			background-color: #000;
   			color: white;
   			text-align: center;
   			margin: 0px;
   			padding: 0px;
		}
		/*--------------------------fin footer------------------------*/
		.log{

			color: #fff; 
			padding-top: 20px; 
			padding-bottom: 20px; 
			padding-left: 10px; 
			padding-right: 10px; 
			text-decoration: none;
			transition-duration: 0.9s;
			text-align: center;
		}
		.log:hover{
			background-color: #467394 !important;
			text-decoration: none;
			transition-duration: 2s;
			border-radius: 10px; 
			color: #fff;
		
		}
		.men{
			float: left;
			color: #fff; 
			padding-top: 20px; 
			padding-bottom: 20px; 
			padding-left: 20px; 
			padding-right: 20px; 
			text-decoration: none;
			transition-duration: 0.9s;
		}
		.men:hover{
			border-radius: 10px;
			float: left;
			background-color: #467394 !important;
			text-decoration: none;
			transition-duration: 1s; 
			color: #fff;
		}
		
	</style>
</head>