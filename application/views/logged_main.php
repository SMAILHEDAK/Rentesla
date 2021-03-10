<html>
<head>
<title>My Form</title>
</head>
<body>
<h3>Your form was successfully submitted!</h3>
<?php var_dump($_SESSION);?>
<?php echo anchor('main/logout', 'Logout', 'class="link-class"') ?>
</body>
</html>
