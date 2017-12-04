<?php
ob_start();
session_start();
?>

<?php
$username ='root';
$password ='password';
$sunucu   ='localhost';
$database ='proje';

//$db = new PDO('mysql:host=localhost;dbname=proje', 'root', 'password');

//$baglan =@mysql_connect($sunucu ,$username ,$password ,$database);
//mysql_select_db($database,$baglan) or die ("asdasdasd");
$baglan =mysql_connect($sunucu ,$username ,$password ,$database);

if ( !$baglan) {
echo "baglantı hatası :"; mysql_errno();
exit();

//$link = mysql_connect('localhost', 'root', 'password');
 // mysql_set_charset('utf8', $link);
}

$db =mysql_select_db($database);

if(!$db){
echo "veritabanı hatası"; mysql_error();echo "<br>";
exit();
}






?>
