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

    <meta charset="utf-8">


    <style>
      img {
        margin: auto;
        display: block;
        
      }

    </style>

  </head>

  <body>

    <img src="img/baseball.png" alt="Baseball"/>

    <h1> Baseball News</h1>

            <?php include '../1resources/nav.php'; ?>

    
   <table class="table">
      <thead>
        <tr>
          <th>Team Name</th>
          <th>Wins</th>
          <th>Losses</th>
          <th>Home Runs</th>
        </tr>
      </thead>

      <tbody>
        <tr>
          <th scope="row">Pigs</th>
          <td>17</td>
          <td>13</td>
          <td>23</td>
        </tr>
        <tr>
          <th scope="row">Stallions</th>
          <td>20</td>
          <td>10</td>
          <td>25</td>
        </tr>
        <tr>
          <th scope="row">All Stars</th>
          <td>25</td>
          <td>5</td>
          <td>51</td>
        </tr>
        <tr>
          <th scope="row">Snakes</th>
          <td>12</td>
          <td>18</td>
          <td>17</td>
        </tr>
      </tbody>

    </table>

    <br>
    <br>

    <img src="img/snake.png" alt="Snake"/>

    <img src="img/hitter.png" alt="Hitter"/>

      <br>
      <br>
      <br>
      <br>
      <br>
          <?php include '../1resources/foot.php'; ?>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </body>

</html>