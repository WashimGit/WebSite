<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
  
</head>
<body>



<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">My Photography</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    
      <li class="nav-item active">
        <ul class="navbar-nav m-auto"><a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="about.php">About</a>
      </li>
    </ul>
   
  </div>
</nav>



<div id="demo" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  
  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/cc9.jpg" alt="washim" width="1100" height="500">
    </div>
    <div class="carousel-item">
      <img src="images/cc10.jpg" alt="Chicago" width="1100" height="500">
    </div>
    <div class="carousel-item">
      <img src="images/cc7.jpg" alt="New York" width="1100" height="500">
    </div>
    <div class="carousel-item">
      <img src="images/cc8.jpg" alt="New York" width="1100" height="500">
    </div>
  </div>
  
  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>


<section class="my-5">
<div class="py-1">
    <h2 class="text-center">Gallery</h2>
  </div>


</div>





<div class="row">
  <div class="col-lg-4 col-md-4 col-12">
    <img src="images/cc1.jpg" class="img-fluid pb-4">
</div>
<div class="col-lg-4 col-md-4 col-12">
    <img src="images/cc1.jpg" class="img-fluid pb-4">
</div>
<div class="col-lg-4 col-md-4 col-12">
    <img src="images/cc1.jpg" class="img-fluid pb-4">
</div>
<div class="col-lg-4 col-md-4 col-12">
    <img src="images/cc1.jpg" class="img-fluid pb-4">
</div>
<div class="col-lg-4 col-md-4 col-12">
    <img src="images/cc1.jpg" class="img-fluid pb-4">
</div>
<div class="col-lg-4 col-md-4 col-12">
    <img src="images/cc1.jpg" class="img-fluid pb-4">
</div>
<div class="col-lg-4 col-md-4 col-12">
    <img src="images/cc1.jpg" class="img-fluid pb-4">
</div>
<div class="col-lg-4 col-md-4 col-12">
    <img src="images/cc1.jpg" class="img-fluid pb-4">
</div>
<div class="col-lg-4 col-md-4 col-12">
    <img src="images/cc1.jpg" class="img-fluid pb-4">
</div>
<div class="col-lg-4 col-md-4 col-12">
    <img src="images/cc1.jpg" class="img-fluid pb-4">
</div>
<div class="col-lg-4 col-md-4 col-12">
    <img src="images/cc1.jpg" class="img-fluid pb-4">
</div>
<div class="col-lg-4 col-md-4 col-12">
    <img src="images/cc1.jpg" class="img-fluid pb-4">
</div>
<div class="col-lg-4 col-md-4 col-12">
    <img src="images/cc1.jpg" class="img-fluid pb-4">
</div>
<div class="col-lg-4 col-md-4 col-12">
    <img src="images/cc1.jpg" class="img-fluid pb-4">
</div><div class="col-lg-4 col-md-4 col-12">
    <img src="images/cc1.jpg" class="img-fluid pb-4">
</div>

</div>
<div>
</section>





<section class="my-5">
<div class=py-0>
    <h2 class="text-center">Contact Us</h2>
</div>
<div class="w-50 m-auto">
  <form action="userinfo.php" method="post">
  <div class="form-group">
    <label>Username</label>
    <input type="text" name="user" autocomplete= "off" class="form-control">
  </div>
  <div class="form-group">
    <label>Email Id</label>
    <input type="text" name="Email" autocomplete= "off" class="form-control">
  </div>
  <div class="form-group">
    <label>Mobile Number</label>
    <input type="text" name="Mobile" autocomplete= "off" class="form-control">
  </div>
  <div class="form-group">
    <label>Comment</label>
    <textarea class="form-control" name="Comment">

    </textarea>
  </div>
  <button type="submit" class="btn btn-success">Submit</button>
  </form>
<div>
</section>
<footer>
<p class="p-3 bg-dark text-white text-center ">@wasimProduction</p>
</footer>




    

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>