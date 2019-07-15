<!DOCTYPE html>
<html>
    <head>
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
            <link rel="stylesheet" type="text/css"
        href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
            <style>
            body {font-family: Arial, Helvetica, sans-serif;
            /* background-image: url(i1.jpg); */
            text-align:justify;box-sizing: border-box
             }

            h2{
              text-align:center;
            }
            
            input[type=text],select, textarea {
              width: 100%;
              padding: 5px;
              border: 1px solid #ccc;
              border-radius: 3px;
              box-sizing: border-box;
              margin-top: 4px;
              margin-bottom: 6px;
              resize: vertical;
            }
           
            input[type=submit] {
              background-color: rgb(11, 17, 94);
              color: white;
              padding: 5px 1px;
              border: none;
              border-radius: 2px;
              cursor: pointer;
            }
            
            input[type=submit]:hover {
              background-color: #220969;
            }

            .container2{
                text-align:justify;
                border-radius: 5px;
                background-color: #f2f2f29c;
                padding: 20px;
                width: 35%;
                margin: auto
                
              }
            
            </style>
        </head>
<body>
   
    <br><h2>Add Diseases</h2><br>
    <div class="container2">
      <form class="form-group" action ="Home.php" method="POST" enctype="multipart/form-data">
        <label for="name"><b>Name :</b></label><br>
        <input type="text" name="gName" required><br>
        <label for="disease"><b>Disease Name :</b></label><br>
        <input type="text" name="gDname" required><br>
        <label for="description"><b>Description :</b></label><br>
        <textarea id="description" name="gDescription" rows="3" placeholder="Write about.."required></textarea><br>
        <br>
        <button type="submit" name="AddDisease">ADD</button>
      </form>
  </div><br><br>
        
  
</body>
</html>

<?php
  
  if(isset($_POST['AddDisease'])){
    // require 'dbase.php';
    require_once 'dconnect.php';
    $con = Database::getInstance();
    $name = $_POST['gName'];
    $disease = $_POST['gDname'];
    $description = $_POST['gDescription'];
    $getDisease = $_GET['tdisease'];
   

    if(empty($name)|| empty($disease) || empty($description) ){
      echo '<script>alert("Empty!")</script>';
      exit();
    } 

    else{
      $pdoQuery="INSERT INTO disease (tname,tdisease,tdescription) VALUES (:gname,:gdisease,:gdescription)";
      $pdoResult = $con->connect->prepare($pdoQuery);
      $pdoExec = $pdoResult->execute(array(":gname"=>$name,":gdisease"=>$disease,":gdescription"=>$description));
      
      $result = $con->connect->prepare("SELECT * FROM diseaseList WHERE tdisease= :gdisease");
      $result->bindParam(':gdisease', $getDisease);
      $result->execute();
      $row = $result->fetch();
      if($row==0){
        $pdoQuery2="INSERT INTO diseaseList (tdisease) VALUES (:gdisease)";
        $pdoResult2 = $con->connect->prepare($pdoQuery2);
        $pdoExec2 = $pdoResult2->execute(array(":gdisease"=>$disease));
      }
      if($pdoResult){
        echo '<script>alert("Successful!")</script>';
      }
      else{
        echo '<script>alert("OMG...Error!")</script>';
      }
      
       }
       header("location: DiseaseList.php");
  }
  
  ?>