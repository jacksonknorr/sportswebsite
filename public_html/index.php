<!DOCTYPE html>
<!--Ashtyne--> 
<html lang="en">

  <head>

    <meta charset="utf-8">
    <!-- This says our CSS is compatible with phones, and phones
         don't need to scale it strangely. -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Main CSS styles for Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <!-- Optional theme add-on -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css">

    <link rel="stylesheet" type="text/css" href="css/style_sheet.css">

    <title>iSports - News Website</title>

    <style>

      img {
        margin: auto;
        display: block;
      }

      p {
        text-align: center;
      }

      h3 {
        text-align: center;
      }

    </style>

  </head>

  <body>

    <h1> iSports </h1>

                         <?php include '../1resources/nav.php'; ?>


    <img src="img/mainpage.png" alt="All Sports Banner" />

    <h3>Welcome to the iSports sports news website.</h3>

    <p> Take a look around the website and Learn about the latest sports news </p>

    <div>
      <p> <a href="signup.html" class="btn btn-success">Sign Up</a> or <a href="login.html" class="btn btn-success">Login</a></p>
    </div>
    
    <br>
          <?php include '../1resources/foot.php'; ?>

    <!-- Scripts required to make Bootstrap work better. -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </body>

</html>