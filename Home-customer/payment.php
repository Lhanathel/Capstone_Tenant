<?php require_once("../customer-assests/header.php") ?>
<div class="container d-flex justify-content-center align-items-center">
<?php require_once ("../customer-assests/navbar.php") ?>
<main class="p-4 mx-1 mt-1 main text-white" style="background-color: #000020;">
<div class="row">
<div class="title  text-white">
        <h4>Payments</h4>
    </div>
                <div class="card">
            <!-- <div class="card-header text-dark">
                Your Transaction History:
            </div> -->
<!-- Transaction Table -->

<!-- navigation -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Transaction History</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
      <div class="add col-sm-12">
        <form action="../transaction-assets/add.php">
    <button type="submit" class="btn btn-success px-5 px-sm-1 px-md-3 mx-1">Add</button>
    </form>
    </div>
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="#">Accend</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Decend</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Filter
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">By Day</a></li>
            <li><a class="dropdown-item" href="#">By Month</a></li>
            <li><a class="dropdown-item" href="#">By Year</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Archive History</a></li>
          </ul>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>


<!-- table -->
<div class="table-responsive-sm table-responsive-md">
<table class="table table-success table-striped">
<thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">UserName</th>
      <th scope="col">Reference No.</th>
      <th scope="col">Payment Method</th>
      <th scope="col">Date</th>
      <th scope="col">Action</th>

    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>ArielPogi</td>
      <td>2024100000</td>
      <td>G-cash</td>
      <td>01/22/2024</td>

      <td>
          <div class="d-flex">
            <form action="../transaction-assets/view.php">
          <button type="submit" class="btn btn-info">View</button>
          </form>
          <div class="back">
          <div class="d-grid gap-2 d-md-block">
        </div></td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>ArielPogi</td>
      <td>2024100000</td>
      <td>G-cash</td>
      <td>02/22/2024</td>

      <td>
          <div class="d-flex">
          <button type="submit" class="btn btn-info">View</button>
          <div class="back">
          <div class="d-grid gap-2 d-md-block">
        </div></td>
    </tr>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>ArielPogi</td>
      <td>2024100000</td>
      <td>G-cash</td>
      <td>03/22/2024</td>

      <td>
          <div class="d-flex">
          <button type="submit" class="btn btn-info">View</button>
          <div class="back">
          <div class="d-grid gap-2 d-md-block">
        </div></td>
    </tr>
    </tr>
    <tr>
      <th scope="row">4</th>
      <td>ArielPogi</td>
      <td>2024100000</td>
      <td>G-cash</td>
      <td>04/22/2024</td>

      <td>
          <div class="d-flex">
          <button type="submit" class="btn btn-info">View</button>
          <div class="back">
          <div class="d-grid gap-2 d-md-block">
        </div></td>
    </tr>
    </tr>
    <tr>
      <th scope="row">5</th>
      <td>ArielPogi</td>
      <td>2024100000</td>
      <td>G-cash</td>
      <td>05/22/2024</td>

      <td>
          <div class="d-flex">
          <button type="submit" class="btn btn-info">View</button>
          <div class="back">
          <div class="d-grid gap-2 d-md-block">
        </div></td>
    </tr>
    </tr>
    <tr>
      <th scope="row">6</th>
      <td>ArielPogi</td>
      <td>2024100000</td>
      <td>G-cash</td>
      <td>06/22/2024</td>

      <td>
          <div class="d-flex">
          <button type="submit" class="btn btn-info">View</button>
          <div class="back">
          <div class="d-grid gap-2 d-md-block">
        </div></td>
    </tr>
    </tr>
    <tr>
      <th scope="row">7</th>
      <td>ArielPogi</td>
      <td>2024100000</td>
      <td>G-cash</td>
      <td>07/22/2024</td>

      <td>
          <div class="d-flex">
          <button type="submit" class="btn btn-info">View</button>
          <div class="back">
          <div class="d-grid gap-2 d-md-block">
        </div></td>
    </tr>
    </tr>
    <tr>
      <th scope="row">8</th>
      <td>ArielPogi</td>
      <td>2024100000</td>
      <td>G-cash</td>
      <td>08/22/2024</td>

      <td>
          <div class="d-flex">
          <button type="submit" class="btn btn-info">View</button>
          <div class="back">
          <div class="d-grid gap-2 d-md-block">
        </div></td>
    </tr>
    </tr>
    <tr>
      <th scope="row">9</th>
      <td>ArielPogi</td>
      <td>2024100000</td>
      <td>G-cash</td>
      <td>09/22/2024</td>

      <td>
          <div class="d-flex">
          <button type="submit" class="btn btn-info">View</button>
          <div class="back">
          <div class="d-grid gap-2 d-md-block">
        </div>
    </td>
    </tr>
    <tr>
      <th scope="row">10</th>
      <td>ArielPogi</td>
      <td>2024100000</td>
      <td>G-cash</td>
      <td>10/22/2024</td>

      <td>
          <div class="d-flex">
          <button type="submit" class="btn btn-info">View</button>
          <div class="back">
          <div class="d-grid gap-2 d-md-block">
        </div></td>
    </tr>
    
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
             


</main>
</div>

<?php require_once ("../customer-assests/footer.php")?>
</body>
</html>