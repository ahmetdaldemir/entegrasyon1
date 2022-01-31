<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html><head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name=Generator content="FastReport http://www.fast-report.com">
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
.s7 { display:block;border:0;width:32.19px;padding-left:2px;padding-right:2px;}
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
<div class="s2" style="left:15.73px;top:184.82px;width:331.16px;height:77.68px;"><div class="s1"><?=$orders->companyName?><br><br><?=$orders->billingAddress?><br>- / -<br><?=$orders->phoneNumber?></div></div>
<div class="s2" style="left:294.65px;top:73.75px;width:70.42px;height:26.95px;"><div class="s3"><?=date("d-m-Y");?><br><?=date("H:i:s",strtotime('+3 hour'));?></div></div>
<div class="s2" style="left:294.96px;top:116.92px;width:69.16px;height:25.22px;"><div class="s4"><?=date("d-m-Y");?><br><?=date("H:i:s",strtotime('+3 hour'));?></div></div>
<div class="s2" style="left:16.24px;top:263.27px;width:331.16px;height:18.9px;"><div class="s1">Vd:<?=$orders->taxOffice?> -  VNo:<?=$orders->taxNumber?> -</div></div>
<div class="s2" style="left:396.9px;top:183.12px;width:331.16px;height:77.68px;"><div class="s1"><?=$orders->companyName?><br><br><?=$orders->billingAddress?><br>- / -<br><?=$orders->phoneNumber?></div></div>
<div class="s2" style="left:397.41px;top:261.57px;width:331.16px;height:18.9px;"><div class="s1">Vd:<?=$orders->taxOffice?> -  VNo:<?=$orders->taxNumber?> -</div></div>
<div class="s2" style="left:774.91px;top:182.22px;width:331.16px;height:77.68px;"><div class="s1"><?=$orders->companyName?><br><br><?=$orders->billingAddress?><br>- / -<br><?=$orders->phoneNumber?></div></div>
<div class="s2" style="left:775.42px;top:260.67px;width:331.16px;height:18.9px;"><div class="s1">Vd:<?=$orders->taxOffice?> -  VNo:<?=$orders->taxNumber?> -</div></div>
<div class="s2" style="left:671.43px;top:75px;width:70.42px;height:26.95px;"><div class="s3"><?=date("d-m-Y");?><br><?=date("H:i:s",strtotime('+3 hour'));?></div></div>
<div class="s2" style="left:671.74px;top:118.17px;width:69.16px;height:25.22px;"><div class="s4">5<?=date("d-m-Y");?><br><?=date("H:i:s",strtotime('+3 hour'));?></div></div>
<div class="s2" style="left:1046.41px;top:74.12px;width:65.07px;height:26.95px;"><div class="s5"><?=date("d-m-Y");?><br><?=date("H:i:s",strtotime('+3 hour'));?></div></div>
<div class="s2" style="left:1046.72px;top:117.29px;width:63.81px;height:25.22px;"><div class="s6"><?=date("d-m-Y");?>0<br><?=date("H:i:s",strtotime('+3 hour'));?></div></div>
<div class="s0" style="left:0px;top:305.1px;width:1122.66px;height:15.4px;">&nbsp;</div>
 <?php $product = $this->db->where("OrderId",$id)->get("FaturaUrun")->result();   foreach($product as $products) {?> 
<div class="s2" style="left:220.72px;top:305.1px;width:36.19px;height:13.9px;"><div class="s7"><?=$products->ProductQuantity?></div></div>
<div class="s9" style="left:255.86px;top:305.35px;width:43.49px;height:13.9px;"><div class="s8"><?=$products->ProductPrice?></div></div>
<div class="s11" style="left:299.41px;top:305.1px;width:55.02px;height:13.9px;"><div class="s10"><?=$products->TotalPrice?></div></div>
<div class="s13" style="left:54.77px;top:305.1px;width:164.28px;height:13.9px;"><div class="s12"><?=$products->ProductsName?></div></div>
<div class="s2" style="left:14.6px;top:305.1px;width:36.19px;height:13.9px;"><div class="s7"><?=$products->merchantSku?></div></div>
 <?php } ?> 
  <?php $product = $this->db->where("OrderId",$id)->get("FaturaUrun")->result();   foreach($product as $products) {?> 
<div class="s2" style="left:600.34px;top:305.1px;width:36.19px;height:13.9px;"><div class="s7"><?=$products->ProductQuantity?></div></div>
<div class="s9" style="left:635.48px;top:305.35px;width:43.49px;height:13.9px;"><div class="s8"><?=$products->ProductPrice?></div></div>
<div class="s11" style="left:679.03px;top:305.1px;width:55.02px;height:13.9px;"><div class="s10"><?=$products->TotalPrice?></div></div>
<div class="s13" style="left:434.39px;top:305.1px;width:164.28px;height:13.9px;"><div class="s12"><?=$products->ProductsName?></div></div>
<div class="s2" style="left:394.22px;top:305.1px;width:36.19px;height:13.9px;"><div class="s7"><?=$products->merchantSku?></div></div>
  <?php } ?>
  <?php $product = $this->db->where("OrderId",$id)->get("FaturaUrun")->result();   foreach($product as $products) {?> 
<div class="s2" style="left:975.67px;top:305.1px;width:36.19px;height:13.9px;"><div class="s7"><?=$products->ProductQuantity?></div></div>
<div class="s9" style="left:1010.81px;top:305.35px;width:43.49px;height:13.9px;"><div class="s8"><?=$products->ProductPrice?></div></div>
<div class="s11" style="left:1054.36px;top:305.1px;width:55.02px;height:13.9px;"><div class="s10"><?=$products->TotalPrice?></div></div>
<div class="s13" style="left:809.72px;top:305.1px;width:164.28px;height:13.9px;"><div class="s12"><?=$products->ProductsName?></div></div>
<div class="s2" style="left:769.55px;top:305.1px;width:36.19px;height:13.9px;"><div class="s7"><?=$products->merchantSku?></div></div>
  <?php } ?> 
