<!DOCTYPE html>
<html>
<head>

<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="form.css">



</head>
<body>
<form action="netting/islem.php" method="POST" class="form-style-9">
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
<input type="submit" value="Devam" name="siparis" />
</li>
</ul>
</form>

</body>
</html>