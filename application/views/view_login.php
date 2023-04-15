<?php echo $this->session->flashdata("pesan") ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/front/css/bootstrap.min.css">
  <link href="<?php echo base_url() ?>assets/front/css/signin.css" rel="stylesheet">
</head>

<body class="text-center">
  <main class="form-signin w-100 m-auto">
    <form class="form-signin" method="POST" action="<?php echo base_url()?>login/ceklogin">
      <br>
      <br>
      <img class="mb-4" src="<?php echo base_url() ?>assets/front/image/logo.jpg" alt="" width="72" height="57">
      <h1 class="h3 mb-3 fw-normal">Please sign in</h1>

      <div class="form-floating">
        <input type="text" class="form-control" id="floatingInput" name="user" placeholder="user">
        <label for="floatingInput">Username</label>
      </div>
      <div class="form-floating">
        <input type="password" class="form-control" id="floatingPassword" name="pass" placeholder="Password" required>
        <label for="floatingPassword">Password</label>
      </div>

      <div class="checkbox mb-3">
        <label>
          <input type="checkbox" value="remember-me"> Remember me
        </label>
      </div>
       <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
      <p class="mt-5 mb-3 text-muted">&copy; Seoul Company - 2022</p>
    </form>
  </main>
  <script src="js/bootstrap.min.js"></script>
</body>

</html>