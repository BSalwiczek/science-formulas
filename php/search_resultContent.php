<?php
session_start();
/*	if(isset($_GET['userSearch'])&&!empty($_GET['userSearch']))
	{
		$_SESSION['userSearch']= $_GET['userSearch'];
		
	}else if(!isset($_SESSION['userSearch']))
	{
		header("Location: index.php");
	}
	require_once("../setLang.php");
*/
?>
<html>
<head>
	<meta charset = "utf-8"/>
	<meta name ="description" content = "Find every science formula !"/>
	<meta name ="keywords" content = "math, science, formula"/>
	<meta http-equiv = "X-UA-Compatible" content = "IE=edge, chrome=1"/>
	<meta name="author" content="BS"/>
	<link rel="shortcut icon" href="img/iconBar.ico" />
	
	<link rel="stylesheet" href="css/style.css" type="text/css"/>
	<link href='https://fonts.googleapis.com/css?family=Lato:400,700' rel='stylesheet' type='text/css'>
	
	<script type="text/javascript" src="js/footerPos.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/stickyNav.js" ></script>
	
</head>
<body>
	<?php
		require_once('navigation.php');
		createNav('../',0);
	?>
	<div class="fluid-container">
	  <a href="/"><div class="imgwrapper"><img class="img-responsive" id="logoImg" src="img/logo.png"></div></a>
	</div>
	<div id="content" class="content2">
		<?php
			require_once("createContent.php");
			createContent("../");
		?>
	</div>
	<?php
		include("footer.php");
		
		if (isset($_GET['en'])) 
		{
			$_SESSION['Language'] = 'en';
			exit();
		}else if(isset($_GET['pl']))
		{
			$_SESSION['Language'] = 'pl';
			exit();
		}

	?>
				
</body>
</html>
	