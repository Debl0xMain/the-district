<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- MetaDonne -->

    <meta name="title" content="The District" />
	<meta name="description" content= "Restaurant The District" />
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="theme-color" content="#3c790a" media="(prefers-color-scheme: dark)">
    <meta name="color-scheme" content="dark light">

    <!-- Logo -->

    <link rel="icon" type="image/png" href="./src/img/logo/favicon.png" />

    <title>The District - Index</title>
    <link rel="stylesheet" href="./src/Css/unchanged.css">
    <link rel="stylesheet" href="./src/Css/categorie.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> 
</head>
<body class="container">
<!-- header : Navbar - background - login -->
  
<?php 
//include("./src/php/header.php"); 
?>
<?php
//include("./src/php/searchcat.php"); 
?>
<?php
//include_once("./src/php/searchbarwork.php");
session_start([
    'cookie_lifetime' => 8000,
]);
$_SESSION['user'] = 'username'; //$name;
session_id();
var_dump(session_id());
var_dump($_SESSION);
?>
<div>





</div>
<?php //include_once('./src/php/shoping/shopbtn.php');
?>
<!-- Footer -->
<?php //include("./src/php/footer.php"); ?>

<!-- Script -->
<script src="https://kit.fontawesome.com/3fd2d451cc.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>