<?php 
session_start();
$tf=$_SESSION['tf'];
//echo $tf;

?>
<html>
<head>
  
	 <link href="/css/bootstrap.min.css" rel='stylesheet' type='text/css' />
</head>
<body style="background-image: url(https://d33wubrfki0l68.cloudfront.net/19d00eb0a801e19c1f021f6a1de803de53fd2387/a250f/assets/img/v3-social-good-small.png);background-size:cover;">
 <h3 class="col-md-4 col-md-offset-4"style="color:black;font-family:OCR A Std;margin-top:220px;">Congratulation, You have selected <span style=" color:red"><?php echo $tf;?></span> as your theme.
</body>
</html>