
<?php
include 'database_baglanma.php';



if (isset($_POST["deneme"])) {

	if (isset($_POST["gorusulen_kisi"])) {
    $gorusulen_kisi=mysql_real_escape_string($_POST["gorusulen_kisi"] );
    $pozisyonu=mysql_real_escape_string($_POST["pozisyonu"]);
    $firma_adi=mysql_real_escape_string($_POST["firma_adi"]);
    $telefon_1=mysql_real_escape_string($_POST["telefon_1"]);
    $telefon_2=mysql_real_escape_string($_POST["telefon_2"]);

    $email=mysql_real_escape_string($_POST["email"]);
    $fuar_adi=mysql_real_escape_string($_POST["fuar_adi"]);
    $tarih=mysql_real_escape_string($_POST["tarih"]);

    $uretici=mysql_real_escape_string($_POST["uretici"]);
    $tufting_weaving=mysql_real_escape_string($_POST["tufting_weaving"]);
    $makina_sayisi=mysql_real_escape_string($_POST["makina_sayisi"]);
    $kapasite_kullanım_oranı=mysql_real_escape_string($_POST["kapasite_kullanım_oranı"]);
    $aylik_tuketim=mysql_real_escape_string($_POST["aylik_tuketim"]);
    $calisan_sayisi=mysql_real_escape_string($_POST["calisan_sayisi"]);
    $odeme_sekli=mysql_real_escape_string($_POST["odeme_sekli"]);

    $tam_adress=mysql_real_escape_string($_POST["tam_adress"]);
    $teslim_yeri=mysql_real_escape_string($_POST["teslim_yeri"]);
    $ulke_il=mysql_real_escape_string($_POST["ulke_il"]);
    $posta_kodu=mysql_real_escape_string($_POST["posta_kodu"]);

    $notlar=mysql_real_escape_string($_POST["notlar"]);

      
    

    $musteri_ekle=mysql_query("insert into muster_kayit(gorusulen_kisi, pozisyonu ,firma_adi, telefon_1, telefon_2 ,email,fuar_adi, tarih,uretici,tufting_weaving,makina_sayisi,kapasite_kullanım_oranı,aylik_tuketim,calisan_sayisi,odeme_sekli,tam_adress,teslim_yeri,ulke_il,posta_kodu,notlar) VALUES ('$gorusulen_kisi' , '$pozisyonu' , '$firma_adi', '$telefon_1', 
        '$telefon_2','$email','$fuar_adi','$tarih','$uretici','$tufting_weaving', 
        '$makina_sayisi','$kapasite_kullanım_oranı','$aylik_tuketim','$calisan_sayisi',
        '$odeme_sekli','$tam_adress','$teslim_yeri','$ulke_il','$posta_kodu','$notlar' ) ");



    echo "<script>window.top.location ='musterilerim.php';</script>";
}

echo "baglanma klasorune girdi";


}


if (isset($_POST["siparis_kayit_tusu"])) {
/*
	if (isset($_POST["a"])) {
		   $a=mysql_real_escape_string($_POST["a"]);
		     $b=mysql_real_escape_string($_POST["b"]);
		       $c=mysql_real_escape_string($_POST["c"]);
		         $d=mysql_real_escape_string($_POST["d"]);
		          $e=mysql_real_escape_string($_POST["e"]);

 $siparis_ekle=mysql_query("insert into proje_siparis_kayıt(a,b,c,d,e ) VALUES ('$a','$b',
 	'$c','$d','$e')");

     echo "<script>window.top.location ='siparislerim.php';</script>";

}
*/



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
    //echo "<script>window.top.location ='../admin.php';</script>";




    echo "<script>window.top.location ='siparislerim.php';</script>";
}

	

}









?>
