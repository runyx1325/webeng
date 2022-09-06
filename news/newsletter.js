function newsletter(){
    const newsletterRequest = new XMLHttpRequest();
    newsletterRequest.onreadystatechange = function(){
        if(newsletterRequest.readyState==4 && newsletterRequest.status==200){
            if(newsletterRequest.response == true){
                window.location.href="../";
                alert("Successfully subscribed!");
            }
            else {
                document.getElementById("InputEmail").className="form-control is-invalid";
            }
        }
    }
    newsletterRequest.open("POST","newsletter.php");
    newsletterRequest.send(new FormData(emailNewsletter));
    return false;
}