<?php require_once("../customer-assests/header.php") ?>
<div class="container d-flex justify-content-center align-items-center">
<?php require_once ("../customer-assests/navbar.php") ?>
<main class="p-4 mx-1 mt-1 main text-white" style="background-color: #000020;">
<div class="row">
<div class="title  text-white">
        <h4>Due Dates</h4>
    </div>

    <div class="card text-center mt-3">
            <div class="card-header text-dark mb-3">
            <h5 class="card-title text-dark ">Be On Time!</h5>
            </div>

          
<!-- table -->
<div class="table-responsive-sm table-responsive-md">
<table class="table table-success table-striped">
<thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">What</th>
      <th scope="col">Date</th>
      <th scope="col">Action</th>

    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Rental</td>
      <td>02/22/2024</td>


      <td>
          <div class="d-flex justify-content-center">
            <a href="../cardsView/announcementView.php">
          <button type="submit" class="btn btn-info">View</button>
            </a>
            <a href="../transaction-assets/add.php">
            <button type="submit" class="btn btn-success">Pay</button>
            </a>
        </td>
    </tr>


  </tbody>

</table>
</div>

      <!-- Pagination --> 
      <nav aria-label="d-flex">
  <ul class="pagination ">
    <li class="page-item disabled">
      <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
    </li>
    <li class="page-item"><a class="page-link" href="#">1</a></li>
    <li class="page-item active" aria-current="page">
      <a class="page-link" href="#">2</a>
    </li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item">
      <a class="page-link" href="#">Next</a>
    </li>

  </ul>



</nav>

             
            <!-- <div class="card-body text-start">
                <h5 class="card-title text-dark ">Welcome Back!</h5>
            </div> -->
                <!-- <p class="card-text text-dark">With supporting text below as a natural lead-in to additional content.</p> -->

   
    

   
    </div>
                <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
            </div>

            </div>


</div>
             
            <!-- <div class="card-body text-start">
                <h5 class="card-title text-dark ">Welcome Back!</h5>
            </div> -->
                <!-- <p class="card-text text-dark">With supporting text below as a natural lead-in to additional content.</p> -->

   
    

   
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