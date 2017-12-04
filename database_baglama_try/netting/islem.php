<?php
include 'baglan.php';

session_start();



if (isset($_POST['login'])) {

	$admin_kadi=$_POST['admin_kadi'];
	$admin_sifre=md5($_POST['admin_sifre']);

	if($admin_kadi && $admin_sifre){
		$sorgula=mysql_query("select * from admin where admin_kadi='$admin_kadi' and admin_sifre='$admin_sifre'");
		$verisay=mysql_num_rows($sorgula);

		if ($verisay>0)

 {
 	$_SESSION['admin_kadi']= $admin_kadi;
			
			
			echo "<script>alert('Başarıyla giriş yaptınız!');  window.top.location='../admin.php';</script>";
		}

		else{
			echo '<script>alert("Kullanıcı Adı veya Şifre Yanlış");</script>';
		}
	


}

}
$admin_kadi=$_SESSION['admin_kadi'];

if ($admin_kadi) {

if ($_POST['re_password']) {
$old_pass=md5($_POST['old_pass']);
$new_pass=md5($_POST['new_pass']);
$re_pass=md5($_POST['re_pass']);

$queryget =mysql_query("SELECT admin_sifre FROM admin WHERE admin_kadi='$admin_kadi'");
$row = mysql_fetch_assoc($queryget);
$old_passdb=$row['admin_sifre'];

if ($old_pass==$old_passdb) {

	if ($new_pass==$re_pass) {
		$querychange=mysql_query("UPDATE admin SET admin_sifre='$new_pass' WHERE admin_kadi='$admin_kadi'");
        session_destroy();

        echo "<script>alert('Update Sucessfully'); window.location='../login.php'</script>";
    }
    else
    {
          echo "<script>alert('Şifreler Eşleşmiyor!'); window.location='../sifreDegis.php'</script>";
      }
}
else{
	
        echo "<script>alert('Yanlış Şifre Girdiniz!'); window.location='../sifreDegis.php'</script>";
}
}
}
else
{
	  echo "<script>alert('Önce giriş yapmalısınız!'); window.location='../login.php'</script>";
}

       




  if (isset($_POST["siparis"])) {
    $alici=mysql_real_escape_string($_POST["alici"]);
    $yetkili_kisi=mysql_real_escape_string($_POST["yetkili_kisi"]);
    $alici_adres=mysql_real_escape_string($_POST["alici_adres"]);
    $siparis_tarih=mysql_real_escape_string($_POST["siparis_tarih"]);
    $fatura_adres=mysql_real_escape_string($_POST["fatura_adres"]);
    $sevk_tarih=mysql_real_escape_string($_POST["sevk_tarih"]);
    $vergi_no=mysql_real_escape_string($_POST["vergi_no"]);
    $teslim_yeri=mysql_real_escape_string($_POST["teslim_yeri"]);
    $satis_kuru_USD=mysql_real_escape_string($_POST["satis_kuru_USD"]);
    $satis_kuru_Euro=mysql_real_escape_string($_POST["satis_kuru_Euro"]);
    $odeme_sekli=mysql_real_escape_string($_POST["odeme_sekli"]);
    $siparisi_alan=mysql_real_escape_string($_POST["siparisi_alan"]);
    $yetkili_kisi1=mysql_real_escape_string($_POST["yetkili_kisi1"]);
    $vergi_no1=mysql_real_escape_string($_POST["vergi_no1"]);
    $telefon=mysql_real_escape_string($_POST["telefon"]);
    $fax=mysql_real_escape_string($_POST["fax"]);
    $e_mail=mysql_real_escape_string($_POST["e_mail"]);
    
    
    
    



    $siparis_ekle=mysql_query("insert into siparis(alici, yetkili_kisi ,alici_adres,siparis_tarih,fatura_adres,sevk_tarih,vergi_no,teslim_yeri,satis_kuru_USD,satis_kuru_Euro,odeme_sekli,siparisi_alan,yetkili_kisi1,vergi_no1,telefon,fax,e_mail) VALUES ('$alici' , '$yetkili_kisi' , '$alici_adres','$siparis_tarih' , '$fatura_adres' , '$sevk_tarih','$vergi_no' , '$teslim_yeri' , '$satis_kuru_USD','$satis_kuru_Euro' , '$odeme_sekli' , '$siparisi_alan','$yetkili_kisi1' , '$vergi_no1' , '$telefon','$fax' , '$e_mail')");
    echo "<script>window.top.location ='../admin.php';</script>";
}





 
            


?>