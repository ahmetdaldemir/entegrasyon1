<?php 
Class N11Model  extends CI_Model
{
 public function GetInfo($id)
	{
 		    $adres = "https://api.n11.com/ws/OrderService.wsdl";
        $n11baglanti = new SoapClient($adres);
        $gonder = new stdClass();
        $gonder->auth = new stdClass();
		    $gonder->orderRequest = new stdClass();
        $gonder->auth->appKey = "af428252-7e68-43a2-aefb-f75eea616502";
        $gonder->auth->appSecret = "dVraxGDan8IqTPLb";
        $gonder->orderRequest->id = $id;
        $n11sorgu = $n11baglanti->OrderDetail($gonder);
		    return $n11sorgu;
 	}
}
?>