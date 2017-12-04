<?php
include 'database_baglanma.php';
include 'h.php';
?>

<!DOCTYPE html>
<html>

<meta charset="utf-8">
<head>
<link rel="stylesheet" type="text/css" href="genel_gorunum.css">
<link rel="stylesheet" type="text/css" href="form.css">
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
	<title>Müsteri kayıt</title>
<style>
    h1 { color: #FFFFFF; }
  </style>
	 
	 <body> <div class="trBorder" align=center> <h1>AsilBCF müşteri kayıt alma<h1>


<form class="form-style-9" action="h.php"  method="POST">
<ul>

<li>
   <input type="text"   name="gorusulen_kisi" class="field-style field-full align-none" placeholder="Görüşülen Kişi" />
   
</li>

<li>
  <input type="text"  name="pozisyonu" class="field-style field-full align-none" placeholder="Pozisyonu" />
   
</li>


<li>
   <input type="text"   name="firma_adi" class="field-style field-full align-none" placeholder="Firma Adı" />
   
</li>
<li>
    <input type="Phone"   name="telefon_1" class="field-style field-split align-left" placeholder="Alan kodu -Telefon numarası " />
    <input type="Phone" name="telefon_2" class="field-style field-split align-left" placeholder="Diğer bir Telefon numarası" />
</li>

<li>
    <input  type="mail" name="email" class="field-style field-full align-none" placeholder="E-mail" />
</li>

<li>
    <input type="text" name="fuar_adi" class="field-style field-full align-none" placeholder="Fuar Adı" />
   
</li>
<li>
       <input type="date"   name="tarih" class="field-style field-split align-right" placeholder="Sipariş Tarihi" />
</li>

<!--  buraya - - - - - - - - -  cizgi konucak css veya html le-->


<p> <h4>FİRMAYA DAİR BİLGİLER</h4></p>


<li>
   <input type="text"   name="uretici" class="field-style field-full align-none" placeholder="Üretici-Tüccar" />
   
</li>




<li>

<!-- bunun görünümü değiştirilicek gerekirse databasede de değişiklik yapılıcak-->  


  <input type="text"   name="tufting_weaving" class="field-style field-full align-none" placeholder=" tufting-weaving" />
   

</li>





<li>
  <input type="text" name="makina_sayisi" class="field-style field-full align-none" placeholder="Makina Sayısı" />
   
</li>


<li>
    <input type="text" name="kapasite_kullanım_oranı" class="field-style field-full align-none" placeholder="Kapasite kullanım oranı" />
   
</li>


<li>
    <input type="text" name="aylik_tuketim" class="field-style field-full align-none" placeholder="Aylık Tüketim" />
   
</li>

<li>
    <input type="text" name="calisan_sayisi" class="field-style field-full align-none" placeholder="Çalışan Sayısı" />
   
</li>

<li>
  <input type="text"   name="odeme_sekli" class="field-style field-full align-none" placeholder="Ödeme Şekli" />
</li>




<p> <h4>ADRES</h4></p>


<li>
    <input type="text"   name="tam_adress" class="field-style field-split align-left" placeholder="Tam Adresi" />

    <input type="text"   name="teslim_yeri" class="field-style field-split align-left" placeholder="teslim_yeri" />

      <input type="text"   name="ulke_il" class="field-style field-split align-left" placeholder="ulke_il" />
        <input type="text"   name="posta_kodu" class="field-style field-split align-left" placeholder="posta_kodu" />
    
</li>



<li>
    <input type="text" name="notlar" class="field-style field-full align-none" placeholder="Notlar" />
   
</li>

<!--  görüşme değerlendirme ekleme-->


<li>
<input type="submit" value="kayıt al" name="deneme" />
</li>



</ul>
</form>


</div>
 </div> </body>

	 
</head>
<body>



</body>
</html>