
const loginchange = () => {

    if (document.getElementById("loginchange").hidden == true) {
        document.getElementById("loginchange").hidden = false;
    }
    else {
        document.getElementById("loginchange").hidden = true;
    }
    
}
const inscriptionchange = () => {

    if (document.getElementById("inscription").hidden == true) {
        document.getElementById("inscription").hidden = false;
    }
    else {
        document.getElementById("inscription").hidden = true;
    }
    
}

document.getElementById("changemodal").addEventListener("click", loginchange);
document.getElementById("changemodal").addEventListener("click", inscriptionchange);
