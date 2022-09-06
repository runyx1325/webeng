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
    <title>Mein Konto</title>
</head>
<body>
    <?php
        include("../NavLog.php");
    ?>
    <div class="d-flex container-fluid" style="background-color: #b3b3b3; height: 22px;">
    </div>
    <div class="container-fluid" id="content">
        <h1><b>Mein Konto</b></h1>
        <?php
            include("./userdata.php");
        ?>
        <h4><b>Newsletter</b></h4>
        <?php
            if(true){
                echo"
                    <div class=\"form-check\">
                        <input class=\"form-check-input\" type=\"checkbox\" value=\"\" id=\"flexCheckDefault\" checked>
                        <label class=\"form-check-label\" for=\"flexCheckDefault\">
                            news abonniert
                        </label>
                    </div>
                ";
            }else{
                echo"
                    <div class=\"form-check\">
                        <input class=\"form-check-input\" type=\"checkbox\" value=\"\" id=\"flexCheckDefault\">
                        <label class=\"form-check-label\" for=\"flexCheckDefault\">
                            news abonniert
                        </label>
                    </div>
                ";
            }
        ?>



    </div>
    <div class="footer position-absolute bottom-0 d-flex container-fluid" style="background-color: #b3b3b3; height: 100px;" >
    </div>

</body>
</html>
