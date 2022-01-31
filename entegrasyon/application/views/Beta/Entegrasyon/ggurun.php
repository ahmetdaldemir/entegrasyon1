<head>
  <meta charset="UTF-8">
</head>
<?php 
 
//$ilkad = array_shift($ad);
echo'<table>';
  echo"<tr>
  <td>Kategori No</td>
  <td>Dükkan No</td>
  <td>Stok No</td>
  <td>Başlık</td>
  <td>Alt Başlık</td>
  <td>Açıklama</td>
  <td>1. Fotoğraf</td>
  <td>2. Fotoğraf</td>
  <td>3. Fotoğraf</td>
  <td>4. Fotoğraf</td>
  <td>5. Fotoğraf</td>
  <td>6. Fotoğraf</td>
  <td>7. Fotoğraf</td>
  <td>8. Fotoğraf</td>
  <td>Sayfa Düzeni No</td>
  <td>Katalog No</td>
  <td>Katalog Detay</td>
  <td>Ürün Formatı</td>
  <td>Hemen Al Fiyatı</td>
  <td>Süre (Gün)</td>
  <td>Ürün Adeti</td>
  <td>Şehir No</td>
  <td>Kargo Şirketleri</td>
  <td>Kargo Ücreti</td>
  <td>Gönderi Yapılacak Alanlar</td>
  <td>Gönderi Yapacağınız Zaman</td>
  <td>İş Ortaklığı</td>
  <td>Kalın Yazı</td>
  <td>Katalog</td>
  <td>Vitrin</td>
  <td>Ürün Seçeneği</td>
  <td>Ürün Özelliği</td>
  <td>Üretici Parça Numarası (MPN)</td>
  <td>Global Ticari Öğe Numarası (GTIN)</td>
  <td>Yeni Katalog No</td>
  <tr><tbody>";
 
		 foreach($product as $val){
       
    echo"<tr>";
   echo"<td>jodc</td>"; 
   echo"<td>0</td>"; 
   echo"<td>".$val->model."</td>"; 
   echo"<td>".$val->name."</td>"; 
   echo"<td>".$val->meta_title."</td>"; 
   echo"<td>".$val->description."</td>";
   echo"<td>http://gunescanta.com/image/".$val->image."</td>";
 		    $DB2 = $this->load->database('another_db', TRUE);
   $query  = $DB2->where("product_id",$val->product_id)->get("oc_product_image")->result_array();
     if(isset($query[0]))
    {
        echo"<td>http://gunescanta.com/image/".$query[0]["image"]."</td>"; 
    }else{
      echo"<td></td>";
    }
     if(isset($query[1]))
    {
      echo"<td>http://gunescanta.com/image/".$query[1]["image"]."</td>"; 
    }else{
        echo"<td></td>";
    }
           if(isset($query[2]))
    {
      echo"<td>http://gunescanta.com/image/".$query[2]["image"]."</td>"; 
    }else{
       echo"<td></td>";
    }
           if(isset($query[3]))
    {
     echo"<td>http://gunescanta.com/image/".$query[3]["image"]."</td>"; 
    }else{
        echo"<td></td>";
    }
           if(isset($query[4]))
    {
      echo"<td>http://gunescanta.com/image/".$query[4]["image"]."</td>"; 
    }else{
       echo"<td></td>";
    }
           if(isset($query[5]))
    {
      echo"<td>http://gunescanta.com/image/".$query[5]["image"]."</td>"; 
    }else{
        echo"<td></td>";
    }
           if(isset($query[6]))
    {
     echo"<td>http://gunescanta.com/image/".$query[6]["image"]."</td>"; 
    }else{
       echo"<td></td>";
    }
    
   echo"<td>5</td>"; 
   echo"<td>0</td>"; 
   echo"<td>0</td>"; 
   echo"<td>S</td>"; 
   $price  = $DB2->where("product_id",$val->product_id)->get("oc_product_special")->row()->price;  
       if(isset($price))
       {
         echo"<td>".number_format($price)."</td>"; 
       }else{
         echo"<td>".number_format($val->price)."</td>"; 
       }
   
   echo"<td>60</td>"; 
   echo"<td>".$val->quantity."</td>"; 
   echo"<td>38</td>"; 
   echo"<td>ups,yurtici</td>"; 
   echo"<td>S</td>"; 
   echo"<td>country</td>"; 
   echo"<td>today 15:30</td>"; 
   echo"<td>false</td>"; 
   echo"<td></td>"; 
   echo"<td>false</td>";
   echo"<td>false</td>";
   echo"<td></td>";
   $renk  = $DB2->where("product_id",$val->product_id)->get("oc_product_attribute")->row()->text;      
   echo"<td>Marka::Diğer | Renk::$renk | Desen::Desensiz | Malzeme::Polyester | Ürün Tipi::Valiz/Bavul | Durum::Yeni: Etiketli </td>";
   echo"<td></td>";
   echo"<td></td>";
   echo"<td></td>";
    echo"</tr>";
  }
echo"<tbody><table>";
 