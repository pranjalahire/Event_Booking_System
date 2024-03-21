<!-- register.php -->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- <link rel="stylesheet" href="css/style.css"> -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <title>Event Booking System - Register</title>
</head>

<body class="	bg-success-subtle">



  <!-- navbar -->
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Home</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Events</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Gallery</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">About</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Contact Us
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Action</a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="admin_login.php">Admin Login</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- header -->
  <header>
    <h1 style=" color:darkslategray; font-family: 'Brush Script MT', cursive; font-size:80px">Explore Your Favourite Event..</h1>
  </header>
  <h1 style="text-align:center; color:darkslategray; font-family: 'Brush Script MT', cursive; font-size:40px">Event Booking System - Register</h1>




  <!-- login -->
  <div class="container">
    <main style="margin:5px; background-color:#BCD4E6">
      <!-- <main style="margin:5px; background-color:#BCD4E6"> -->

      <form action="process_register.php" method="post" style="max-width: 800px; margin: 0 auto;">
        <br>
        <div class="form-group row">
          <label for="username" class="col-sm-2 col-form-label">Username:</label>
          <div class="col-sm-10">
            <input type="text" id="username" name="username" required class="form-control" style="margin:5px">
          </div>
        </div>

        <div class="form-group row">
          <label for="password" class="col-sm-2 col-form-label">Password:</label>
          <div class="col-sm-10">
            <input type="password" id="password" name="password" required class="form-control" style="margin:5px">
          </div>
        </div>

        <div class="form-group row">
          <label for="email" class="col-sm-2 col-form-label">Email:</label>
          <div class="col-sm-10">
            <input type="email" id="email" name="email" required class="form-control" style="margin:5px">
          </div>
        </div>

        <div class="form-group row">
          <label for="mobile_no" class="col-sm-2 col-form-label">Mobile:</label>
          <div class="col-sm-10">
            <input type="text" id="mobile_no" name="mobile_no" class="form-control" style="margin:5px">
          </div>
        </div>

        <div class="text-center">
          <button type="submit" class="btn btn-success" style="align-text:center; margin:8px; ">Register</button>
        </div>
      </form>
      <p>Already have an account? <a href="login.php" class="btn btn-success" style="margin:8px">Login here</a>.</p>

    </main>
  </div>


  <!-- card -->
  <div class="container">
    <div class="row row-cols-1 row-cols-md-3 g-4 ">
      <div class="col">
        <div class="card btn btn-outline-success">
          <img src="event1.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Technical Event-1</h5>
            <p class="card-text">This is a longer card with supporting text </p>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card btn btn-outline-success">
          <img src="event2.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">React </h5>
            <p class="card-text">This is a longer card with supporting text .</p>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card btn btn-outline-success">
          <img src="event3.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Coding Challenge</h5>
            <p class="card-text">This is a longer card with supporting text </p>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card btn btn-outline-success">
          <img src="event4.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Hackathon</h5>
            <p class="card-text">This is a longer card with supporting text </p>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card btn btn-outline-success">
          <img src="event1.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Technical Event-2</h5>
            <p class="card-text">This is a longer card with supporting text </p>
          </div>
        </div>
      </div>
    </div>
  </div>


</body>

</html>