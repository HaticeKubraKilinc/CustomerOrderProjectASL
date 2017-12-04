<?php
ob_start();
session_start();
?>
<?php

$username="root";
$password="mysql";
$sunucu="localhost";
$database="proje";

$baglan=@mysql_connect ($sunucu,$username,$password) ; 
@mysql_query ("SET NAMES UTF8");
if(!$baglan)
{
@mysql_close($baglan);
echo "<meta http-equiv='refresh'content='0;URL=http://kurumsal.nebayi.com/nedmin/netting/baglanhata/hata.php?hata=baglantihata'>";
 exit();
 }
 
 
$db=@mysql_select_db($database);
if(!$db)  { echo "veritabanı hatası" .mysql_error(); echo "<br>";

 echo "<meta http-equiv='refresh' content='0;URL=http://www.neyazilim.com/hata.php?hata=veritabanihata'>";
 

 exit();
 

 }
 
 ?>﻿