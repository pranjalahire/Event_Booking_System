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


  <style>
    /* Reduce the size of the carousel */
    #carouselExampleInterval {
      max-width: 800px;
      /* Adjust this value as needed */

      margin: auto;
      /* Center the carousel */
    }

    /* Reduce the size of the images */
    .carousel-item img {
      max-width: 100%;
      /* Ensure the image fits within the carousel */
      max-height: 430px;
      height: auto;
      /* Maintain aspect ratio */
    }

    .box {
      flex: 1;
      padding: 10px;
    }

    .content {
      display: flex;
      margin: 5px;
    }

    .background-image {
      background-image: url("bg.jpg");
      background-size: cover;
      background-repeat: no-repeat;
      height: 85vh;
      /* opacity: 0.9; */
    }
  </style>
</head>

<body class="	bg-success-subtle">


  <!-- header -->
  <!-- <header>
    <h1 style=" color:darkslategray; font-family: 'Brush Script MT', cursive; font-size:80px">Explore Your Favourite Event..</h1>
  </header> -->


  <!-- background image -->
  <div class="background-image">
    <br>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
      <div class="container-fluid">
        <a class="navbar-brand" href="#"><b>Home</b></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#events"><b>Events</b></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#gallery"><b>Gallery</b></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#about"><b>About</b></a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><b>
                  Contact Us
                </b></a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">+91 8888888888</a></li>
                <li><a class="dropdown-item" href="#">+91 7788888888</a></li>
                <li><a class="dropdown-item" href="#">+91 7777777777</a></li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="admin_login.php"><b>Admin Login</b></a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- <img src="bg.jpg"> -->
    <h1 style=" color:lightgray; font-family: 'Brush Script MT', cursive; font-size:100px">&nbsp;Explore Your Favourite Event...</h1>
    <h1 style="text-align:center; color:lightgray; font-family: 'Brush Script MT', cursive; font-size:40px">Event Booking System - Register</h1>
    <br><br><br><br><br><br><br><br><br><br><br>
    <h1 style=" color:lightgray; font-family: cursive; font-size:90px">&nbsp;Technical</h1>
    <h1 style=" color:lightgray; font-family: cursive; font-size:90px">&nbsp;&nbsp;&nbsp;&nbsp; Events...</h1>

  </div>

  <!-- login -->
  <div class="content">
    <div class="box" style="margin: 15px;">
      <h2 style=" color:darkslategray; font-family:  cursive; font-size:40px">Introducing your Ultimate Event Companion...</h2>
      <p style=" color:darkslategray; font-family: cursive; font-size:25px">Are you tired of missing out on exciting events happening around you? <br>your go-to platform for discovering, booking, and experiencing unforgettable events!
        <br>
        + Discover Diverse Events: Explore our extensive catalog and uncover hidden gems waiting to be experienced.
        <br>
        + Easy Booking Process: Simply browse through event listings, select your preferred event, and secure your spot with just a few clicks. Say goodbye to long queues and last-minute hassles!
      </p>
    </div>


    <!-- Carousal -->

    <div class="box" style="margin: 15px;" id="gallery">
      <div>
        <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="10000">
              <img src="register1.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item" data-bs-interval="2000">
              <img src="event4.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="event3.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="event1.jpg" class="d-block w-100" alt="...">
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </div>
    </div>
  </div>

  <div class="container">
    <main style="margin:5px; background-image:url('form.jpg') ">
      <!-- <main style="margin:5px; background-color:#BCD4E6"> -->

      <form action="process_register.php" method="post" style="max-width: 800px; margin: 0 auto;">
        <br>
        <div class="form-group row">
          <label style=" color:lightgray;" for="username" class="col-sm-2 col-form-label">Username:</label>
          <div class="col-sm-10">
            <input type="text" id="username" name="username" required class="form-control" style="margin:5px">
          </div>
        </div>

        <div class="form-group row">
          <label style=" color:lightgray;" for="password" class="col-sm-2 col-form-label">Password:</label>
          <div class="col-sm-10">
            <input type="password" id="password" name="password" required class="form-control" style="margin:5px">
          </div>
        </div>

        <div class="form-group row">
          <label style=" color:lightgray;" for="email" class="col-sm-2 col-form-label">Email:</label>
          <div class="col-sm-10">
            <input type="email" id="email" name="email" required class="form-control" style="margin:5px">
          </div>
        </div>

        <div class="form-group row">
          <label style=" color:lightgray;" for="mobile_no" class="col-sm-2 col-form-label">Mobile:</label>
          <div class="col-sm-10">
            <input type="text" id="mobile_no" name="mobile_no" class="form-control" style="margin:5px">
          </div>
        </div>

        <div class="text-center">
          <button type="submit" class="btn btn-success" style="text-align:center; margin:8px; ">Register</button>
        </div>
      </form>
      <!-- <p style="text-align:center"> <a href="login.php" class="btn btn-success" style="margin:8px">Already have an account? Login here</a>.</p> -->
      <p style=" color:lightgray;">&nbsp;&nbsp;&nbsp; Already have an account? <a href="login.php" class="btn btn-success" style="margin:8px">Login here</a>.</p>

    </main>
  </div>

  <!-- card -->
  <div class="container" id="events">
    <div class="row row-cols-1 row-cols-md-3 g-4 ">
      <div class="col">
        <div class="card btn btn-outline-success">
          <img src="event1.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Technical Event-1</h5>
            <p class="card-text">Tech fest with coding </p>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card btn btn-outline-success">
          <img src="event2.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">React </h5>
            <p class="card-text">Frontend Design Competition.</p>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card btn btn-outline-success">
          <img src="event3.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Coding Challenge</h5>
            <p class="card-text">Hiring Challenge for developers</p>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card btn btn-outline-success">
          <img src="event4.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Hackathon</h5>
            <p class="card-text">Unsplash hackathon journey </p>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card btn btn-outline-success">
          <img src="event5.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Technical Event-2</h5>
            <p class="card-text">Advanced Docker,Kubernetes </p>
          </div>
        </div>
      </div>
    </div>
  </div>


  <!-- About -->
  <br>
  <div class="container" id="about">
    <div class="row">
      <div class="col-sm-6 mb-3 mb-sm-0">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title" style=" color:darkslategray; font-family: cursive;">Secure and Reliable</h5>
            <p class="card-text">We ensure secure online transactions and provides reliable customer support to address any concerns or queries you may have.</p>
            <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
          </div>
        </div>
      </div>
      <div class="col-sm-6">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title" style=" color:darkslategray; font-family: cursive;">Personalized Recommendations</h5>
            <p class="card-text">Discover new events that match your unique tastes and discover new passions along the way.</p>
            <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- footer -->
  <br>
  <div class="container">
    <footer class="bg-body-tertiary text-center text-lg-start">
      <!-- Copyright -->
      <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.05);">
        © 2024 Copyright:
        <a class="text-body" href="register.php">TechEvent.com</a>
      </div>
      <!-- Copyright -->
    </footer>
  </div>

  <br>
</body>

</html>