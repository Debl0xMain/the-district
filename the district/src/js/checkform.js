

const checksearch = (e) => {

    var search = document.getElementById('autocomplete1').value;

    if (search == catnamejs ) {
        alert('Cat trouve')
    }
    if (search == platnamejs ) {
        alert('plat trouve')
    }

    for(var i=0; i<array.length; i++) {
        if(search === array[i]) {
            console.log('Element Found');
        }
    }
    e.preventDefault();
}

document.getElementById("searchbtn").addEventListener("click", checksearch);