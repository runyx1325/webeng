function logout() {
    const logoutRequest = new XMLHttpRequest();
    logoutRequest.onreadystatechange = function(){
        if(logoutRequest.readyState==4 && logoutRequest.status==200){
            window.location.href="http://localhost/web/";
            alert("Successfully logged out!");
        }
    }
    logoutRequest.open("POST","http://localhost/web/logout/logout.php");
    logoutRequest.send();
    return false;
}