<?php
/*
Stripped down version of ScratchNetwork client. Uses bootstap instead of MDL. Used for incompatible browsers.
*/

       ini_set('display_errors', 0);
       session_start(); 


?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>ScratchNetwork Lite</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script>
    //Lite Script
function getlistings(){

     $.get("server.php?action=getlistings", function(data, status){
    $("#main").html(data);

    });
}
    </script>
  <style>
    /* Set height of the grid so .sidenav can be 100% (adjust if needed) */
    .row.content {height: 1500px}

    /* Set gray background color and 100% height */
    .sidenav {
      background-color: #f1f1f1;
      height: 100%;
    }

    /* Set black background color, white text and some padding */
    footer {
      background-color: #555;
      color: white;
      padding: 15px;
    }

    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }
      .row.content {height: auto;} 
    }
  </style>
</head>
<body>

<div class="container-fluid">
  <div class="row content">
    <div class="col-sm-3 sidenav">
      <h4>ScratchNetwork <small>lite</small></h4>
      <ul class="nav nav-pills nav-stacked">
        <li class="active"><a href="#section1">Home</a></li>
        <li><a href="?login">Log In</a></li>
        <li><a href="#section3">Add Listing</a></li>
        <li><a href="#section3">Photos</a></li>
      </ul><br>
      <div class="input-group">
        <input type="text" class="form-control" placeholder="Search ScratchNetworkLite..">
        <span class="input-group-btn">
          <button class="btn btn-default" type="button">
            <span class="glyphicon glyphicon-search"></span>
          </button>
        </span>
      </div>
    </div>

    <div class="col-sm-9" id="main">
<?php
        ?>
    </div>
  </div>
</div>

<footer class="container-fluid">
  <p>ScratchNetworkLite v1</p>
</footer>

</body>
</html>
