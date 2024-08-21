<?php require_once("../customer-assests/header.php") ?>
<div class="container d-flex justify-content-center align-items-center">
<?php require_once ("../customer-assests/navbar.php") ?>
<main class="p-4 mx-1 mt-1 main text-white" style="background-color: #000020;">
<div class="row">
<div class="title  text-white">
        <h4>Message Us</h4>
    </div>

    <div class="card text-center mt-3">
            <div class="card-header text-dark mb-3">
            <h5 class="card-title text-dark ">Welcome Back!</h5>
            </div>

             
            <!-- <div class="card-body text-start">
                <h5 class="card-title text-dark ">Welcome Back!</h5>
            </div> -->
                <!-- <p class="card-text text-dark">With supporting text below as a natural lead-in to additional content.</p> -->

    <!-- User -->
    <div class="row d-flex justify-content-evenly ">
    <div class="card user text-white bg-white mb-2 pt-3 mb-3 col-lg-4 col-md-6 col-sm-12" style="border: 1px solid black;" >
                <div class="card-header bg-white text-dark align-items-start">User</div>
                <div class="card-body bg-dark mb-1 pt-5">
                    <img src="../bg-img/ariel.jpg" alt="" width="150" height="150" class="img-fluid align-text-top text-white " style="border-radius: 50%;">
                    <p class="text-secondary align-items-end justify-content-center">ID:2024500229</p>
                    <h5 class="card-title text-white ">Ariel Bernard Catimbang</h5>

                    <!-- <div class="d-flex align-self-end justify-content-center flex-column">
                        <button type="submit" class="btn btn-success my-4  " style="max-width:500px ">Upload New Photo</button>
                    </div> -->
                    
                </div>
                <div class="box  my-3 text-dark" style="border: 1px solid black;" >
                <div class="card-header bg-white text-dark">Contract File attachments Here</div>
                <div class="d-flex align-self-end justify-content-center flex-column mt-1">
                <a href="../profileEdit/agreements.php"><button type="submit" class="btn btn-primary mb-1 " style="width:100% ">Agreements</button></a>
                <a href="../profileEdit/contract.php"><button type="submit" class="btn btn-info mb-1 " style="width:100% ">Contract</button></a>
                    </div>

                </div>
                </div>
    <!-- /User -->

    <!-- ? -->
    <div class="card waiting text-white bg-white  col-lg-6 mb-3  col-md-6 col-sm-12  ">
                <div class="card-header text-dark"><h4>Your Information</h4></div>
                <div class="card-body text-dark text-start">
                     <p class="card-title">Fullname: Ariel Bernard Masong Catimbang</p><hr>
                    <p class="card-title">Branch: San Jose Delmonte</p><hr>
                    <p class="card-title">Floor: 1</p><hr>
                    <p class="card-title">Room: 101</p><hr>
                    <p class="card-title">Contact: 09846524684</p> <hr>
                    <p class="card-title">Age: 21</p> <hr>
                    <p class="card-title">ID: 2021500229</p><hr>
                    <p class="card-title">Home Address: Uc-4-a3 BRGY.Citrus CSJDM Bulacan</p>  

                                        <div class="d-flex align-self-end justify-content-center flex-column mt-5">
                       <a href="../profileEdit/info.php"> <button type="submit" class="btn btn-success mb-1 " style="width:100px ">Edit</button> </a>
                        <a href="../logins/tenant.php"><button type="submit" class="btn btn-secondary " style="width:100px">Log-Out</button></a>
                    </div>

                </div>
                </div>
    <!-- /? -->
    </div>
                <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
            </div>

            </div>


</div>

</main>
</div>

<?php require_once ("../customer-assests/footer.php")?>
</body>
</html>