function addCart(id){
     const addCartRequest = new XMLHttpRequest();
     addCartRequest.onreadystatechange = function(){
          if(addCartRequest.readyState==4 && addCartRequest.status==200){
          }
     }
     var data = new FormData();
     data.append("article",id);
     addCartRequest.open("POST","http://localhost/web/shop/addItem.php");
     addCartRequest.send(data);
     return false;
}