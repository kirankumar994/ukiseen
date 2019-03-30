<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<h3>Hi <?=$fname;?>,</h3>
	<p>Thanks for registering with ukiseen.org</p>
	<p>Please click below link to activate your account</p>
	<p><a href="<?=base_url('account/activate/'.$key);?>" target="_blank">Activate My Account</a></p>
	<br>
	<p>If you have any questions, please don't hesitate to contact us.<br>Kind regards and have a good day!</p>
	<p><a href="ukiseen.org" target="_blank">ukiseen.org</a></p>
</body>
</html>