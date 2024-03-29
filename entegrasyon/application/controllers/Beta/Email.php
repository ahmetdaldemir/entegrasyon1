<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Email extends CI_Controller {

  public  function index() {
        if ($this->session->userdata('logged_in')) {
            $this->load->helper('path');
            $session_data = $this->session->userdata('logged_in');
            $data['name'] = $session_data['name'];
          if($this->input->post("city") =="")
          {
             $data["pharma"]   ="";
          }else{   $data["pharma"]   = $this->db->where("mail_status","0")->where("seller_city",$this->input->post("city"))->where("status","0")->get("ah_gln")->result();
}
                       $this->template->load('TemplateB', 'Beta/Template/Email', $data);

        } else {
            $this->load->view('Beta/Login/index');
        }
    }

   public function test() {
          
              //Load email library
                    $this->load->library('email');

                    //SMTP & mail configuration
                    $config = array(
                        'protocol'  => 'smtp',
                        'smtp_host' => 'localhost',
                        'smtp_port' => 25,
                        'smtp_user' => 'posta@dermela.com',
                        'smtp_pass' => '198711ad',
                        'mailtype'  => 'html',
                        'charset'   => 'utf-8'
                    );
                    $this->email->initialize($config);
                    $this->email->set_mailtype("html");
                    $this->email->set_newline("\r\n");

                    //Email content
                    $htmlContent = $this->html_content("ahmet DALDEMİR","1544785");
 
                    $this->email->to("ahmetdaldemir@hotmail.com");
                    $this->email->from('posta@dermela.com','DERMELA');
                    $this->email->subject('Eczacılarımıza özel Hamilton ürünlerinde kampanya');
                    $this->email->message($htmlContent);

                    //Send email
                    if ($this->email->send()) {
        echo 'Your email was sent, thanks chamil.';
    } else {
        echo $this->email->print_debugger();
    }
          
    }
  
       public function emails_zone() {
            $pharma =  $this->db->where("mail_status","0")->where("seller_city","Adana")->where("status","0")->get("ah_gln")->result();
             foreach($pharma as $val)
             {
                try
   {
              //Load email library
                    $this->load->library('email');

                    //SMTP & mail configuration
                    $config = array(
                        'protocol'  => 'smtp',
                        'smtp_host' => 'localhost',
                        'smtp_port' => 25,
                        'smtp_user' => 'posta@dermela.com',
                        'smtp_pass' => '198711ad',
                        'mailtype'  => 'html',
                        'charset'   => 'utf-8'
                    );
                    $this->email->initialize($config);
                    $this->email->set_mailtype("html");
                    $this->email->set_newline("\r\n");

                    //Email content
                    $htmlContent = $this->html_content($val->pharmacist,$val->id_gln);
 
                    $this->email->to($val->seller_mail);
                    $this->email->from('posta@dermela.com','DERMELA');
                    $this->email->subject('Eczacılarımıza özel Hamilton ürünlerinde kampanya');
                    $this->email->message($htmlContent);

                    //Send email
                    //Send email
                    if ($this->email->send()) {
                       echo 'Your email was sent, thanks chamil.';
                            $this->db->where("id_gln",$val->id_gln)->set("mail_status",1)->update("ah_gln");
                     } else {
                        echo $this->email->print_debugger();
                    }
               
                sleep(10);
               } catch (LogicException $e) {
    echo "Exception: " . $e->getMessage() . "\n";
  }
             }
         } 
 
  
  
     public function emails($id) {
        if ($this->session->userdata('logged_in')) {
           $pharma = $this->db->where("id_gln",$id)->get("ah_gln")->result();
             foreach($pharma as $val)
             {
              //Load email library
                    $this->load->library('email');

                    //SMTP & mail configuration
                    $config = array(
                        'protocol'  => 'smtp',
                        'smtp_host' => 'localhost',
                        'smtp_port' => 25,
                        'smtp_user' => 'posta@dermela.com',
                        'smtp_pass' => '198711ad',
                        'mailtype'  => 'html',
                        'charset'   => 'utf-8'
                    );
                    $this->email->initialize($config);
                    $this->email->set_mailtype("html");
                    $this->email->set_newline("\r\n");

                    //Email content
                    $htmlContent = $this->html_content($val->pharmacist,$val->id_gln);
 
                    $this->email->to($val->seller_mail);
                    $this->email->from('posta@dermela.com','DERMELA');
                    $this->email->subject('Eczacılarımıza özel Hamilton ürünlerinde kampanya');
                    $this->email->message($htmlContent);

                    //Send email
                    //Send email
                    if ($this->email->send()) {
                       echo 'Your email was sent, thanks chamil.';
                            $this->db->where("id_gln",$val->id_gln)->set("mail_status",1)->update("ah_gln");
                     } else {
                        echo $this->email->print_debugger();
                    }
             }
         } else {
            $this->load->view('Beta/Login/index');
        }
    }

  public function html_content($name,$id)
  {
    $html = '<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1.0;">
 	<meta name="format-detection" content="telephone=no"/>

	<!-- Responsive Mobile-First Email Template by Konstantin Savchenko, 2015.
	https://www.dermela.com/  -->

	<style>
/* Reset styles */ 
body { margin: 0; padding: 0; min-width: 100%; width: 100% !important; height: 100% !important;}
body, table, td, div, p, a { -webkit-font-smoothing: antialiased; text-size-adjust: 100%; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%; line-height: 100%; }
table, td { mso-table-lspace: 0pt; mso-table-rspace: 0pt; border-collapse: collapse !important; border-spacing: 0; }
img { border: 0; line-height: 100%; outline: none; text-decoration: none; -ms-interpolation-mode: bicubic; }
#outlook a { padding: 0; }
.ReadMsgBody { width: 100%; } .ExternalClass { width: 100%; }
.ExternalClass, .ExternalClass p, .ExternalClass span, .ExternalClass font, .ExternalClass td, .ExternalClass div { line-height: 100%; }

/* Rounded corners for advanced mail clients only */ 
@media all and (min-width: 560px) {
	.container { border-radius: 8px; -webkit-border-radius: 8px; -moz-border-radius: 8px; -khtml-border-radius: 8px;}
}

/* Set color for auto links (addresses, dates, etc.) */ 
a, a:hover {
	color: #127DB3;
}
.footer a, .footer a:hover {
	color: #999999;
}

 	</style>

	<!-- MESSAGE SUBJECT -->
	<title>DERMELA | Kozmetik | Dermokozmetik | Besin Takviyesi | Medikal</title>

</head>

<!-- BODY -->
<!-- Set message background color (twice) and text color (twice) -->
<body topmargin="0" rightmargin="0" bottommargin="0" leftmargin="0" marginwidth="0" marginheight="0" width="100%" style="border-collapse: collapse; border-spacing: 0; margin: 0; padding: 0; width: 100%; height: 100%; -webkit-font-smoothing: antialiased; text-size-adjust: 100%; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%; line-height: 100%;
	background-color: #F0F0F0;
	color: #000000;"
	bgcolor="#F0F0F0"
	text="#000000">

<!-- SECTION / BACKGROUND -->
<!-- Set message background color one again -->
<table width="100%" align="center" border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse; border-spacing: 0; margin: 0; padding: 0; width: 100%;" class="background"><tr><td align="center" valign="top" style="border-collapse: collapse; border-spacing: 0; margin: 0; padding: 0;"
	bgcolor="#F0F0F0">

<!-- WRAPPER -->
<!-- Set wrapper width (twice) -->
<table border="0" cellpadding="0" cellspacing="0" align="center"
	width="560" style="border-collapse: collapse; border-spacing: 0; padding: 0; width: inherit;
	max-width: 560px;" class="wrapper">

	<tr>
		<td align="center" valign="top" style="border-collapse: collapse; border-spacing: 0; margin: 0; padding: 0; padding-left: 6.25%; padding-right: 6.25%; width: 87.5%;
			padding-top: 20px;
			padding-bottom: 20px;">

			<!-- PREHEADER -->
			<!-- Set text color to background color -->
			<div style="display: none; visibility: hidden; overflow: hidden; opacity: 0; font-size: 1px; line-height: 1px; height: 0; max-height: 0; max-width: 0;
			color: #F0F0F0;" class="preheader">
				Available on&nbsp;GitHub and&nbsp;CodePen. Highly compatible. Designer friendly. More than 50%&nbsp;of&nbsp;total email opens occurred on&nbsp;a&nbsp;mobile device&nbsp;— a&nbsp;mobile-friendly design is&nbsp;a&nbsp;must for&nbsp;email campaigns.</div>

			<!-- LOGO -->
			<!-- Image text color should be opposite to background color. Set your url, image src, alt and title. Alt text should fit the image size. Real image size should be x2. URL format: http://domain.com/?utm_source={{Campaign-Source}}&utm_medium=email&utm_content=logo&utm_campaign={{Campaign-Name}} -->
			<a target="_blank" style="text-decoration: none;"
				href="https://www.dermela.com"><img border="0" vspace="0" hspace="0"
				src="http://www.dermela.com/image/catalog/sitesitede.jpg"
				width="200" height="60"
				alt="Logo" title="Logo" style="
				color: #000000;
				font-size: 10px; margin: 0; padding: 0; outline: none; text-decoration: none; -ms-interpolation-mode: bicubic; border: none; display: block;" /></a>

		</td>
	</tr>

<!-- End of WRAPPER -->
</table>

<!-- WRAPPER / CONTEINER -->
<!-- Set conteiner background color -->
<table border="0" cellpadding="0" cellspacing="0" align="center"
	bgcolor="#FFFFFF"
	width="560" style="border-collapse: collapse; border-spacing: 0; padding: 0; width: inherit;
	max-width: 560px;" class="container">

	<!-- HEADER -->
	<!-- Set text color and font family ("sans-serif" or "Georgia, serif") -->
	<tr>
		<td align="center" valign="top" style="border-collapse: collapse; border-spacing: 0; margin: 0; padding: 0; padding-left: 6.25%; padding-right: 6.25%; width: 87.5%; font-size: 20px; font-weight: bold; line-height: 130%;
			padding-top: 25px;
			color: #000000;
			font-family: sans-serif;" class="header">
				 Sayın : '.$name.'
		</td>
	</tr>
	
	<!-- SUBHEADER -->
	<!-- Set text color and font family ("sans-serif" or "Georgia, serif") -->
 

	<!-- HERO IMAGE -->
	<!-- Image text color should be opposite to background color. Set your url, image src, alt and title. Alt text should fit the image size. Real image size should be x2 (wrapper x2). Do not set height for flexible images (including "auto"). URL format: http://domain.com/?utm_source={{Campaign-Source}}&utm_medium=email&utm_content={{Ìmage-Name}}&utm_campaign={{Campaign-Name}} -->
	<tr>
		<td align="center" valign="top" style="border-collapse: collapse; border-spacing: 0; margin: 0; padding: 0;
			padding-top: 20px;" class="hero"><a target="_blank" style="text-decoration: none;"
			href="https://www.dermela.com/"><img border="0" vspace="0" hspace="0"
			src="'.base_url().'Email/hamilton_gunes_koruyucu_urunleriyle_gunesin_keyfini_doyasiya_cikarin_h99134_29fa1.png"
			alt="Please enable images to view this content" title="Hero Image"
			width="560" style="
			width: 100%;
			max-width: 560px;
			color: #000000; font-size: 13px; margin: 0; padding: 0; outline: none; text-decoration: none; -ms-interpolation-mode: bicubic; border: none; display: block;"/></a></td>
	</tr>

	<!-- PARAGRAPH -->
	<!-- Set text color and font family ("sans-serif" or "Georgia, serif"). Duplicate all text styles in links, including line-height -->
	<tr>
		<td align="center" valign="top" style="border-collapse: collapse; border-spacing: 0; margin: 0; padding: 0; padding-left: 6.25%; padding-right: 6.25%; width: 87.5%; font-size: 17px; font-weight: 400; line-height: 160%;
			padding-top: 25px; 
			color: #000000;
			font-family: sans-serif;" class="paragraph">
				 Hamilton marka güneş ürünlerinde dev kampanya %60 a varan indirimler ile eczacılarımıza özel kampanyamız başlamıştır. Aşağıdaki linke tıklayarak tüm hamilton ürünlerine ulaşabilirsiniz.
		</td>
	</tr>

	<!-- BUTTON -->
	<!-- Set button background color at TD, link/text color at A and TD, font family ("sans-serif" or "Georgia, serif") at TD. For verification codes add "letter-spacing: 5px;". Link format: http://domain.com/?utm_source={{Campaign-Source}}&utm_medium=email&utm_content={{Button-Name}}&utm_campaign={{Campaign-Name}} -->
	<tr>
		<td align="center" valign="top" style="border-collapse: collapse; border-spacing: 0; margin: 0; padding: 0; padding-left: 6.25%; padding-right: 6.25%; width: 87.5%;
			padding-top: 25px;
			padding-bottom: 5px;" class="button"><a
			href="https://www.dermela.com/" target="_blank" style="text-decoration: underline;">
				<table border="0" cellpadding="0" cellspacing="0" align="center" style="max-width: 240px; min-width: 120px; border-collapse: collapse; border-spacing: 0; padding: 0;"><tr><td align="center" valign="middle" style="padding: 12px 24px; margin: 0; text-decoration: underline; border-collapse: collapse; border-spacing: 0; border-radius: 4px; -webkit-border-radius: 4px; -moz-border-radius: 4px; -khtml-border-radius: 4px;"
					bgcolor="#E9703E"><a target="_blank" style="text-decoration: underline;
					color: #FFFFFF; font-family: sans-serif; font-size: 17px; font-weight: 400; line-height: 120%;"
					href="http://www.dermela.com/index.php?route=product/search&search=hamilton">
					 Siteye Git
					</a>
			</td></tr></table></a>
		</td>
	</tr>

	<!-- LINE -->
	<!-- Set line color -->
	<tr>	
		<td align="center" valign="top" style="border-collapse: collapse; border-spacing: 0; margin: 0; padding: 0; padding-left: 6.25%; padding-right: 6.25%; width: 87.5%;
			padding-top: 25px;" class="line"><hr
			color="#E0E0E0" align="center" width="100%" size="1" noshade style="margin: 0; padding: 0;" />
		</td>
	</tr>

	<!-- LIST -->
	<!-- tr>
		<td align="center" valign="top" style="border-collapse: collapse; border-spacing: 0; margin: 0; padding: 0; padding-left: 6.25%; padding-right: 6.25%;" class="list-item"><table align="center" border="0" cellspacing="0" cellpadding="0" style="width: inherit; margin: 0; padding: 0; border-collapse: collapse; border-spacing: 0;">
			
			<!-- LIST ITEM -->
			<!-- tr>

				<!-- LIST ITEM IMAGE -->
				<!-- Image text color should be opposite to background color. Set your url, image src, alt and title. Alt text should fit the image size. Real image size should be x2 -->
				<!-- td align="left" valign="top" style="border-collapse: collapse; border-spacing: 0;
					padding-top: 30px;
					padding-right: 20px;"><img
				border="0" vspace="0" hspace="0" style="padding: 0; margin: 0; outline: none; text-decoration: none; -ms-interpolation-mode: bicubic; border: none; display: block;
					color: #000000;"
					src="https://raw.githubusercontent.com/konsav/email-templates/master/images/list-item.png"
					alt="H" title="Highly compatible"
					width="50" height="50"></td>

				<!-- LIST ITEM TEXT -->
				<!-- Set text color and font family ("sans-serif" or "Georgia, serif"). Duplicate all text styles in links, including line-height -->
				<!-- td align="left" valign="top" style="font-size: 17px; font-weight: 400; line-height: 160%; border-collapse: collapse; border-spacing: 0; margin: 0; padding: 0;
					padding-top: 25px;
					color: #000000;
					font-family: sans-serif;" class="paragraph">
						<b style="color: #333333;">Highly compatible</b><br/>
						Tested on the most popular email clients for web, desktop and mobile. Checklist included.
				</td>

			</tr>

			<!-- LIST ITEM -->
			<!-- tr>

				<!-- LIST ITEM IMAGE -->
				<!-- Image text color should be opposite to background color. Set your url, image src, alt and title. Alt text should fit the image size. Real image size should be x2 -->
				<!-- td align="left" valign="top" style="border-collapse: collapse; border-spacing: 0;
					padding-top: 30px;
					padding-right: 20px;"><img
				border="0" vspace="0" hspace="0" style="padding: 0; margin: 0; outline: none; text-decoration: none; -ms-interpolation-mode: bicubic; border: none; display: block;
					color: #000000;"
					src="https://raw.githubusercontent.com/konsav/email-templates/master/images/list-item.png"
					alt="D" title="Designer friendly"
					width="50" height="50"></td>

				<!-- LIST ITEM TEXT -->
				<!-- Set text color and font family ("sans-serif" or "Georgia, serif"). Duplicate all text styles in links, including line-height -->
				<!-- td align="left" valign="top" style="font-size: 17px; font-weight: 400; line-height: 160%; border-collapse: collapse; border-spacing: 0; margin: 0; padding: 0;
					padding-top: 25px;
					color: #000000;
					font-family: sans-serif;" class="paragraph">
						<b style="color: #333333;">Designer friendly</b><br/>
						Sketch app resource file and a&nbsp;bunch of&nbsp;social media icons are&nbsp;also included in&nbsp;GitHub repository.
				</td>

			</tr>

		</table></td>
	</tr -->

	<!-- LINE -->
	<!-- Set line color -->
	<tr>
		<td align="center" valign="top" style="border-collapse: collapse; border-spacing: 0; margin: 0; padding: 0; padding-left: 6.25%; padding-right: 6.25%; width: 87.5%;
			padding-top: 25px;" class="line"><hr
			color="#E0E0E0" align="center" width="100%" size="1" noshade style="margin: 0; padding: 0;" />
		</td>
	</tr>

	<!-- PARAGRAPH -->
	<!-- Set text color and font family ("sans-serif" or "Georgia, serif"). Duplicate all text styles in links, including line-height -->
	<tr>
		<td align="center" valign="top" style="border-collapse: collapse; border-spacing: 0; margin: 0; padding: 0; padding-left: 6.25%; padding-right: 6.25%; width: 87.5%; font-size: 17px; font-weight: 400; line-height: 160%;
			padding-top: 20px;
			padding-bottom: 25px;
			color: #000000;
			font-family: sans-serif;" class="paragraph">
				Tüm Sorularınız İçin? <a href="mailto:info@dermela.com" target="_blank" style="color: #127DB3; font-family: sans-serif; font-size: 17px; font-weight: 400; line-height: 160%;">info@dermela.com</a>
		</td>
	</tr>

<!-- End of WRAPPER -->
</table>

<!-- WRAPPER -->
<!-- Set wrapper width (twice) -->
<table border="0" cellpadding="0" cellspacing="0" align="center"
	width="560" style="border-collapse: collapse; border-spacing: 0; padding: 0; width: inherit;
	max-width: 560px;" class="wrapper">

	<!-- SOCIAL NETWORKS -->
 

	<!-- FOOTER -->
	<!-- Set text color and font family ("sans-serif" or "Georgia, serif"). Duplicate all text styles in links, including line-height -->
	<tr>
		<td align="center" valign="top" style="border-collapse: collapse; border-spacing: 0; margin: 0; padding: 0; padding-left: 6.25%; padding-right: 6.25%; width: 87.5%; font-size: 13px; font-weight: 400; line-height: 150%;
			padding-top: 20px;
			padding-bottom: 20px;
			color: #999999;
			font-family: sans-serif;" class="footer">

				Bu Mail size sadece kampanya bilgilendirme amacı ile gönderilmiştir. Bu maili tekrar almak istemiyor iseniz lütfen tıkayınız <a href="https://www.dermela.com/entegrasyon/Beta/Email/remove/'.$id.'" target="_blank" style="text-decoration: underline; color: #999999; font-family: sans-serif; font-size: 13px; font-weight: 400; line-height: 150%;">Üyelikten Ayrıl</a> .

				 

		</td>
	</tr>

<!-- End of WRAPPER -->
</table>

<!-- End of SECTION / BACKGROUND -->
</td></tr></table>

</body>
</html>';
    return $html;
  }
     
    public function remove($id)
    {
      $this->db->where("id_gln",$id)->set("status",1)->update("ah_gln");
      redirect("https://www.dermela.com");
    }
}
