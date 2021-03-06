<!DOCTYPE HTML>
<html>
<head>
	<meta charset = "utf-8"/>
	<title>Start</title>
	<meta name ="description" content = "Find every science formula !"/>
	<meta name ="keywords" content = "math, science, formula"/>
	<meta http-equiv = "X-UA-Compatible" content = "IE=edge, chrome=1"/>
	<meta name="author" content="BS"/>
	
	<link rel="stylesheet" href="../../../css/style.css" type="text/css"/>
	<link href='https://fonts.googleapis.com/css?family=Lato:400,700' rel='stylesheet' type='text/css'>

	<script type="text/javascript" src="../../../js/linkChanger.js"></script>
	<script type="text/javascript" src ="../../../js/footerPos.js"></script>
	<script type="text/javascript" src="http://latex.codecogs.com/editor3.js"></script>
</head>
<body>
	<div id = "nav">
		<div id="languageButton">
			<img src="../../../img/world.png" />
			<ol>
				<a href="#"><div id="EngLang" onclick="replaceLink(0)"><li>English</li></div></a>
				<a href="#"><div id="PlLang" onclick="replaceLink(1)"><li>Polski</li></div></a>
			</ol>
		</div>
		<a href=""><div class="SubjectButton"style="background-color: #F2F2F2;color:#53bf6b">Math</div></a>
		
		<a href=""><div class="SubjectButton">Physics</div></a>
	
		<a href=""><div class="SubjectButton">Astronomy</div></a>
		
		<div id = "loginButton">
			<a href="php/en/login-page.php">Login</a>
		</div>
		<div id="registerButton">
		<a href="register-page.php">Register</a>
		</div>
	</div>
	<div id="logo"><a href="../../../index.php"><div id="toMainPage"></div></a></div>
	<div id="content" style="padding: 8px;padding-top:30px; width: 980px; font-size: 20px;text-align:center;">
		<h1 class="formulaTitle">The area of square</h1> 
		<img src="../../../img/math/square.png" style="float:left;margin-left: 50px"/>
		<img src="https://latex.codecogs.com/gif.latex?\dpi{200}&space;\huge&space;P=a^{2}" title="\huge P=a^{2}" style="float:left;margin-left: 130px;margin-top: 100px"/>
		<div style="clear:both"></div>
		
		<div class="symbols">
			<strong style="font-size: 22px">Symbols:</strong>
			<p class= "allSymbols">a - length of side</p>
		</div>
		<div class="description">
		
		</div>
	</div>
	<?php
		include("../footer.php");
	?>
	
</body>
</html>
