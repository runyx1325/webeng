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
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>
    <title>My Profile</title>
</head>
<body>
    <?php
        include("../NavLog.php");
    ?>
    <div class="d-flex container-fluid" style="background-color: #b3b3b3; height: 22px;">
    </div>
    <div class="content" style="height: calc(100vh - 200px)!important; " id="content">
        <div class="text-center border-bottom border-5">
            <h1><b>My Profile</b></h1>
        </div>
    </div>
    <div class="bgimg">
        <div class="middle">
            <h1>COMING SOON</h1>
            <hr>
        </div>
    </div>
    <div class="footer position-absolute bottom-0 d-flex container-fluid justify-content-center align-items-center d-flex" style="background-color: #b3b3b3; height: 100px;" >
        <a class="link-primary" style="margin-right: 1rem" href="http://localhost/web/impressum">Impressum</a>
    </div>
</body>
</html>
<style>
    body, html {
        height: 100%
    }
    .bgimg {
        background-image: url('../resources/comingsoon.jpg');
        height: 1000%;
        background-position: center;
        background-size: cover;
        position: relative;
        color: white;
        font-family: "Courier New", Courier, monospace;
        font-size: 25px;
    }
    .middle {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        text-align: center;
    }
    hr {
        margin: auto;
        width: 40%;
    }
</style>