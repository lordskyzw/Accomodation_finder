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
<html lang="en">
  <head>
    <title>Tarmica's Utopia</title>    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon-bar" href="assets/images/IMG_2855.jpg">

    <!--<link href='https://fonts.googleapis.com/css?family=Titillium+Web:400,200,300,600,700' rel='stylesheet' type='text/css'>-->
    <link rel="stylesheet" href="assets/css/fonticons.css">
    <link rel="stylesheet" href="assets/fonts/stylesheet.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!--        <link rel="stylesheet" href="assets/css/bootstrap-theme.min.css">-->


    <!--For Plugins external css-->
    <link rel="stylesheet" href="assets/css/plugins.css" />

    <!--Theme custom css -->
    <link rel="stylesheet" href="assets/css/style.css">

    <!--Theme Responsive css-->
    <link rel="stylesheet" href="assets/css/responsive.css" />

    <script src="assets/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>

    <!-- Bootstrap CSS -->

    <style>
    body{
      background-image: url("assets/images/IMG_4534.jpg");
      background-repeat: no-repeat;
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
                                  <!--<a class="navbar-brand" href="index.html"><h1 style = "color: white; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif,">UTOPIA</h1></a>-->
                              </div>

                              <!-- Collect the nav links, forms, and other content for toggling -->
                              <div class="collapse navbar-collapse">

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
      <form action = "submit2.php" method = "post">
        <div class="row">
          <h3>Fill this form according to your requirements :</h3>
        </div>
        <hr />
        <div class="row">
          <div class="col-lg-6 offset-lg-3 col-md-8 offset-md-2 col-sm-10 offset-sm-1 col-xs-10 offset-xs-1">
              <div class="form-group">
                  <span for="name">Select locality :</span>
                  <select name="locality" onchange="getValue(this.value)" class="form-control">
                    <option value="">choose</option>

                    <?php
                        include 'dbconnect.php';
                        $q = "SELECT * FROM area";
                        $results=$conn -> query($q);
                        //loop
                        while($row = mysqli_fetch_array($results))
                        {
                         ?><option value="<?php echo $row['locality']; ?>"> <?php echo $row['locality'];?></option>
                     <?php }?>

                    ?>
                  </select>
              </div>
              <div class="form-group">
                <div class="row">
                
                  <div class="col-sm-6">
                    <label class="radio-inline">
                      Hostel     :      <input type="radio" name="hostel" value = '1'/>
                    </label>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <span for="type">Hostel type :</span>
                <br />
                <select name = "type" class="form-control">
                  <option value="Girls">Only Girls</option>
                  <option value="Boys">Only Boys</option>
                  <option value="Both">No Constraints</option>
                </select>
              </div>
              <!--<div class="form-group">
                <label>Mess :</label>
                <div class="row">
                  //<div class="col-sm-6">
                   <label class="radio-inline">
                      veg      :      <input type="radio" name="veg" value= '1'/>
                    </label>
                  </div>
                  <div class="col-sm-6">
                    <label class="radio-inline">
                      non-veg     :      <input type="radio" name="veg" value = '0'/>
                    </label>
                  </div>
                </div>
              </div>-->
              <div class="form-group">
                <label>Budget :</label>
                <input type="number" name="lessfees" class="form-control"/>
              </div>
              <!--<div class="form-check">
                <label class="form-check-label">
                  <input class="form-check-input" name="ac" type="checkbox" value="1"> : AC
                </label>
              </div>-->
              <!--<div class="form-check">
                <label class="form-check-label">
                  <input class="form-check-input" name="bathroom" type="checkbox" value="1"> : Attached Bathroom
                </label>
              </div>-->
              <div class="form-check">
                <label class="form-check-label">
                  <input class="form-check-input" name="wifi" type="checkbox" value="1"> : wifi
                </label>
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

      <hr />
      <br />
      <br />
      <hr />
      <div class="container">
        <form method="post" action="submit3.php">
          <div class="row">
            <h3>Get details About :</h3>
          </div>
          <hr />
          <div class="row">
            <div class="col-lg-6 offset-lg-3 col-md-8 offset-md-2 col-sm-10 offset-sm-1 col-xs-10 offset-xs-1">
              <div class="form-group">
                <span for="hostel">Get details of a particular Hostel :</span>
                <select name="hostel" class="form-control">
                  <option value="">choose</option>
                  <?php
                      include 'dbconnect.php';
                      $q = "SELECT * FROM Hostel";
                      $results=$conn -> query($q);
                      //loop
                      while($row = mysqli_fetch_array($results))
                      {
                       ?><option value="<?php echo $row['H_name']; ?>"> <?php echo $row['H_name'];?></option>
                   <?php }?>
                  ?>
                </select>
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

            </div>
          </div>
        </form>


        <form method="post" action="submit4.php">
          <div class="row">
            <div class="col-lg-6 offset-lg-3 col-md-8 offset-md-2 col-sm-10 offset-sm-1 col-xs-10 offset-xs-1">
              <div class="form-group">
                <span for="locality">Get details of all the hostels in a particular area :</span>
                <select name="locality" class="form-control">
                  <option value="">choose</option>
                  <?php
                      include 'dbconnect.php';
                      $q = "SELECT * FROM area";
                      $results=$conn -> query($q);
                      //loop
                      while($row = mysqli_fetch_array($results))
                      {
                       ?><option value="<?php echo $row['locality']; ?>"> <?php echo $row['locality'];?></option>
                   <?php }?>
                  ?>
                </select>
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

            </div>
          </div>
        </form>
        <hr />
        <hr />

        <form method="post" action="submit5.php">
          <div class="row">
            <div class="col-lg-6 offset-lg-3 col-md-8 offset-md-2 col-sm-10 offset-sm-1 col-xs-10 offset-xs-1">
              <div class="form-group">
                <span >Details of number of hostels in different areas :</span>

              </div>

              <div class="row">
                <div class="col-xs-12 offset-lg-6 offset-md-6 offset-sm-6 offset-xs-6">
                  <div >
                    <button type="submit" class="btn btn-primary" id="sub">Click here</button>
                  </div>
                </div>
              </div>

            </div>
          </div>
        </form>
      </div>



    <script>
      function getValue(sel){
        console.log(sel);
      }
    </script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
  </body>
</html>
