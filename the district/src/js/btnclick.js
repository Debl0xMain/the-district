/*
const  hiddenshow = () => {
    $("#loginchange").fadeOut(0);
    $("#inscription").fadeOut(0); 
}


const loginchange = () => {

    if (document.getElementById("loginchange").hidden == true) {
        document.getElementById("loginchange").hidden = false;
    }
    else {
        document.getElementById("loginchange").hidden = true;
        $("#loginchange").fadeIn(2000);
    }
    
}
const inscriptionchange = () => {

    if (document.getElementById("inscription").hidden == true) {
        document.getElementById("inscription").hidden = false;
    }
    else {
        document.getElementById("inscription").hidden = true;
        $("#inscription").fadeIn(2000);    
    }
    
}

document.getElementById("changemodal").addEventListener("click", hiddenshow);
document.getElementById("changemodal").addEventListener("click", loginchange);
document.getElementById("changemodal").addEventListener("click", inscriptionchange);
*/

const loginchange = () => {

    if (document.getElementById("changemodal").checked == true) {
        $("#inscription").fadeIn(2000);
        $("#loginchange").fadeOut(0);
        $("#btnlogintext").html('inscription');
    }
    else {
        $("#loginchange").fadeIn(2000);
        $("#inscription").fadeOut(0);
        $("#btnlogintext").html('login');
    }
    
}


document.getElementById("logincharge").addEventListener("click", loginchange);
document.getElementById("changemodal").addEventListener("click", loginchange);
