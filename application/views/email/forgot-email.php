<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<h3>Hi <?=$fname;?>,</h3>
	<p>There is no reason to fret if you have forgotten your Ukiseen password. It happens to the best of us! Here is a simple one click solution for password reset.</p>
	<p>Click the link below to take you to the create a new password page.</p>
	<p><a href="<?=base_url('account/forgot/'.$key);?>" target="_blank">Reset My Password</a></p>
	<br>
	<p>If you have not made any password reset request,it is likely that another user entered your email address by mistake and you can simply disregard this email.<br>Thank you.</p>
	<p><a href="ukiseen.org" target="_blank">ukiseen.org</a></p>
</body>
</html>