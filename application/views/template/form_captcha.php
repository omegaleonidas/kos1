<!DOCTYPE html>
<head>
<title><?php echo $title;?></title>
</head>
<body>
<h1><?php echo $title;?><hr/></h1>
<p><?php echo validation_errors(); ?></p>
<?php echo form_open('captcha/post'); ?>
<table border="0">
<tr>
	<td>Input Kode Captcha</td>
    <td>:</td>
    <td><?php echo form_input('kode_captcha').' '.form_submit('submit', 'Test'); ?></td>
</tr>
<tr><td><?php echo $cap_img;?></td><td colspan="2">&nbsp;</td></tr>
</table>
<?php echo form_close(); ?>
</body>
</html>
