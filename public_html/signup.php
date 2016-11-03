<!DOCTYPE html>
<!--Ashtyne--> 
<html lang="en">

	<head>

	  <meta charset="utf-8">

	  <link rel="stylesheet" type="text/css" href="css/style_sheet.css">

	  <title>iSports - Sign Up</title>

	</head>

	<body>

		<h1> Sign Up </h1>

		                         <?php include '../1resources/nav.php'; ?>

	    
	    <form>
	            First name:
	            <br>
	            <input type="text" name="firstname">
	            <br>
	            Last name:
	            <br>
	            <input type ="text" name="lastname">
	            <br>
	            Gender: <br>
	            <input type="radio" name="gender" value="male"> Male <br>
	            <input type="radio" name="gender" value="female"> Female <br>
	            <input type="radio" name="gender" value="other"> Other<br>

	            Username:
	            <br>
	            <input type="text" name="username">
	            <br>
	            Password:
	            <br>
	            <input type="password" name="password">
	            <br>
	            Confirm Password:
	            <br>
	            <input type="password" name="confirmedPassword">
	            <br> <br>
	            <input type="submit" value="Submit">
	    </form>

	    <br>
	    <br>

          <?php include '../1resources/foot.php'; ?>

	</body>

</html>