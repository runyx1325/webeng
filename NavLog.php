<?php
if(isset($_COOKIE["login"])) {
    echo "
        <div class=\"container-fluid\" id=\"header\">
            <div class=\"navbar row text-center \">
                <div class=\"col-2\">
                    <img src=\"http://localhost/web/resources/logo.png\" style=\"height: 40px\" alt=\"Apple Logo\">
                </div>
                <div class=\"col-8 d-flex justify-content-center align-self-center\">
                    <h4 class=\"col-4 align-middle\" onclick=\"window.location.href='http://localhost/web/'\">Home</h4>
                     <script src=\"http://localhost/web/Logout/logout.js\"></script>
                    <h4 class=\"col-4 align-middle\" onclick=\"logout()\">Logout</h4>
                </div>
                <div class=\"col-2 d-flex justify-content-end align-self-center\">
                    <span class=\"material-icons-outlined icon\" onclick=\"window.location.href='http://localhost/web/news/'\">newspaper</span>
                    <span class=\"material-icons icon\" onclick=\"window.location.href='http://localhost/web/cart/'\">shopping_bag</span>
                    <span class=\"material-icons icon\" onclick=\"window.location.href='http://localhost/web/user/'\">account_circle</span>                    
                </div>
            </div>
        </div>    
        ";
}
else{
    echo "
        <div class=\"container-fluid\" id=\"header\">
            <div class=\"navbar row text-center\">
                <div class=\"col-2\">
                    <img src=\"http://localhost/web/resources/logo.png\" style=\"height: 40px\" alt=\"Apple Logo\">
                </div>
                <div class=\"col-8 d-flex justify-content-center align-self-center\">
                    <h4 class=\"col-4 align-middle\" onclick=\"window.location.href='http://localhost/web/'\">Home</h4>
                    <h4 class=\"col-4 align-middle\" onclick=\"window.location.href='http://localhost/web/login/'\">Login</h4>
                </div>
                <div class=\"col-2 d-flex justify-content-end align-self-center\">     
                    <span class=\"material-icons-outlined icon\" onclick=\"window.location.href='http://localhost/web/news/'\">newspaper</span>               
                </div>
            </div>
        </div>
        ";
}