<div class='row my-5'>
<form action="" method='POST'>
    <div class="input-group searchdiv">
      <div class="row search mx-auto">
        <label for="autocomplete">Search on site </label>
      <div class="input-group-append">
      <input id="autocomplete1" name='resultsearch'>
      <button class="btn btn-outline-danger" id='searchbtn' type="submit">SEND</button>
      <p id="msgerreur"></p>
      </div>
    </div>
  </form>
</div>

<?php
include("./src/php/searchcat.php"); 
?>
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/smoothness/jquery-ui.css">
  <script src="//code.jquery.com/jquery-1.12.4.js"></script>
  <script src="//code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script>
    var catnamejs = <?php echo json_encode($libellesearchcat); ?>;
    var platnamejs = <?php echo json_encode($libellesearchplat); ?>;
    var searchbarjs = platnamejs.concat(catnamejs);
$( "#autocomplete1" ).autocomplete({
  source: searchbarjs
});
</script>
<script>
  
    var searchentry = document.getElementById('autocomplete1').value;
    var search = searchentry.trim();

    function filtreTexte(arr, requete) {
    return arr.filter(function (el) {
    return el.toLowerCase().indexOf(requete.toLowerCase()) !== -1;
    })
    }
    

    
const checksearch = (e) => {

    var searchentry = document.getElementById('autocomplete1').value;
    var search = searchentry.trim();
    var searchintable = filtreTexte(searchbarjs,search);


    console.log(searchentry)

    $("#msgemail").html("<br>");
       
       valuesearch = compare(searchintable,searchbarjs);

        if (valuesearch === true) {

          $("#msgerreur").html("plat trouvé");
          e.preventDefault();

        }

        if (valuesearch === false) {

            e.preventDefault();
            $("#msgerreur").html(search + " n'est pas disponible pour le moment");
            if (search == "" || search === null) {
                e.preventDefault();
                $("#msgerreur").html("La saisie n'est pas valide");  
            }
        }

}

function compare(searchintable,searchbarjs)
          {
            
              let i = 0;
              let y = 0;
              var stopy = searchbarjs.length
              var stopi = searchintable.length

              while (y < stopy) {
                if (searchintable[i] == searchbarjs[y]){
                  console.log("compare = true")
                  return true;
                  
                }

                i++;

                if (i >= stopi) {
                  i = 0;
                  y++;
                }

                if (y >= stopy) {
                  console.log("compare = false")
                  return false;
                }
                
              
              }

            };
            
document.getElementById("searchbtn").addEventListener("click", checksearch);





</script>