<html>
<head>
	<title></title>
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  	<link rel="stylesheet" type="text/css" href="bootstrap-social.css">
  	<link rel="stylesheet" type="text/css" href="fb-css1.css">
</head>
<body>
	 <div class="jumbotron vertical-center">
      <div class="container">
      	<?php
      		session_start();
      		include_once('fb-config.php');
			include_once('fb-login.php');
      	?> 
      </div>
     </div>
</body>
</html>