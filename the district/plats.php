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

    <!-- Logo -->

    <link rel="icon" type="image/png" href="./src/img/logo/favicon.png" />

    <title>The District - Plats</title>
    <link rel="stylesheet" href="./src/Css/unchanged.css">
    <link rel="stylesheet" href="./src/Css/categorie.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> 
</head>
<body class="container">
<!-- header : Navbar - background - login -->
<?php 
include("./src/php/header.php"); 
?>
<?php
include("./src/php/searchplat.php"); 
?>

<div class="row search justify-content-center">
    <label for="autocomplete">Search on site: </label>
    <input id="autocomplete">
</div>
<?php include_once('./src/php/siteplat.php'); ?>

<!-- Footer -->

<?php include("./src/php/footer.php"); ?>
<!-- script search -->

<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/smoothness/jquery-ui.css">
  <script src="//code.jquery.com/jquery-1.12.4.js"></script>
  <script src="//code.jquery.com/ui/1.12.1/jquery-ui.js"></script>



<script>
    var platnamejs = <?php echo json_encode($libellesearch); ?>;
    var descjs = <?php echo json_encode($descsearch); ?>;

$( "#autocomplete" ).autocomplete({
  source: platnamejs 
});
</script>
<!-- Script -->
<script src="https://kit.fontawesome.com/3fd2d451cc.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>