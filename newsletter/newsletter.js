function newsletter(){
    const newsletterRequest = new XMLHttpRequest();
    newsletterRequest.onreadystatechange = function(){
        if(newsletterRequest.readyState==4 && newsletterRequest.status==200){
            if(newsletterRequest.response == true){
                window.location.href="../";
                alert("Successfully subscribed!");
            }
            else {
                document.getElementById("newsletterEmailInput").className="form-control is-invalid";
            }
        }
    }
    newsletterRequest.open("POST","newsletter.php");
    newsletterRequest.send(new FormData(emailNewsletter));
    return false;
}

function NoNewsletter(){
    const deleteNewsletterRequest = new XMLHttpRequest();
    deleteNewsletterRequest.onreadystatechange = function(){
        if(deleteNewsletterRequest.readyState==4 && deleteNewsletterRequest.status==200){
            if(deleteNewsletterRequest.response == true){
                window.location.href="../";
                alert("Successfully unsubscribed!");
            }
            else {
                document.getElementById("noNewsletterEmailInput").className="form-control is-invalid";
            }
        }
    }
    deleteNewsletterRequest.open("POST","deleteNewsletter.php");
    deleteNewsletterRequest.send(new FormData(emailNoNewsletter));
    return false;
}