<div class="s0" style="left:0px;top:320.5px;width:1122.66px;height:15.4px;">&nbsp;</div>
<div class="s0" style="left:0px;top:542.31px;width:1122.66px;height:251.49px;">&nbsp;</div>
<!-- div class="s15" style="left:181.2px;top:568.14px;width:65.48px;height:18.9px;"><div class="s14">Kdv %8: </div></div>
<div class="s15" style="left:272.63px;top:568.61px;width:71.28px;height:18.9px;"><div class="s16">9,72 ₺</div></div -->
<div class="s15" style="left:272.63px;top:590.71px;width:71.28px;height:18.9px;"><div class="s16"><?=$this->db->select_sum('vat')->from('FaturaUrun')->where("OrderId",$id)->get()->row()->vat;?> ₺</div></div>
<div class="s15" style="left:181.2px;top:590.24px;width:65.48px;height:18.9px;"><div class="s14">Kdv %18: </div></div>
<div class="s15" style="left:248.47px;top:613.75px;width:94.5px;height:16.4px;"><div class="s17"><?=$this->db->select_sum('TotalPrice')->from('FaturaUrun')->where("OrderId",$id)->get()->row()->TotalPrice;?> ₺</div></div>
<div class="s2" style="left:25.59px;top:639.01px;width:321.94px;height:28.5px;"><div class="s18">Yalnız:YüzOtuzYedi TL Yirmi Kr.</div></div>
<div class="s2" style="left:402.77px;top:640.1px;width:321.07px;height:28.5px;"><div class="s19">Yalnız:YüzOtuzYedi TL Yirmi Kr.</div></div>
<div class="s2" style="left:776.32px;top:640.11px;width:328.2px;height:28.5px;"><div class="s20">Yalnız:YüzOtuzYedi TL Yirmi Kr.</div></div>
<div class="s15" style="left:249.7px;top:547.76px;width:94.5px;height:16.4px;"><div class="s17"><?php $a = $this->db->select_sum('ProductPrice')->from('FaturaUrun')->where("OrderId",$id)->get()->row()->ProductPrice; $b = $this->db->select_sum('vat')->from('FaturaUrun')->where("OrderId",$id)->get()->row()->vat; echo $a - $b;?></div></div>
<div class="s15" style="left:152.2px;top:613.3px;width:94.5px;height:16.4px;"><div class="s17">GENEL TOPLAM</div></div>
<div class="s15" style="left:152.43px;top:547.31px;width:94.5px;height:16.4px;"><div class="s17">Matrah</div></div>
<!-- div class="s15" style="left:564.65px;top:568.59px;width:65.48px;height:18.9px;"><div class="s14">Kdv %8: </div></div>
<div class="s15" style="left:656.08px;top:569.06px;width:71.28px;height:18.9px;"><div class="s16">9,72 ₺</div></div -->
<div class="s15" style="left:656.08px;top:591.16px;width:71.28px;height:18.9px;"><div class="s16"><?=$this->db->select_sum('vat')->from('FaturaUrun')->where("OrderId",$id)->get()->row()->vat;?> ₺</div></div>
<div class="s15" style="left:564.65px;top:590.69px;width:65.48px;height:18.9px;"><div class="s14">Kdv %18: </div></div>
<div class="s15" style="left:631.92px;top:614.2px;width:94.5px;height:16.4px;"><div class="s17"><?=$this->db->select_sum('TotalPrice')->from('FaturaUrun')->where("OrderId",$id)->get()->row()->TotalPrice;?> ₺</div></div>
<div class="s15" style="left:633.15px;top:548.21px;width:94.5px;height:16.4px;"><div class="s17"><?php $a = $this->db->select_sum('ProductPrice')->from('FaturaUrun')->where("OrderId",$id)->get()->row()->ProductPrice; $b = $this->db->select_sum('vat')->from('FaturaUrun')->where("OrderId",$id)->get()->row()->vat; echo $a - $b;?></div></div>
<div class="s15" style="left:535.65px;top:613.75px;width:94.5px;height:16.4px;"><div class="s17">GENEL TOPLAM</div></div>
<div class="s15" style="left:535.88px;top:547.76px;width:94.5px;height:16.4px;"><div class="s17">Matrah</div></div>
<!-- div class="s15" style="left:945.65px;top:568.14px;width:65.48px;height:18.9px;"><div class="s14">Kdv %8: </div></div>
<div class="s15" style="left:1037.08px;top:568.61px;width:71.28px;height:18.9px;"><div class="s16">9,72 ₺</div></div -->
<div class="s15" style="left:1037.08px;top:590.71px;width:71.28px;height:18.9px;"><div class="s16"><?=$this->db->select_sum('vat')->from('FaturaUrun')->where("OrderId",$id)->get()->row()->vat;?> ₺</div></div>
<div class="s15" style="left:945.65px;top:590.24px;width:65.48px;height:18.9px;"><div class="s14">Kdv %18: </div></div>
<div class="s15" style="left:1012.92px;top:613.75px;width:94.5px;height:16.4px;"><div class="s17"><?=$this->db->select_sum('TotalPrice')->from('FaturaUrun')->where("OrderId",$id)->get()->row()->TotalPrice;?> ₺</div></div>
<div class="s15" style="left:1014.15px;top:547.76px;width:94.5px;height:16.4px;"><div class="s17"><?php $a = $this->db->select_sum('ProductPrice')->from('FaturaUrun')->where("OrderId",$id)->get()->row()->ProductPrice; $b = $this->db->select_sum('vat')->from('FaturaUrun')->where("OrderId",$id)->get()->row()->vat; echo $a - $b;?></div></div>
<div class="s15" style="left:916.65px;top:614.3px;width:94.5px;height:16.4px;"><div class="s17">GENEL TOPLAM</div></div>
<div class="s15" style="left:916.88px;top:547.31px;width:94.5px;height:16.4px;"><div class="s17">Matrah</div></div>
<div class="s2" style="left:26.35px;top:724.31px;width:321.94px;height:28.5px;"><div class="s21">&nbsp;</div></div>
<div class="s2" style="left:403.35px;top:722.86px;width:321.94px;height:28.5px;"><div class="s21">&nbsp;</div></div>
<div class="s2" style="left:774.9px;top:721.86px;width:321.94px;height:28.5px;"><div class="s21">&nbsp;</div></div>
  <?php } ?>
</body>
</html>
