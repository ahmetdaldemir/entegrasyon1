<div class="row" >
	<div class="col-md-12">
			<div class="alert alert-warning">
  <strong>Bilgilendirme !</strong> <?php if($this->session->flashdata('siparis')) {
echo $this->session->flashdata('siparis'); } ?>
 </div>
					<div class="col-md-2 col-sm-12">
							<div class="info-box" style="min-height: initial;">
								<span class="info-box-icon bg-aqua"      style=" font-size: 12px; height: 58px;">GÜNLÜK</span>
								<div class="info-box-content">
 											              <span class="info-box-number" style="    text-align: center;height: 48px;font-size:17px;">
                 <?php setlocale(LC_MONETARY,"tr_TR"); 

                               $hb = $this->db->query("SELECT SUM(FaturaUrun.TotalPrice) as price FROM Fatura 
                                         INNER JOIN FaturaUrun ON Fatura.id = FaturaUrun.OrderId
                               where Fatura.date_add LIKE  '".date("Y-m-d")."%'  ")->result();
										foreach($hb as $val)
										{
											echo money_format("%i", $val->price);
										}
 											 ?> 
									 
              </span>
				
								</div>
								<!-- /.info-box-content -->
							</div>
							<!-- /.info-box -->
						</div>
			<div class="col-md-2 col-sm-12">
							<div class="info-box" style="min-height: initial;">
								<span class="info-box-icon bg-aqua"      style=" font-size: 12px; height: 58px;">Akakçe</span>
								<div class="info-box-content">
 								              <span class="info-box-number" style="    text-align: center;height: 48px;font-size:17px;">
                 <?php setlocale(LC_MONETARY,"tr_TR"); 

                               $hb = $this->db->query("SELECT SUM(FaturaUrun.TotalPrice) as price FROM Fatura 
                                         INNER JOIN FaturaUrun ON Fatura.id = FaturaUrun.OrderId
                               where Fatura.platform = 'Akakçe' AND Fatura.date_add LIKE  '".date("Y-m-d")."%'  ")->result();
										foreach($hb as $val)
										{
											echo money_format("%i", $val->price);
										}
 											 ?> 
									 
              </span>
						
								</div>
								<!-- /.info-box-content -->
							</div>
							<!-- /.info-box -->
						</div>
			<div class="col-md-2 col-sm-12">
							<div class="info-box" style="min-height: initial;">
								<span class="info-box-icon bg-aqua"       style=" font-size: 12px; height: 58px;">Site</span>
								<div class="info-box-content">
 									<span class="info-box-number" style="    text-align: center;height: 48px;font-size:17px;">
	            <?php setlocale(LC_MONETARY,"tr_TR"); 

                               $hb = $this->db->query("SELECT SUM(FaturaUrun.TotalPrice) as price FROM Fatura 
                                         INNER JOIN FaturaUrun ON Fatura.id = FaturaUrun.OrderId
                               where Fatura.platform = 'Site' AND Fatura.date_add LIKE  '".date("Y-m-d")."%'  ")->result();
										foreach($hb as $val)
										{
											echo money_format("%i", $val->price);
										}
 											 ?> 
									 

									</span>

								</div>
								<!-- /.info-box-content -->
							</div>
							<!-- /.info-box -->
						</div>
			<div class="col-md-2 col-sm-12">
							<div class="info-box" style="min-height: initial;">
								<span class="info-box-icon bg-aqua"      style=" font-size: 12px; height: 58px;">GG</span>
								<div class="info-box-content">
 									<span class="info-box-number" style="    text-align: center;height: 48px;font-size:17px;">
	            <?php setlocale(LC_MONETARY,"tr_TR"); 

                               $hb = $this->db->query("SELECT SUM(FaturaUrun.TotalPrice) as price FROM Fatura 
                                         INNER JOIN FaturaUrun ON Fatura.id = FaturaUrun.OrderId
                               where Fatura.platform = 'GG' AND Fatura.date_add LIKE  '".date("Y-m-d")."%'  ")->result();
										foreach($hb as $val)
										{
											echo money_format("%i", $val->price);
										}
 											 ?> 
									 
									 

									</span>
						
								</div>
								<!-- /.info-box-content -->
							</div>
							<!-- /.info-box -->
						</div>
			<div class="col-md-2 col-sm-12">
							<div class="info-box" style="min-height: initial;">
								<span class="info-box-icon bg-aqua"    style=" font-size: 12px; height: 58px;">HB</span>
								<div class="info-box-content">
 									<span class="info-box-number" style="    text-align: center;height: 48px;font-size:17px;">
	           <?php setlocale(LC_MONETARY,"tr_TR"); 

                               $hb = $this->db->query("SELECT SUM(FaturaUrun.TotalPrice) as price FROM Fatura 
                                         INNER JOIN FaturaUrun ON Fatura.id = FaturaUrun.OrderId
                               where Fatura.platform = 'Hepsi Burada' AND Fatura.date_add LIKE '".date("Y-m-d")."%' ")->result();
										foreach($hb as $val)
										{
											echo money_format("%i", $val->price);
										}
 											 ?> 
									 
									 

									</span>
						
								</div>
								<!-- /.info-box-content -->
							</div>
							<!-- /.info-box -->
						</div>
				<div class="col-md-2 col-sm-12">
							<div class="info-box" style="min-height: initial;">
								<span class="info-box-icon bg-aqua"      style=" font-size: 12px; height: 58px;">N11</span>
								<div class="info-box-content">
 									<span class="info-box-number" style="    text-align: center;height: 48px;font-size:17px;">
	           <?php setlocale(LC_MONETARY,"tr_TR"); 

                               $hb = $this->db->query("SELECT SUM(FaturaUrun.TotalPrice) as price FROM Fatura 
                                         INNER JOIN FaturaUrun ON Fatura.id = FaturaUrun.OrderId
                               where Fatura.platform = 'N11' AND Fatura.date_add LIKE '".date("Y-m-d")."%' ")->result();
										foreach($hb as $val)
										{
											echo money_format("%i", $val->price);
										}
 											 ?> 
									 
									 

									</span>
								</div>
								<!-- /.info-box-content -->
							</div>
							<!-- /.info-box -->
						</div>
	</div>
	
	
	
	
		<div class="col-md-12 col-sm-12">
		    <div class="col-md-2">
							<div class="info-box" style="min-height: initial;">
								<span class="info-box-icon bg-red"      style=" font-size: 12px; height: 58px;">Yıllık</span>
								<div class="info-box-content">
 									<span class="info-box-number" style="    text-align: center; height: 48px;   font-size: 17px;">
	       <?php setlocale(LC_MONETARY,"tr_TR"); 

                               $hb = $this->db->query("SELECT SUM(FaturaUrun.TotalPrice) as price FROM Fatura 
                                         INNER JOIN FaturaUrun ON Fatura.id = FaturaUrun.OrderId
                               where    Fatura.date_add  BETWEEN '".date("2019-1")."-1' AND '".date("2019-12")."-31'")->result();
										foreach($hb as $val)
										{
											echo money_format("%i", $val->price);
										}
 											 ?> 
									</span>
				
								</div>
								<!-- /.info-box-content -->
							</div>
							<!-- /.info-box -->
						</div>
					<div class="col-md-2">
							<div class="info-box" style="min-height: initial;">
								<span class="info-box-icon bg-red"      style=" font-size: 12px; height: 58px;">Aylık</span>
								<div class="info-box-content">
 									<span class="info-box-number" style="    text-align: center; height: 48px;   font-size: 17px;">
	       <?php setlocale(LC_MONETARY,"tr_TR"); 

                               $hb = $this->db->query("SELECT SUM(FaturaUrun.TotalPrice) as price FROM Fatura 
                                         INNER JOIN FaturaUrun ON Fatura.id = FaturaUrun.OrderId
                               where    Fatura.date_add  BETWEEN '".date("Y-m")."-1' AND '".date("Y-m")."-31'")->result();
										foreach($hb as $val)
										{
											echo money_format("%i", $val->price);
										}
 											 ?> 
									</span>
				
								</div>
								<!-- /.info-box-content -->
							</div>
							<!-- /.info-box -->
						</div>
			<div class="col-md-2 col-sm-12">
							<div class="info-box" style="min-height: initial;">
								<span class="info-box-icon bg-red"      style=" font-size: 12px; height: 58px;">Akakçe</span>
								<div class="info-box-content">
 								              <span class="info-box-number" style="    text-align: center;height: 48px;font-size:17px;">
                       <?php setlocale(LC_MONETARY,"tr_TR"); 

                               $hb = $this->db->query("SELECT SUM(FaturaUrun.TotalPrice) as price FROM Fatura 
                                         INNER JOIN FaturaUrun ON Fatura.id = FaturaUrun.OrderId
                               where  Fatura.platform='Akakçe' AND Fatura.date_add  BETWEEN '".date("Y-m")."-1' AND '".date("Y-m")."-31'")->result();
										foreach($hb as $val)
										{
											echo money_format("%i", $val->price);
										}
 											 ?>  
									 
              </span>
						
								</div>
								<!-- /.info-box-content -->
							</div>
							<!-- /.info-box -->
						</div>
			<div class="col-md-2 col-sm-12">
							<div class="info-box" style="min-height: initial;">
								<span class="info-box-icon bg-red"       style=" font-size: 12px; height: 58px;">Site</span>
								<div class="info-box-content">
 									<span class="info-box-number" style="    text-align: center;height: 48px;font-size:17px;">
	                  <?php setlocale(LC_MONETARY,"tr_TR"); 

                               $hb = $this->db->query("SELECT SUM(FaturaUrun.TotalPrice) as price FROM Fatura 
                                         INNER JOIN FaturaUrun ON Fatura.id = FaturaUrun.OrderId
                               where  Fatura.platform='Site' AND Fatura.date_add BETWEEN '".date("Y-m")."-1' AND '".date("Y-m")."-31'")->result();
										foreach($hb as $val)
										{
											echo money_format("%i", $val->price);
										}
 											 ?> 
									 

									</span>

								</div>
								<!-- /.info-box-content -->
							</div>
							<!-- /.info-box -->
						</div>
			<div class="col-md-2 col-sm-12">
							<div class="info-box" style="min-height: initial;">
								<span class="info-box-icon bg-red"      style=" font-size: 12px; height: 58px;">GG</span>
								<div class="info-box-content">
 									<span class="info-box-number" style="    text-align: center;height: 48px;font-size:17px;">
	                 <?php setlocale(LC_MONETARY,"tr_TR"); 

                               $hb = $this->db->query("SELECT SUM(FaturaUrun.TotalPrice) as price FROM Fatura 
                                         INNER JOIN FaturaUrun ON Fatura.id = FaturaUrun.OrderId
                               where  Fatura.platform='GG' AND  Fatura.date_add BETWEEN '".date("Y-m")."-1' AND '".date("Y-m")."-31'")->result();
										foreach($hb as $val)
										{
											echo money_format("%i", $val->price);
										}
 											 ?> 
									 
									 

									</span>
						
								</div>
								<!-- /.info-box-content -->
							</div>
							<!-- /.info-box -->
						</div>
			<div class="col-md-2 col-sm-12">
							<div class="info-box" style="min-height: initial;">
								<span class="info-box-icon bg-red"    style=" font-size: 12px; height: 58px;">HB</span>
								<div class="info-box-content">
 									<span class="info-box-number" style="    text-align: center;height: 48px;font-size:17px;">
	                 <?php setlocale(LC_MONETARY,"tr_TR"); 

                               $hb = $this->db->query("SELECT SUM(FaturaUrun.TotalPrice) as price FROM Fatura 
                                         INNER JOIN FaturaUrun ON Fatura.id = FaturaUrun.OrderId
                               where  Fatura.platform='Hepsi Burada' AND  Fatura.date_add BETWEEN '".date("Y-m")."-1' AND '".date("Y-m")."-31'")->result();
										foreach($hb as $val)
										{
											echo money_format("%i", $val->price);
										}
 											 ?> 
									 
									 

									</span>
						
								</div>
								<!-- /.info-box-content -->
							</div>
							<!-- /.info-box -->
						</div>
				<div class="col-md-2 col-sm-12">
							<div class="info-box" style="min-height: initial;">
								<span class="info-box-icon bg-red"      style=" font-size: 12px; height: 58px;">N11</span>
								<div class="info-box-content">
 									<span class="info-box-number" style="    text-align: center;height: 48px;font-size:17px;">
	           <?php setlocale(LC_MONETARY,"tr_TR"); 

                               $hb = $this->db->query("SELECT SUM(FaturaUrun.TotalPrice) as price FROM Fatura 
                                         INNER JOIN FaturaUrun ON Fatura.id = FaturaUrun.OrderId
                               where Fatura.platform='N11' AND Fatura.date_add BETWEEN '".date("Y-m")."-1' AND '".date("Y-m")."-31'")->result();
										foreach($hb as $val)
										{
											echo money_format("%i", $val->price);
										}
 											 ?> 
									 
									 

									</span>
								</div>
								<!-- /.info-box-content -->
							</div>
							<!-- /.info-box -->
						</div>
	</div>
	
 
  <div class="col-md-3">
    <div class="box box-success">
            <div class="box-header with-border">
              <h3 class="box-title">Görev Yöneticisi</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
              <!-- /.box-tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body">
            <div class="col-md-12"><a style="border-radius: 0;width: 100%;" target="_blank" href="<?=base_url()?>/Beta/Backup/database" class="btn btn-danger">Yedek Al</a></div>
              <div class="col-md-12"><a style="border-radius: 0;width: 100%;" target="_blank" href="<?=base_url()?>/Beta/Product/Xml/update_discount_cron" class="btn btn-success">İndirim Ayarla</a></div>
              <div class="col-md-12"><a  style="border-radius: 0;width: 100%;" target="_blank" href="<?=base_url()?>/Beta/Product/Xml/update_price_cron" class="btn btn-warning">Fiyat Ayarla</a></div>
              <div class="col-md-12"><a  style="border-radius: 0;width: 100%;" target="_blank" href="<?=base_url()?>/Beta/Entegrasyon/HepsiBurada/order" class="btn btn-warning">HB Sipariş Çek</a></div>
              
            </div>
            <!-- /.box-body -->
          </div>
  </div>
    <div class="col-md-3">
    <div class="box box-success">
            <div class="box-header with-border">
              <h3 class="box-title">Entegrasyonlar</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
              <!-- /.box-tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body">
            <div class="col-md-12"><a style="border-radius: 0;width: 100%;"   href="<?=base_url()?>/Beta/Entegrasyon/Akakce/order" class="btn btn-danger">Akakçe</a></div>
              <div class="col-md-12"><a style="border-radius: 0;width: 100%;"   href="<?=base_url()?>/Beta/Entegrasyon/HepsiBurada" class="btn btn-success">Hepsi Burada</a></div>
              <div class="col-md-12"><a  style="border-radius: 0;width: 100%;"  href="<?=base_url()?>/Beta/Entegrasyon/n11" class="btn btn-warning">N11</a></div>
 
                            <div class="col-md-12"><a  style="border-radius: 0;width: 100%;"   href="<?=base_url()?>/Beta/Entegrasyon/Site/order" class="btn btn-warning">Site</a></div>

            </div>
            <!-- /.box-body -->
          </div>
  </div>
      </div>
 
 