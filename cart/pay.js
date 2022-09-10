function pay(){
    const payRequest = new XMLHttpRequest();
    payRequest.onreadystatechange = function(){
        if(payRequest.readyState==4 && payRequest.status==200){
            window.location.href="../";
            alert("Successfully payed! Your order is on the way!");
        }
    }
    payRequest.open("POST","pay.php");
    payRequest.send();
    return false;
}
function deleteCart(){
    const payRequest = new XMLHttpRequest();
    payRequest.onreadystatechange = function(){
        if(payRequest.readyState==4 && payRequest.status==200){
            window.location.href="../";
            alert("Successfully deleted!");
        }
    }
    payRequest.open("POST","delete.php");
    payRequest.send();
    return false;
}