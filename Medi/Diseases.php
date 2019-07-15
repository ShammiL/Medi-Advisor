<?php include("Header.php"); ?>
<!DOCTYPE html>
<html>

<head>

    <style>
        button:focus {
            background-color:purple;
        }
    </style>
</head>

<body background="med.jpg">


<div class="container">
  <div class="row">
    <div class="col-sm">
    </div>
    <div class="col-sm">
        <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Disease" aria-label="Search">
            <button class="btn btn-outline-danger my-2 my-sm-0" type="submit">Search</button>
        </form>
    </div>
    <div class="col-sm">
    </div>
  </div>
</div><br>
<div id="myDiv" style="display:none;" class="answer_list" >WELCOME</div>
<div class="mx-auto" style="width: 900px;">
        <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
            <div class="btn-group mr-2" role="group" aria-label="Button group">
                <button type="button" onClick="location.href='A.php'" class="btn btn-secondary">A</button>
                <button type="button" onClick="location.href='B.php'" class="btn btn-secondary">B</button>
                <button type="button" class="btn btn-secondary">C</button>
                <button type="button" onClick="location.href='D.php'" class="btn btn-secondary">D</button>
                <button type="button" class="btn btn-secondary">E</button>
                <button type="button" class="btn btn-secondary">F</button>
                <button type="button" class="btn btn-secondary">G</button>
                <button type="button" class="btn btn-secondary">H</button>
                <button type="button" class="btn btn-secondary">I</button>
                <button type="button" class="btn btn-secondary">J</button>
                <button type="button" class="btn btn-secondary">K</button>
                <button type="button" class="btn btn-secondary">L</button>
                <button type="button" class="btn btn-secondary">M</button>
                <button type="button" class="btn btn-secondary">N</button>
                <button type="button" class="btn btn-secondary">O</button>
                <button type="button" class="btn btn-secondary">P</button>
                <button type="button" class="btn btn-secondary">Q</button>
                <button type="button" class="btn btn-secondary">R</button>
                <button type="button" class="btn btn-secondary">S</button>
                <button type="button" class="btn btn-secondary">T</button>
                <button type="button" class="btn btn-secondary">U</button>
                <button type="button" class="btn btn-secondary">V</button>
                <button type="button" class="btn btn-secondary">W</button>
                <button type="button" class="btn btn-secondary">X</button>
                <button type="button" class="btn btn-secondary">Y</button>
                <button type="button" class="btn btn-secondary">Z</button>
            </div>
        </div>
</div>

<script>
function myFunction() {
  document.getElementById("demo").style.color = "red";
}
</script>
    <script>
        // var elems = document.getElementsByClassName("btn btn-secondary");
        //     for (var i = 0; i < elems.length; i++) {
        //     elems[i].onclick = function() {
        //         var color = window.getComputedStyle(this, null)
        //                     .getPropertyValue("background-color");
        //         this.style.backgroundColor = color === "rgb(255, 255, 0)" 
        //                                     ? "rgb(255, 165, 0)" : "rgb(255, 255, 0)";
        //     };
        // };
        var links = document.getElementsByClassName("btn btn-secondary");
links.click(function() {
  links.css('background-color', 'grey');
  $(this).css('background-color', 'purple');
});
    </script>
    <script>
$('#myButton').click(function() {
  $('#myDiv').toggle('slow', function() {
    // Animation complete.
  });
});
    </script>
</body>

</html>