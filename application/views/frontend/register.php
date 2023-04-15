<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>

      <!-- STYLING BOOTSTRAP -->
      <link rel="stylesheet" href="<?php echo base_url()?>assets/vendor/bootstrap5/css/bootstrap.min.css">

      <!-- STYLING CUSTOM -->
      <link rel="stylesheet" href="<?php echo base_url()?>assets/css/pages/login.css">

</head>
<body>
    
    <div class="container">
        <div class="top-content">
          <div class="mb-3">
            <svg width="29" height="30" viewBox="0 0 29 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M11.1429 28.4811C11.774 28.4811 12.2857 27.9196 12.2857 27.2268C12.2857 26.5341 11.774 25.9725 11.1429 25.9725C10.5117 25.9725 10 26.5341 10 27.2268C10 27.9196 10.5117 28.4811 11.1429 28.4811Z"
                    stroke="#3A3A3A" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
                <path
                    d="M23.7141 28.4811C24.3453 28.4811 24.857 27.9196 24.857 27.2268C24.857 26.5341 24.3453 25.9725 23.7141 25.9725C23.083 25.9725 22.5713 26.5341 22.5713 27.2268C22.5713 27.9196 23.083 28.4811 23.7141 28.4811Z"
                    stroke="#3A3A3A" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
                <path
                    d="M2 2.14008H6.57143L9.63429 18.9356C9.73879 19.5131 10.025 20.0319 10.4429 20.4011C10.8608 20.7703 11.3837 20.9664 11.92 20.9551H23.0286C23.5649 20.9664 24.0878 20.7703 24.5057 20.4011C24.9235 20.0319 25.2098 19.5131 25.3143 18.9356L27.1429 8.41175H7.71429"
                    stroke="#3A3A3A" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
          </div>
          
          <h2>Register Cepi Store</h2>
          <p class="heading">Mendaftar untuk bisa masuk cepi store</p>
      
        </div>
        <form class="form-signin" method="POST" action="<?php echo base_url()?>register/process">
        <div class="inputs">
          <div class="position-relative">
              <input type="text" name="username" id="user" placeholder="Username" class="input">
              <label for="email" class="input-label" >Username</label>
          </div>

          <div class="position-relative">
              <input type="text" name="phone" id="user" placeholder="Nomor telepon" class="input">
              <label for="email" class="input-label">Nomor telepon</label>
          </div>

          <div class="position-relative">
              <input type="text" name="address" id="user" placeholder="Alamat" class="input">
              <label for="email" class="input-label">Alamat</label>
          </div>

          <div class="position-relative">
              <input type="password" name="password" id="password" class="input" placeholder="Password">
              <label for="password" class="input-label">Passowrd</label>
          </div>
        </div>

        <!-- <div class="checkbox mb-3">
            <label>
        <input type="checkbox" value="remember-me"> Remember me</label>
        </div> -->
    
        <button class="w-100 btn btn-lg btn-primary" type="submit">Daftar</button>
</form>
    </div>

    <script src="<?php echo base_url()?>assets/vendor/bootstrap5/js/bootstrap.min.js"></script>
	<?php echo $this->session->flashdata("pesan"); ?>

</body>
</html>