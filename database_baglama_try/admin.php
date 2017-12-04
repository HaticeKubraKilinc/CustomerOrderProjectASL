
<?php 
session_start();

			$denemelik=$_SESSION['admin_kadi'];
			
	if(empty($denemelik)){
		echo "<script>  window.top.location='../project/login.php';</script>";
		}
?>
<html>
<head>

<link rel="stylesheet" type="text/css" href="admin.css">
	<title>Admin Paneli</title>
	<meta charset="UTF-8">




</head>
<body>

<div id="header"> 
<center><img src="asilbcfResim.jpg" alt="adminLogo" id="adminLogo">Hi admin</center>
	
</div>

<div id="sidebar">
<ul>
	<a href=""><li>
		Müşteri Kaydı al
	</li></a>

	<a href="siparisForm.php"><li>
		Sipariş Ekle
		</li>
	</a>
	<a href="tablo.php" name="goruntu"><li>
		Siparişleri Görüntüle
	</li></a>
	<a href="sifreDegis.php"><li>
		Şifre değiştir
	</li></a>
	<a href="logout.php"><li>
		Çıkış
	</li></a>
</ul>


	
</div>
<div id="data">
	
</div>
<script type="text/javascript" src="../project/admin.js"></script>
</body>
</html>