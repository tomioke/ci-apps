<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- Fontawesome CDN -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
    
    <title><?php echo $judul; ?></title>
  </head>
  <body>

  <!-- Bagian navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-danger">
    <a class="navbar-brand mt-1" href="#">
      <img src="application/files/logo.png" class="shadow-lg mr-2 ml-2 rounded" alt="logo" width="40"> 
      SDN SIDAREJA 01
    </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse justify-content-start ml-3" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      <a class="nav-item nav-link" href="#">Data Siswa</a>
      <a class="nav-item nav-link disabled" href="#">Pendaftaran</a>
    </div>
  </div>

  <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-info my-2 my-sm-0" type="submit">
        <span class="fas fa-search"></span>
        Search
      </button>
  </form>
</nav>