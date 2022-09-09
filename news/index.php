<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <title>Newsletter</title>
    <link rel="stylesheet" href="../styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp" rel="stylesheet">
    <script src="newsletter.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>

</head>
<body>
    <?php
        include("../NavLog.php");
    ?>
    <div class="d-flex container-fluid" style="background-color: #b3b3b3; height: 22px;"></div>
    <div class="container d-flex align-items-center justify-content-center " style="height: calc(100vh - 200px)!important; " id="content">
        <div class="col-4">
            <form class="row g-3 col-12 needs validation d-flex align-items-center justify-content-center" novalidate onsubmit="return newsletter()" id="emailNewsletter">
                <h2 class="text-center"><b>Newsletter</b></h2>
                <div class="form-floating">
                    <input type="email" name="email" class="form-control" id="registerEmailInput" placeholder=" " required>
                    <label for="floatingInput">Email address</label>
                    <div class="invalid-feedback">
                        Please enter an existing email adress.
                    </div>
                </div>
                <div class="d-flex justify-content-center ">
                    <button class="clickme btn btn-primary col-6" type="submit"> Subscribe </button>
                </div>
                <div class="d-flex justify-content-center ">
                    <a href="./unsubscribe.php" class="link-primary">Unsubscribe</a>
                </div>
            </form>
        </div>
    </div>
    <div class="container d-flex align-items-center justify-content-center" id="content">
    <div class="footer position-absolute bottom-0 d-flex container-fluid" style="background-color: #b3b3b3; height: 100px;" ></div>
</body>
</html>