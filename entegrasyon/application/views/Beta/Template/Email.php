      <div class="row">
        <div class="col-md-12">
          <div class="panel panel-default">
  <div class="panel-body">
                  <form class="form-inline" method="post" action="https://www.dermela.com/entegrasyon/Beta/Email">
                    <div class="form-group">
                      <label for="email"> Şehir Seç :</label>
                      <input type="text" class="form-control" name="city">
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
                     <th>Eczacı Adı</th>
                     <th>Email</th>
                      <th>Şehir</th>
                     <th>İşlemler</th>
                </tr>
                   <?php foreach($pharma as $val){  ?>
                <tr>
                  <td><?=$val->pharmacist?></td>
                  <td><?=$val->seller_mail?></td>
                  <td><?=$val->seller_city?></td>
                   <td><a class="btn btn-primary" href="https://www.dermela.com/entegrasyon/Beta/Email/emails/<?=$val->id_gln?>" >Mail Gönder</a></td>
                  
                  </tr>
                 <?php } ?>
               </tbody></table>
              </div>
              <!-- /.tab-pane -->
             
            
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
 
