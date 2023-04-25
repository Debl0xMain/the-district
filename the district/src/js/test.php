<?php

include_once('.././sql/connect.php');
include_once('.././sql/request.php');


$searchplat=0;
do {
    
    foreach (search($searchplat) as $search);

    $libellesearch[$searchplat] = $search->libelle;
    $descsearch[$searchplat] = $search->description;
    

    $searchplat++;
}while($searchplat<countmaxplat());

?>
<label for="autocomplete">Select a programming language: </label>
<input id="autocomplete">
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