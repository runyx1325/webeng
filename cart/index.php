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
    <script src="addCart.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>
    <title>Shopping</title>
</head>
<body>
    <?php
        include("../NavLog.php");
    ?>
    <div class="d-flex container-fluid" style="background-color: #b3b3b3; height: 22px;">
    </div>
    <div class="content" id="content">
        <div class="text-center border-bottom border-5" style="margin-bottom: 2rem">
            <h1><b>Shopping</b></h1>
        </div>

        <div class="flex-row d-flex ">
            <div class="col d-flex flex-row justify-content-center">
                <div class="card">
                    <div class="d-flex flex-column justify-content-center align-items-center">
                        <div class="text-center" style="margin-bottom: 2rem; margin-top: 1rem">
                            <h3><b>Black cat</b></h3>
                        </div>
                        <div class="d-flex flex-column align-items-center justify-content-center" style="height: 100px">
                            <img src="../resources/pixelartSchwarzerKater.png" style="height:100px; width:100px" alt="Klee"/>
                        </div>
                        <div class="text-center" style="color: grey;font-size: 22px; margin-top: 2rem">
                            $0.00
                        </div>
                        <div class="d-flex align-items-center justify-content-center" onclick=addCart(1) style="border-style: solid; width: 150px; margin-top: 2rem; cursor: pointer; margin-bottom: 2rem">
                            <span class="material-icons-outlined icon" style="margin-right: 0!important;">add_shopping_cart</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col d-flex flex-row justify-content-center">
                <div class="card">
                    <div class="d-flex flex-column justify-content-center align-items-center">
                        <div class="text-center" style="margin-bottom: 2rem; margin-top: 1rem">
                            <h3><b>Swiss neutrality</b></h3>
                        </div>
                        <div style="height: 100px">
                            <img src="../resources/schweizerFlagge.jpg" style="height:100px; width:100px" alt="Klee" />
                        </div>
                        <div class="text-center" style="color: grey;font-size: 22px; margin-top: 2rem">
                            $0.00
                        </div>
                        <div class="d-flex align-items-center justify-content-center" onclick=addCart(2) style="border-style: solid; width: 150px; margin-top: 2rem; cursor: pointer; margin-bottom: 2rem">
                            <span class="material-icons-outlined icon" style="margin-right: 0!important;">add_shopping_cart</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col d-flex flex-row justify-content-center">
                <div class="card">
                    <div class="d-flex flex-column justify-content-center align-items-center">
                        <div class="text-center" style="margin-bottom: 2rem; margin-top: 1rem">
                            <h3><b>Shamrock</b></h3>
                        </div>
                        <div>
                            <img src="../resources/pixelartGluecksklee.png" style="height:100px; width:100px" alt="Klee" />
                        </div>
                        <div class="text-center" style="color: grey;font-size: 22px; margin-top: 2rem">
                            $0.00
                        </div>
                        <div class="d-flex align-items-center justify-content-center" onclick=addCart(3) style="border-style: solid; width: 150px; margin-top: 2rem; margin-bottom: 2rem; cursor: pointer">
                            <span class="material-icons-outlined icon" style="margin-right: 0!important;">add_shopping_cart</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer position-absolute bottom-0 d-flex container-fluid" style="background-color: #b3b3b3; height: 100px;" >
    </div>
</body>
</html>

<style>
    .card {
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
        width: 300px;
        margin: auto;
        text-align: center;
        font-family: arial;
    }
</style>
