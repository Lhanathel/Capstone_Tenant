<?php require_once("../login-assets/header.php") ?>
<?php require_once("../login-assets/navbar.php") ?>

    <!--login Box (Admin)-->
    <div class="container-fluid vh-100 d-flex justify-content-center align-items-center">
      <div class="row ">
        <div class="col-12 d-flex justify-content-center align-items-center p-5">
      <div class="card login-card " style="width: 20rem; background-color: #000020" >
        <div class="card-body " style="border: 1px solid #000020">
          <div class="iconContainer d-flex justify-content-center align-items-center">
            <i class="bi bi-person-fill adminIcon color-white"></i>
          </div>
        <div class="welcome  d-flex justify-content-center align-items-center">
          <p class="text-a">Good Day Sir/Ma'am!</p>
        </div>
          <form action="../Home-customer/home.php">
            <div class="mb-3" >
              <label for="exampleInputEmail1" class="form-label text-light">Email address</label>
              <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label text-light">Password</label>
              <input type="password" class="form-control" id="exampleInputPassword1">
            </div>
            <!-- <div class="mb-3 form-check">
              <input type="checkbox" class="form-check-input" id="exampleCheck1">
              <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div> -->
            <button type="submit" class="btn btn-primary w-100">Login</button>
          </form>
          <a href="#" class="card-link login-card-link">Forgot Email or Password?</a>
          </div>
        </div>
      </div>
<?php require_once ("../login-assets/moto.php"); ?>
     </div>
  </div>

  <?php require_once("../login-assets/footer.php") ?>

