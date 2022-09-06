<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp" rel="stylesheet">
    <script src="login.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>
    <title>Login</title>
</head>
<body>
  <?php
    include("../NavLog.php");
  ?>
  <div class="d-flex container-fluid" style="background-color: #b3b3b3; height: 22px;">
  </div>
  <div class="container d-flex align-items-center justify-content-center" style="height: calc(100vh - 200px)!important; " id="content">
      <div class="col-4">
        <form onsubmit="return login()" id="loginData">
          <div class="mb-3">
              <label for="InputEmail" class="form-label"><h6>Email address:</h6></label>
            <input type="email" name="email" class="form-control" id="InputEmail" aria-describedby="emailHelp">
          </div>
          <div class="mb-3">
            <label for="InputPassword" class="form-label"><h6>Password:</h6></label>
            <input type="password" name="password" class="form-control" id="InputPassword">
              <div class="invalid-feedback">Passwort oder Emailadresse sind falsch</div>
          </div>
          <button class="clickme btn btn-primary" type="submit"> Login </button>
            <a href="../register" class="link-primary">Register</a>
        </form>
      </div>
  </div>
  <div class="footer position-absolute bottom-0 d-flex container-fluid" style="background-color: #b3b3b3; height: 100px;" >
  </div>
</body>
</html>
