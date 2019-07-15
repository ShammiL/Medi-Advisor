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
            background-image: url("Ayurvedic1.jpg");
            background-repeat: repeat-x;
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
          require 'HeaderAyurvedic.php';
      ?>
<br><h1><b>Dengue Ayurvedic Treatments</b></h1><br>
<div class="container">
<div class="row">
  <div class="col-sm-6">
    <div class="card text-center">
    <div class="card border-success mb-3">
      <div class="card-body">
        <h4 class="card-title"><b>How to prevent Dengue</b></h4>
        <h6 class="card-subtitle"><b><i>-By Dr.Yoshani Ranaweera</i></b></h6><br>
        <p class="card-text">Dengue (pronounced DENgee) fever is a painful, debilitating mosquito-borne disease caused by any one of four closely related dengue viruses. These viruses are related to the viruses that cause West Nile infection and yellow fever.</p>

<div id="collapse1" style="display:none">
    <p class="card-text">An estimated 390 million dengue infections occur worldwide each year, with about 96 million resulting in illness. Most cases occur in tropical areas of the world, with the greatest risk occurring in
The Indian subcontinent,Southeast Asia,Southern China,Taiwan,The Pacific Islands,The Caribbean (except Cuba and the Cayman Islands),Mexico,Africa,Central and South America (except Chile, Paraguay, and Argentina)</p>
</div>
<a href="#collapse1" class="nav-toggle">Read More</a>
<script>
$(document).ready(function () {
    $('.nav-toggle').click(function () {
        var collapse_content_selector = $(this).attr('href');
        var toggle_switch = $(this);
        $(collapse_content_selector).toggle(function () {
            if ($(this).css('display') == 'none') {
                toggle_switch.html('Read More');
            } else {
                toggle_switch.html('Read Less');
            }
        });
    });

});
</script>

        </div>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card text-center">
    <div class="card border-success mb-3">
      <div class="card-body">
        <h4 class="card-title"><b>My Experience on Dengue</b></h4>
        <h6 class="card-subtitle"><b><i>-By Dr.Sachini Dissanayaka</i></b></h6><br>
        <p class="card-text">Dengue (pronounced DENgee) fever is a painful, debilitating mosquito-borne disease caused by any one of four closely related dengue viruses. These viruses are related to the viruses that cause West Nile infection and yellow fever.</p>

<div id="collapse2" style="display:none">
    <p class="card-text">An estimated 390 million dengue infections occur worldwide each year, with about 96 million resulting in illness. Most cases occur in tropical areas of the world, with the greatest risk occurring in
The Indian subcontinent,Southeast Asia,Southern China,Taiwan,The Pacific Islands,The Caribbean (except Cuba and the Cayman Islands),Mexico,Africa,Central and South America (except Chile, Paraguay, and Argentina)</p>
</div>
<a href="#collapse2" class="nav-toggle">Read More</a>
<script>
$(document2).ready(function () {
    $('.nav-toggle').click(function () {
        var collapse_content_selector = $(this).attr('href');
        var toggle_switch = $(this);
        $(collapse_content_selector).toggle(function () {
            if ($(this).css('display') == 'none') {
                toggle_switch.html('Read More');
            } else {
                toggle_switch.html('Read Less');
            }
        });
    });

});
</script>
      </div>
    </div>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-sm-6">
    <div class="card text-center">
    <div class="card border-success mb-3">
      <div class="card-body">
        <h4 class="card-title"><b>Home remedies for Dengue prevention</b></h4>
        <h6 class="card-subtitle"><b><i>-By Dr.Shammi Kolonne</i></b></h6><br>
        <p class="card-text">Dengue (pronounced DENgee) fever is a painful, debilitating mosquito-borne disease caused by any one of four closely related dengue viruses. These viruses are related to the viruses that cause West Nile infection and yellow fever.</p>

<div id="collapse3" style="display:none">
    <p class="card-text">An estimated 390 million dengue infections occur worldwide each year, with about 96 million resulting in illness. Most cases occur in tropical areas of the world, with the greatest risk occurring in
The Indian subcontinent,Southeast Asia,Southern China,Taiwan,The Pacific Islands,The Caribbean (except Cuba and the Cayman Islands),Mexico,Africa,Central and South America (except Chile, Paraguay, and Argentina)</p>
</div>
<a href="#collapse3" class="nav-toggle">Read More</a>
<script>
$(document3).ready(function () {
    $('.nav-toggle').click(function () {
        var collapse_content_selector = $(this).attr('href');
        var toggle_switch = $(this);
        $(collapse_content_selector).toggle(function () {
            if ($(this).css('display') == 'none') {
                toggle_switch.html('Read More');
            } else {
                toggle_switch.html('Read Less');
            }
        });
    });

});
</script>

        </div>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card text-center">
    <div class="card border-success mb-3">
      <div class="card-body">
        <h4 class="card-title"><b>Let's prevent Dengue</b></h4>
        <h6 class="card-subtitle"><b><i>-By Dr.Sasindu Kolonne</i></b></h6><br>
        <p class="card-text">Dengue (pronounced DENgee) fever is a painful, debilitating mosquito-borne disease caused by any one of four closely related dengue viruses. These viruses are related to the viruses that cause West Nile infection and yellow fever.</p>

<div id="collapse4" style="display:none">
    <p class="card-text">An estimated 390 million dengue infections occur worldwide each year, with about 96 million resulting in illness. Most cases occur in tropical areas of the world, with the greatest risk occurring in
The Indian subcontinent,Southeast Asia,Southern China,Taiwan,The Pacific Islands,The Caribbean (except Cuba and the Cayman Islands),Mexico,Africa,Central and South America (except Chile, Paraguay, and Argentina)</p>
</div>
<a href="#collapse4" class="nav-toggle">Read More</a>
<script>
$(document4).ready(function () {
    $('.nav-toggle').click(function () {
        var collapse_content_selector = $(this).attr('href');
        var toggle_switch = $(this);
        $(collapse_content_selector).toggle(function () {
            if ($(this).css('display') == 'none') {
                toggle_switch.html('Read More');
            } else {
                toggle_switch.html('Read Less');
            }
        });
    });

});
</script>
      </div>
    </div>
    </div>
  </div>
</div>

<div>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</html>



