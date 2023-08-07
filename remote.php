<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Media Remote | PS5</title>
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" type="image/x-icon" href="image/logo1.png">
    <link href="https://fonts.googleapis.com/css2?family=M+PLUS+1+Code:wght@300;376;400&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">  
</head>
<body>
    <header>
    <a href="index.php"><img src="image/logo1.png" id="logo"></a>
        <span id="form">
            <form >
                <label>Username</label>
                <input type="text" placeholder="  Enter your username here  " required >
                <br><br>
                <label>Password  </label>
                <input type="password" placeholder="  Enter your password here  " required >
                <br>
                <a href="registration.php"><button type="button" id="btn2"> Register<img src="image/arrow.png"></button></a>  
                <button type="submit" id="btn1">Login</button>
                
            </form>
        </span>
        <div id="list">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark" >
            <div class="container-fluid">
              <a class="navbar-brand" href="#">Sony</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbar">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="index.html">Home</a>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Products
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <li><a class="dropdown-item" href="ps5.php">PS5</a></li>
                      <li><a class="dropdown-item" href="controller.php">Controller</a></li>
                      <li><a class="dropdown-item" href="vr.php">VR</a></li>
                      <li><a class="dropdown-item" href="remote.php">Media Remote</a></li>
                      <li><a class="dropdown-item" href="headset.php">Headset</a></li>
                    </ul>
                    
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="contact us.php">Contact Us</a>
                  </li>
                </ul>
                <form class="d-flex">
                  <input class="form-control me-2" type="search" placeholder="Search"  aria-label="Search" style="width: 500px; height: auto;">
                  <button class="btn btn-outline-success" type="submit" style="height: 40px;">Search</button>
                </form>
              </div>
            </div>
          </nav>
        </div>
    </header>
    <article id="product-details">
      <table>
        <tr>
          <td style="padding-top: 100px;">
              <div class="card" style="width: 20rem; margin-left: 10px;">
               <img src="image/remote.jpeg" class="card-img-top" alt="..." style="width: 80%;">
               <div class="card-body">
                 <h5 class="card-title">Media Remote</h5>
                 <p class="card-text">Price: 29.99$</p>    
               </div>
               </div>
            </td>
            <td>
              <div id="ps5">
                <h2>Media Remote</h2>
                <h6>Explore a world of entertainment</h6>
                <p>Effortlessly control a wide range of blockbuster entertainment on PS5™.
                    Launch Disney+, Netflix, Spotify and YouTube at the push of a button1  – even when the console is powered off.
                    Quickly navigate media with built-in play/pause, fast forward and fast reverse buttons. 
                </p>
              <a href="#" class="btn btn-primary">Add To Cart</a>
              </div>
            </td>
          </tr>
      <table>
    </article>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>