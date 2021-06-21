<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>STORE-LOCATOR</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/navbar.css') }}">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container">
    <a class="navbar-brand" href="#">StoreLocator</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link mt-2" href="#"><h6>Home</h6></a>
        </li>
        <li class="nav-item">
          <a class="nav-link mt-2" href="#"><h6>About Us</h6></a>
        </li>
        <li class="nav-item dropdown mt-2">
          <a class="nav-link  " href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
           <h6>Business Types   </h6>
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Automobiles</a></li>
            <li><a class="dropdown-item" href="#">Grocery</a></li>
            <li><a class="dropdown-item" href="#">Electronics</a></li>
            <li><a class="dropdown-item" href="#">Hardware and Plumbing</a></li>
            <li><a class="dropdown-item" href="#"></a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">END</a></li>
          </ul>
        </li>
        <!-- <li class="nav-item dropdown">
        <a class="nav-link " href="#"><button class="btn btn-md btn-danger">Login</button></a>
        </li> -->
      </ul>
      <form class="d-flex">

        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
      <div class="login">

      <a class="nav-link " href="#"><button class="btn btn-md btn-danger">Login</button></a>
      </div>
    </div>
  </div>

</nav>
</body>
<script src="{{asset('bootstrap/js/bootstrap.js')}}"></script>
<script src="{{asset('bootstrap/js/app.js')}}"></script>
</html>
