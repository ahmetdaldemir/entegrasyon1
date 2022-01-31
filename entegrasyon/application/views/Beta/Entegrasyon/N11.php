      <div class="row">
        <div class="col-md-12">
          <!-- Custom Tabs -->
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#tab_1" data-toggle="tab">Yeni Siparişler</a></li>
              <li><a href="#tab_2" data-toggle="tab">Kargoda Olan Siparişler</a></li>
              <li><a href="#tab_3" data-toggle="tab">İade - İptal Siparişler</a></li>
              </ul>
            <div class="tab-content">
              <div class="tab-pane active" id="tab_1">
                <table class="table table-striped"  >
                <tbody>
                  <tr>
                  <th>Sipariş İd</th>
                  <th>Sipariş No</th>
                  <th>Sipariş Tarihi</th>
                    <th>Ürünler</th>
                   <th>İşlemler</th>
                </tr> 
                  <?php $order = $this->db->where("platform","N11")->where("status","0")->get("Fatura")->result(); foreach($order as $val){ ?>
                <tr>
                  <td><a href="<?=base_url()?>Beta/Entegrasyon/N11/index/<?=$val->id?>"><?=$val->orderId?></a></td>
                  <td><?=$val->recipientName?></td>
                  <td><?=$val->orderDate?></td>
                     <td><a href="<?=base_url()?>Beta/Inovice/index/<?=$val->id?>/2" class="btn btn-danger">Fatura Kes</a></td>
                </tr>
                 <?php } ?>
                
                
              </tbody></table>
               </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="tab_2">
               2
              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="tab_3">
               3
              </div>
              <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
          </div>
          <!-- nav-tabs-custom -->
        </div>
        <!-- /.col -->
         <div class="col-md-12">
                  <div class="tab-pane active" id="tab_1">
                <table class="table table-striped" id="n11siparisler">
                <tbody>
                  <tr>
                  <th>Stok Kodu</th>
                  <th>Ürün adı</th>
                  <th>Adet</th>
                    <th>Fatura tutarı</th>
                   <th>İşlemler</th>
                </tr><?php  if(isset($orderlist)){ ?>
                  <?php foreach($orderlist as $val){     ?>
                <tr>
                  <td><?=$val->merchantSku?> </td>
                  <td> <?=$val->ProductsName?></td>
                  <td> <?=$val->ProductQuantity?></td>
                   <td><?=$val->TotalPrice?></td>
                    <td>
                         <?php if($val->onay == "1"){ ?>
                       <a href="#" class="btn btn-warning">onaylandı </a>

                        <?php } else{ ?>
                        <a href="<?=base_url()?>Beta/Entegrasyon/N11/itemAccept/<?=$val->siparismaddesiid?>/<?=$val->OrderId?>/<?=$val->id?> " class="btn btn-success">Onayla </a>
                        <?php } ?>
                    </td>
                    <td><a href="<?=base_url()?>Beta/Entegrasyon/N11/OrderItemReject/<?=$val->id?>" class="btn btn-danger">İptal Et </a></td>
                </tr>
                 <?php } ?>
                <?php }else{ echo"Sipariş Bulunmamaktadır"; } ?>
                
              </tbody></table>
               </div>
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

