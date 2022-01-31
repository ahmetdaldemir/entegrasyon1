      <div class="row">
        <div class="col-md-12">
          <div class="panel panel-default">
            <div class="panel-body">
              <form class="form-inline" method="post" action="http://dermela.com/entegrasyon/Beta/Module/ProductsFollow/add">
                    <div class="form-group">
                      <label for="email"> Ürün Kodu :</label>
                      <input type="text" class="form-control" name="model">
          </div>
                    <button type="submit" class="btn btn-default">Getir</button>
                         
        </form>
            </div>
  <div class="panel-body">
   <table class="table table-striped" id="">
                <tbody>
                  <tr>
                     <th>Ürün Kodu</th>
                     <th>Ürün Adı</th>
                     <th>Site</th>
                     <th>Kampanya</th>
                     <th>N11</th>
                     <th>HB</th>
                     <th>GG</th>
                     <th>EPTT</th>
                     <th>İşlemler</th>
                </tr>
                   <?php foreach($ProductsFollow as $val){  ?>
                <tr>
                  <td> <?=$val->model?> </td>
                  <td><?=$val->name?> </td>
                  <td> <?=$val->site?></td>
                  <td><?=$val->kampanya?> </td>
                   <td> </td>
                  <td> </td>
                  <td> </td>
                  <td> </td>
                  <td><button class="btn btn-danger"> Sil </button> </td>
                  </tr>
                 <?php } ?>
               </tbody>
    </table>
            </div> </div>
  
        </div>
        <!-- /.col -->
 
        <!-- /.col -->
      </div>
 
