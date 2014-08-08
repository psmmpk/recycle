<?php	

$username=$_POST["username"];
$password=$_POST["password"];
$syk_id=$_POST["syk_id"];


?>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link href="css/jquery.mobile.min.css" rel="stylesheet" type="text/css">

<link rel="stylesheet" href="css/themes/cuti3.css" />
<link rel="stylesheet" href="css/themes/jquery.mobile.icons.min.css" />
</head>

<body>
	<a href="http://www.ppsppa.gov.my/recycle/login.php" class="ui-btn ui-corner-all ui-shadow" >Login Semula</a>
	<a href="http://www.ppsppa.gov.my/recycle/daftar_maklumat.php?syk_id=<?php echo $syk_id; ?>&&username=<?php echo $username; ?>&&password=<?php echo $password; ?>" class="ui-btn ui-corner-all ui-shadow">Ya, Teruskan</a>
</body>
</html>