

const checksearch = (e) => {

    var search = document.getElementById('autocomplete1').value;

    if (search != catnamejs ) {
        e.preventDefault();
    }
    if (search != platnamejs ) {
        e.preventDefault();
    }
    alert(search);
}

document.getElementById("searchbtn").addEventListener("click", checksearch);