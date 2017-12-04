<?php

if(!isset($_SESSION['admin_kadi'])){
	echo '<script>alert("Önce Giriş Yapmanız Lazım "); window.top.location="../project/login.php";</script>';


}
?>