<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <title>@yield('title')</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    
    <!-- File CSS -->
    <link rel="stylesheet" href="{{ asset('/css/style.css') }} " />
  
    <!-- File Icon -->
    <link rel="stylesheet" href="{{ asset('/css/fontawesome-free/css/all.min.css') }} "/>

  </head>
  <body>
    
   
@yield('sidebar')

<div class="content">
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container">
  <a class="navbar-brand" href="#">Welcome, Admin</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="{{ url('/')}}">Home </a>
      </li>
    </ul>
    <ul class="navbar-nav ml-auto">
      <li class="nav-item dropdown" >
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-user"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-md dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="#">Logout</a>
        </div>
      </li>
    </ul>
  </div>
  </div>
</nav>

<div class="container">
  <div class="row mt-4">
    <div class="col-12">
      <div class="card">
        <div class="card-body">
          <h3>Data Buku</h3>

          <form action="">
            <div class="form-group row">
              <label for="" class="col-sm-2 col-form-label">ID Buku</label>
              <div class="col-sm-4">
                <input type="text" class="form-control" id="#">
              </div>
            </div>

            <div class="form-group row">
              <label for="" class="col-sm-2 col-form-label">Judul Buku</label>
              <div class="col-sm-4">
                <input type="text" class="form-control" id="#">
              </div>
            </div>

             <div class="form-group row">
              <label for="" class="col-sm-2 col-form-label">Kategori</label>
              <div class="col-sm-4">
              <select class="form-control" id="">
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
              </select>
              </div>
            </div>

            <div class="form-group row">
              <label for="" class="col-sm-2 col-form-label">Harga Sewa Rp</label>
              <div class="col-sm-4">
                <input type="text" class="form-control" id="#">
              </div>
            </div>

            <button type="button" class="btn btn-outline-primary" onclick="uwu()">Submit</button>
            <button type="button" class="btn btn-outline-warning">Kembali</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>








    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <script>
      function uwu() {
        alert('maaf kk blm bisa');
      }
    </script>
  


  </body>
</html>