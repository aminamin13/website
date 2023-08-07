<?php
include 'connectdb.php';
session_start();
if(isset($_SESSION['name']) && isset($_SESSION['username'])){
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>PlayStation | Sony</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="shortcut icon" type="image/x-icon" href="image/logo1.png">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=M+PLUS+1+Code:wght@300;376;400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <header>
        <img src="image/logo1.png" id="logo">
        <span style="text-align: right; color:white;padding-top: 10px;" id="form"> 
            
            <h1 > welcome <?php echo $_SESSION['name']?></h1>     
        </span>
     <div id="backk">
        <div style="padding-top: 90px;">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark" style="margin-bottom: 60px;">
            <div class="container-fluid">
              <a class="navbar-brand" href="#">Sony</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
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
                <form method="POST" class="d-flex">
                  <input class="form-control me-2" type="search" placeholder="Search"  aria-label="Search" style="width: 500px; height: auto;" name="search">
                  <button class="btn btn-outline-success" type="submit" name="submit" style="height: 40px;">Search</button>

                </form>
              </div>
            </div>
          </nav>
        </div>
        </div>
    </header>
    <br><br>
    <article id="backgroung" style=" padding-top: 20px">
      <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel" style="padding: 5px; border-radius: 10px; border: 10px double rgb(43, 40, 40);">
        <div class="carousel-indicators" >
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="image/pss5.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>PlayStation 5</h5>
              <p>Experience an all-new generation of incredible PlayStation games.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="image/joystick.png" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>Wireless Controller</h5>
              <p>Immerse yourself with a controller offering haptic feedback, adaptive triggers and a built-in mic.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="image/ps5-pulse-3d-wireless-headset-review-1.large.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>PULSE 3D™ Wireless Headset</h5>
              <p>Enjoy a seamless wireless experience with a headset fine-tuned for 3D Audio on PS5 consoles.</p>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </article>

    <article id="art2" >
      <table style="padding: 20px;">
        <tr>
          <td>
            <h1 style="color: rgb(2, 21, 102); text-decoration: underline; margin-left: 10px;">Latest Products:</h1>
          </td>
        </tr>
        <tr>
          <td style="padding: 0 40px;"> 
              <div class="card" style="width: 18rem;">
                <img src="image/QK67M.jpg" class="card-img-top" alt="..." style="width: 41.5%;">
                <div class="card-body">
                  <h5 class="card-title">Wireless Controller </h5>
                  <p class="card-text">Price: 99.99$</p>
                  <a href="#" class="btn btn-primary">Add to card</a>
                </div>
              </div>
          </td>

          <td style="padding-right: 40px;">
              <div class="card" style="width: 18rem;" >
                <img src="image/remote.jpeg" class="card-img-top" alt="..." style="width: 56%;">
                <div class="card-body">
                  <h5 class="card-title">Media Remote </h5>
                  <p class="card-text">Price: 29.99$</p>
                  <a href="#" class="btn btn-primary">Add to card</a>
                </div>
              </div>
          </td>
          <td style="padding-right: 35px;">
            <div class="card" style="width: 18rem;">
              <img src="image/hed.jpg" class="card-img-top" alt="..." style="width: 47%;">
              <div class="card-body">
                <h5 class="card-title">PULSE 3D™ Wireless Headset </h5>
                <p class="card-text">Price: 59.99$</p>
                <a href="#" class="btn btn-primary">Add to card</a>
              </div>
            </div>
        </td>
        <td style="padding-right: 30px;">
          <div class="card" style="width: 18rem;">
            <img src="image/vr.png" class="card-img-top" alt="..." style="width: 106%;">
            <div class="card-body">
              <h5 class="card-title">PlayStation VR </h5>
              <p class="card-text">Price: 199.99$</p>
              <a href="#" class="btn btn-primary">Add to card</a>
            </div>
          </div>
        </td>
        </tr><br>
        <tr style="padding-top: 15px;">
          <td style="padding: 0 40px;"> 
              <div class="card" style="width: 18rem;">
                <img src="image/playstation-5-horizontal-product-shot-01-ps5-en-23nov20.png" class="card-img-top" alt="..." style="width: 53.2%;">
                <div class="card-body">
                  <h5 class="card-title">PlayStation 5 Console</h5>
                  <p class="card-text">Price: 799.99$</p>
                  <a href="#" class="btn btn-primary">Add to card</a>
                </div>
              </div>
          </td>
          <td style="padding-right: 40px;padding-top: 15px;">
              <div class="card" style="width: 18rem;" >
                <img src="image/hd-camera-square-image-block-ps5-01-en-07dec20.jpg" class="card-img-top" alt="..." style="width: 53%;">
                <div class="card-body">
                  <h5 class="card-title">HD Camera</h5>
                  <p class="card-text">Price: 29.99$</p>
                  <a href="#" class="btn btn-primary">Add to card</a>
                </div>
              </div>
          </td>
          <td style="padding-right: 35px;padding-top: 15px;">
            <div class="card" style="width: 18rem;">
              <img src="image/dualsense-charging-station-image-block-01-en-22jul20.png" class="card-img-top" alt="..." style="width: 50%;">
              <div class="card-body">
                <h5 class="card-title">DualSenseTM charging station</h5>
                <p class="card-text">Price: 59.99$</p>
                <a href="#" class="btn btn-primary">Add to card</a>
              </div>
            </div>
        </td>
        <td style="padding-right: 30px;padding-top: 15px;" >
          <div class="card" style="width: 18rem;">
            <img src="image/psvr-overview-hardware-column-image-05-ps4-en-06jan20.png" class="card-img-top" alt="..." style="width: 39%;">
            <div class="card-body">
              <h5 class="card-title">PlayStation Move motion controller</h5>
              <p class="card-text">Price: 199.99$</p>
              <a href="#" class="btn btn-primary">Add to card</a>
            </div>
          </div>
        </td>
        </tr>
      </table>

      <div>
            <h1 style="color: rgb(2, 21, 102); text-decoration: underline; margin-left: 10px;">About Us:</h1>
            <p id="about">As a global leader in interactive and digital entertainment devices, Sony Interactive Entertainment (SIE) is responsible for the PlayStation® brand and its suite of products and services. PlayStation has brought innovative products to the market since the original PlayStation was launched in Japan in 1994.

              PlayStation products and services include PlayStation®5, PlayStation®4, PlayStation®VR, PlayStation™Store, PlayStation®Plus, PlayStation™Now and critically acclaimed PlayStation Software games from PlayStation Studios.
              
              Headquartered in San Mateo, California, SIE is a wholly owned subsidiary of Sony Group Corporation with global offices in California, London and Tokyo.</p>


              <iframe src="https://www.google.com/maps/d/embed?mid=19JENXqUtieusJRj93JxjTx7M83M&hl=en&ehbc=2E312F" width="100%" height="480"></iframe>

              </div>
   
                   
                  <footer style="cursor:pointer" class="w3-content w3-padding-64 w3-text-grey w3-xlarge">
                       <i class="fa fa-facebook-official w3-hover-opacity"></i>
                       <i class="fa fa-instagram w3-hover-opacity"></i>
                       <i class="fa fa-snapchat w3-hover-opacity"></i>
                       <i class="fa fa-pinterest-p w3-hover-opacity"></i>
                       <i class="fa fa-twitter w3-hover-opacity"></i>
                       <i class="fa fa-linkedin w3-hover-opacity"></i>
                       <p class="w3-medium">Powered by <a href="#">SONY</a></p>
                  </footer>



                  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY&callback=myMap"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
<?php
              }else{
                  header('Location: index.php');
                  exit();
              }
?>

