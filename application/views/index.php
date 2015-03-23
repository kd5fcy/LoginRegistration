<html>
 <head>
 	<title>Login &amp; Registration</title>
 	<style>
 		body
 		{
 			background-color: #E8E8E8;
 		}
 		.error{
 			color: red;
 		}
 		fieldset{
 			width: 250px;
 			margin:  30px auto;
 			background-color: lightgrey;
 			border: 0px;
 			box-shadow: 0px 0px 40px #461D7C;
 			border-radius: 15px;
 		}
 		label, input:not(.submit){
 			display: block;
 			margin: 10px;
 			border: 0px;
 		}
 		fieldset input:last-child{
 			margin: 10px 0px 10px 160px;
 		}
 		input:not(.submit)
 		{
 			width: 250px;
 			background-color: #E8E8E8;
 			box-shadow: 0px 0px 15px #FFFFFF;
 		}
 		legend
 		{
 			font-size: 20px;
 			font-weight: 600px;
 			box-shadow: 0px 0px 25px #461D7C;
 			background-color: #FDD023;
 			border-radius: 5px;
 			border: 0px;
 			padding: 5px 10px;
 			color: #461D7C;
 		}
 		.submit
 		{
 			box-shadow: 0px 0px 25px #461D7C;
 			background-color: #FDD023;
 			color: #461D7C;
 			border-radius: 5px;
 			border: 0px;
 			font-size: 18px;
 			padding: 5px 15px;

 		}
 	</style>
 </head>
 <body>
 	<?php echo validation_errors(); ?>
 	<div id='login'>
 		<?php echo form_open('login'); ?>
 			<fieldset>
 			<legend>Members</legend>
 				<input type='hidden' name='login'>
 				<label for='login_email'>Email:</label><input type='text' name='login_email' value='<?php echo set_value('login_email'); ?>'>
 				<label for='login_password'>Password:</label><input type='password' name='login_password' value='<?php echo set_value('login_password'); ?>'>
 				<input type='submit' value='Login' class='submit'>
 			</fieldset>
 		</form>
 	</div>
 	<div id='register'>
 		<?php echo form_open('register'); ?>
 			<fieldset>
 			<legend>New Users</legend>
 				<input type='hidden' name='register'>
	 			<label for='first_name'>First Name:</label><input type='text' name='first_name' value='<?php echo set_value('first_name'); ?>'>
	 			<label for='last_name'>Last Name:</label><input type='text' name='last_name' value='<?php echo set_value('last_name'); ?>'>
	 			<label for='email'>Email Address:</label><input type='email' name='email' value='<?php echo set_value('email'); ?>'>
	 			<label for='password'>Password:</label><input type='password' name='password' value='<?php echo set_value('password'); ?>'>
	 			<label for='confirm'>Confirm Password:</label><input type='password' name='confirm' value='<?php echo set_value('confirm'); ?>'>
	 			<input type='submit' value='Register' class='submit'>
	 		</fieldset>
 		</form>
 	</div>
 <!--<a href='/main/reset'><button>Reset</button></a>-->
 </body>
 </html>