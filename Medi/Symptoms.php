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

<body background="pill.jpg">


<div class="container">
  <div class="row">
    <div class="col-sm">
    </div>
    <div class="col-sm">
        <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Symptom" aria-label="Search">
            <button class="btn btn-outline-danger my-2 my-sm-0" type="submit">Search</button>
        </form>
    </div>
    <div class="col-sm">
    </div>
  </div>
</div><br>
<div id="myDiv" style="display:none;" class="answer_list" >WELCOME</div>

<div class="container">
    <div class="row">
        <div class="col-sm">
        <label class="container">Headache
  <input type="checkbox" >
  <span class="checkmark"></span>
</label>

<label class="container">Stomach ache 
  <input type="checkbox">
  <span class="checkmark"></span>
</label>

<label class="container">Body ache
  <input type="checkbox">
  <span class="checkmark"></span>
</label>

<label class="container">Vomit
  <input type="checkbox">
  <span class="checkmark"></span>
</label>
        </div>
        <div class="col-sm">
        <label class="container">Skin irritation
  <input type="checkbox" >
  <span class="checkmark"></span>
</label>

<label class="container">Scratchy skin
  <input type="checkbox">
  <span class="checkmark"></span>
</label>

<label class="container">Dry skin
  <input type="checkbox">
  <span class="checkmark"></span>
</label>

<label class="container">Red skin
  <input type="checkbox">
  <span class="checkmark"></span>
</label>
        </div>
        <div class="col-sm">
        <label class="container">Back pain
  <input type="checkbox" >
  <span class="checkmark"></span>
</label>

<label class="container">Hair fall
  <input type="checkbox">
  <span class="checkmark"></span>
</label>

<label class="container">Watery eyes
  <input type="checkbox">
  <span class="checkmark"></span>
</label>

<label class="container">Runny nose
  <input type="checkbox">
  <span class="checkmark"></span>
</label>
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