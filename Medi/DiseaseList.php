<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
 
  <style>
            body {font-family: Arial, Helvetica, sans-serif;
            /* background-image: url(i1.jpg); */
            text-align:justify;box-sizing: border-box
             }

            h2{
              text-align:center;
            }

            
              .container{
                text-align:justify;
                /* background-color: #f2f2f29c; */
                margin: auto
                
              }
            
            </style>
</head>
<body><br><h2>Diseases</h2><br></body>
<?php
            require_once 'dconnect.php';
            $con = Database::getInstance();            
            $statement = $con->connect->prepare("SELECT * FROM diseaselist");
            $statement->setFetchMode(PDO::FETCH_ASSOC);
            $statement->execute();
          while($row=$statement->fetch()){
           
             ?> 
      <body>
      
    <div class="album py-2">
        <div class="container">
            <div class="row">
              <div class="col-md-4">
          <div class="card border-danger mb-2" style="max-width: 18rem;">
                  
                  <div class="card-body text-danger">
                    <h5><a href="Content.php" class="card-link text-danger"><?php echo $row['tdisease']; ?></a></h5>
                    <div class="d-flex justify-content-between align-items-center">
                  </div>
                  
                  </div>
                </div>
              </div>
              </div>
          </div>
        </div>
        
      </body>
            <?php } ?>

</html>
