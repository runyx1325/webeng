<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <title>Impressum</title>
    <link rel="stylesheet" href="../styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>

</head>
<body>
    <?php
        include("../NavLog.php");
    ?>
    <div class="d-flex container-fluid" style="background-color: #b3b3b3; height: 22px;">
    </div>
    <div class="text-center border-bottom border-5" style="margin-bottom: 2rem">
        <h1><b>Impressum</b></h1>
    </div>

    <div class="content " style="height: calc(100vh - 200px)!important; " id="content">
        <div class="row col-6" style="margin-left: 25%" id="impressum">
            <div class=" col-6 text-end">
                <p><b>Anbieter:</b></p>
            </div>
            <div class=" col-6 text-right">
                <p>Max Mustermann<br />Musterstraße 1<br />80999 München</p>
            </div>
            <div class="col-6 text-end" style="height: 1rem">
                <p><b>Kontakt:</b></p>
            </div>
            <div class="col-6 text-right">
                <p>Telefon: 089/1234567-8<br />Telefax: 089/1234567-9<br />E-Mail: mail@mustermann.de<br />Website: www.mustermann.de</p>
            </div>
            <div class=" col-6 text-end">
                <p><b>Bei redaktionellen Inhalten:</b></p>
            </div>
            <div class="col-6 text-right">
                <p>Verantwortlich nach § 55 Abs.2 RStV<br />Moritz Schreiberling<br />Musterstraße 2<br />80999 München</p>
            </div>
        </div>
    </div>


    <div class="footer position-absolute bottom-0 d-flex container-fluid justify-content-center align-items-center d-flex" style="background-color: #b3b3b3; height: 100px;" >
        <a class="link-primary" style="margin-right: 1rem" href="http://localhost/web/impressum">Impressum</a>

    </div>
</body>
</html>

