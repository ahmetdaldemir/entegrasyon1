<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Mails {
  
    protected $CI;

            public function __construct()
            {
                      $this->CI =& get_instance();
                      $this->CI->load->database();
            }	

function mail_gonder($id_order,$type)
		{  
            $this->CI->load->library('email');  //email kütüphanesini includ ettik.
			if($this->CI->db->where("order_id",$id_order)->get("oc_order")->row()->comment != NULL)
			{
				$siparismesaji = "Sipariş Mesajı = ".$this->CI->db->where("order_id",$id_order)->get("oc_order")->row()->comment; 
			}else{
				$siparismesaji = "Mesajınız Bulunmuyor";
			}
			
			
			
			
			
			
      $mail .= ' <div id="container" style="width:800px;    margin: 0 auto;" class="cet_container">
									<div style="background: #3696CC; text-align: center; padding: 30px 25px 25px 25px; border-top-left-radius: 5px; border-top-right-radius: 5px;">
										<a href="https://kozmodiva.com" title="Kozmo Diva Kozmetik ve Makyaj Ürünleri"><img src="'.base_url().'assest/logo.png" alt="Kozmo Diva Kozmetik ve Makyaj Ürünleri" class="logo" style="margin-bottom: 0px; border: none;"></a>
									</div>
									<div style="padding: 20px 20px 15px 20px;">
										<p style="margin-top: 0px; margin-bottom: 20px;"><center><b>Sayın '.$this->CI->db->where("order_id",$id_order)->get("oc_order")->row()->firstname.'  '.$this->CI->db->where("order_id",$id_order)->get("oc_order")->row()->lastname.' kozmodiva.com dan sipariş verdiğiniz için Teşekkür Ederiz</b><center></p>
										<p style="margin-top: 0px; margin-bottom: 20px;">Siparişiniz ile ilgili diğer işlemler için Aşağıdaki linkten sitemize ulaşabilirsiniz:</p>
										<p style="margin-top: 0px; margin-bottom: 20px;"><a href="'.base_url().'">KOZMODİVA</a></p>
										<table style="border-collapse: collapse; width: 100%; border-top: 1px solid #DDDDDD; border-left: 1px solid #DDDDDD; margin-bottom: 20px;">
											<thead>
												<tr>
													<td style="font-size: 12px; border-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; background-color: #EFEFEF; font-weight: bold; text-align: left; padding: 7px; color: #222222;" colspan="2">Sipariş Detayları</td>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td style="font-size: 12px;	border-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; text-align: left; padding: 7px;"><b>Sipariş No:</b> '.$this->CI->db->where("order_id",$id_order)->get("oc_order")->row()->reference.'<br>
														<b>Sipariş Tarihi : '.$this->CI->db->where("order_id",$id_order)->get("oc_order")->row()->date_added.'</b> <br>
														<b>Ödeme Tipi:</b> '.$this->CI->db->where("order_id",$id_order)->get("oc_order")->row()->payment_method.'<br>
 												  	<td style="font-size: 12px; border-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; text-align: left; padding: 7px;"><b>Email:</b> '.$this->CI->db->where("order_id",$id_order)->get("oc_order")->row()->email.'<br>
														<b>Telefon:</b> '.$this->CI->db->where("order_id",$id_order)->get("oc_order")->row()->telephone.'<br>
														<b>IP:</b> '.$this->CI->db->where("order_id",$id_order)->get("oc_order")->row()->ip.'<br>
														<b>Sipariş Durumu:</b> '.$this->CI->db->where("order_id",$id_order)->get("oc_order")->row()->date_added.'</td>
												</tr>
											</tbody>
										</table>
										 
										 '.$siparismesaji.'
										<table style="border-collapse: collapse; width: 100%; border-top: 1px solid #DDDDDD; border-left: 1px solid #DDDDDD; margin-bottom: 20px;">
											<thead>
												<tr>
													<td style="font-size: 12px; border-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; background-color: #EFEFEF; font-weight: bold; text-align: left; padding: 7px; color: #222222;">Fatura Adresi</td>
													<td style="font-size: 12px; border-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; background-color: #EFEFEF; font-weight: bold; text-align: left; padding: 7px; color: #222222;">Kargo Adresi</td>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td style="font-size: 12px; border-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; text-align: left; padding: 7px;">'.$this->CI->db->where("order_id",$id_order)->get("oc_order")->row()->payment_address_1.'</td>
													<td style="font-size: 12px; border-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; text-align: left; padding: 7px;">'.$this->CI->db->where("order_id",$id_order)->get("oc_order")->row()->shipping_address_1.'</td>
												</tr>
											</tbody>
										</table>
										<table style="border-collapse: collapse; width: 100%; border-top: 1px solid #DDDDDD; border-left: 1px solid #DDDDDD; margin-bottom: 20px;">
													<thead>
														<tr>
															<td style="font-size: 12px; border-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; background-color: #EFEFEF; font-weight: bold; text-align: left; padding: 7px; color: #222222;" class="qc-image ">Resim:</td>
															<td style="font-size: 12px; border-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; background-color: #EFEFEF; font-weight: bold; text-align: left; padding: 7px; color: #222222;" class="qc-name ">Ürün Adı</td>
															<td style="font-size: 12px; border-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; background-color: #EFEFEF; font-weight: bold; text-align: left; padding: 7px; color: #222222;" class="qc-quantity ">Adet</td>
															<td style="font-size: 12px; border-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; background-color: #EFEFEF; font-weight: bold; text-align: left; padding: 7px; color: #222222;" class="qc-price hidden-xs ">Birim Fiyat</td>
															<td style="font-size: 12px; border-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; background-color: #EFEFEF; font-weight: bold; text-align: left; padding: 7px; color: #222222;"  class="qc-total ">Toplam Fiyat</td>
														</tr>
													</thead>';
											  
			$get = $this->CI->db->where("order_id",$id_order)->get("oc_order_product")->result();
			 $mail .='<tbody>';
			foreach($get as $val)
			{  
				 $mail .= '<tr>
								
									<td style="font-size: 12px; border-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; background-color: #EFEFEF; font-weight: bold; text-align: left; padding: 7px; color: #222222;" class="qc-name "   style="    font-size: 10px;">
											'.$val->name.' 
									</td>
 									<td style="font-size: 12px; border-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; background-color: #EFEFEF; font-weight: bold; text-align: left; padding: 7px; color: #222222;"  class="qc-quantity ">
										'.$val->quantity.' 
									</td>
									<td  style="font-size: 12px; border-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; background-color: #EFEFEF; font-weight: bold; text-align: left; padding: 7px; color: #222222;" class="qc-price hidden-xs ">'.$val->price.'</td>
									<td style="font-size: 12px; border-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; background-color: #EFEFEF; font-weight: bold; text-align: left; padding: 7px; color: #222222;" class="qc-total ">'.$val->price*$val->quantity.'</td>
							</tr> ';
			}
 
				 $mail .='</tbody>
							 <tfoot>  <tr>
									 <td></td>
									 <td></td>
 									 <td></td>
														<td   class="text-right"><strong>Toplam:</strong></td>
														<td class="text-right">'.$this->CI->db->where("order_id",$id_order)->get("oc_order")->row()->total.' TL</td>
								  </tr> 
								 </tfoot>';
			
			
											$mail .='</table>
										<br>
 									</div>
									<div style="background: #303232; color: #ffffff; text-align: center; padding: 30px 25px 25px 25px; border-bottom-left-radius: 5px; border-bottom-right-radius: 5px;">
										2015 Kozmodiva, Tüm hakları kozmodiva.com kuruluş ve yönetim kuruluna aittir.
									</div>
								</div>';
 			  $config = array();
        $config['useragent']           = "CodeIgniter";
        $config['mailpath']            = "/usr/bin/sendmail"; // or "/usr/sbin/sendmail"
        $config['protocol']            = "mail";
        $config['smtp_host']           = "mail.kozmodiva.com";
        $config['smtp_port']           = "587";
        $config['mailtype'] = 'html';
        $config['charset']  = 'utf-8';
        $config['newline']  = "\r\n";
        $config['wordwrap'] = TRUE;

 
            $this->CI->email->initialize($config); //sunucu bilgilerini email kütüphanesine gönderdik
            $this->CI->email->from("noreply@kozmodiva.com","Kozmodiva Güvenli Alışverişin Adresi");//mail gönderen bilgileri
            $this->CI->email->to($this->CI->db->where("order_id",$id_order)->get("oc_order")->row()->email); //formdan gelen mail alıcı bilgileri
            $this->CI->email->subject("Sipariş Dekontu / ID =  ".$this->CI->db->where("order_id",$id_order)->get("oc_order")->row()->reference.""); //Formdan gelen mail konusu
            $this->CI->email->message($mail);
           if($this->CI->email->send())
            {
                 return true;
             }
             }
	
	
	
	function follow_password($id_customer)
		{  
      $this->CI->load->library('email');  //email kütüphanesini includ ettik.
			$kod = rand(1111,999999999999999999);
			$link = ''.base_url().'Login/passwordchange/'.$id_customer.'/'.$kod.'';
      $mail = ' <div id="container" style="width:800px;    margin: 0 auto;" class="cet_container">
									<div style="background: #3696CC; text-align: center; padding: 30px 25px 25px 25px; border-top-left-radius: 5px; border-top-right-radius: 5px;">
										<a href="https://kozmodiva.com" title="Kozmo Diva Kozmetik ve Makyaj Ürünleri"><img src="'.base_url().'assest/logo.png" alt="Kozmo Diva Kozmetik ve Makyaj Ürünleri" class="logo" style="margin-bottom: 0px; border: none;"></a>
									</div>
									<div style="padding: 20px 20px 15px 20px;">
										<p style="margin-top: 0px; margin-bottom: 20px;"><center><b>Sayın '.$this->CI->db->where("id",$id_customer)->get("customer")->row()->firstname.'  '.$this->CI->db->where("id",$id_customer)->get("customer")->row()->lastname.' kozmodiva.com Şifre Değişikliği talebiniz oluşturulmuştur.</b><center></p>
										<p style="margin-top: 0px; margin-bottom: 20px;">Aşağıdaki Linle Tıklayarak şifre değiştirme işlemini gerçekleştirebilirsiniz</p>
										<p style="margin-top: 0px; margin-bottom: 20px;"><a href="'.$link.'">SİFRE DEĞİŞTİR</a></p>
									 <br>
 										<br>
 									</div>
									<div style="background: #303232; color: #ffffff; text-align: center; padding: 30px 25px 25px 25px; border-bottom-left-radius: 5px; border-bottom-right-radius: 5px;">
										2015 Kozmodiva, Tüm hakları kozmodiva.com kuruluş ve yönetim kuruluna aittir.
									</div>
								</div>';
 			  $config = array();
        $config['useragent']           = "CodeIgniter";
        $config['mailpath']            = "/usr/bin/sendmail"; // or "/usr/sbin/sendmail"
        $config['protocol']            = "mail";
        $config['smtp_host']           = "mail.kozmodiva.com";
        $config['smtp_port']           = "587";
        $config['mailtype'] = 'html';
        $config['charset']  = 'utf-8';
        $config['newline']  = "\r\n";
        $config['wordwrap'] = TRUE;
             $this->CI->email->initialize($config); //sunucu bilgilerini email kütüphanesine gönderdik
            $this->CI->email->from("noreply@kozmodiva.com","Kozmodiva Güvenli Alışverişin Adresi");//mail gönderen bilgileri
            $this->CI->email->to($this->CI->db->where("id",$id_customer)->get("customer")->row()->email); //formdan gelen mail alıcı bilgileri
            $this->CI->email->subject("Şifre Değişikliği"); //Formdan gelen mail konusu
            $this->CI->email->message($mail);
        if($this->CI->email->send())
            {
                 return $kod;
             }
        }
	
	function order($id)
		{  
		  $maila =" ";
      $this->CI->load->library('email');  //email kütüphanesini includ ettik.
			 $maila .= ' <div id="container" style="width:800px;    margin: 0 auto;" class="cet_container">
									<div style="background: #3696CC; text-align: center; padding: 30px 25px 25px 25px; border-top-left-radius: 5px; border-top-right-radius: 5px;">
										<a href="https://kozmodiva.com" title="Kozmo Diva Kozmetik ve Makyaj Ürünleri"><img src="'.base_url().'assest/logo.png" alt="Kozmo Diva Kozmetik ve Makyaj Ürünleri" class="logo" style="margin-bottom: 0px; border: none;"></a>
									</div>
                                    
                                    <div style="padding: 20px 20px 15px 20px;">
										<p style="margin-top: 0px; margin-bottom: 20px;"><center><b>Sipariş Veren '.$this->CI->db->where("order_id",$id)->get("oc_order")->row()->shipping_firstname.'  '.$this->CI->db->where("order_id",$id)->get("oc_order")->row()->shipping_lastname.'  </b><center></p>
										<p style="margin-top: 0px; margin-bottom: 20px;">Ödeme Türü :'.$this->CI->db->where("order_id",$id)->get("oc_order")->row()->payment_method.' </p>
										<p style="margin-top: 0px; margin-bottom: 20px;">Tutar '.$this->CI->db->where("order_id",$id)->get("oc_order")->row()->total.' </a></p>
									 <br>
 										<br>
 									</div>
                                
										<table style="border-collapse: collapse; width: 100%; border-top: 1px solid #DDDDDD; border-left: 1px solid #DDDDDD; margin-bottom: 20px;">
													<thead>
														<tr>
															<td style="font-size: 12px; border-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; background-color: #EFEFEF; font-weight: bold; text-align: left; padding: 7px; color: #222222;" class="qc-image ">Resim:</td>
															<td style="font-size: 12px; border-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; background-color: #EFEFEF; font-weight: bold; text-align: left; padding: 7px; color: #222222;" class="qc-name ">Ürün Adı</td>
															<td style="font-size: 12px; border-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; background-color: #EFEFEF; font-weight: bold; text-align: left; padding: 7px; color: #222222;" class="qc-quantity ">Adet</td>
															<td style="font-size: 12px; border-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; background-color: #EFEFEF; font-weight: bold; text-align: left; padding: 7px; color: #222222;" class="qc-price hidden-xs ">Birim Fiyat</td>
															<td style="font-size: 12px; border-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; background-color: #EFEFEF; font-weight: bold; text-align: left; padding: 7px; color: #222222;"  class="qc-total ">Toplam Fiyat</td>
														</tr>
													</thead>';
							 			  
			$geta = $this->CI->db->where("order_id",$id)->get("oc_order_product")->result();
			 $maila .='<tbody>';
			foreach($geta as $val)    
			{ 
			    
			    
				 $maila .= '<tr>
								 
									<td style="font-size: 12px; border-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; background-color: #EFEFEF; font-weight: bold; text-align: left; padding: 7px; color: #222222;" class="qc-name "   style="    font-size: 10px;">
											'.$val->name.' 
									</td>
 									<td style="font-size: 12px; border-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; background-color: #EFEFEF; font-weight: bold; text-align: left; padding: 7px; color: #222222;"  class="qc-quantity ">
										'.$val->quantity.' 
									</td>
									<td  style="font-size: 12px; border-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; background-color: #EFEFEF; font-weight: bold; text-align: left; padding: 7px; color: #222222;" class="qc-price hidden-xs ">'.$val->price.'</td>
									<td style="font-size: 12px; border-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; background-color: #EFEFEF; font-weight: bold; text-align: left; padding: 7px; color: #222222;" class="qc-total ">'.$val->price*$val->quantity.'</td>
							</tr> ';
       
			}
 
				 $maila .='</tbody>
							 <tfoot>  <tr>
									 <td></td>
									 <td></td>
 									 <td></td>
														<td   class="text-right"><strong>Toplam:</strong></td>
														<td class="text-right">'.$this->CI->db->where("order_id",$id)->get("oc_order")->row()->total.' TL</td>
								  </tr> 
								 </tfoot>';
			
			
											$maila .='</table>
										<br>
 									</div>
									<div style="background: #303232; color: #ffffff; text-align: center; padding: 30px 25px 25px 25px; border-bottom-left-radius: 5px; border-bottom-right-radius: 5px;">
										2015 Kozmodiva, Tüm hakları kozmodiva.com kuruluş ve yönetim kuruluna aittir.
									</div>
								</div>';
							$config = array();
							$config['useragent']           = "CodeIgniter";
							$config['mailpath']            = "/usr/bin/sendmail"; // or "/usr/sbin/sendmail"
							$config['protocol']            = "mail";
							$config['smtp_host']           = "mail.kozmodiva.com";
							$config['smtp_port']           = "587";
							$config['mailtype'] = 'html';
							$config['charset']  = 'utf-8';
							$config['newline']  = "\r\n";
							$config['wordwrap'] = TRUE;
             $this->CI->email->initialize($config); //sunucu bilgilerini email kütüphanesine gönderdik
             $this->CI->email->from("noreply@kozmodiva.com","Kozmodiva Güvenli Alışverişin Adresi");//mail gönderen bilgileri
             $this->CI->email->to("kozmodiva@gmail.com"); //formdan gelen mail alıcı bilgileri
             $this->CI->email->subject("Yeni Sipariş Geldi"); //Formdan gelen mail konusu
             $this->CI->email->message($maila);
             $this->CI->email->send();
            
        }
	
	
    
    
    
    	
	function orderchange($id,$status)
		{  
      $this->CI->load->library('email');  //email kütüphanesini includ ettik.
			$kod = rand(1111,999999999999999999);
			 
      $mail = ' <div id="container" style="width:800px;    margin: 0 auto;" class="cet_container">
									<div style="background: #3696CC; text-align: center; padding: 30px 25px 25px 25px; border-top-left-radius: 5px; border-top-right-radius: 5px;">
										<a href="https://kozmodiva.com" title="Kozmo Diva Kozmetik ve Makyaj Ürünleri"><img src="'.base_url().'assest/logo.png" alt="Kozmo Diva Kozmetik ve Makyaj Ürünleri" class="logo" style="margin-bottom: 0px; border: none;"></a>
									</div>
									<div style="padding: 20px 20px 15px 20px;">
										<p style="margin-top: 0px; margin-bottom: 20px;"><center><b>Sayın '.$this->CI->db->where("order_id",$id)->get("oc_order")->row()->shipping_firstname.'  '.$this->CI->db->where("order_id",$id)->get("oc_order")->row()->shipping_lastname.' kozmodiva.com olarak sipariş verdiğiniz için teşekkür ederiz.</b><center></p>
										<p style="margin-top: 0px; margin-bottom: 20px;">Sipariş Durumunuz Güncellenmiştir.</p>
										<p style="margin-top: 0px; margin-bottom: 20px;">Sipariş Durumunuz '.$this->CI->db->where("order_status_id",$status)->get("oc_order_status")->row()->name.' olarak değiştirilmiştir.</a></p>
									 <br>
 										<br>
 									</div>
									<div style="background: #303232; color: #ffffff; text-align: center; padding: 30px 25px 25px 25px; border-bottom-left-radius: 5px; border-bottom-right-radius: 5px;">
										2015 Kozmodiva, Tüm hakları kozmodiva.com kuruluş ve yönetim kuruluna aittir.
									</div>
								</div>';
 			  $config = array();
        $config['useragent']           = "CodeIgniter";
        $config['mailpath']            = "/usr/bin/sendmail"; // or "/usr/sbin/sendmail"
        $config['protocol']            = "mail";
        $config['smtp_host']           = "mail.kozmodiva.com";
        $config['smtp_port']           = "587";
        $config['mailtype'] = 'html';
        $config['charset']  = 'utf-8';
        $config['newline']  = "\r\n";
        $config['wordwrap'] = TRUE;
             $this->CI->email->initialize($config); //sunucu bilgilerini email kütüphanesine gönderdik
            $this->CI->email->from("noreply@kozmodiva.com","Kozmodiva Güvenli Alışverişin Adresi");//mail gönderen bilgileri
            $this->CI->email->to($this->CI->db->where("order_id",$id)->get("oc_order")->row()->email); //formdan gelen mail alıcı bilgileri
            $this->CI->email->subject("Sipariş Durumu"); //Formdan gelen mail konusu
            $this->CI->email->message($mail);
        if($this->CI->email->send())
            {
                 return $kod;
             }
        }
	
    
    
    
    	function kargomail($id,$kod)
		{  
      $this->CI->load->library('email');  //email kütüphanesini includ ettik.
	 
      $mail = ' <div id="container" style="width:800px;    margin: 0 auto;" class="cet_container">
									<div style="background: #3696CC; text-align: center; padding: 30px 25px 25px 25px; border-top-left-radius: 5px; border-top-right-radius: 5px;">
										<a href="https://kozmodiva.com" title="Kozmo Diva Kozmetik ve Makyaj Ürünleri"><img src="'.base_url().'assest/logo.png" alt="Kozmo Diva Kozmetik ve Makyaj Ürünleri" class="logo" style="margin-bottom: 0px; border: none;"></a>
									</div>
									<div style="padding: 20px 20px 15px 20px;">
										<p style="margin-top: 0px; margin-bottom: 20px;"><center><b>Sayın '.$this->CI->db->where("order_id",$id)->get("oc_order")->row()->shipping_firstname.'  '.$this->CI->db->where("order_id",$id)->get("oc_order")->row()->shipping_lastname.' kozmodiva.com olarak sipariş verdiğiniz için teşekkür ederiz.</b><center></p>
										<p style="margin-top: 0px; margin-bottom: 20px;">Siparişiniz Kargoya verilmiştir.Linkten kargonuzu takip edebilirsiniz.</p>
										<p style="margin-top: 0px; margin-bottom: 20px;">Kargo Kodunuz <a href="http://kargotakip.araskargo.com.tr/CargoInfoV3.aspx?code='.$kod.'">'.$kod.' </a>olarak guncellenmiştir.</a></p>
									 <br>
 										<br>
 									</div>
									<div style="background: #303232; color: #ffffff; text-align: center; padding: 30px 25px 25px 25px; border-bottom-left-radius: 5px; border-bottom-right-radius: 5px;">
										2015 Kozmodiva, Tüm hakları kozmodiva.com kuruluş ve yönetim kuruluna aittir.
									</div>
								</div>';
 			  $config = array();
        $config['useragent']           = "CodeIgniter";
        $config['mailpath']            = "/usr/bin/sendmail"; // or "/usr/sbin/sendmail"
        $config['protocol']            = "mail";
        $config['smtp_host']           = "mail.kozmodiva.com";
        $config['smtp_port']           = "587";
        $config['mailtype'] = 'html';
        $config['charset']  = 'utf-8';
        $config['newline']  = "\r\n";
        $config['wordwrap'] = TRUE;
             $this->CI->email->initialize($config); //sunucu bilgilerini email kütüphanesine gönderdik
            $this->CI->email->from("noreply@kozmodiva.com","Kozmodiva Güvenli Alışverişin Adresi");//mail gönderen bilgileri
            $this->CI->email->to($this->CI->db->where("order_id",$id)->get("oc_order")->row()->email); //formdan gelen mail alıcı bilgileri
            $this->CI->email->subject("Sipariş Durumu"); //Formdan gelen mail konusu
            $this->CI->email->message($mail);
        if($this->CI->email->send())
            {
                 return $kod;
             }
        }
	
    
    
    
    
    
    
    
    
    
	
          private function kullanici_bilgileri()
        {
					$data = array();
           $query = $this->CI->db->where("id",$this->CI->session->userdata("uye_giris")["id"])->get("customer")->result(); 
          foreach($query as $val)
					{
						$data["firstname"] = $val->firstname;
						$data["lastname"] = $val->lastname;
						$data["email"] = $val->email;
						$data["mobile"] = $val->mobile;
 					}
					return $data;
        }	
}