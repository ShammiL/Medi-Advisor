<!DOCTYPE html>
<html lang="en">
<head>
  <title>Medi Advisor</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>

<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <!-- Brand -->
  <a class="navbar-brand" href="#">TheMediFour</a>

  <!-- Links -->
  <ul class="navbar-nav mr-auto">
  <li class="nav-item">
      <a class="nav-link" href="Home.php">Home</a>
    </li>
  <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        Treatments
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="Western.php">Western</a>
        <a class="dropdown-item" href="Ayurvedic.php">Ayurvedic</a>
      </div>
  </ul>
  <form class="form-inline my-2 my-lg-0">
      <button class="btn btn-outline-danger my-2 my-sm-0" onclick="myFun()" type="submit">Add Article</button>
    </form>
</nav>
<br>
  


</body>
</html>
<!-- <textarea id="description" name="gDescription" rows="5" width="20" placeholder="Write your article.."></textarea> -->



<script>
function myFun() {
  var person = prompt("Type your article");
//   if (person != null) {
//     document.getElementById("demo").innerHTML =
//     "Hello " + person + "! How are you today?";
//   }
}
</script>

</body>
</html>