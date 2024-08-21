<?php require_once("../customer-assests/header.php") ?>
<div class="container d-flex justify-content-center align-items-center">
<?php require_once ("../customer-assests/navbar.php") ?>
<main class="p-4 mx-1 mt-1 main text-white" style="background-color: #000020;">
<div class="row">
<div class="title  text-white">
        <h1>Home</h1>
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
    <div class="card user text-white bg-white mb-3 mb-3 col-lg-4 col-md-6 col-sm-12" style="border: 1px solid black" >
                <div class="card-header bg-white text-dark align-items-center">User</div>
                <div class="card-body bg-dark mb-1">
                    <h5 class="card-title text-white ">Ariel Bernard Catimbang</h5>
                    <img src="../bg-img/ariel.jpg" alt="" width="150" height="150" class="img-fluid align-text-top text-white " style="border-radius: 50%;">
                    <p class="text-secondary align-items-end justify-content-center">ID:2024500229</p>
                    <div class="d-flex align-self-end justify-content-center flex-column">
                        <button type="submit" class="btn btn-success mb-1 " style="max-width:500px ">In</button>
                        <button type="submit" class="btn btn-secondary " style="max-width:500px">Out</button>
                    </div>
                </div>
                </div>
    <!-- /User -->

    <!-- ? -->
    <div class="card waiting text-white bg-white mb-3 col-lg-6  mb-3 col-lg-4 col-md-6 col-sm-12">
                <div class="card-header text-dark"><h1>Your Place</h1></div>
                <div class="card-body text-dark">
                    <h5 class="card-title">Branch:</h5> San Jose Delmonte <br><hr>
                    <h5 class="card-title">Floor:</h5> 1 <br><hr>
                    <h5 class="card-title">Room:</h5> 101
                </div>
                </div>
    <!-- /? -->
    </div>
                <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
            </div>

            </div>
    <!-- / -->

    <!-- cards -->


        <div class="cards-container mt-2">
            <div class="row d-flex justify-content-around">
           
            <div class="card cards text-white bg-primary mb-3 col-3">
            <a href="../cards/announcement.php" class="text-white">
                <div class="card-header ">Announcements</div>
                <div class="card-body">
                    <h5 class="card-title">1</h5>
                </div>
                </a>
                </div>
                


                <div class="card cards text-white bg-success mb-3 col-3 ">
                <a href="../cards/payments.php" class="text-white">
                <div class="card-header ">Payments</div>
                <div class="card-body">
                    <h5 class="card-title">1</h5>
                </div>
                </a>
                </div>
                <div class="card cards text-white bg-danger mb-3 col-3 ">
                <a href="../cards/utilities.php" class="text-white">
                <div class="card-header ">Utiliteis</div>
                <div class="card-body">
                    <h5 class="card-title">0</h5>
                </div>
                </a>
                </div>
                <div class="card cards text-dark bg-warning mb-3 col-3 ">
                <a href="../cards/duedates.php" class="text-white">
                <div class="card-header ">Due Dates</div>
                <div class="card-body">
                    <h5 class="card-title">1</h5>
                </div>
                </a>
                </div>

                </div>
                </div>

</main>
</div>

<?php require_once ("../customer-assests/footer.php")?>
</body>
</html>