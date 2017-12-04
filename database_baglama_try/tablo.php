<?php
include 'netting/baglan.php';


?>
<html>

<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="assets/css/tablo.css">

  
</head>

<body>

  

<table class="responstable">
  
  <tr>
    <th>Alıcı</th>
    <th>Yetkili Kişi</th>
    <th>Alıcı Adresi</th>
    <th>Sipariş Tarihi</th>
    <th>Fatura Adresi</th>
    <th>Sevk Tarihi</th>
    <th>Vergi No</th>
    <th>Teslim Yeri</th>
    <th>Satış Kuru USD</th>
    <th>Satış Kuru Euro</th>
    <th>Ödeme Şekli</th>
    <th>Siparişi Alan</th>
    <th>Şirket Yetkilisi</th>
    <th>Şirket Vergi No</th>
    <th>Telefon</th>
    <th>Fax</th>
    <th>E mail</th>
  </tr>
   <?php 
                
                //Bir mySQL sorgusu ile tüm üyeler tablosunu bir değişkene atıyoruz.
                $verileriCek = mysql_query("select * from siparis");
              
                //Bu değişken içerisine çekilen tabloyu bir döngü ile b isimli dizi içerisine çekiyoruz.
                while ($b=mysql_fetch_array($verileriCek)){
                    
                    //Dizi içerisine giriyoruz ve Tablo içerisinden çekilecek olan tüm sütunları tek tek değişken ierisine atıyoruz.
                    $alici = $b['alici'];
                    $yetkili_kisi = $b['yetkili_kisi'];
                     $alici_adres = $b['alici_adres'];
                    $siparis_tarih = $b['siparis_tarih'];
                     $fatura_adres = $b['fatura_adres'];
                    $sevk_tarih = $b['sevk_tarih'];
                     $vergi_no = $b['vergi_no'];
                    $teslim_yeri = $b['teslim_yeri'];
                     $satis_kuru_USD = $b['satis_kuru_USD'];
                    $satis_kuru_Euro = $b['satis_kuru_Euro'];
                     $odeme_sekli = $b['odeme_sekli'];
                    $siparisi_alan = $b['siparisi_alan'];
                     $yetkili_kisi1 = $b['yetkili_kisi1'];
                    $vergi_no1 = $b['vergi_no1'];
                     $telefon = $b['telefon'];
                    $fax = $b['fax'];
                     $e_mail = $b['e_mail'];
                    
                    
                    //Tablonun ikinci satırına denk gelen bu alanda gerekli yerlere bu değişkenleri giriyoruz. 
                   
                
   
  
 echo "<tr>
    <td>$alici</td>
    <td>$yetkili_kisi</td>
    <td>$alici_adres</td>
    <td>$siparis_tarih</td>
     <td>$fatura_adres</td>
      <td>$sevk_tarih</td>
    <td>$vergi_no</td>
     <td>$teslim_yeri</td>
    <td>$satis_kuru_USD</td>
     <td>$satis_kuru_Euro</td>
      <td>$odeme_sekli</td>
    <td>$siparisi_alan</td>
    <td>$yetkili_kisi1</td>
    <td>$vergi_no1</td>
    <td>$telefon</td>
     <td>$fax</td>
    <td>$e_mail</td>
    
  </tr>";
}
  ?>
  
</table>
  

  
</body>
</html>
