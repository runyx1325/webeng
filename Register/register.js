function register(){
    const registerRequest = new XMLHttpRequest();
    registerRequest.onreadystatechange = function(){
        if(registerRequest.readyState==4 && registerRequest.status==200){
            if(registerRequest.response == true){
                window.location.href="../";
            }else if (registerRequest.response == 42){
                //Wenn Passwort und RepeatPasswort nicht übereinstimmen
                document.getElementById("registerInputPassword").className="form-control is-invalid";
                document.getElementById("registerInputRepeatPassword").className="form-control is-invalid";
            }else if (registerRequest.response == 73){
                //Wenn Email bereits existiert
                document.getElementById("registerEmailInput").className="form-control is-invalid";
            }else{
                document.getElementById("registerNicknameInput").className="form-control is-invalid";
                document.getElementById("registerInputStreetName").className="form-control is-invalid";
                document.getElementById("registerInputHouseNumber").className="form-control is-invalid";
                document.getElementById("registerInputCity").className="form-control is-invalid";
                document.getElementById("registerPostalCode").className="form-control is-invalid";
            }
        }
    }

    registerRequest.open("POST","register.php");
    registerRequest.send(new FormData(registerData));
    return false;
}

function postcode(){
    const postalcodeRequest = new XMLHttpRequest();
    postalcodeRequest.onreadystatechange = function(){
        if(postalcodeRequest.readyState==4 && postalcodeRequest.status==200){
            if(postalcodeRequest.response == false){
                document.getElementById("registerPostalCode").className="form-control is-invalid";
                document.getElementById("registerInputCity").value="";
            }else{
                document.getElementById("registerPostalCode").className="form-control";
                document.getElementById("registerInputCity").value=postalcodeRequest.response;
            }
        }
    }
    postalcodeRequest.open("GET","postalcode.php?postalcode="+document.getElementById("registerPostalCode").value);
    postalcodeRequest.send();

}