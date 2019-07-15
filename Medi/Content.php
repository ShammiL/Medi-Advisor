<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
 
  <style>
            body {font-family: Arial, Helvetica, sans-serif;
            /* background-image: url(i1.jpg); */
            text-align:justify;box-sizing: border-box
             }
            
             #more {display: none;}
            h1{
              text-align:center;
            }

            
              .container{
                text-align:justify;
                /* background-color: #f2f2f29c; */
                margin: auto
                
              }
            
            </style>
</head>
<?php
// require_once 'dconnect.php';
// $con = Database::getInstance();            
// $statement = $con->connect->prepare("SELECT * FROM disease");
// $statement->setFetchMode(PDO::FETCH_ASSOC);
// $statement->execute();
// while($row=$statement->fetch()){
           
    ?> 
<body>
<?php 
          require 'Header.php';
      ?>
<br><h1><b>Dengue</b></h1><br>
<div class="container">
<div class="row">
  <div class="col-sm-6">
    <div class="card text-center">
    <div class="card border-warning mb-3">
      <div class="card-body">
        <h4 class="card-title"><b>How to prevent Dengue</b></h4>
        <h6 class="card-subtitle"><b><i>-By Yoshani Ranaweera</i></b></h6><br>
        <p class="card-text">Description
Dengue is a viral infection caused by four types of viruses (DENV-1, DENV-2, DENV-3, DENV-4) belonging to the Flaviviridae family. The viruses are transmitted <span id="dots">...</span><span id="more">through the bite of infected Aedes aegypti and Aedes albopictus female mosquitoes that feed both indoors and outdoors during the daytime (from dawn to dusk). These mosquitoes thrive in areas with standing water, including puddles, water tanks, containers and old tires. Lack of reliable sanitation and regular garbage collection also contribute to the spread of the mosquitoes.

Risk
Risk of Dengue exists in tropical and subtropical areas of Central America, South America, Africa, Asia, and Oceania. All travellers are at risk during outbreaks. Long-term travellers and humanitarian workers going to areas where Dengue is endemic are at higher risk. Dengue occurs in urban and suburban settings with higher transmission rates happening during the rainy season.</span></p>
<button class="btn btn-primary" onclick="myFunction()" id="myBtn">Read more</button>
<script>
function myFunction() {
  var dots = document.getElementById("dots");
  var moreText = document.getElementById("more");
  var btnText = document.getElementById("myBtn");

  if (dots.style.display === "none") {
    dots.style.display = "inline";
    btnText.innerHTML = "Read more"; 
    moreText.style.display = "none";
  } else {
    dots.style.display = "none";
    btnText.innerHTML = "Read less"; 
    moreText.style.display = "inline";
  }
}

</script>

        </div>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card text-center">
    <div class="card border-warning mb-3">
      <div class="card-body">
        <h4 class="card-title"><b>My Experience on Dengue</b></h4>
        <h6 class="card-subtitle"><b><i>-By Sachini Dissanayaka</i></b></h6><br>
        <p class="card-text">Description
Dengue is a viral infection caused by four types of viruses (DENV-1, DENV-2, DENV-3, DENV-4) belonging to the Flaviviridae family. The viruses are transmitted <span id="dots2">...</span><span id="more2">through the bite of infected Aedes aegypti and Aedes albopictus female mosquitoes that feed both indoors and outdoors during the daytime (from dawn to dusk). These mosquitoes thrive in areas with standing water, including puddles, water tanks, containers and old tires. Lack of reliable sanitation and regular garbage collection also contribute to the spread of the mosquitoes.

Risk
Risk of Dengue exists in tropical and subtropical areas of Central America, South America, Africa, Asia, and Oceania. All travellers are at risk during outbreaks. Long-term travellers and humanitarian workers going to areas where Dengue is endemic are at higher risk. Dengue occurs in urban and suburban settings with higher transmission rates happening during the rainy season.</span></p>
<button class="btn btn-primary" onclick="myFunction2()" id="myBtn2">Read more</button>
<script>
function myFunction2() {
  var dots = document.getElementById("dots2");
  var moreText = document.getElementById("more2");
  var btnText = document.getElementById("myBtn2");

  if (dots.style.display === "none") {
    dots.style.display = "inline";
    btnText.innerHTML = "Read more"; 
    moreText.style.display = "none";
  } else {
    dots.style.display = "none";
    btnText.innerHTML = "Read less"; 
    moreText.style.display = "inline";
  }
}

