<?php
    if(!isset($_COOKIE["login"])) {
        header("Location: http://localhost/web");
    }
?>

<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp" rel="stylesheet">
    <script src="./pay.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>
    <title>Shopping Cart</title>
</head>
<body>
    <?php
        include("../NavLog.php");
    ?>
    <div class="d-flex container-fluid" style="background-color: #b3b3b3; height: 22px;">
    </div>
    <div class="content" style="height: calc(100vh - 200px)!important; " id="content">
        <div class="text-center border-bottom border-5" style="margin-bottom: 2rem">
            <h1><b>Your Shopping Cart</b></h1>
        </div>
        <div class="d-flex flex-col border-3" style="background-color: #b3b3b3; margin-left: 3rem; margin-right:3rem">
            <div class='col-2 d-flex align-items-center justify-content-center border-bottom border-top border-start border-dark' style="">
                <h1>Article ID</h1>
            </div>
            <div class="col-1 d-flex flex-column align-items-center justify-content-center border border-dark " style="">
                <h1>Picture</h1>
            </div>
            <div class="col-6 d-flex flex-column align-items-center justify-content-center border-bottom border-top border-dark" style="">
                <h1>Name</h1>
            </div>
            <div class="col-1 d-flex flex-column align-items-center justify-content-center border border-dark" style="">
                <h1>Pieces</h1>
            </div>
            <div class='col-2 d-flex flex-column align-items-center justify-content-center border-top border-bottom border-end border-dark'>
                <h1>Price</h1>
            </div>
        </div>
        <?php
            include("shopping_cart.php");
        ?>


    </div>
    <div class="footer position-absolute bottom-0 d-flex container-fluid justify-content-center align-items-center d-flex" style="background-color: #b3b3b3; height: 100px;" >
        <a class="link-primary" style="margin-right: 1rem" href="http://localhost/web/impressum">Impressum</a>
    </div>
</body>

</html>

