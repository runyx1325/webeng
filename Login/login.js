function login(){
    const loginRequest = new XMLHttpRequest();
    loginRequest.onreadystatechange = function(){
        if(loginRequest.readyState==4 && loginRequest.status==200){
            if(loginRequest.response == true){
                window.location.href="../";
            }
            else {
                document.getElementById("InputPassword").className="form-control is-invalid";
                document.getElementById("InputEmail").className="form-control is-invalid";
            }
        }
    }
    loginRequest.open("POST","login.php");
    loginRequest.send(new FormData(loginData));
    return false;
}
