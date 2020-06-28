var tentative = 3; // Cette variable contient le nombre de tentative de l'utilisateur.
function login(){

    var email = document.getElementById("email").value;
    var password = document.getElementById("password").value;
    if(email == "admin" && password == "admin"){

        alert ("Login successfully");
        window.location = "ouvertureCompte.html"; // Redirection vers la page de l'ouverture compte
        return true
        
    }else{
        tentative --;
        alert("Il vous reste "+tentative+" tentative;");
        if(tentative == 0){

        // Apres 3 tantative on desactive les champs.

            document.getElementById("email").disabled = true;
            document.getElementById("password").disabled = true;
            document.getElementById("submit").disabled = true;
            alert ("veuillez contacter votre administrateur ");
            return false;
        }

    }
}

