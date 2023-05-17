

const checksearch = (e) => {

    var searchentry = document.getElementById('autocomplete1').value;
    var search = searchentry.trim();


    $("#msgemail").html("<br>");

    var push = searchbarjs.includes(search);


    if (push === true) {
        
    }

    if (push === false) {

        e.preventDefault();
        $("#msgerreur").html(search + " n'est pas disponible pour le moment");

        if (search == "" || search === null) {

            e.preventDefault();
            $("#msgerreur").html("La saisie n'est pas valide");
            
        }
    }

}

document.getElementById("searchbtn").addEventListener("click", checksearch);
