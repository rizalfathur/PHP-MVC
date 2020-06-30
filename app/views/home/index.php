<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">

      <div class="item active">
        <img src="<?= BASEURL;?>/img/lambo2.jpg" alt="Los Angeles" style="width:100%;">
        <div class="carousel-caption">
          <h1>SuperCar</h1>
          <p>Find many kinds of SuperCars</p>
        </div>
      </div>

      <div class="item">
        <img src="<?= BASEURL;?>/img/lambo.jpg" alt="Chicago" style="width:100%;">
        <div class="carousel-caption">
          <h3>Specification</h3>
          <p>Search info about the supercars specifications!</p>
        </div>
      </div>
    
      <div class="item">
        <img src="<?= BASEURL;?>/img/cars.jpg" alt="New York" style="width:100%;">
        <div class="carousel-caption">
          <h3>Know about a car?</h3>
          <p>Let's Add a car that you know to share to the others!</p>
        </div>
      </div>
  
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>

<div class="container">
  <div class="jumbotron mt-3" style="background-color:#F5F5F5">
    <h2 class="display-4" style="font-color:#000000">Welcome to Carrozine!</h2>
    <p class="lead" style="font-size: 17px">This website is useful for those of you who want to find the specifications of the car you want to buy or know.</p>
    <hr class="my-5">
    <p style="font-size: 13px">If you want to buy a car it's good for you to know in advance about the car you want to find. On this site, you can find various information about cars from the lowest class to the highest class. The information presented is general information that must be known by the car owner before buying his car, especially the price. Because it really determines your interest in seeing a car. There are those who are looking for cheap cars, but there are also those who are looking for a comfortable car of course with a price that is not cheap. Not only search but you can add new brand of car of your known.</p>
    <a class="btn btn-success btn-lg mt-3 " href="<?= BASEURL;?>/cars" role="button">Let's Find Out!</a>
  </div>
</div>

</body>
</html>