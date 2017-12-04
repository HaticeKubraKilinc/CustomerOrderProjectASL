<!DOCTYPE html>
<html>
<head>

<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="form.css">
<style>
DIV.table 
{
    display:table;
}
FORM.tr, DIV.tr
{
    display:table-row;
}
SPAN.td
{
    display:table-cell;
}
</style>
  <title></title>
</head>
<body>
<li>
    <input type="number" name="field3" class="field-style field-split align-right" placeholder="Sipariş No" />
    <input type="text" name="field4" class="field-style field-split align-right" placeholder="Ürün Adı" />
     <input type="text" name="field4" class="field-style field-split align-right" placeholder="Ambj/Koli" />
      <input type="number" name="field4" class="field-style field-split align-right" placeholder="Adet" />
       <input type="number" name="field4" class="field-style field-split align-right" placeholder="Sipariş Miktarı" />
        <input type="number" name="field4" class="field-style field-split align-right" placeholder="USD Birim Fiyat" />
         <input type="number" name="field4" class="field-style field-split align-right" placeholder="USD KURU" />
          <input type="number" name="field4" class="field-style field-split align-right" placeholder="Birim Fiyat TL" />
           <input type="number" name="field4" class="field-style field-split align-right" placeholder="Toplam Tutar TL" />

</li>
<div class="table">
    <form class="tr" method="post" action="blah.html">
        <span class="td"><input type="text"/></span>
        <span class="td"><input type="text"/></span>
        <span class="td"><input type="text"/></span>
        <span class="td"><input type="text"/></span>
    </form>
    <div class="tr">
        <span class="td">(cell data)</span>
        <span class="td">(cell data)</span>
    </div>
    ...
</div>


