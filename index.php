<?php
define('REDIRECT_URI', 'https://example.com');

$mobile  = $_GET['p'] ?? null;
$text  = $_GET['t'] ?? null; 
$redirect_uri = !is_null($mobile) ? 'https://api.whatsapp.com/send?phone='.$mobile.'&text='.$text : REDIRECT_URI;

header('Location:' . $redirect_uri);
exit();

?>

<html>
<head>
<title>Whatsapp PHP Redirect</title>
</head>
</html>
