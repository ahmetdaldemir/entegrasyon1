<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Print Pages</title>
    <link rel="stylesheet"  href="<?=base_url()?>assest/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?=base_url()?>assest/print.css">
    <link rel="stylesheet" href="<?=base_url()?>assest/backend/css/font-awesome/css/font-awesome.min.css">
    <script language="JavaScript">
        function myprint() {
            print();
        }
    </script>
</head>
<body style="background:url(<?=base_url()?>assest/back.jpg); background-size: contain;" onLoad="myprint()">

<div class="moving-area-left">
    <a href="{{URL::to('/admin/mikro-transfer')}}"><i class="fa fa-chevron-left fa-4x"></i></a>
</div>

<div class="moving-area-right">
    <a onClick="window.print()"  href="#"><i class="fa fa-print fa-4x"></i></a>
</div>
  
<div class="order">
   <div class="col-xs-12" style="width:297mm;">
<div style="width:99mm;text-align:right;float:left;margin:50px -50px;">
   <div class="col-xs-12" style="text-align:right;"><?=date("d-m-Y");?></div>
  <div class="col-xs-12" style="text-align:right;"><?=date("H:i:s",strtotime('+3 hour'));?></div>
  <div class="col-xs-12" style="text-align:right;"><?=date("d-m-Y");?></div>
  <div class="col-xs-12" style="text-align:right;"><?=date("H:i:s",strtotime('+3 hour'));?></div>
  </div>
 <div  style="width:99mm;text-align:right;float:left;margin:50px 0;"><div class="col-xs-12" style="text-align:right;"><?=date("d-m-Y");?></div>
  <div class="col-xs-12" style="text-align:right;"><?=date("H:i:s",strtotime('+3 hour'));?></div>
  <div class="col-xs-12" style="text-align:right;"><?=date("d-m-Y");?></div>
  <div class="col-xs-12" style="text-align:right;"><?=date("H:i:s",strtotime('+3 hour'));?></div>
  </div>
  <div  style="width:99mm;text-align:right; float:right;margin:0px 0;">
  <div class="col-xs-12" style="text-align:right;"><?=date("d-m-Y");?></div>
  <div class="col-xs-12" style="text-align:right;"><?=date("H:i:s",strtotime('+3 hour'));?></div>
  <div class="col-xs-12" style="text-align:right;"><?=date("d-m-Y");?></div>
  <div class="col-xs-12" style="text-align:right;"><?=date("H:i:s",strtotime('+3 hour'));?></div>
  </div>
  </div>
    <div style="margin-top:-60px;" style="width:297mm" class="col-xs-12">
    <?php foreach($order as $orders){ ?>
        <div style="  " class="col-xs-4">
            <div class="col-xs-12" style="width:99mm;margin:105px 0;">
                   <div class="col-xs-6 pull-right" style="float:right;margin:0px 0;"> Tel : <?=$orders->phoneNumber?> </div>
                  <div class="col-xs-12"  class="bName"><?=$orders->companyName?><br><?=$orders->billingAddress?> </div>
                   <div class="col-xs-6" style=" margin:0px 0;">VD:  <?=$orders->taxOffice?> </div>
                   <div class="col-xs-6 pull-right" style="float:right;margin:0px 0;"> VN : <?=$orders->taxNumber?> </div>
                </div>          
                <div style="margin-top: -60px; margin-bottom: 20px; height:260px;" class="col-xs-12">
                    <?php $product = $this->db->where("OrderId",$id)->get("FaturaUrun")->result();   foreach($product as $products) {?>
                        <div style="float: left;" class="product">
                            <div style="float:left;    font-size: 12px;padding:0;" class="product_name col-xs-2"><?=$products->merchantSku?></div>
                            <div style="float:left;font-size: 12px;padding:0;" class="product_name col-xs-7"><?=$products->ProductsName?></div>
                            <div style="float:left;font-size: 12px;padding:0;" class="product_quantity col-xs-1"><?=$products->ProductQuantity?></div>
                            <div style="float:left;font-size: 12px;padding:0;" class="product_price col-xs-1"><?=$products->ProductPrice?></div>
                            <div style="float:left;font-size: 12px;padding:0;" class="product_Amountprice col-xs-1"><?=$products->TotalPrice?></div>
                        </div>
                    <?php } ?>
 
                 </div>
                 <div class="col-xs-8" style="float: right">
                            <div  class="col-xs-12" style="   font-size: 12px;margin-top:10px;margin-left:100px;" class="text"><?php $a = $this->db->select_sum('ProductPrice')->from('FaturaUrun')->where("OrderId",$id)->get()->row()->ProductPrice; $b = $this->db->select_sum('vat')->from('FaturaUrun')->where("OrderId",$id)->get()->row()->vat; echo $a - $b;?></div>
                              <div class="col-xs-12" style="   font-size: 12px;margin-top:20px;margin-left:100px;"  class="text"><?=$this->db->select_sum('vat')->from('FaturaUrun')->where("OrderId",$id)->get()->row()->vat;?></div>
                              <div class="col-xs-12"  style="   font-size: 12px;margin-top:10px;margin-left:100px;"  class="text"><?=$this->db->select_sum('TotalPrice')->from('FaturaUrun')->where("OrderId",$id)->get()->row()->TotalPrice;?></div>
                  </div>

                <div style="margin-top:90px;text-align:center;" class="col-xs-12">
                    <div class="matrah">
                        <div class="left-cloum" style="font-size: 12px;width: 40%;float: left;">Platform</div>
                        <div class="right-cloum" style="font-size: 12px;"><?=$orders->platform?></div>
                    </div>
                    <div class="matrah">
                        <div class="left-cloum" style="font-size: 12px;width: 40%;float: left;">Kampanya Kodu</div>
                        <div class="right-cloum" style="font-size: 12px;"><?=$orders->barcode?></div>
                    </div>
                  </div>
             </div>
   <?php } ?>
         <?php foreach($order as $orders){ ?>
        <div style="  " class="col-xs-4">
              <div class="col-xs-12" style="width:99mm;margin:105px 0;">
                   <div class="col-xs-6 pull-right" style="float:right;margin:0px 0;"> Tel : <?=$orders->phoneNumber?> </div>
                  <div class="col-xs-12"  class="bName"><?=$orders->companyName?><br><?=$orders->billingAddress?> </div>
                   <div class="col-xs-6" style=" margin:0px 0;">VD:  <?=$orders->taxOffice?> </div>
                   <div class="col-xs-6 pull-right" style="float:right;margin:0px 0;"> VN : <?=$orders->taxNumber?> </div>
                </div>          
                <div style="margin-top: -60px; margin-bottom: 20px; height:270px;" class="col-xs-12">
                    <?php $product = $this->db->where("OrderId",$id)->get("FaturaUrun")->result();   foreach($product as $products) {?>
                        <div style="float: left;" class="product">
                            <div style="float:left;    font-size: 12px;padding:0;" class="product_name col-xs-2"><?=$products->merchantSku?></div>
                            <div style="float:left;font-size: 12px;padding:0;" class="product_name col-xs-7"><?=$products->ProductsName?></div>
                            <div style="float:left;font-size: 12px;padding:0;" class="product_quantity col-xs-1"><?=$products->ProductQuantity?></div>
                            <div style="float:left;font-size: 12px;padding:0;" class="product_price col-xs-1"><?=$products->ProductPrice?></div>
                            <div style="float:left;font-size: 12px;padding:0;" class="product_Amountprice col-xs-1"><?=$products->TotalPrice?></div>
                        </div>
                    <?php } ?>
 
                 </div>
                 <div class="col-xs-8" style="float: right">
                            <div  class="col-xs-12" style="   font-size: 12px;margin-top:10px;margin-left:100px;" class="text"><?php $a = $this->db->select_sum('ProductPrice')->from('FaturaUrun')->where("OrderId",$id)->get()->row()->ProductPrice; $b = $this->db->select_sum('vat')->from('FaturaUrun')->where("OrderId",$id)->get()->row()->vat; echo $a - $b;?></div>
                              <div class="col-xs-12" style="   font-size: 12px;margin-top:20px;margin-left:100px;"  class="text"><?=$this->db->select_sum('vat')->from('FaturaUrun')->where("OrderId",$id)->get()->row()->vat;?></div>
                              <div class="col-xs-12"  style="   font-size: 12px;margin-top:10px;margin-left:100px;"  class="text"><?=$this->db->select_sum('TotalPrice')->from('FaturaUrun')->where("OrderId",$id)->get()->row()->TotalPrice;?></div>
                  </div>

                <div style="margin-top:80px;text-align:center;" class="col-xs-12">
                    <div class="matrah">
                        <div class="left-cloum" style="font-size: 12px;width: 40%;float: left;">Platform</div>
                        <div class="right-cloum" style="font-size: 12px;"><?=$orders->platform?></div>
                    </div>
                    <div class="matrah">
                        <div class="left-cloum" style="font-size: 12px;width: 40%;float: left;">Kampanya Kodu</div>
                        <div class="right-cloum" style="font-size: 12px;"><?=$orders->barcode?></div>
                    </div>
                  </div>
             </div>
   <?php } ?>
       
      <?php foreach($order as $orders){ ?>
        <div style=" width: 31.44%;  " class="col-xs-4">
              <div class="col-xs-12" style="width:99mm;margin:105px 0;">
                   <div class="col-xs-6 pull-right" style="float:right;margin:0px 0;"> Tel : <?=$orders->phoneNumber?> </div>
                  <div class="col-xs-12"  class="bName"><?=$orders->companyName?><br><?=$orders->billingAddress?> </div>
                   <div class="col-xs-6" style=" margin:0px 0;">VD:  <?=$orders->taxOffice?> </div>
                   <div class="col-xs-6 pull-right" style="float:right;margin:0px 0;"> VN : <?=$orders->taxNumber?> </div>
                </div>           
                <div style="margin-top: -60px; margin-bottom: 20px; height:270px;" class="col-xs-12">
                    <?php $product = $this->db->where("OrderId",$id)->get("FaturaUrun")->result();   foreach($product as $products) {?>
                        <div style="float: left;" class="product">
                            <div style="float:left;    font-size: 12px;padding:0;" class="product_name col-xs-2"><?=$products->merchantSku?></div>
                            <div style="float:left;font-size: 12px;padding:0;" class="product_name col-xs-7"><?=$products->ProductsName?></div>
                            <div style="float:left;font-size: 12px;padding:0;" class="product_quantity col-xs-1"><?=$products->ProductQuantity?></div>
                            <div style="float:left;font-size: 12px;padding:0;" class="product_price col-xs-1"><?=$products->ProductPrice?></div>
                            <div style="float:left;font-size: 12px;padding:0;" class="product_Amountprice col-xs-1"><?=$products->TotalPrice?></div>
                        </div>
                    <?php } ?>
 
                 </div>
                 <div class="col-xs-8" style="float: right">
                            <div  class="col-xs-12" style="   font-size: 12px;margin-top:00px;margin-left:100px;" class="text"><?php $a = $this->db->select_sum('ProductPrice')->from('FaturaUrun')->where("OrderId",$id)->get()->row()->ProductPrice; $b = $this->db->select_sum('vat')->from('FaturaUrun')->where("OrderId",$id)->get()->row()->vat; echo $a - $b;?></div>
                              <div class="col-xs-12" style="   font-size: 12px;margin-top:10px;margin-left:100px;"  class="text"><?=$this->db->select_sum('vat')->from('FaturaUrun')->where("OrderId",$id)->get()->row()->vat;?></div>
                              <div class="col-xs-12"  style="   font-size: 12px;margin-top:20px;margin-left:100px;"  class="text"><?=$this->db->select_sum('TotalPrice')->from('FaturaUrun')->where("OrderId",$id)->get()->row()->TotalPrice;?></div>

                   <?php //echo sayisal($this->db->select_sum('TotalPrice')->from('FaturaUrun')->where("OrderId",$id)->get()->row()->TotalPrice, 2, "TL", "Kr", "#", null, null, null);?>

          </div>

                <div style="margin-top:80px;text-align:center;" class="col-xs-12">
                    <div class="matrah">
                        <div class="left-cloum" style="font-size: 12px;width: 40%;float: left;">Platform</div>
                        <div class="right-cloum" style="font-size: 12px;"><?=$orders->platform?></div>
                    </div>
                    <div class="matrah">
                        <div class="left-cloum" style="font-size: 12px;width: 40%;float: left;">Kampanya Kodu</div>
                        <div class="right-cloum" style="font-size: 12px;"><?=$orders->barcode?></div>
                    </div>
                  </div>
             </div>
   <?php } ?>
      
      </div>
    </div>
 

  

</div>


</body>
</html>