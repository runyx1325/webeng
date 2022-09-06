<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <title>Registrieren</title>
    <link rel="stylesheet" href="../styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp" rel="stylesheet">
    <script src="register.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>

</head>
<body>
    <?php
        include("../NavLog.php");
    ?>
    <div class="d-flex container-fluid" style="background-color: #b3b3b3; height: 22px;">
    </div>
    <div class="container d-flex align-items-center justify-content-center" id="content">
        <form class="row g-3 col-6 needs validation" novalidate onsubmit="return register()" id="registerData">
                <h3><b>Register</b></h3>
                <div class="form-floating">
                    <input type="text" name="nickname" class="form-control" id="registerNicknameInput" placeholder=" ">
                    <label for="floatingInput">Nickname</label>
                </div>
                <div class="form-floating">
                    <input type="email" name="email" class="form-control" id="registerEmailInput" placeholder=" " required>
                    <label for="floatingInput">Email address</label>
                    <div class="invalid-feedback">
                        Email adress already exists.
                    </div>
                </div>
                <div class="form-floating">
                    <input type="password" name="password" class="form-control" id="registerInputPassword" placeholder=" " required>
                    <label for="floatingInput">Password</label>
                    <div class="invalid-feedback">
                        The specified passwords do not match.
                    </div>
                </div>
                <div class="form-floating">
                    <input type="password" name="repeatpassword" class="form-control" id="registerInputRepeatPassword" placeholder=" " required>
                    <label for="floatingInput">Repeat password</label>
                    <div class="invalid-feedback">
                        The specified passwords do not match.
                    </div>
                </div>
                <h3><b>Adress</b></h3>
                <div class="form-floating col-md-9">
                    <input type="text" name="street" class="form-control" id="registerInputStreetName" placeholder=" " required>
                    <label for="inputAddress">Street name</label>
                </div>
                <div class="form-floating col-md-3">
                    <input type="text" name="housenumber" class="form-control" id="registerInputHouseNumber" placeholder=" " required>
                    <label for="floatingInput">House number</label>
                </div>
                <div class="form-floating col-md-6">
                    <input type="text" name="city" class="form-control" id="registerInputCity" placeholder=" " disabled>
                </div>
                <div class="form-floating col-md-6">
                    <input type="number" name="postalcode" min="01001" max="99998" class="form-control" id="registerPostalCode" placeholder=" " oninput="postcode()" required>
                    <label for="floatingInput">Postalcode</label>
                </div>
                <button class="clickme btn btn-primary" type="submit"> Sign up </button>
            </form>
        </div>
    </div>
    <div class="footer position-absolute bottom-0 d-flex container-fluid" style="background-color: #b3b3b3; height: 100px;" >
    </div>
</body>
</html>