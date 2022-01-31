<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Cartlib {
  
    protected $CI;

            public function __construct()
            {
                      $this->CI =& get_instance();
                      $this->CI->load->database();
            }
              public function total()
            {
                    $product_total_price = array();
                    $id_session = $this->CI->session->userdata("my_session_id");
                    $id_customer = $this->CI->session->userdata("uye_giris")["id"];
 
                   
		   if($this->CI->session->userdata("uye_giris")) 
				 {
 					 $query = $this->CI->db->where("id_session",$id_session)->or_where("customer_id",$id_customer)->get("Cart")->result();
 				 }else{
 				$query = $this->CI->db->where("id_session",$id_session)->get("Cart")->result();
 				 }
                     foreach($query as $row)
                    {
                      $product_total_price[] = $this->CI->db->where("id_product",$row->id_product)->get("products")->row()->displayPrice*$row->quantity;
                    }
              return array_sum($product_total_price);
            }
        public function total_product()
            {
							 $id_session = $this->CI->session->userdata("my_session_id");
                    $id_customer = $this->CI->session->userdata("uye_giris")["id"];
               $product_total_price = array();
                if($this->CI->session->userdata("uye_giris")) 
				  {
 				  return $query = $this->CI->db->where("id_session",$id_session)->or_where("customer_id",$id_customer)->count_all_results('Cart');
  				 }else{
 					  return $query = $this->CI->db->where("id_session",$id_session)->count_all_results('Cart');
  				 }
            }
 	
	      public function cart_list($kargokodu="")
            {  
 				  setlocale(LC_MONETARY, 'tr_TR');
                    $product_total_price = array();
                    $id_session = $this->CI->session->userdata("my_session_id");
                    $id_customer = $this->CI->session->userdata("uye_giris")["id"];
                    
		           if($this->CI->session->userdata("uye_giris")) 
				 {
 					 $query = $this->CI->db->where("id_session",$id_session)->or_where("customer_id",$id_customer)->get("Cart");
 				 }else{
 				$query = $this->CI->db->where("id_session",$id_session)->get("Cart");
 				 }
              if($query->num_rows() > 0)
              {
								 
								echo"<tbody class='productscart OrderList'>";
                 foreach($query->result() as $row)
                    {
											$urunfiyati  = $this->CI->db->where("id_product",$row->id_product)->get("products")->row()->displayPrice;
											$kdvorani = $this->CI->db->where("id_product",$row->id_product)->get("products")->row()->tax;
											$adet = $row->quantity;
                      $kdv[] = (($urunfiyati*$kdvorani)/100)*$adet;
											$aratoplam[] = ($urunfiyati - (($urunfiyati*$kdvorani)/100))*$adet;
											$total[] = (($urunfiyati - (($urunfiyati*$kdvorani)/100))*$adet)+ ((($urunfiyati*$kdvorani)/100)*$adet )  ;
											
									    $product_total_price[] = $this->CI->db->where("id_product",$row->id_product)->get("products")->row()->displayPrice*$row->quantity;
                                        $name = $this->CI->db->where('id_product',$row->id_product)->get("products")->row()->label; 
                                        $img = $this->CI->db->where('id_product',$row->id_product)->get("products")->row()->picture;
									    $link = $this->CI->db->where('id_product',$row->id_product)->get("products")->row()->productLink;
                      echo'<tr>
														<td class="qc-image " >
																<img src="'.$img.'" class="img-responsive" style="max-width:50px;max-height:50px;">
														</td>
														<td class="qc-name "   style="    font-size: 10px;">
															<a href="'.$link.'"> 
																'.$name.' 
															</a>
														</td>
														<td   class="qc-model hidden-xs hidden">product 11</td>
														<td   class="qc-quantity " style="text-align:center">';
                                                        if($urunfiyati != 0) {
														echo'<div class="input-group number-spinner" style="width:120px;">
																<span class="input-group-btn">
																	<button  type="button"  class="btn btn-default"  data-id="'.$row->id_product.'" data-dir="dwn"><span class="glyphicon glyphicon-minus"></span></button>
																</span>
																<input type="text" class="form-control text-center" value="'.$row->quantity.'">
																<span class="input-group-btn">
																	<button type="button" class="btn btn-default" data-id="'.$row->id_product.'" data-dir="up"><span class="glyphicon glyphicon-plus"></span></button>
																</span>
															</div>
															<a href="#" onclick=delete_cart('.$row->id_product.')>Sil</a>';
                                                            }else{
                                                                echo"<span>1 Adet</span>";
                                                            }
														echo'</td>
														<td   class="qc-price hidden-xs ">'.money_format('%i', $this->CI->db->where('id_product',$row->id_product)->get("products")->row()->displayPrice).'</td>
														<td class="qc-total ">'.money_format('%i', $this->CI->db->where('id_product',$row->id_product)->get("products")->row()->displayPrice*$row->quantity).'</td>
 					                 </tr>';
                   }
								$kargo = $this->kargo(array_sum($total));
								$toplam = array_sum($total)+$kargo;
								echo"</tbody>";
								echo"<tfoot>";
								 echo'<tr>
								  <td></td>
 									  <td></td>
										 <td></td>
														<td  class="text-right"><strong>Ara Toplam:</strong></td>
														<td class="text-right">'.money_format('%i', array_sum($aratoplam)).'</td>
											   </tr>
												 <tr>
												 			  <td></td>
 									  <td></td>
										 <td></td>
													<td   class="text-right"><strong>Kargo Bedeli:</strong></td>
													<td class="text-right">'.$kargo.'</td>
												</tr>
													<tr>
																  <td></td>
 									  <td></td>
										 <td></td>
														<td   class="text-right"><strong>KDV:</strong></td>
														<td class="text-right">'.money_format('%i', array_sum($kdv)).'</td>
													</tr>
													<tr>
																  <td></td>
									 <td></td>
 										 <td></td>
														<td   class="text-right"><strong>Toplam:</strong></td>
														<td class="text-right"><input type="hidden" value="'.$toplam.'" id="toplam_ucret" name="toplam_ucret" />'.money_format('%i', array_sum($total)+$kargo).'</td>
													</tr>';
								echo"</tfoot>";
               } 
                   
             }
	
	         
	
	 public function total_price()
            {
 						      	$kdv = array();
							      $aratoplam = array();
                    $id_session = $this->CI->session->userdata("my_session_id");
                    $id_customer = $this->CI->session->userdata("uye_giris")["id"];
                  
		   if($this->CI->session->userdata("uye_giris")) 
				 {
 					 $query = $this->CI->db->where("id_session",$id_session)->or_where("customer_id",$id_customer)->get("Cart")->result();
 				 }else{
 				$query = $this->CI->db->where("id_session",$id_session)->get("Cart")->result();
 				 }
                    foreach($query as $row)
                    {
											$urunfiyati  = $this->CI->db->where("id_product",$row->id_product)->get("products")->row()->displayPrice;
											$kdvorani = $this->CI->db->where("id_product",$row->id_product)->get("products")->row()->tax;
											$adet = $row->quantity;
                      $kdv[] = (($urunfiyati*$kdvorani)/100)*$adet;
											$aratoplam[] = ($urunfiyati - (($urunfiyati*$kdvorani)/100))*$adet;
											$total[] = (($urunfiyati - (($urunfiyati*$kdvorani)/100))*$adet)+ ((($urunfiyati*$kdvorani)/100)*$adet )  ;
                    }
                
										$kargo = $this->CI->db->where("id",1)->get("shipping")->row()->price;
 							       $totals = array_sum($total)+$kargo;
							       return $totals;
							  }
	
	
 
	
	public function kargo($price)
	{
  			$query = $this->CI->db->where("varsayilan","1")->get("shipping")->result();
			foreach ($query as $value) {
				if($value->total <= $price)
				{
					return "0.00";
				}else{
  						  $querya = $this->CI->db->where("id_session",$this->CI->session->userdata("my_session_id"))->get("ucretsiz_kargo_kodu_using")->result();
							  if(count($querya) > 0)
 							{
 									 return "0.00";
								 }else{
									 return $value->price;
								 }
							}
 					 
					
 		
		 }
	}
	
	
  public function havale()
	{
		
	}
	
 public function kapıdaodeme()
	{
		
	}
	 public function kupon($kupon)
	{
		
	}
		 public function promosyon()
	{
		
	}
	
}