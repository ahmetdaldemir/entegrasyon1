      <div class="row">
        <div class="col-md-12">
          			<div class="alert alert-warning">
  <strong>Bilgilendirme !</strong> <?php echo count($order); ?> Adet Sipariş Bulunmaktadır
 </div>
          <div class="panel panel-default">
  <div class="panel-body">
                  <form class="form-inline" method="post" action="http://dermela.com/entegrasyon/Beta/Entegrasyon/Gg/siparisal">
                    <div class="form-group">
                      <label for="email"> GG Sipariş Kodu :</label>
                      <input type="text" class="form-control" name="sipariskodu">
          </div>
                    <button type="submit" class="btn btn-default">Getir</button>
                         
        </form>
 </div> </div>
     
          <!-- Custom Tabs -->
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#tab_1" data-toggle="tab">Yeni Siparişler</a></li>
              <li><a href="#tab_2" data-toggle="tab">Kargoda Olan Siparişler</a></li>
              <li><a href="#tab_3" data-toggle="tab">Tamamlanan Siparişler</a></li>
              </ul>
            <div class="tab-content">
              <div class="tab-pane active" id="tab_1" >
                     <table class="table table-striped" id="akakcesiparisler">
                <tbody>
                  <tr>
                     <th>Paket İd</th>
                     <th>Müşteri Adı</th>
                     <th>Platform</th>
                     <th>Oluşturulma Tarihi</th>
                     <th>Ürünler</th>
                      <th>İşlemler</th>
                     <th>Fatura</th>
                    <th>İşlemler</th>
                </tr>
                   <?php foreach($order as $val){  ?>
                <tr>
                  <td><?=$val->id?></td>
                  <td><?=$val->recipientName?></td>
                  <td><?=$val->platform?></td>
                  <td><?=$val->date_add?></td>
                  <td><button class="btn btn-primary" data-id="<?=$val->id?>" id="akakceentegrasyonurunler">Ürünler</button></td>
                  <?php if($val->tedarik != 1){ ?>
                  <td <?php if($val->status == "1"){echo"style='background:#f00;color:#fff'";} ?>> <a class="btn btn-danger" target="_blank" style="    color: #fff;" href="<?=base_url()?>Beta/Inovice/akakce/<?=$val->id?>/3" >Fatura Kes</a></td>
                  <?php } ?>
                  <td><a class="btn btn-warning" target="_blank" style="    color: #fff;" href="<?=base_url()?>Beta/Entegrasyon/Akakce/sil/<?=$val->id?>" >Utanmadan Sil</a></td>
                  </tr>
                 <?php } ?>
               </tbody></table>
              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="tab_2">
              <table class="table table-striped">
                <tbody>
                  <tr>
                    <th>Paket İd</th>
                    <th>Müşteri Adı</th>
                    <th>Platform</th>
                    <th>Kargo Kodu Gir</th>
                    <th>İşlemler</th>
                    <th>Fatura Kes</th>
                </tr>
               
                  <?php foreach($Lastorder as $val){ if($val->shipping_code == ""){   ?>
                <tr>
                  <td><?=$val->id?></td>
                  <td><?=$val->recipientName?></td>
                  <td><?=$val->platform?></td>
                  <td>
                      <form action="<?=base_url()?>Beta/Entegrasyon/Akakce/kargo" method="post">
                      <input style="width: 80%; float: left;" name="kargono" value="<?=$val->shipping_code?>" type="text" class="form-control" />
                      <input  name="platform" type="hidden" value="<?=$val->platform?>" class="form-control" />
                      <input  name="id" type="hidden" value="<?=$val->orderId?>" class="form-control" />
                      <input value="Gönder" type="submit" class="btn btn-success" />
                      </form>
      </td>
        <?php if($val->tedarik != 1){ ?>
                  <td <?php if($val->status == "1"){echo"style='background:#f00;color:#fff'";} ?>> <a class="btn btn-danger" target="_blank" style="    color: #fff;" href="<?=base_url()?>Beta/Inovice/akakce/<?=$val->id?>/3" >Fatura Kes</a></td>
                  <?php } ?>
                 </tr>
                 <?php } ?>
                <?php } ?>
                
              </tbody></table>
              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="tab_3">
                <table class="table table-striped">
                <tbody>
                  <tr>
                    <th>Paket İd</th>
                    <th>Müşteri Adı</th>
                    <th>Platform</th>
                    <th>Kargo Kodu Gir</th>
                    <th>İşlemler</th>
                    <th>Fatura Kes</th>
                </tr>
               
                  <!-- ?php foreach($Lastorder as $val){ if($val->shipping_code != ""){  ?>
                <tr>
                  <td><!-- ?=$val->id?></td>
                  <td><!-- ?=$val->recipientName?></td>
                  <td><!-- ?=$val->platform?></td>
                  <td>
                      <form action="<!-- ?=base_url()?>Beta/Entegrasyon/Akakce/kargo" method="post">
                      <input style="width: 80%; float: left;" name="kargono" value="<!-- ?=$val->shipping_code?>" type="text" class="form-control" />
                      <input  name="platform" type="hidden" value="<!-- ?=$val->platform?>" class="form-control" />
                      <input  name="id" type="hidden" value="<!-- ?=$val->orderId?>" class="form-control" />
                      <input value="Gönder" type="submit" class="btn btn-success" />
                      </form>
      </td>
        <!-- ?php if($val->tedarik != 1){ ?>
                  <td <!-- ?php if($val->status == "1"){echo"style='background:#f00;color:#fff'";} ?>> <a class="btn btn-danger" target="_blank" style="    color: #fff;" href="<?=base_url()?>Beta/Inovice/akakce/<?=$val->id?>/3" >Fatura Kes</a></td>
                  <!-- ?php } ?>
                 </tr>
                  <!-- ?php }?>
                 <!-- ?php } ? -->
                
                
              </tbody></table>
              </div>
              <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
          </div>
          <!-- nav-tabs-custom -->
        </div>
        <!-- /.col -->
 
        <!-- /.col -->
      </div>
      <!-- /.row -->
<div class="modal fade" id="akakceurunler" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Ürün Listesi</h4>
      </div>
      <div class="modal-body" id="akakceurunlertable">
       
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Kapat</button>
       </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
