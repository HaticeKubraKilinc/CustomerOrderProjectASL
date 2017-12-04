siparis_kayıt.php
<?php
include 'database_baglanma.php';
include 'h.php';
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="genel_gorunum.css">
<link rel="stylesheet" type="text/css" href="form.css">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

  <center><img src="a.jpg.png
" style="width:300px;height:150px;"> </center> 


 <ul class="navigation">
   <li><a href="anasayfa.php">anasayfa</a></li>
   <li><a href="musteri_kayit.php">müşteri kayıt</a></li>
   <li><a href="musterilerim.php">müşterilerimiz</a></li>
   <li><a href="siparis_kayıt.php">sipariş formu</a></li>
   <li><a href="siparis_onay.php">sipariş onay</a></li>
   <li><a href="siparislerim.php">anlık sipariş görüntüleme</a></li>
      
 
</ul>
<style>

    h1 { color: #FFFFFF; }
  </style>
<body> <div class="trBorder" align=center>  <h1>AsilBCF siparis alma <h1>
<div class="hr">
    <div class="line"></div>
<form class="form-style-9" action="h.php"  method="POST">
<ul>

<li>
    <input type="text" name="alici" class="field-style field-full align-none" placeholder="Alıcı" />
   
</li>
<li>
    <input type="text" name="yetkili_kisi" class="field-style field-full align-none" placeholder="Yetkili Kişi" />
   
</li>
<li>
    <input type="text" name="alici_adres" class="field-style field-split align-left" placeholder="Alıcı Adresi" />
    <input type="date" name="siparis_tarih" class="field-style field-split align-right" placeholder="Sipariş Tarihi" />

</li>

<li>
    <input type="text" name="fatura_adres" class="field-style field-split align-left" placeholder="Fatura Adresi" />
    <input type="date" name="sevk_tarih" class="field-style field-split align-right" placeholder="Sevk Tarihi" />
</li>
<li>
    <input type="text" name="vergi_no" class="field-style field-full align-none" placeholder="Vergi Dairesi/No" />
   
</li>
<li>
    <input type="text" name="teslim_yeri" class="field-style field-full align-none" placeholder="Teslim Yeri" />
   
</li>
<li>
    <input type="text" name="satis_kuru_USD" class="field-style field-split align-left" placeholder="M.B Efektif Stış Kuru USD" />
    <input type="text" name="satis_kuru_Euro" class="field-style field-split align-right" placeholder="M.B Efektif Satış Kuru EURO" />
</li>
<li>
<input type="text" name="odeme_sekli" class="field-style field-full align-none" placeholder="Ödeme Şekli" />
</li>
<li>
<input  type="text" name="siparisi_alan" class="field-style field-full align-none" placeholder="Siparişi Alan" />
</li>
<li>
<input  type="text" name="yetkili_kisi1" class="field-style field-full align-none" placeholder="Yetkili Kişi" />
</li>
<li>
<input  type="text" name="vergi_no1" class="field-style field-full align-none" placeholder="Vergi Dairesi/No" />
</li>
<li>
    <input type="Phone" name="telefon" class="field-style field-split align-left" placeholder="Telefon" />
    <input type="text" name="fax" class="field-style field-split align-right" placeholder="Fax" />
</li>
<li>
<input  type="mail" name="e_mail" class="field-style field-full align-none" placeholder="E-mail" />
</li>

   <li>
<input type="submit" value="kayıt al" name="siparis_kayit_tusu" />
</li>

    </form>
</div>

</ul>

</head>
<body>

</body>
</html>