<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp" rel="stylesheet">
    <script src="../Logout/logout.js"></script>
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
        <h1><b>Shopping</b></h1>
        <div class="container">
            <img src="../resources/pixelartGluecksklee.png" alt="Klee" />
            <div class="overlay"></div>
            <div class="button" onclick=addCart()> BUY </a></div>
        </div>
    </div>
    <div class="footer position-absolute bottom-0 d-flex container-fluid" style="background-color: #b3b3b3; height: 100px;" >
    </div>
</body>
</html>
<style>
    .container {
    position: relative;
    margin-top: 50px;
    width: 500px;
    height: 300px;
    }
    .overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0);
    transition: background 0.5s ease;
    }

    .container:hover .overlay {
    display: block;
    background: rgba(0, 0, 0, .3);
    }


    img {
    /*position: absolute;
    /*width: 500px;
    height: 300px;*/
    left: 0;
    }


    .button {
    position: absolute  ;
    width: 500px;
    left:0;
    top: 180px;
    text-align: center;
    opacity: 0;
    transition: opacity .35s ease;
    }

    .button a {
    width: 200px;
    padding: 12px 48px;
    text-align: center;
    color: white;
    border: solid 2px white;
    z-index: 1;
    }

    .container:hover .button {
    opacity: 1;
    }
</style>