  <div class="row">
        <div class="col-md-12">
          <!-- Custom Tabs -->
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#tab_1" data-toggle="tab">Yeni Siparişler</a></li>
              <li><a href="#tab_2" data-toggle="tab">Kargoda Olan Siparişler</a></li>
              <li><a href="#tab_3" data-toggle="tab">İade - İptal Siparişler</a></li>
              </ul>
              <span style="    float: right;margin: -40px 45px;"><button class="btn btn-success">Hepsini Yazdır</button></span>
            <div class="tab-content">
              <div class="tab-pane active" id="tab_1">
               <div class="box">
            <div class="box-header">
              <h3 class="box-title">Siparişler</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body no-padding" id="siparisler">
              <table class="table table-striped">
                <tbody>
                  <tr>
                  <th>Paket İd</th>
                  <th>Müşteri Adı</th>
                    <th>Platform</th>
                     <th>Oluşturulma Tarihi</th>
                   <th>Ürünler</th>
                     <th>Tedarik</th>
                     <th>Fatura</th>
                </tr>
               
                  <?php foreach($order as $val){  ?>
                <tr>
                  <td><?=$val->id?></td>
                  <td><?=$val->recipientName?></td>
                  <td><?=$val->platform?></td>
                  <td><?=$val->orderDate?></td>
                  <td><button class="btn btn-primary" data-id="<?=$val->id?>" id="entegrasyonurunler">Ürünler</button></td>
                  <td><a class="btn btn-warning" href="<?=base_url()?>Beta/Entegrasyon/HepsiBurada/Hazir/<?=$val->id?>"><?php if($val->tedarik=="1"){ echo"Tedarik";}else{echo"Hazır";} ?></a></td>
                  <?php if($val->tedarik != 1){ ?>
                  <td <?php if($val->status == "1"){echo"style='background:#f00;color:#fff'";} ?>> <a class="btn btn-danger" target="_blank" style="    color: #fff;" href="<?=base_url()?>Beta/Inovice/index/<?=$val->id?>" >Fatura Kes</a></td>
                  <?php } ?>
                  </tr>
                 <?php } ?>
                
                
              </tbody></table>
            </div>
            <!-- /.box-body -->
          </div>
              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="tab_2">
               <div class="box-body no-padding">
              <table class="table table-striped">
                <tbody>
                  <tr>
                  <th>Paket İd</th>
                  <th>Müşteri Adı</th>
                    <th>Platform</th>
                    <th>Sipariş Formu</th>
                     <th>Oluşturulma Tarihi</th>
                   <th>İşlemler</th>
                </tr>
               
                  <?php foreach($Lastorder as $val){  ?>
                <tr>
                  <td><?=$val->id?></td>
                  <td><?=$val->recipientName?></td>
                  <td><?=$val->platform?></td>
                  <td><?=$val->date_add?></td>
                   <td><span class="badge bg-blue">Sipariş </span></td>
                   <td <?php if($val->status == "1"){echo"style='background:#f00;color:#fff'";} ?>><span class="badge bg-red"><a target="_blank" style="    color: #fff;" href="<?=base_url()?>Beta/Inovice/index/<?=$val->id?>" >Fatura Kes</a></span></td>
                </tr>
                 <?php } ?>
                
                
              </tbody></table>
            </div>
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
 
        <!-- /.col -->
      </div>
      <!-- /.row -->

<div class="modal fade" id="urunler" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Ürün Listesi</h4>
      </div>
      <div class="modal-body" id="uruntable">
       
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Kapat</button>
       </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
