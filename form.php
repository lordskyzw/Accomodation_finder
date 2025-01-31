<?php
session_start();
if (isset($_SESSION['uid']))
{
    include 'dbconnect.php';
    $uid = $_SESSION['uid'];
    
}
else{

}
?>
<!doctype html>
<html lang="en">
  <head>
    <title>Utopia</title>    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <style>
    body{
      background-image: url("assets/images/IMG_4533.jpg");
      background-repeat:none;
      background-size: cover;
    }
    </style>

    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  </head>
  <body class="text-white">

    <header id="main_menu" class="header">
      <div class="main_menu_bg navbar-fixed-top">
          <div class="container">
              <div class="row">
                  <div class="nave_menu wow fadeInUp" data-wow-duration="1s">
                      <nav class="navbar navbar-default" id="navmenu">
                          <div class="container-fluid">
                              <!-- Brand and toggle get grouped for better mobile display -->
                              <div class="navbar-header">
                                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                      <span class="sr-only">Toggle navigation</span>
                                      <span class="icon-bar"></span>
                                      <span class="icon-bar"></span>
                                      <span class="icon-bar"></span>
                                  </button>
                                  <a class="navbar-brand" href="#"><h1 style = "color: white; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;">UTOPIA</h1></a>
                              </div>

                              <!-- Collect the nav links, forms, and other content for toggling -->
                              <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                                  <ul class="nav navbar-nav navbar-right">
                                      <li class="active"><a href="#home">Home</a></li>
                                      <li><a href="form.html">Register hostel</a></li>
                                      <li><a href="search.html">Search</a></li>
                                      <!-- <li><a href="#clients">About us</a></li> -->

                                  </ul>
                              </div>
                          </div>
                      </nav>
                  </div>
              </div>

          </div>

      </div>
  </header>
<br /><br /><br/>

</br/>

    <div class="container">
      <form action = "submit.php" method = "post">
        <div class="row">
          <h3>House Details :</h3>
        </div>
        <hr />
        <div class="row">
          <div class="col-lg-6 offset-lg-3 col-md-8 offset-md-2 col-sm-10 offset-sm-1 col-xs-10 offset-xs-1">
              <div class="form-group">
                  <span for="name">Name :</span>
                  <input class="form-control" type="text" name="name" id="name"/>
              </div>
              <div class="form-group">
                <span for="type">Hostel Type :</span>
                <br />
                <select name = "type" class="form-control">
                  <option value="Girls">Only Girls</option>
                  <option value="Boys">Only Boys</option>
                  <option value="Both">No Constraints</option>
                </select>
              </div>
              <div class="form-group">
                <span for="capacity">Capacity :</span>
                <input class="form-control" type="number" min="1" id="lname" name="capacity" />
              </div>
              
              <div class="form-group">
                <label for="fees">Fees :</label>
                <input class="form-control" type="number" name="fees" id="fees"/>
              </div>
              <div class="form-group">
                <span for="pincode">Pincode :</span>
                <input class="form-control" type="text" id="pincode" name="pincode" />
              </div>
              <div class="from-group">
                <label for="city">Location :</label>
                <input id="city" name="city" type="text" class="form-control" />

              </div>
          </div>
        </div>
        <!--<div class="row">
          <h3>Room Details :</h3>
        </div>
        <hr />
        <div class="row">
          <div class="col-lg-6 offset-lg-3 col-md-8 offset-md-2 col-sm-10 offset-sm-1 col-xs-10 offset-xs-1">
            <div class="form-group">
              <label for="no">Number of types of rooms :</label>
              <select name="nos" class = "form-control" onchange="addroomforms(this);">
                <option value="choose" selected >choose</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
              </select>
            </div>
          </div>
        </div>-->
        <hr />

       <!-- <div class="row">
          <div class="col-lg-6 offset-lg-3 col-md-8 offset-md-2 col-sm-10 offset-sm-1 col-xs-10 offset-xs-1">
            <div id="room">
            </div>
          </div>
        </div>-->

       
        <div class="row">
          <h3>Owner Details :</h3>
        </div>
        <hr />
        <div class="row">
          <div class="col-lg-6 offset-lg-3 col-md-8 offset-md-2 col-sm-10 offset-sm-1 col-xs-10 offset-xs-1">
            <div class="form-group">
              <label for="owner_name">Owner Name :</label>
              <input type = "text" id="owner_name" name ="owner_name" class="form-control"/>
            </div>
            <div class="form-group">
              <label for="owner_phone">Phone Number :</label>
              <input type="tel" id="owner_phone" name="owner_phone" class="form-control" />
              <p id="validation">

              </p>
            </div>
            <div class="form-group">
              <label for="owner_email">Email ID :</label>
              <input type="email" id="owner_email" name="owner_email" class="form-control"/>
            </div>
          </div>
        </div>
        <hr />
        <hr />
        <div class="row">
          <div class="col-xs-12 offset-lg-6 offset-md-6 offset-sm-6 offset-xs-6">
            <div >
              <button type="submit" class="btn btn-primary" id="sub">Submit</button>
            </div>
          </div>
        </div>
      </form>
    </div>

    <!-- Optional JavaScript -->

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <!-- <script src="bootstrap/js/bootstrap.min.js"></script> -->
    <script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script scr="javascript/first.js" type="text/javascript"></script>

  <script>
    function checkPhone(sel){
      var value = document.getElementById('owner_phone').value;

      if ( value.length != 10){
        document.getElementById('sub').disabled = true;
        document.getElementById('validation').innerHTML = "Phone number should have 10 digits";
      }
      else{
        document.getElementById('validation').innerHTML = "";
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("validation").innerHTML = this.responseText;
                if(this.responseText == ""){
                  document.getElementById('sub').disabled = false;
                }else{
                  document.getElementById('sub').disabled = true;
                }
            }
        };
        xmlhttp.open("GET", "phoneValidation.php?q=" + value, true);
        xmlhttp.send();
      }
    }
    </script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
  </body>
</html>
