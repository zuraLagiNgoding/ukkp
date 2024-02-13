<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bootstrap demo</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">About</a>
          </li>
        </ul>
        <form class="d-flex" role="search">

          <button class="btn btn-primary d-flex" style="margin-right: 20px;" type="submit">Login</button>
          <button class="btn btn-primary d-flex" type="submit">Register</button>
        </form>
      </div>
    </div>
  </nav>
  <div class="container-fluid text-center text-white" style="margin-bottom:20px; background-color:rgb(216, 216, 216);">
    <div class="row w-100 align-items-center">
      <div class=" col-6">
        <h1 style="color:black;">Welcome to Perpustakaan Digital</h1>
      </div>
      <div class="col-6 my-4"><img class="ms-5" src="{{ asset('gambar/Ellipse 1.png') }}" style="width: 450px;"
          alt="">
      </div>
    </div>
  </div>
  <div class="container-fluid text-left text-white" style="margin-bottom:20px; background-color:rgb(58, 58, 58);">
    <div class="row w-100 align-items-center">
      <div class=" col-6">
        <h1 style="">About</h1>
        <h4>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptas a neque deserunt architecto provident
          voluptatum. Veniam vitae illum fugiat qui.</h4>
      </div>
      <div class="col-6 my-4"><img class="ms-5" src="{{ asset('gambar/logow.webp') }}" style="width: 450px;"
          alt="">
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>
