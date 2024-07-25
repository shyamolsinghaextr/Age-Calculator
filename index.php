<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Age Calculator</title>
  </head>
  <body>

  <h1> Age Calculator</h1>
  <div class= 'container mt-5'>
	  <form method = 'POST' action= ''>
		  <label class="form-check-label" for="Date">
			Birthday Date
		  </label>
		  <input class="form-check-input" type="date" name="Date" id="Date">
		<br>
		<br>
		<input type = 'submit' name='submit' value='Submit'> 
	  </form>
  </div>
  
	<?php
		if(isset($_POST['submit'])){
			$bday = new DateTime($_POST['Date']); 
			$today = new Datetime(date('m.d.y')); 
			$diff = $today->diff($bday); 
			echo "Your age is : $diff->y years, $diff->m month, $diff->d days";
		}
?>
  </body>
</html>
