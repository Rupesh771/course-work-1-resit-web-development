<!Doctype html>
<html>
<head>
    <title></title>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap" rel="stylesheet">

</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">HimalayanWatches</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="about.php">About Us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="services.php">Our Services</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="contact.php">Contact Us</a>
      </li>

    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
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
      <img src="images/one.jpg" alt="ROLEX" width="1100" height="500">
    </div>
    <div class="carousel-item">
      <img src="images/two.jpg" alt="HUBLOT" width="1100" height="500">
    </div>
    <div class="carousel-item">
      <img src="images/three.jpg" alt="RICHARD MILLIE" width="1100" height="500">
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
        <h2 class="text-center">About Us</h2>
    </div>
    <div class="container-fluid">
      <div class ="row">
        <div class="col-lg-6 col-md-6 col-12">
           <img src="images/seven.jpg" class="img-fluid aboutimg">
        </div>
        <div class="col-lg-6 col-md-6 col-12">
        <h2 class="display-4">This is the official page of HimalayanWatches.</h2>
        <p class="py-3"> We manufacture the best quality watches using Nepalese materials and manpower.</p>
        <a href="about.php" class="btn btn-success"> Check More </a>
        </div>
      </div>
    </div>
</section>

<section class="my-5">
    <div class="py-5">
        <h2 class="text-center">Our Services</h2>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-12">
            <div class="card" style="width:400px">
            <img class="card-img-top" src="images/four.jpg" alt="Card image">
            <div class="card-body">
            <h4 class="card-title">Online Delivery</h4>
             <p class="card-text">We deliver our products direct to your doorsteps.</p>
            <a href="#" class="btn btn-primary">See Profile</a>
         </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-4 col-12">
            <div class="card" style="width:400px">
            <img class="card-img-top" src="images/five.jpg" alt="Card image">
            <div class="card-body">
            <h4 class="card-title">Worldwide Shipping</h4>
             <p class="card-text">Not only in Nepal but we facilitate our customers with worldwide shipping.</p>
            <a href="#" class="btn btn-primary">See Profile</a>
         </div>
        </div>
</div>

        <div class="col-lg-4 col-md-4 col-12">
            <div class="card" style="width:400px">
            <img class="card-img-top" src="images/six.jpg" alt="Card image">
            <div class="card-body">
            <h4 class="card-title">Cashback</h4>
             <p class="card-text">If you are unsatisfied with your product then we even have 1 week cashback offer.</p>
            <a href="#" class="btn btn-primary">See Profile</a>
         </div>
        </div>
      </div>
     </div>
    </div>
</section>

<section class="my-5">
    <div class="py-5">
        <h2 class="text-center">Our Products</h2>
    </div>
    <div class="container-fluid">
     <div class="row">
      <div class="col-lg-4 col-md-4 col-12">
          <img src="images/a1.jpg" class="img-fluid pb-4">
      </div>
      <div class="col-lg-4 col-md-4 col-12">
          <img src="images/a2.jpg" class="img-fluid pb-4">
      </div>
      <div class="col-lg-4 col-md-4 col-12">
          <img src="images/a3.jpg" class="img-fluid pb-4">
      </div>
      <div class="col-lg-4 col-md-4 col-12">
          <img src="images/a7.jpg" class="img-fluid pb-4">
      </div>
      <div class="col-lg-4 col-md-4 col-12">
          <img src="images/a8.jpg" class="img-fluid pb-4">
      </div>
      <div class="col-lg-4 col-md-4 col-12">
          <img src="images/a6.jpg" class="img-fluid pb-4">
      </div>
    </div>
  </div>
</section>



<footer>
    <p class="p-3 bg-dark text-white text-center">HimalayanWatchesCO.</p>
</footer>

  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>

  <!DOCTYPE html>
<html>
  <head>
    <title>Registration Page</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
  </head>
  <body>
    <div class="container-fluid">
      <div class="row col-md-6 col-md-offset-3">
        <div class="panel panel-primary">
          <div class="panel-heading text-center">
            <h1>Registration Form</h1>
          </div>
          <div class="panel-body">
            <form action="connect.php" method="post">
              <div class="form-group">
                <label for="firstName">First Name</label>
                <input
                  type="text"
                  class="form-control"
                  id="firstName"
                  name="firstName"
                />
              </div>
              <div class="form-group">
                <label for="lastName">Last Name</label>
                <input
                  type="text"
                  class="form-control"
                  id="lastName"
                  name="lastName"
                />
              </div>
              <div class="form-group">
                <label for="gender">Gender</label>
                <div>
                  <label for="male" class="radio-inline"
                    ><input
                      type="radio"
                      name="gender"
                      value="m"
                      id="male"
                    />Male</label
                  >
                  <label for="female" class="radio-inline"
                    ><input
                      type="radio"
                      name="gender"
                      value="f"
                      id="female"
                    />Female</label
                  >
                  <label for="others" class="radio-inline"
                    ><input
                      type="radio"
                      name="gender"
                      value="o"
                      id="others"
                    />Others</label
                  >
                </div>
              </div>
              <div class="form-group">
                <label for="email">Email</label>
                <input
                  type="text"
                  class="form-control"
                  id="email"
                  name="email"
                />
              </div>
              <div class="form-group">
                <label for="password">Password</label>
                <input
                  type="password"
                  class="form-control"
                  id="password"
                  name="password"
                />
              </div>
              <div class="form-group">
                <label for="number">Phone Number</label>
                <input
                  type="number"
                  class="form-control"
                  id="number"
                  name="number"
                />
              </div>
              <input type="submit" class="btn btn-primary" />
            </form>
          </div>
          <div class="panel-footer text-right">
            <small>&copy; HimalayanWatchesCO.</small>
          </div>
        </div>
      </div>
    </div>
    <div class="toast" role="alert" aria-live="assertive" aria-atomic="true">
  <div class="toast-header">
    <img src="..." class="rounded mr-2" alt="...">
    <strong class="mr-auto">Bootstrap</strong>
    <small>11 mins ago</small>
    <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>
  <div class="toast-body">
    This is HimalayanWatch.
  </div>
</div>
  </body>
</html>
    
<footer>
    <p class="p-3 bg-dark text-white text-center">HimalayanWatchesCO.</p>
</footer>

<section class="my-5">
    <div class="py-5">
        <h2 class="text-center">Contact Us</h2>
    </div>
       <div class="w-50 m-auto">
         <form action="info.php" method="post">
             <div class="form-group">
                 <label>Username</label>
                 <input type="text" name="user" autocomplete="off" class="form-control">
             </div>
             <div class="form-group">
                 <label>Email Address</label>
                 <input type="text" name="email" autocomplete="off" class="form-control">
             </div>
             <div class="form-group">
                 <label>Contact Number</label>
                 <input type="text" name="mobile" autocomplete="off" class="form-control">
             </div>
             <div class="form-group">
                 <label>Comments</label>
                 <textarea class="form-control" name="comments"> 
                 </textarea>
             </div>
             <button type="submit" class="btn btn-success">Submit</button>
         </form>
       </div>

</section>
<footer>
    <p class="p-3 bg-dark text-white text-center">HimalayanWatchesCO.</p>
</footer>


</body>
</html>
