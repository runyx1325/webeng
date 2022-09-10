<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp" rel="stylesheet">
    <script src="newsletter.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>
    <title>Unsubscribe Newsletter</title>
</head>
<body>
<?php
include("../NavLog.php");
?>
<div class="d-flex container-fluid" style="background-color: #b3b3b3; height: 22px;">
    <div class="container d-flex align-items-center justify-content-center " style="height: calc(100vh - 200px)!important; " id="content">
        <div class="col-4">
            <form class="row g-3 col-12 needs validation " novalidate onsubmit="return NoNewsletter()" id="emailNoNewsletter">
                <h2 class="text-center"><b>Unsubscribe Newsletter</b></h2>
                <div class="form-floating">
                    <input type="email" name="email" class="form-control" id="noNewsletterEmailInput" placeholder=" " required>
                    <label for="floatingInput">Email address</label>
                    <div class="invalid-feedback">
                        Please enter an existing email adress.
                    </div>
                </div>
                <div class="d-flex justify-content-center ">
                    <button class="clickme btn btn-primary col-6" type="submit"> Unsubscribe </button>
                </div>
            </form>

        </div>
    </div>
</div>
<div class="footer position-absolute bottom-0 d-flex container-fluid justify-content-center align-items-center d-flex" style="background-color: #b3b3b3; height: 100px;" >
    <a class="link-primary" style="margin-right: 1rem" href="http://localhost/web/impressum">Impressum</a>
</div>
</body>
</html>
