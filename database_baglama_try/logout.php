<?php

session_start();
session_destroy();
echo '<script>alert("Başarıyla Çıkış Yaptınız "); window.top.location="../project/login.php";</script>';


?>