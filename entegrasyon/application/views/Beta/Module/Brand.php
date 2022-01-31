      <div class="row">
        <div class="col-md-12">
          <div class="panel panel-default">
  <div class="panel-body">
                     <div class="form-group">
                      <label for="email"> Marka Seç :</label>
                      <select class="form-control" onchange="location = this.value;">
                        <option>Seçiniz</option>
                        <?php foreach($Brand as $val){ ?>
                            <option value="https://www.dermela.com/entegrasyon/Beta/Module/Brand/index/<?=$val->manufacturer_id?>"><?=$val->name?></option>
                         <?php } ?>
                      </select>
          </div>
                    <button type="submit" class="btn btn-default">Getir</button>
                         
  </div>
          </div>
     
          <!-- Custom Tabs -->
          <div class="row">
            <div class="col-md-12">
          <div class="panel panel-default">
    <div class="panel-body">
             <form class="form-horizontal" action="<?=base_url()?>Beta/Module/Brand/brandupdate" method="post">
               <?php foreach($product as $vals){ ?>
              <div class="box-body">
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Marka</label>
                   <div class="col-sm-10">
                    <input type="text" class="form-control" name="brand" id="inputEmail3"  value="<?=$vals->brand?>">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">İskonto</label>
                   <div class="col-sm-10">
                    <input type="text" class="form-control" name="discount" id="inputPassword3" value="<?=$vals->discount?>">
                  </div>
                </div>
         
              </div>
               <?php }?>
              <!-- /.box-body -->
              <div class="box-footer">
                 <button type="submit" class="btn btn-info pull-right">Sign in</button>
              </div>
              <!-- /.box-footer -->
            </form>
          </div>
          <div class="row">
              <div class="col-md-12">
               <table class="table table-striped" id="akakcesiparisler">
                <tbody>
                  <tr>
                     <th>Ürün Adı</th>
                     <th>Adet</th>
                     <th>Fiyat</th>
                     <th>İndirimli Fiyat</th>
                     <th>İndirim</th>
                     <th>İşlemler</th>
                </tr>
                   <?php foreach($products as $product){  ?>
                <tr>
                  <td><?=$product->name?></td>
                  <td><?=$product->quantity?></td>
                  <td><?=$product->price?></td>
                  <td><?=$product->fiyat?></td>
                  <td>%<?php echo round((($product->price*100) - ($product->fiyat*100))/$product->price) ?></td>
                  <td></td>
                  </tr>
                 <?php } ?>
               </tbody></table>
          </div> </div>
          <!-- nav-tabs-custom -->
        </div>
        <!-- /.col -->
 
        <!-- /.col -->
      </div>
      <!-- /.row -->
           </div>
          <!-- nav-tabs-custom -->
        </div>
        <!-- /.col -->
 
        <!-- /.col -->
      </div>
