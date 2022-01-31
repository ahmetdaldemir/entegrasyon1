<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html><head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name=Generator content="FastReport http://www.fast-report.com">
<script src="http://code.jquery.com/jquery-latest.min.js"></script>
    <script src="http://kozmodiva.net/assest/jquery-barcode.min.js"></script>
      <script src="http://kozmodiva.net/assest/jquery-barcode.js"></script>
<title>Fatura</title>
</head>
<body bgcolor="#FFFFFF" text="#000000">
<style type="text/css"><!-- 
.page_break { page-break-before:always; } 
.s0 { text-align:center;position:absolute;overflow:hidden;color:#FFFFFF;background-color:transparent;border-collapse: separate;border:none;}
.s1 { display:block;border:0;width:327.16px;padding-left:2px;padding-right:2px;}
.s2 { font-style:normal;font-family:Arial;font-size:11px;text-align:left;word-wrap:break-word;position:absolute;overflow:hidden;color:#000000;background-color:transparent;border-collapse: separate;border:none;}
.s3 { display:block;border:0;width:66.42px;padding-left:2px;padding-right:2px;}
.s4 { display:block;border:0;width:65.16px;padding-left:2px;padding-right:2px;}
.s5 { display:block;border:0;width:61.07px;padding-left:2px;padding-right:2px;}
.s6 { display:block;border:0;width:59.81px;padding-left:2px;padding-right:2px;}
.s7 { display:block;border:0;width:38.19px;padding-left:2px;padding-right:2px;}
.s8 { display:block;border:0;width:39.49px;padding-left:2px;padding-right:2px;}
.s9 { font-style:normal;font-family:Arial;font-size:11px;text-align:right;word-wrap:break-word;position:absolute;overflow:hidden;color:#000000;background-color:transparent;border-collapse: separate;border:none;}
.s10 { display:block;border:0;width:51.02px;padding-left:2px;padding-right:2px;}
.s11 { font-style:normal;font-family:Arial;font-size:11px;text-align:right;position:absolute;overflow:hidden;color:#000000;background-color:transparent;border-collapse: separate;border:none;}
.s12 { display:block;border:0;width:160.28px;padding-left:2px;padding-right:2px;}
.s13 { font-style:normal;font-family:Arial;font-size:11px;text-align:left;position:absolute;overflow:hidden;color:#000000;background-color:transparent;border-collapse: separate;border:none;}
.s14 { display:block;border:0;width:61.48px;padding-left:2px;padding-right:2px;}
.s15 { font-style:normal;font-family:Arial;font-size:12px;text-align:right;position:absolute;overflow:hidden;color:#000000;background-color:transparent;border-collapse: separate;border:none;}
.s16 { display:block;border:0;width:67.28px;padding-left:2px;padding-right:2px;}
.s17 { display:block;border:0;width:90.5px;padding-left:2px;padding-right:2px;}
.s18 { display:block;border:0;width:317.94px;padding-left:2px;padding-right:2px;margin-top:15.23px;}
.s19 { display:block;border:0;width:317.07px;padding-left:2px;padding-right:2px;margin-top:15.23px;}
.s20 { display:block;border:0;width:324.2px;padding-left:2px;padding-right:2px;margin-top:15.23px;}
.s21 { display:block;border:0;width:317.94px;padding-left:2px;padding-right:2px;}
--></style>
  <?php foreach($order as $orders){ ?>
<div class="s0" style="left:0px;top:0px;width:1122.66px;height:305.1px;"><a name="PageN1" style="padding:0;margin:0;font-size:1px;"></a>&nbsp;</div>
  <div class="s2" style="left:15.73px;top:184.82px;width:331.16px;height:77.68px;"><div class="s1"><?php if($orders->companyName == ""){echo $orders->recipientName;}else{echo $orders->companyName;}?><br><br><?=$orders->billingAddress?>      <?php if($platform == "3"){ echo $orders->billingDistrict."/".$orders->billingCity;  } ?><br><span style="float: right;"><?=$orders->phoneNumber?></span></div></div>
<div class="s2" style="left:21.65px;top:80.75px;width:70.42px;height:26.95px;"><div class="s3"><?=date("d-m-Y");?><br><?=date("H:i:s",strtotime('+3 hour'));?></div></div>
<div class="s2" style="left:21.96px;top:105.92px;width:69.16px;height:25.22px;"><div class="s4"><?=date("d-m-Y");?><br><?=date("H:i:s",strtotime('+3 hour'));?></div></div>
<div class="s2" style="left:16.24px;top:245.27px;width:331.16px;height:18.9px;"><div class="s1">Vd:<?=$orders->taxOffice?> /  VNo:<?=$orders->taxNumber?> </div></div>
<div class="s2" style="left:396.9px;top:183.12px;width:331.16px;height:77.68px;"><div class="s1"><?php if($orders->companyName == ""){echo $orders->recipientName;}else{echo $orders->companyName;}?><br><br><?=$orders->billingAddress?>     <?php if($platform == "3"){ echo  $orders->billingDistrict."/".$orders->billingCity;  } ?><br><span style="float: right;"><?=$orders->phoneNumber?></span></div></div>
<div class="s2" style="left:397.41px;top:245.57px;width:331.16px;height:18.9px;"><div class="s1">Vd:<?=$orders->taxOffice?> /  VNo:<?=$orders->taxNumber?> </div></div>
<div class="s2" style="left:794.91px;top:182.22px;width:331.16px;height:77.68px;"><div class="s1"><?php if($orders->companyName == ""){echo $orders->recipientName;}else{echo $orders->companyName;}?><br><br><?=$orders->billingAddress?>    <?php if($platform == "3"){ echo  $orders->billingDistrict."/".$orders->billingCity;  } ?><br><span style="float: right;"><?=$orders->phoneNumber?></span></div></div>
<div class="s2" style="left:795.42px;top:245.67px;width:331.16px;height:18.9px;"><div class="s1"><span>Vd:<?=$orders->taxOffice?> /  VNo:<?=$orders->taxNumber?> </span></div></div>
<div class="s2" style="left:399.43px;top:80px;width:70.42px;height:26.95px;"><div class="s3"><?=date("d-m-Y");?><br><?=date("H:i:s",strtotime('+3 hour'));?></div></div>
<div class="s2" style="left:399.74px;top:105.17px;width:69.16px;height:25.22px;"><div class="s4"><?=date("d-m-Y");?><br><?=date("H:i:s",strtotime('+3 hour'));?></div></div>
<div class="s2" style="left:791.41px;top:80.12px;width:65.07px;height:26.95px;"><div class="s5"><?=date("d-m-Y");?><br><?=date("H:i:s",strtotime('+3 hour'));?></div></div>
<div class="s2" style="left:791.72px;top:105.29px;width:65.81px;height:25.22px;"><div class="s6"><?=date("d-m-Y");?><br><?=date("H:i:s",strtotime('+3 hour'));?></div></div>
<div class="s0" style="left:0px;top:305.1px;width:1122.66px;height:15.4px;">&nbsp;</div>

  <div class="s2" style="     left: 15.73px;
    top: 272.82px;
    width: 331.16px;
    height: 15.68px;
    border-top: 2px solid #040202;
    border-bottom: 2px solid #000;"><div class="s1">
  
  <div style="    width: 53%;
    float: left;">Açıklama</div> <div style="    width: 10%;
    float: left;">Adet</div> <div style="    width: 20%;
    float: left;">Birim Fiyat</div> <div style="      width: 17%;
    float: right;    text-align: right;">Toplam</div> 
   
  </div></div>


  <div class="s2" style="     left: 399.73px;
    top: 272.82px;
    width: 331.16px;
    height: 15.68px;
    border-top: 2px solid #040202;
    border-bottom: 2px solid #000;"><div class="s1">
  
  <div style="    width: 53%;
    float: left;">Açıklama</div> <div style="    width: 10%;
    float: left;">Adet</div> <div style="    width: 20%;
    float: left;">Birim Fiyat</div> <div style="      width: 17%;
    float: right;    text-align: right;">Toplam</div> 
   
  </div></div>
  
  
    <div class="s2" style="     left: 795.73px;
    top: 272.82px;
    width: 331.16px;
    height: 15.68px;
    border-top: 2px solid #040202;
    border-bottom: 2px solid #000;"><div class="s1">
  
  <div style="    width: 53%;
    float: left;">Açıklama</div> <div style="    width: 10%;
    float: left;">Adet</div> <div style="    width: 20%;
    float: left;">Birim Fiyat</div> <div style="      width: 17%;
    float: right;    text-align: right;">Toplam</div> 
   
  </div></div>
  

<div class="s0" style="left:0px;top:305.1px;width:1122.66px;height:15.4px;">&nbsp;</div>

 <?php $i = 0; $product = $this->db->where("OrderId",$id)->get("FaturaUrun")->result();   foreach($product as $products) {  $urunfiyati = $products->ProductPrice;  $kdv = $products->vat/$products->ProductQuantity; $birimfiyat = $urunfiyati - $kdv ;?> 
<div class="s2" style="left:200.72px;top:<?php $a = "305.1"; echo $a+$i; ?>px ;width:36.19px;height:21.9px;"><div class="s7"><?=$products->ProductQuantity?></div></div>
<div class="s9" style="left:235.86px;top:<?php $a = "305.35"; echo $a+$i; ?>px;width:43.49px;height:21.9px;"><div class="s8"><?=$birimfiyat?></div></div>
<div class="s11" style="left:279.41px;top:<?php $a = "305.1"; echo $a+$i; ?>px;width:55.02px;height:21.9px;"><div class="s10"><?=$birimfiyat*$products->ProductQuantity;?></div></div>
<div class="s13" style="left:41.77px;top:<?php $a = "305.1"; echo $a+$i; ?>px;width:164.28px;height:21.9px;"><div class="s12"><?=$products->ProductsName?></div></div>
<div class="s2" style="left:4.6px;top:<?php $a = "305.1"; echo $a+$i; ?>px;width:36.19px;height:21.9px;"><div class="s7"><?=$products->merchantSku?></div></div>
  <?php $i+=25; } ?> 
  <?php  $i = 0;  $product = $this->db->where("OrderId",$id)->get("FaturaUrun")->result();   foreach($product as $products) { $urunfiyati = $products->ProductPrice;  $kdv = $products->vat/$products->ProductQuantity; $birimfiyat = $urunfiyati - $kdv ; ?> 
<div class="s2" style="left:600.34px;top:<?php $a = "305.1"; echo $a+$i; ?>px ;width:36.19px;height:21.9px;"><div class="s7"><?=$products->ProductQuantity?></div></div>
<div class="s9" style="left:635.48px;top:<?php $a = "305.35"; echo $a+$i; ?>px ;width:43.49px;height:21.9px;"><div class="s8"><?=$birimfiyat?></div></div>
<div class="s11" style="left:679.03px;top:<?php $a = "305.1"; echo $a+$i; ?>px ;width:55.02px;height:21.9px;"><div class="s10"><?=$birimfiyat*$products->ProductQuantity;?></div></div>
<div class="s13" style="left:434.39px;top:<?php $a = "305.1"; echo $a+$i; ?>px ;width:164.28px;height:21.9px;"><div class="s12"><?=$products->ProductsName?></div></div>
<div class="s2" style="left:394.22px;top:<?php $a = "305.1"; echo $a+$i; ?>px ;width:36.19px;height:21.9px;"><div class="s7"><?=$products->merchantSku?></div></div>
  <?php $i+=25; } ?>
  <?php  $i = 0;  $product = $this->db->where("OrderId",$id)->get("FaturaUrun")->result();   foreach($product as $products) { $urunfiyati = $products->ProductPrice;  $kdv = $products->vat/$products->ProductQuantity; $birimfiyat = $urunfiyati - $kdv ;?> 
<div class="s2" style="left:995.67px;top:<?php $a = "305.1"; echo $a+$i; ?>px ;width:36.19px;height:21.9px;"><div class="s7"><?=$products->ProductQuantity?></div></div>
<div class="s9" style="left:1030.81px;top:<?php $a = "305.35"; echo $a+$i; ?>px ;width:43.49px;height:21.9px;"><div class="s8"><?=$birimfiyat?></div></div>
<div class="s11" style="left:1074.36px;top:<?php $a = "305.1"; echo $a+$i; ?>px ;width:55.02px;height:21.9px;"><div class="s10"><?=$birimfiyat*$products->ProductQuantity;?></div></div>
<div class="s13" style="left:829.72px;top:<?php $a = "305.1"; echo $a+$i; ?>px ;width:164.28px;height:21.9px;"><div class="s12"><?=$products->ProductsName?></div></div>
<div class="s2" style="left:789.55px;top:<?php $a = "305.1"; echo $a+$i; ?>px ;width:36.19px;height:21.9px;"><div class="s7"><?=$products->merchantSku?></div></div>
  <?php $i+=25; } ?> 
<div class="s0" style="left:0px;top:320.5px;width:1122.66px;height:15.4px;">&nbsp;</div>
<div class="s0" style="left:0px;top:542.31px;width:1122.66px;height:251.49px;">&nbsp;</div>
<!-- div class="s15" style="left:181.2px;top:568.14px;width:65.48px;height:18.9px;"><div class="s14">Kdv %8: </div></div>
<div class="s15" style="left:272.63px;top:568.61px;width:71.28px;height:18.9px;"><div class="s16">9,72 ₺</div></div -->
<div class="s15" style="left:272.63px;top:590.71px;width:71.28px;height:18.9px;"><div class="s16"><?=$this->db->select_sum('vat')->from('FaturaUrun')->where("OrderId",$id)->get()->row()->vat;?> </div></div>
<div class="s15" style="left:181.2px;top:590.24px;width:65.48px;height:18.9px;"><div class="s14">: </div></div>
<div class="s15" style="left:248.47px;top:613.75px;width:94.5px;height:16.4px;"><div class="s17"><?=$this->db->select_sum('TotalPrice')->from('FaturaUrun')->where("OrderId",$id)->get()->row()->TotalPrice;?> </div></div>
<div class="s2" style="left:25.59px;top:639.01px;width:321.94px;height:28.5px;"><div class="s18">Yalnız: <?php echo sayiyiYaziyaCevir($this->db->select_sum('TotalPrice')->from('FaturaUrun')->where("OrderId",$id)->get()->row()->TotalPrice,2,"TL","Kr","#",null,null,null); ?></div></div>
<div class="s2" style="left:402.77px;top:640.1px;width:321.07px;height:28.5px;"><div class="s19">Yalnız: <?php echo sayiyiYaziyaCevir($this->db->select_sum('TotalPrice')->from('FaturaUrun')->where("OrderId",$id)->get()->row()->TotalPrice,2,"TL","Kr","#",null,null,null); ?></div></div>
<div class="s2" style="left:796.32px;top:660.11px;width:328.2px;height:28.5px;"><div class="s20">Yalnız: <?php echo sayiyiYaziyaCevir($this->db->select_sum('TotalPrice')->from('FaturaUrun')->where("OrderId",$id)->get()->row()->TotalPrice,2,"TL","Kr","#",null,null,null); ?></div></div>
<div class="s15" style="left:249.7px;top:547.76px;width:94.5px;height:16.4px;"><div class="s17"> <?php $a = $this->db->select_sum('TotalPrice')->from('FaturaUrun')->where("OrderId",$id)->get()->row()->TotalPrice; $b = $this->db->select_sum('vat')->from('FaturaUrun')->where("OrderId",$id)->get()->row()->vat; echo $a - $b;?></div></div>
<div class="s15" style="left:152.2px;top:613.3px;width:94.5px;height:16.4px;"><div class="s17"></div></div>
<div class="s15" style="left:152.43px;top:547.31px;width:94.5px;height:16.4px;"><div class="s17"></div></div>
<!-- div class="s15" style="left:564.65px;top:568.59px;width:65.48px;height:18.9px;"><div class="s14">Kdv %8: </div></div>
<div class="s15" style="left:656.08px;top:569.06px;width:71.28px;height:18.9px;"><div class="s16">9,72 ₺</div></div -->
<div class="s15" style="left:656.08px;top:591.16px;width:71.28px;height:18.9px;"><div class="s16"><?=$this->db->select_sum('vat')->from('FaturaUrun')->where("OrderId",$id)->get()->row()->vat;?> </div></div>
<div class="s15" style="left:564.65px;top:590.69px;width:65.48px;height:18.9px;"><div class="s14"> : </div></div>
<div class="s15" style="left:631.92px;top:614.2px;width:94.5px;height:16.4px;"><div class="s17"><?=$this->db->select_sum('TotalPrice')->from('FaturaUrun')->where("OrderId",$id)->get()->row()->TotalPrice;?></div></div>
<div class="s15" style="left:633.15px;top:548.21px;width:94.5px;height:16.4px;"><div class="s17"><?php $a = $this->db->select_sum('TotalPrice')->from('FaturaUrun')->where("OrderId",$id)->get()->row()->TotalPrice; $b = $this->db->select_sum('vat')->from('FaturaUrun')->where("OrderId",$id)->get()->row()->vat; echo number_format($a - $b, 2, '.', ','); ?></div></div>
<div class="s15" style="left:535.65px;top:613.75px;width:94.5px;height:16.4px;"><div class="s17"></div></div>
<div class="s15" style="left:535.88px;top:547.76px;width:94.5px;height:16.4px;"><div class="s17"></div></div>
<!-- div class="s15" style="left:945.65px;top:568.14px;width:65.48px;height:18.9px;"><div class="s14">Kdv %8: </div></div>
<div class="s15" style="left:1037.08px;top:568.61px;width:71.28px;height:18.9px;"><div class="s16">9,72 ₺</div></div --> 
<div class="s15" style="left:1037.08px;top:620.71px;width:71.28px;height:18.9px;"><div class="s16"><?=echo number_format($this->db->select_sum('vat')->from('FaturaUrun')->where("OrderId",$id)->get()->row()->vat, 2, '.', ',')?></div></div>
<div class="s15" style="left:945.65px;top:620.24px;width:65.48px;height:18.9px;"><div class="s14">: </div></div>
<div class="s15" style="left:1012.92px;top:643.75px;width:94.5px;height:16.4px;"><div class="s17"><?=number_format($this->db->select_sum('TotalPrice')->from('FaturaUrun')->where("OrderId",$id)->get()->row()->TotalPrice, 2, '.', ',')?> </div></div>
<div class="s15" style="left:1014.15px;top:567.76px;width:94.5px;height:16.4px;"><div class="s17"><?php $a = $this->db->select_sum('TotalPrice')->from('FaturaUrun')->where("OrderId",$id)->get()->row()->TotalPrice; $b = $this->db->select_sum('vat')->from('FaturaUrun')->where("OrderId",$id)->get()->row()->vat;  echo number_format($a - $b, 2, '.', ','); ?></div></div>
<div class="s15" style="left:916.65px;top:614.3px;width:94.5px;height:16.4px;"><div class="s17"></div></div>
<div class="s15" style="left:916.88px;top:547.31px;width:94.5px;height:16.4px;"><div class="s17"></div></div>
<div class="s2" style="left:26.35px;top:724.31px;width:321.94px;height:28.5px;"><div class="s21">Platform : <?=$orders->platform?></br><span style="    float: left;"><?=$orders->barcode?></span> <span class="barcode" style="float: right;margin: -24px 0;"></span></div></div>
<div class="s2" style="left:403.35px;top:722.86px;width:321.94px;height:28.5px;"><div class="s21">Platform : <?=$orders->platform?></br><span style="    float: left;"><?=$orders->barcode?></span><span class="barcode" style="float: right;margin: -24px 0;"></span></div></div>
<div class="s2" style="left:804.9px;top:741.86px;width:321.94px;height:28.5px;"><div class="s21">Platform : <?=$orders->platform?></br><span style="    float: left;"><?=$orders->barcode?></span><span class="barcode" style="float: right;margin: -24px 0;"></span></div></div>

<script>
$(".barcode").barcode(
"<?=$orders->barcode?>", // Value barcode (dependent on the type of barcode)
"ean13" // type (string)
);     
</script> 
 <?php } ?>
</body>
</html>

<?php
  function sayiyiYaziyaCevir($sayi, $kurusbasamak, $parabirimi, $parakurus, $diyez, $bb1, $bb2, $bb3) {
// kurusbasamak virgülden sonra gösterilecek basamak sayısı
// parabirimi = TL gibi , parakurus = Kuruş gibi
// diyez başa ve sona kapatma işareti atar # gibi

$b1 = array("", "bir", "iki", "üç", "dört", "beş", "altı", "yedi", "sekiz", "dokuz");
$b2 = array("", "on", "yirmi", "otuz", "kırk", "elli", "altmış", "yetmiş", "seksen", "doksan");
$b3 = array("", "yüz", "bin", "milyon", "milyar", "trilyon", "katrilyon");

if ($bb1 != null) { // farklı dil kullanımı yada farklı yazım biçimi için
$b1 = $bb1;
}
if ($bb2 != null) { // farklı dil kullanımı
$b2 = $bb2;
}
if ($bb3 != null) { // farklı dil kullanımı
$b3 = $bb3;
}

$say1="";
$say2 = ""; // say1 virgül öncesi, say2 kuruş bölümü
$sonuc = "";

$sayi = str_replace(",", ".",$sayi); //virgül noktaya çevrilir

$nokta = strpos($sayi,"."); // nokta indeksi

if ($nokta>0) { // nokta varsa (kuruş)

$say1 = substr($sayi,0, $nokta); // virgül öncesi
$say2 = substr($sayi,$nokta, strlen($sayi)); // virgül sonrası, kuruş

} else {
$say1 = $sayi; // kuruş yoksa
}

$son;
$w = 1; // işlenen basamak
$sonaekle = 0; // binler on binler yüzbinler vs. için sona bin (milyon,trilyon...) eklenecek mi?
$kac = strlen($say1); // kaç rakam var?
$sonint; // işlenen basamağın rakamsal değeri
$uclubasamak = 0; // hangi basamakta (birler onlar yüzler gibi)
$artan = 0; // binler milyonlar milyarlar gibi artışları yapar
$gecici;

if ($kac > 0) { // virgül öncesinde rakam var mı?

for ($i = 0; $i < $kac; $i++) {

$son = $say1[$kac - 1 - $i]; // son karakterden başlayarak çözümleme yapılır.
$sonint = $son; // işlenen rakam Integer.parseInt(

if ($w == 1) { // birinci basamak bulunuyor

$sonuc = $b1[$sonint] . $sonuc;

} else if ($w == 2) { // ikinci basamak

$sonuc = $b2[$sonint] . $sonuc;

} else if ($w == 3) { // 3. basamak

if ($sonint == 1) {
$sonuc = $b3[1] . $sonuc;
} else if ($sonint > 1) {
$sonuc = $b1[$sonint] . $b3[1] . $sonuc;
}
$uclubasamak++;
}

if ($w > 3) { // 3. basamaktan sonraki işlemler

if ($uclubasamak == 1) {

if ($sonint > 0) {
$sonuc = $b1[$sonint] . $b3[2 + $artan] . $sonuc;
if ($artan == 0) { // birbin yazmasını engelle
$sonuc = str_replace($b1[1] . $b3[2], $b3[2],$sonuc);
}
$sonaekle = 1; // sona bin eklendi
} else {
$sonaekle = 0;
}
$uclubasamak++;

} else if ($uclubasamak == 2) {

if ($sonint > 0) {
if ($sonaekle > 0) {
$sonuc = $b2[$sonint] . $sonuc;
$sonaekle++;
} else {
$sonuc = $b2[$sonint] . $b3[2 + $artan] . $sonuc;
$sonaekle++;
}
}
$uclubasamak++;

} else if ($uclubasamak == 3) {

if ($sonint > 0) {
if ($sonint == 1) {
$gecici = $b3[1];
} else {
$gecici = $b1[$sonint] . $b3[1];
}
if ($sonaekle == 0) {
$gecici = $gecici . $b3[2 + $artan];
}
$sonuc = $gecici . $sonuc;
}
$uclubasamak = 1;
$artan++;
}

}

$w++; // işlenen basamak

}
} // if(kac>0)

if ($sonuc=="") { // virgül öncesi sayı yoksa para birimi yazma
$parabirimi = "";
}

$say2 = str_replace(".", "",$say2);
$kurus = "";

if ($say2!="") { // kuruş hanesi varsa

if ($kurusbasamak > 3) { // 3 basamakla sınırlı
$kurusbasamak = 3;
}
$kacc = strlen($say2);
if ($kacc == 1) { // 2 en az
$say2 = $say2."0"; // kuruşta tek basamak varsa sona sıfır ekler.
$kurusbasamak = 2;
}
if (strlen($say2) > $kurusbasamak) { // belirlenen basamak kadar rakam yazılır
$say2 = substr($say2,0, $kurusbasamak);
}

$kac = strlen($say2); // kaç rakam var?
$w = 1;

for ($i = 0; $i < $kac; $i++) { // kuruş hesabı

$son = $say2[$kac - 1 - $i]; // son karakterden başlayarak çözümleme yapılır.
$sonint = $son; // işlenen rakam Integer.parseInt(

if ($w == 1) { // birinci basamak

if ($kurusbasamak > 0) {
$kurus = $b1[$sonint] . $kurus;
}

} else if ($w == 2) { // ikinci basamak
if ($kurusbasamak > 1) {
$kurus = $b2[$sonint] . $kurus;
}

} else if ($w == 3) { // 3. basamak
if ($kurusbasamak > 2) {
if ($sonint == 1) { // 'biryüz' ü engeller
$kurus = $b3[1] . $kurus;
} else if ($sonint > 1) {
$kurus = $b1[$sonint] . $b3[1] . $kurus;
}
}
}
$w++;
}
if ($kurus=="") { // virgül öncesi sayı yoksa para birimi yazma
$parakurus = "";
} else {
$kurus = $kurus . " ";
}
$kurus = $kurus . $parakurus; // kuruş hanesine 'kuruş' kelimesi ekler
}

$sonuc = $diyez . $sonuc . " " . $parabirimi . " " . $kurus . $diyez;
return $sonuc;
}

 

?>


