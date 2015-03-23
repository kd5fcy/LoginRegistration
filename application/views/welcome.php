<html>
<head>
	<title>Welcome</title>
	<style type="text/css">
		body
		{
			padding: 30px;
		}
		div
		{
			margin: 40px 0 0 40px;
			padding: 0 20px;
			width: 300px;
			height: 200px;
			border: 1px solid black;
		}
		a
		{
			text-align: right;
			margin-left: 80%;
		}
		h3
		{
			position: relative;
		    top: -8px;
		    left: 10px;
		    z-index: +1;
		    background-color: white;
		    display: inline-block;
		    margin: 0;
		    padding: 0;
		}
		p:first-child
		{
			display: inline-block;
		}
	</style>
</head>
<body>
	<? var_dump($this->session->all_userdata()); ?>
	<? var_dump($this->input->post()); ?>
	<p>Welcome <?php  echo $this->input->post('first_name'); ?>!</p>
	<a href='/main/logoff'>log off</a>
	<div>
		<h3>User Information</h3>
		<p>First Name: <?php echo $first_name;  ?></p>
		<p>Last Name: <?php  echo $last_name; ?></p>
		<p>Email Address: <?php echo $email;  ?></p>
		<p>Password: <?php  echo $password; ?></p>
		<p>Account Created: <?php echo $created_at;  ?></p>
	</div>
</body>
</html>