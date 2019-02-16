<?php 
session_start(); 
$id =  $_SESSION["user_session"];

include 'core/functions/_bdd.php';

$stmt = $db->prepare("SELECT * FROM users WHERE id_user=:id");
$stmt->execute(array(":id"=>$id));
$row=$stmt->fetch(PDO::FETCH_ASSOC);
$nom = $row["nom"];
$statut = $row["statut"];
?>

<!DOCTYPE html>
<html class="no-js" lang="en">

	<head>
		<!-- Meta tag -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="keywords" content="SITE KEYWORDS HERE" />
		<meta name="description" content="ccaimag">
		<meta name='copyright' content='Ecole 241'>	

		<!-- Title Tag -->
		<title><?= __NAME__."-".$title; ?></title>

		<!-- Favicon -->
		<link rel="icon" type="image/png" href="images/logo7%20-%20Copy.jpg">	

		<!-- Web Font -->
		<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900" rel="stylesheet">
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="assets/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">


		<!-- CSS -->
		<link rel="stylesheet" href="assets/css/theme-plugins.css">
		<link rel="stylesheet" href="style.css">
		<link rel="stylesheet" href="assets/css/responsive.css">	

		<!-- Color -->
		<link rel="stylesheet" href="assets/css/skin/skin1.css">

		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
		<link rel="stylesheet" href="#" id="tromas">	
	</head>

	<body id="bg" style="">
		<div id="layout" class="">

			<!-- Start Header -->
			<?php include "_navbar.php"; ?>
			<!--/ End Header -->