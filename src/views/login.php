<?php
// require_once 'bootstrap.php';
//   if (!isset($_SESSION['logged_in'])) {
//   
// Login
if (isset($_POST['login']) && !empty($_POST['username']) && !empty($_POST['password'])) {
  if ($_POST['username'] == 'Vygantas' && $_POST['password'] == '999') {
    $_SESSION['logged_in'] = true;
    $_SESSION['timeout'] = time();
    $_SESSION['username'] = 'Vygantas';
    header('location: ' . $prefix . '/admin');
    exit;
  } else {
    print('<div style="color:red">Wrong username or password</div>');
  }
}
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Content management system</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="app.css">
  </head>
  <body class="h-100 gradient-form" style="background-color: #eee;">
    <!-- <div class="d-flex justify-content-center align-items-center" style="height: 100vh">
      <div>
        <form action="" method="post">
          <div class="mb-3">
            <label class="form-label">Username</label>
            <input type="text" name="username" class="form-control" placeholder="username = Vygantas">
          </div>
          <div class="mb-3">
            <label class="form-label">Password</label>
            <input type="password" name="password" class="form-control" placeholder="password = 999" required>
          </div>
          <button type="submit" class="btn btn-primary" name="login">Submit</button>
        </form>
      </div>
    </div> -->


    <!-- login template -->
<div class="container py-5 h-100" style="background: lightsalmon">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-xl-10">
        <div class="card rounded-3 text-black">
          <div class="row g-0">
            <div class="col-lg-6">
              <div class="card-body p-md-5 mx-md-4">

                <div class="text-center">
                  <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/lotus.webp"
                    style="width: 185px;" alt="logo">
                  <h4 class="mt-1 mb-5 pb-1">We are The Lotus Team</h4>
                </div>

                <form action="" method="post">
                  <p>Please login to your account</p>

                  <div class="form-outline mb-4">
                    <input  type="text" name="username" class="form-control" placeholder="username = Vygantas" />
                    <label class="form-label" >Username</label>
                  </div>

                  <div class="form-outline mb-4">
                    <input type="password" name="password" class="form-control" placeholder="password = 999" required />
                    <label class="form-label" >Password</label>
                  </div>

                  <div class="text-center pt-1 mb-5 pb-1">
                    <button type="submit" class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3" name="login"  >Log
                      in</button>
                      
                    <!-- <a class="text-muted" href="#!">Forgot password?</a> -->
                  </div>

                  <!-- <div class="d-flex align-items-center justify-content-center pb-4">
                    <p class="mb-0 me-2">Don't have an account?</p>
                    <button type="button" class="btn btn-outline-danger">Create new</button>
                  </div> -->

                </form>

              </div>
            </div>
            <div class="col-lg-6 d-flex align-items-center gradient-custom-2">
              <div class="text-white px-3 py-4 p-md-5 mx-md-4">
                <h4 class="mb-4">We are more than just a company</h4>
                <p class="small mb-0">Content management system</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
    
  </body>