</script>
      </div>
    </div>
    </div>
  </div>
</div>

<div class="row">
  <div class="col-sm-6">
    <div class="card text-center">
    <div class="card border-warning mb-3">
      <div class="card-body">
        <h4 class="card-title"><b>Home remedies for Dengue prevention</b></h4>
        <h6 class="card-subtitle"><b><i>-By Shammi Kolonne</i></b></h6><br>
        <p class="card-text">Description
Dengue is a viral infection caused by four types of viruses (DENV-1, DENV-2, DENV-3, DENV-4) belonging to the Flaviviridae family. The viruses are transmitted <span id="dots3">...</span><span id="more3">through the bite of infected Aedes aegypti and Aedes albopictus female mosquitoes that feed both indoors and outdoors during the daytime (from dawn to dusk). These mosquitoes thrive in areas with standing water, including puddles, water tanks, containers and old tires. Lack of reliable sanitation and regular garbage collection also contribute to the spread of the mosquitoes.

Risk
Risk of Dengue exists in tropical and subtropical areas of Central America, South America, Africa, Asia, and Oceania. All travellers are at risk during outbreaks. Long-term travellers and humanitarian workers going to areas where Dengue is endemic are at higher risk. Dengue occurs in urban and suburban settings with higher transmission rates happening during the rainy season.</span></p>
<button class="btn btn-primary" onclick="myFunction3()" id="myBtn3">Read more</button>
        </div>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card text-center">
    <div class="card border-warning mb-3">
      <div class="card-body">
        <h4 class="card-title"><b>Let's prevent Dengue</b></h4>
        <h6 class="card-subtitle"><b><i>-By Sasindu Kolonne</i></b></h6><br>
        <p class="card-text">Description
Dengue is a viral infection caused by four types of viruses (DENV-1, DENV-2, DENV-3, DENV-4) belonging to the Flaviviridae family. The viruses are transmitted <span id="dots4">...</span><span id="more4">through the bite of infected Aedes aegypti and Aedes albopictus female mosquitoes that feed both indoors and outdoors during the daytime (from dawn to dusk). These mosquitoes thrive in areas with standing water, including puddles, water tanks, containers and old tires. Lack of reliable sanitation and regular garbage collection also contribute to the spread of the mosquitoes.

Risk
Risk of Dengue exists in tropical and subtropical areas of Central America, South America, Africa, Asia, and Oceania. All travellers are at risk during outbreaks. Long-term travellers and humanitarian workers going to areas where Dengue is endemic are at higher risk. Dengue occurs in urban and suburban settings with higher transmission rates happening during the rainy season.</span></p>
<button class="btn btn-primary" onclick="myFunction4()" id="myBtn4">Read more</button>
      </div>
    </div>
  </div>
  </div>
</div>
<div>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</html>



<script>
function myFunction3() {
  var dots = document.getElementById("dots3");
  var moreText = document.getElementById("more3");
  var btnText = document.getElementById("myBtn3");

  if (dots.style.display === "none") {
    dots.style.display = "inline";
    btnText.innerHTML = "Read more"; 
    moreText.style.display = "none";
  } else {
    dots.style.display = "none";
    btnText.innerHTML = "Read less"; 
    moreText.style.display = "inline";
  }
}

</script>

<script>
function myFunction4() {
  var dots = document.getElementById("dots4");
  var moreText = document.getElementById("more4");
  var btnText = document.getElementById("myBtn4");

  if (dots.style.display === "none") {
    dots.style.display = "inline";
    btnText.innerHTML = "Read more"; 
    moreText.style.display = "none";
  } else {
    dots.style.display = "none";
    btnText.innerHTML = "Read less"; 
    moreText.style.display = "inline";
  }
}

</script>

        