<?php 
session_start(); 
$id =  $_SESSION["user_session"];

include '../../core/functions/_bdd.php';
include '../../core/constant/_constant.php';

$stmt = $db->prepare("SELECT * FROM users WHERE id_user=:id");
$stmt->execute(array(":id"=>$id));
$row=$stmt->fetch(PDO::FETCH_ASSOC);
$nom = $row["nom"];
$statut = $row["statut"];
$mail = $row["email"];
?>
<!DOCTYPE html>
<html lang="en">
  
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="http://xixian-admin-templates.multipurposethemes.com/images/favicon.ico">

    <title>billy - Dashboard</title>
    
	<!-- Bootstrap 4.0-->
	<link rel="stylesheet" href="../assets/vendor_components/bootstrap/dist/css/bootstrap.css">
	<!--amcharts -->
	<link href="../amcharts/lib/3/plugins/export/export.css" rel="stylesheet" type="text/css" />
	
	<!-- Bootstrap-extend -->
	<link rel="stylesheet" href="css/bootstrap-extend.css">
	
	<!-- theme style -->
	<link rel="stylesheet" href="css/master_style.css">
	<link rel="stylesheet" href="css/font-awesome.css">
	
	<!-- Xixian_Admin skins -->
	<link rel="stylesheet" href="css/skins/_all-skins.css">
 <!-- Icons -->
 
  <link rel="stylesheet" href="//cdn.materialdesignicons.com/3.4.93/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
	
	
	<!-- bootstrap wysihtml5 - text editor -->
	<link rel="stylesheet" href="../assets/vendor_plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.css">
     
  </head>

<body class="hold-transition skin-green layout-boxed sidebar-mini">
<div class="wrapper">

<?php include "partials/_navbar.php"; ?>