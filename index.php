<!DOCTYPE html>
<html>
<head>
  <title></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

  <link rel="stylesheet" type="text/css" href="style.css">

  <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">
  
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">ApuMondal</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="service.php">Services</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="about.php">About</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" autocomplete="off">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>


 <div id="demo" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/newyork.jpg" alt="Los Angeles" width="1100" height="500">
      <div class="carousel-caption">
        <h3>New York</h3>
        <p>We had such a great time in NY!</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="images/dubai.jpeg" alt="Chicago" width="1100" height="500">
      <div class="carousel-caption">
        <h3>Dubai</h3>
        <p>Thank you, Dubai!</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="images/brazil.jpg" alt="New York" width="1100" height="500">
      <div class="carousel-caption">
        <h3>Brazil</h3>
        <p>We love the Brazil!</p>
      </div>   
    </div>
  </div>
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>

<section class="my-5">
  <div class="py-5">
    <h3 class="text-center">About Us</h3>
  </div>

  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-6 col-md-6 col-12">
        <img src="images/computer.jpg" class="img-fluid aboutimg">
      </div>
       <div class="col-lg-6 col-md-6 col-12">
        <h2 class="display-5">I am Apu Mondal</h2>
          <p class="py-3">i am a website developer.</p>
          <a href="about.php" class="btn btn-success">Read More</a>
      </div>
    </div>
   </div> 
</section>

<section class="my-5">
  <div class="py-5">
    <h3 class="text-center">Our Services</h3>
  </div>

  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-4 col-md-4 col-12">
        <div class="card" >
          <img class="card-img-top" src="images/sd.jpg" alt="Card image">
            <div class="card-body">
               <h4 class="card-title">Web Applications Development</h4>
                 <p class="card-text">Some example text.</p>
                   <a href="#" class="btn btn-primary">See Profile</a>
            </div>
        </div>
      </div> 

      <div class="col-lg-4 col-md-4 col-12">
        <div class="card" >
          <img class="card-img-top" src="images/sd4.jpg" alt="Card image">
            <div class="card-body">
               <h4 class="card-title">Software Development</h4>
                 <p class="card-text">Some example text.</p>
                   <a href="soft_develop.php" class="btn btn-primary">See Profile</a>
            </div>
        </div>
      </div> 

      <div class="col-lg-4 col-md-4 col-12">
        <div class="card" >
          <img class="card-img-top" src="images/sd2.png" alt="Card image">
            <div class="card-body">
               <h4 class="card-title">Data Entry</h4>
                 <p class="card-text">Some example text.</p>
                   <a href="#" class="btn btn-primary">See Profile</a>
            </div>
        </div>
      </div> 

    </div> 
  </div>
</section>

<section class="my-5">
  <div class="py-5">
    <h3 class="text-center">Gallery</h3>
  </div>

  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-4 col-md-4 col-12">
        <img src="images/cl1.jpg" class="img-fluid pb-4">
        
      </div>
      <div class="col-lg-4 col-md-4 col-12">
        <img src="images/cl2.jpg" class="img-fluid pb-4">
        
      </div>
      <div class="col-lg-4 col-md-4 col-12">
        <img src="images/cl1.jpg" class="img-fluid pb-4">
        
      </div>
      <div class="col-lg-4 col-md-4 col-12">
        <img src="images/cl1.jpg" class="img-fluid pb-4">
        
      </div>
      <div class="col-lg-4 col-md-4 col-12">
        <img src="images/cl1.jpg" class="img-fluid pb-4">
        
      </div>
      <div class="col-lg-4 col-md-4 col-12">
        <img src="images/cl1.jpg" class="img-fluid pb-4">
        
      </div>
      
    </div>
    
  </div>

</section>

<section class="my-5">
  <div class="py-5">
    <h3 class="text-center">Contact Us</h3>
  </div>
    <div class="w-50 m-auto">
      <form action="userinfo.php" method="post">
        <div class="form-group">
          <label>Username</label>
          <input type="text" name="user" class="form-control" autocomplete="off" required="please enter your name">          
        </div>
         <div class="form-group">
          <label>Email-id</label>
          <input type="text" name="email" class="form-control" autocomplete="off" required="pleaseenter your email">          
        </div>
         <div class="form-group">
          <label>Mobile No.</label>
          <input type="text" name="mobile" class="form-control" autocomplete="off" required="please enter your mobile no.">          
        </div>
         <div class="form-group">
          <label>Your Comments</label>
         <textarea class="form-control" name="comment" required="please put your Comments"></textarea>
                
        </div>
        <button type="submit" class="btn btn-success">Submit</button>
      </form>
    </div>

 </section> 

<footer>
  <p class="p-2 bg-dark text-white text-center">@developedBy_apu</p>
</footer>

</body>
</html>