 <?php

 $mobile  = $_GET['p'];
 $text  = $_GET['t'];
 

 if(empty($_GET['p'])) 
 { 
 	header("Location: https://example.com");
 }

 else

 	header("Location: https://api.whatsapp.com/send?phone=".$mobile."&text=".$text);
 exit;

 ?>

 <html>
 <head>
 	<title>Whatsapp PHP Redirect</title>
 </head>
 </html>