<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<style>
.select-css {
	display: block;
	font-size: 15px;
	padding: 10px 10px;
	width: 97%;
	box-sizing: border-box;
	font-size: 16px;
	margin: 10px 0px 10px 0px;
	border-radius: 5px;
	border: 1px solid gray;
}
</style>

<head>
	<title>Manager Registration</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="header">
		<h2>Manager-Only Registration</h2>
	</div>

	<form method="post" action="5 manager registration.php">

		<?php include('errors.php'); ?>

		<div class="input-group">
			<label>First Name </label>
			<input type="text" name="fname" value="<?php echo $fname; ?>">
			<label>Last Name </label>
			<input type="text" name="lname" value="<?php echo $lname; ?>">
		</div>

		<div class="input-group">
			<label>Username</label>
			<input type="text" name="username" value="<?php echo $username; ?>">
		</div>
		<div class="input-group">
			<label>Company</label>
		</div>
		</div>
			<select class="select-css" type="text" name="company">
				<?php
				$comquery = "SELECT * FROM company";
				$comsql = mysqli_query($db, $comquery);
				$colsql = "Name" ;
				while ($row = mysqli_fetch_array($comsql)) {
					echo "<option>$row[$colsql]</option>";
				}
				 ?>
	  		</select>
		</div>
		<div class="input-group">
			<label>Password</label>
			<input type="password" name="password_1">
		</div>
		<div class="input-group">
			<label>Confirm password</label>
			<input type="password" name="password_2">
		</div>
        <div class="input-group">
			<label>Street Address</label>
			<input type="text" name="street" value="<?php echo $street; ?>">
		</div>
        <div class="input-group">
			<label>City</label>
			<input type="text" name="city" value="<?php echo $city; ?>">
		</div>
		<div class="input-group">
			<label>State</label>
		</div>
			<select class="select-css" type="text" name="state" value="<?php echo $state; ?>">
				<option value="AL">Alabama</option>
				<option value="AK">Alaska</option>
				<option value="AZ">Arizona</option>
				<option value="AR">Arkansas</option>
				<option value="CA">California</option>
				<option value="CO">Colorado</option>
				<option value="CT">Connecticut</option>
				<option value="DE">Delaware</option>
				<option value="DC">District Of Columbia</option>
				<option value="FL">Florida</option>
				<option value="GA">Georgia</option>
				<option value="HI">Hawaii</option>
				<option value="ID">Idaho</option>
				<option value="IL">Illinois</option>
				<option value="IN">Indiana</option>
				<option value="IA">Iowa</option>
				<option value="KS">Kansas</option>
				<option value="KY">Kentucky</option>
				<option value="LA">Louisiana</option>
				<option value="ME">Maine</option>
				<option value="MD">Maryland</option>
				<option value="MA">Massachusetts</option>
				<option value="MI">Michigan</option>
				<option value="MN">Minnesota</option>
				<option value="MS">Mississippi</option>
				<option value="MO">Missouri</option>
				<option value="MT">Montana</option>
				<option value="NE">Nebraska</option>
				<option value="NV">Nevada</option>
				<option value="NH">New Hampshire</option>
				<option value="NJ">New Jersey</option>
				<option value="NM">New Mexico</option>
				<option value="NY">New York</option>
				<option value="NC">North Carolina</option>
				<option value="ND">North Dakota</option>
				<option value="OH">Ohio</option>
				<option value="OK">Oklahoma</option>
				<option value="OR">Oregon</option>
				<option value="PA">Pennsylvania</option>
				<option value="RI">Rhode Island</option>
				<option value="SC">South Carolina</option>
				<option value="SD">South Dakota</option>
				<option value="TN">Tennessee</option>
				<option value="TX">Texas</option>
				<option value="UT">Utah</option>
				<option value="VT">Vermont</option>
				<option value="VA">Virginia</option>
				<option value="WA">Washington</option>
				<option value="WV">West Virginia</option>
				<option value="WI">Wisconsin</option>
				<option value="WY">Wyoming</option>
		  </select>
		</div>
        <div class="input-group" type="text" value="<?php echo $username; ?>">
			<label>Zipcode</label>
			<input type="text" name="zipcode">
		</div>
		<div class="input-group">
			<button type="submit" class="btn" name="reg_manager">Register</button>
		</div>
		<p>
			Already a member? <a href="1 login.php">Sign in</a>
		</p>
	</form>
</body>
</html>
