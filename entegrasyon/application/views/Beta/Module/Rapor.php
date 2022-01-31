<!-- <div class="row">
  <div class="col-md-12">
    <div class="panel panel-default">
      <div class="panel-body">
        <div class="form-group">
         <button type="submit" class="btn btn-warning">Günlük Rapor</button>
         <button type="submit" class="btn btn-danger">Aylık Rapor</button>
         <button type="submit" class="btn btn-danger">Yıllık Rapor</button>
           <input class="form-control" type="text" placeholder="Default input">
           <input class="form-control" type="text" placeholder="Default input">

        </div>
       </div>
    </div>
   </div>
 </div> -->
        <?php setlocale(LC_MONETARY,"tr_TR"); 

                               $hb = $this->db->query("SELECT SUM(FaturaUrun.TotalPrice) as price FROM Fatura 
                                         INNER JOIN FaturaUrun ON Fatura.id = FaturaUrun.OrderId
                               where    Fatura.date_add BETWEEN '".date("Y-")."".date("m-")."01' AND '".date("Y-")."".date("m-")."31' ")->result();
										foreach($hb as $val)
										{
											echo money_format("%i", $val->price);
										}
 											 ?> 