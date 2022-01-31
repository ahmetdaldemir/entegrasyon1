<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class HepsiBurada extends CI_Controller {

    function __construct() {
        parent::__construct();
        //$this->load->model('User');
    }

    function index() {
        if ($this->session->userdata('logged_in')) {
            $data["order"] = $this->db->where("status", "0")->where("platform", "Hepsi Burada")->order_by("id","desc")->get("Fatura")->result();
            $data["Lastorder"] = $this->db->where("status", "1")->get("Fatura")->result();
            $session_data = $this->session->userdata('logged_in');
            $data['name'] = $session_data['name'];
            $data['Page'] = "Hepsi Burada";
            $this->template->load('TemplateB', 'Beta/Entegrasyon/HepsiBurada', $data);
        } else {
            $this->load->view('Beta/Login/index');
        }
    }

   public function order() { $data = '[
    {
        "id": "8ec14837-6422-4002-a906-01afa9b60f51",
        "status": "Open",
        "customerId": "9efe49f0-6049-4e78-bb86-efad8d4d66f2",
        "orderDate": "2019-10-31T10:03:21.7955751",
        "dueDate": "2019-10-31T15:00:00",
        "unpackedDate": null,
        "barcode": "6296379493817",
        "packageNumber": "637949381",
        "cargoCompany": "Sürat Kargo",
        "shippingAddressDetail": "edrine şarap üretim tesisleri teller altı mevkii no 4 VAROŞ HAVSA Edirne",
        "recipientName": "CANSU  ÖZKAN",
        "shippingCountryCode": "TR",
        "shippingDistrict": "VAROŞ",
        "shippingTown": "HAVSA",
        "shippingCity": "Edirne",
        "email": "tedarikciiletisim@hepsiburada.com",
        "phoneNumber": "",
        "companyName": "CANSU  ÖZKAN",
        "billingAddress": "edrine şarap üretim tesisleri teller altı mevkii no 4 VAROŞ HAVSA Edirne",
        "billingCity": "Edirne",
        "billingTown": "HAVSA",
        "billingDistrict": "VAROŞ",
        "taxOffice": null,
        "taxNumber": "",
        "identityNo": "99999999999",
        "items": [
            {
                "lineItemId": "22f356ae-04bd-4536-98f8-d8d3a31686e1",
                "listingId": "e090b903-8d4f-4b97-a447-9275d143babc",
                "merchantId": "7666c89d-628b-4e5b-af5e-0e942cffcc20",
                "hbSku": "SGUCIL9314",
                "merchantSku": "54132AFRZ3",
                "quantity": 1,
                "price": {
                    "currency": "TRY",
                    "amount": 94.49000
                },
                "vat": 14.41000,
                "totalPrice": {
                    "currency": "TRY",
                    "amount": 94.49000
                },
                "commission": {
                    "currency": "TRY",
                    "amount": 13.23000
                },
                "unitHBDiscount": {
                    "currency": "TRY",
                    "amount": 0.00000
                },
                "totalHBDiscount": {
                    "currency": "TRY",
                    "amount": 0.00000
                },
                "merchantUnitPrice": {
                    "currency": "TRY",
                    "amount": 94.49000
                },
                "merchantTotalPrice": {
                    "currency": "TRY",
                    "amount": 94.49000
                },
                "cargoPaymentInfo": "Seller",
                "customizedText01": "",
                "customizedText02": "",
                "customizedText03": "",
                "customizedText04": "",
                "properties": [],
                "productName": "Priorin Şampuan 3 Al 2 Öde ( Yağlı Saçlar) Saç Dökülmesine Karşı",
                "orderNumber": "0436965242",
                "orderDate": "2019-10-31T10:03:21.7955751",
                "deliveryType": "Standart Teslimat",
                "customerDelivery": null,
                "pickupTime": null
            }
        ]
    },
    {
        "id": "0b9da899-73c6-494e-8216-143783d30364",
        "status": "Open",
        "customerId": "fe251e31-53e4-4ce5-8990-ef1a28052740",
        "orderDate": "2019-10-30T16:44:05.2972863",
        "dueDate": "2019-10-31T15:00:00",
        "unpackedDate": null,
        "barcode": "6294035658037",
        "packageNumber": "403565803",
        "cargoCompany": "Sürat Kargo",
        "shippingAddressDetail": "ERZURUM GÜMRÜK MÜDÜRLÜĞÜ İSTANBUL KAPI CAD. ERZURUM YAKUTİYE Erzurum",
        "recipientName": "EBRU ÖNCÜL",
        "shippingCountryCode": "TR",
        "shippingDistrict": "",
        "shippingTown": "YAKUTİYE",
        "shippingCity": "Erzurum",
        "email": "tedarikciiletisim@hepsiburada.com",
        "phoneNumber": "",
        "companyName": "EBRU ÖNCÜL",
        "billingAddress": "ERZURUM GÜMRÜK MÜDÜRLÜĞÜ İSTANBUL KAPI CAD. ERZURUM YAKUTİYE Erzurum",
        "billingCity": "Erzurum",
        "billingTown": "YAKUTİYE",
        "billingDistrict": "",
        "taxOffice": null,
        "taxNumber": "",
        "identityNo": "10327857058",
        "items": [
            {
                "lineItemId": "095ea334-2943-466a-b81f-8cd7587db358",
                "listingId": "e45c3fae-9465-4151-b31e-16c200a791bc",
                "merchantId": "7666c89d-628b-4e5b-af5e-0e942cffcc20",
                "hbSku": "HBV00000EJ8CK",
                "merchantSku": "HBV00000EJ8CK",
                "quantity": 1,
                "price": {
                    "currency": "TRY",
                    "amount": 23.50000
                },
                "vat": 1.74000,
                "totalPrice": {
                    "currency": "TRY",
                    "amount": 23.50000
                },
                "commission": {
                    "currency": "TRY",
                    "amount": 4.00000
                },
                "unitHBDiscount": {
                    "currency": "TRY",
                    "amount": 1.50120
                },
                "totalHBDiscount": {
                    "currency": "TRY",
                    "amount": 1.50120
                },
                "merchantUnitPrice": {
                    "currency": "TRY",
                    "amount": 25.00120
                },
                "merchantTotalPrice": {
                    "currency": "TRY",
                    "amount": 25.00120
                },
                "cargoPaymentInfo": "Seller",
                "customizedText01": "",
                "customizedText02": "",
                "customizedText03": "",
                "customizedText04": "",
                "properties": [],
                "productName": "Redoxon Kids Çiğnenebilir Takviye Edici Gıda 25 Adet",
                "orderNumber": "0989176958",
                "orderDate": "2019-10-30T16:44:05.2972863",
                "deliveryType": "Standart Teslimat",
                "customerDelivery": null,
                "pickupTime": null
            }
        ]
    },
    {
        "id": "6dc8b4a7-4de5-4279-8d1d-1b19f2bc2ff3",
        "status": "Open",
        "customerId": "b78ce8e3-8621-4501-9f02-8d3cf646ee86",
        "orderDate": "2019-10-30T19:25:21.6179589",
        "dueDate": "2019-11-01T15:00:00",
        "unpackedDate": null,
        "barcode": "6299863715549",
        "packageNumber": "986371554",
        "cargoCompany": "Sürat Kargo",
        "shippingAddressDetail": "Gökmeydan mahallesi ulus caddesi dilek apartmanı no79 a blok kat 1 daire 2 GÖKMEYDAN ODUNPAZARI Eskişehir",
        "recipientName": "Pınar  Uysal ",
        "shippingCountryCode": "TR",
        "shippingDistrict": "GÖKMEYDAN",
        "shippingTown": "ODUNPAZARI",
        "shippingCity": "Eskişehir",
        "email": "tedarikciiletisim@hepsiburada.com",
        "phoneNumber": "",
        "companyName": "Pınar  Uysal ",
        "billingAddress": "Gökmeydan mahallesi ulus caddesi dilek apartmanı no79 a blok kat 1 daire 2 GÖKMEYDAN ODUNPAZARI Eskişehir",
        "billingCity": "Eskişehir",
        "billingTown": "ODUNPAZARI",
        "billingDistrict": "GÖKMEYDAN",
        "taxOffice": null,
        "taxNumber": "",
        "identityNo": "99999999999",
        "items": [
            {
                "lineItemId": "ffe0ea3a-0b11-4beb-afa2-60742972bd4f",
                "listingId": "9bf98db1-d811-4770-b0d5-822c131baf1d",
                "merchantId": "7666c89d-628b-4e5b-af5e-0e942cffcc20",
                "hbSku": "SPORFITCCI110",
                "merchantSku": "STK45",
                "quantity": 6,
                "price": {
                    "currency": "TRY",
                    "amount": 28.99833
                },
                "vat": 12.89000,
                "totalPrice": {
                    "currency": "TRY",
                    "amount": 173.98998
                },
                "commission": {
                    "currency": "TRY",
                    "amount": 4.35000
                },
                "unitHBDiscount": {
                    "currency": "TRY",
                    "amount": 0.00000
                },
                "totalHBDiscount": {
                    "currency": "TRY",
                    "amount": 0.00000
                },
                "merchantUnitPrice": {
                    "currency": "TRY",
                    "amount": 28.99833
                },
                "merchantTotalPrice": {
                    "currency": "TRY",
                    "amount": 173.98998
                },
                "cargoPaymentInfo": "Seller",
                "customizedText01": "",
                "customizedText02": "",
                "customizedText03": "",
                "customizedText04": "",
                "properties": [],
                "productName": "Matriks CC-II 30 Kapsül",
                "orderNumber": "0231483832",
                "orderDate": "2019-10-30T19:25:21.6179589",
                "deliveryType": "Standart Teslimat",
                "customerDelivery": null,
                "pickupTime": null
            }
        ]
    },
    {
        "id": "91c0fb0d-db79-4717-9d65-1d8e2a690fcc",
        "status": "Open",
        "customerId": "796d0b81-c8cd-4bef-b4e9-a01c2a70a03b",
        "orderDate": "2019-10-30T13:33:44.2303944",
        "dueDate": "2019-11-01T15:00:00",
        "unpackedDate": null,
        "barcode": "6296222630383",
        "packageNumber": "622263038",
        "cargoCompany": "Sürat Kargo",
        "shippingAddressDetail": "Ataşehir Mahallesi Kuva-i Milliye Caddesi Hayal Kent Sitesi A Blok No: 358 No:2 MERKEZ MERKEZ Elazığ",
        "recipientName": "Sebahattin Key",
        "shippingCountryCode": "TR",
        "shippingDistrict": "MERKEZ",
        "shippingTown": "MERKEZ",
        "shippingCity": "Elazığ",
        "email": "tedarikciiletisim@hepsiburada.com",
        "phoneNumber": "",
        "companyName": "Sebahattin Key",
        "billingAddress": "Ataşehir Mahallesi Kuva-i Milliye Caddesi Hayal Kent Sitesi A Blok No: 358 No:2 MERKEZ MERKEZ Elazığ",
        "billingCity": "Elazığ",
        "billingTown": "MERKEZ",
        "billingDistrict": "MERKEZ",
        "taxOffice": null,
        "taxNumber": "",
        "identityNo": "99999999999",
        "items": [
            {
                "lineItemId": "b74eb39e-6c4f-4f23-a035-9908ec6de969",
                "listingId": "9bf98db1-d811-4770-b0d5-822c131baf1d",
                "merchantId": "7666c89d-628b-4e5b-af5e-0e942cffcc20",
                "hbSku": "SPORFITCCI110",
                "merchantSku": "STK45",
                "quantity": 3,
                "price": {
                    "currency": "TRY",
                    "amount": 28.99666
                },
                "vat": 6.44000,
                "totalPrice": {
                    "currency": "TRY",
                    "amount": 86.98998
                },
                "commission": {
                    "currency": "TRY",
                    "amount": 4.35000
                },
                "unitHBDiscount": {
                    "currency": "TRY",
                    "amount": 0.00000
                },
                "totalHBDiscount": {
                    "currency": "TRY",
                    "amount": 0.00000
                },
                "merchantUnitPrice": {
                    "currency": "TRY",
                    "amount": 28.99666
                },
                "merchantTotalPrice": {
                    "currency": "TRY",
                    "amount": 86.98998
                },
                "cargoPaymentInfo": "Seller",
                "customizedText01": "",
                "customizedText02": "",
                "customizedText03": "",
                "customizedText04": "",
                "properties": [],
                "productName": "Matriks CC-II 30 Kapsül",
                "orderNumber": "0383422731",
                "orderDate": "2019-10-30T13:33:44.2303944",
                "deliveryType": "Standart Teslimat",
                "customerDelivery": null,
                "pickupTime": null
            }
        ]
    },
    {
        "id": "2ec88995-a179-498c-bb65-2a238c358b56",
        "status": "Open",
        "customerId": "b5211908-1e1a-4b41-b1d7-9e2efded8c65",
        "orderDate": "2019-10-28T16:26:17.0650388",
        "dueDate": "2019-10-30T15:00:00",
        "unpackedDate": null,
        "barcode": "6293802433099",
        "packageNumber": "380243309",
        "cargoCompany": "Sürat Kargo",
        "shippingAddressDetail": "Kültür mahallesi 1. Akın sokak Aylin 2 sitesi b blok no:36 kat:2 daire:4 Beşevler Nilüfer bursa KÜLTÜR NİLÜFER Bursa",
        "recipientName": "Sercan Karadeniz ",
        "shippingCountryCode": "TR",
        "shippingDistrict": "KÜLTÜR",
        "shippingTown": "NİLÜFER",
        "shippingCity": "Bursa",
        "email": "tedarikciiletisim@hepsiburada.com",
        "phoneNumber": "",
        "companyName": "Sercan Karadeniz ",
        "billingAddress": "Kültür mahallesi 1. Akın sokak Aylin 2 sitesi b blok no:36 kat:2 daire:4 Beşevler Nilüfer bursa KÜLTÜR NİLÜFER Bursa",
        "billingCity": "Bursa",
        "billingTown": "NİLÜFER",
        "billingDistrict": "KÜLTÜR",
        "taxOffice": null,
        "taxNumber": "",
        "identityNo": "50182833156",
        "items": [
            {
                "lineItemId": "f3723c22-e987-480c-b5ff-672a83a2ef83",
                "listingId": "e45c3fae-9465-4151-b31e-16c200a791bc",
                "merchantId": "7666c89d-628b-4e5b-af5e-0e942cffcc20",
                "hbSku": "HBV00000EJ8CK",
                "merchantSku": "HBV00000EJ8CK",
                "quantity": 2,
                "price": {
                    "currency": "TRY",
                    "amount": 23.50000
                },
                "vat": 3.48000,
                "totalPrice": {
                    "currency": "TRY",
                    "amount": 47.00000
                },
                "commission": {
                    "currency": "TRY",
                    "amount": 4.00000
                },
                "unitHBDiscount": {
                    "currency": "TRY",
                    "amount": 1.50120
                },
                "totalHBDiscount": {
                    "currency": "TRY",
                    "amount": 3.00240
                },
                "merchantUnitPrice": {
                    "currency": "TRY",
                    "amount": 25.00120
                },
                "merchantTotalPrice": {
                    "currency": "TRY",
                    "amount": 50.00240
                },
                "cargoPaymentInfo": "Seller",
                "customizedText01": "",
                "customizedText02": "",
                "customizedText03": "",
                "customizedText04": "",
                "properties": [],
                "productName": "Redoxon Kids Çiğnenebilir Takviye Edici Gıda 25 Adet",
                "orderNumber": "0523103509",
                "orderDate": "2019-10-28T16:26:17.0650388",
                "deliveryType": "Standart Teslimat",
                "customerDelivery": null,
                "pickupTime": null
            }
        ]
    },
    {
        "id": "1cb7312f-9425-4c64-9f61-322df4387644",
        "status": "Unpacked",
        "customerId": "514b6e2e-98c8-49d9-9ffc-7e40e74c0499",
        "orderDate": "2019-10-18T12:12:54.4026986",
        "dueDate": "2019-10-21T15:00:00",
        "unpackedDate": "2019-10-30T13:55:24.067",
        "barcode": "6294873650767",
        "packageNumber": "487365076",
        "cargoCompany": "Sürat Kargo",
        "shippingAddressDetail": "FURKAN ASLAN Mustafa Kemal Mah. Dumlupınar Bulvarı Mahall Ankara İş Merkezi B Blok No: 274/7 Daire No:53 06530 MUSTAFA KEMAL ÇANKAYA Ankara",
        "recipientName": "furkan aslan",
        "shippingCountryCode": "TR",
        "shippingDistrict": "MUSTAFA KEMAL",
        "shippingTown": "ÇANKAYA",
        "shippingCity": "Ankara",
        "email": "tedarikciiletisim@hepsiburada.com",
        "phoneNumber": "",
        "companyName": "FURKAN ASLAN",
        "billingAddress": "IFOKS BİLİŞİM TEKNOLOJİ A.Ş. Mustafa Kemal Mah. Dumlupınar Bulvarı Mahall Ankara İş Merkezi B Blok No: 2 MUSTAFA KEMAL ÇANKAYA Ankara",
        "billingCity": "Ankara",
        "billingTown": "ÇANKAYA",
        "billingDistrict": "MUSTAFA KEMAL",
        "taxOffice": null,
        "taxNumber": "",
        "identityNo": "99999999999",
        "items": [
            {
                "lineItemId": "66e546ca-2bbb-4307-910b-f197d52e3781",
                "listingId": "28983e5b-c37d-4d45-af5a-b9af94629ed2",
                "merchantId": "7666c89d-628b-4e5b-af5e-0e942cffcc20",
                "hbSku": "HBV00000385OJ",
                "merchantSku": "HBV00000385OJ",
                "quantity": 1,
                "price": {
                    "currency": "TRY",
                    "amount": 45.00000
                },
                "vat": 3.33000,
                "totalPrice": {
                    "currency": "TRY",
                    "amount": 45.00000
                },
                "commission": {
                    "currency": "TRY",
                    "amount": 6.75000
                },
                "unitHBDiscount": {
                    "currency": "TRY",
                    "amount": 0.00000
                },
                "totalHBDiscount": {
                    "currency": "TRY",
                    "amount": 0.00000
                },
                "merchantUnitPrice": {
                    "currency": "TRY",
                    "amount": 45.00000
                },
                "merchantTotalPrice": {
                    "currency": "TRY",
                    "amount": 45.00000
                },
                "cargoPaymentInfo": "Seller",
                "customizedText01": "",
                "customizedText02": "",
                "customizedText03": "",
                "customizedText04": "",
                "properties": [],
                "productName": "Sambucol Plus Kids Yummies 60 Tablet",
                "orderNumber": "0632611190",
                "orderDate": "2019-10-18T12:12:54.4026986",
                "deliveryType": "Standart Teslimat",
                "customerDelivery": null,
                "pickupTime": null
            }
        ]
    },
    {
        "id": "c25a8299-af56-414a-9b91-4dfb1a6e0e19",
        "status": "Open",
        "customerId": "e1c5c242-6266-4db3-a601-5c731c134458",
        "orderDate": "2019-10-30T18:33:20.6335964",
        "dueDate": "2019-11-01T15:00:00",
        "unpackedDate": null,
        "barcode": "6294207426648",
        "packageNumber": "420742664",
        "cargoCompany": "Sürat Kargo",
        "shippingAddressDetail": "Yurt mahallesi 71501 sokak Ongun apartmanı kat 8 daire 16 Çukurova Adana YURT ÇUKUROVA Adana",
        "recipientName": "Senem Yağmur  Arıkan ",
        "shippingCountryCode": "TR",
        "shippingDistrict": "YURT",
        "shippingTown": "ÇUKUROVA",
        "shippingCity": "Adana",
        "email": "tedarikciiletisim@hepsiburada.com",
        "phoneNumber": "",
        "companyName": "Senem Yağmur  Arıkan ",
        "billingAddress": "Yurt mahallesi 71501 sokak Ongun apartmanı kat 8 daire 16 Çukurova Adana YURT ÇUKUROVA Adana",
        "billingCity": "Adana",
        "billingTown": "ÇUKUROVA",
        "billingDistrict": "YURT",
        "taxOffice": null,
        "taxNumber": "",
        "identityNo": "99999999999",
        "items": [
            {
                "lineItemId": "0332f19c-8218-4faf-872a-253d16f0f637",
                "listingId": "9bf98db1-d811-4770-b0d5-822c131baf1d",
                "merchantId": "7666c89d-628b-4e5b-af5e-0e942cffcc20",
                "hbSku": "SPORFITCCI110",
                "merchantSku": "STK45",
                "quantity": 1,
                "price": {
                    "currency": "TRY",
                    "amount": 29.00000
                },
                "vat": 2.15000,
                "totalPrice": {
                    "currency": "TRY",
                    "amount": 29.00000
                },
                "commission": {
                    "currency": "TRY",
                    "amount": 4.35000
                },
                "unitHBDiscount": {
                    "currency": "TRY",
                    "amount": 0.00000
                },
                "totalHBDiscount": {
                    "currency": "TRY",
                    "amount": 0.00000
                },
                "merchantUnitPrice": {
                    "currency": "TRY",
                    "amount": 29.00000
                },
                "merchantTotalPrice": {
                    "currency": "TRY",
                    "amount": 29.00000
                },
                "cargoPaymentInfo": "Seller",
                "customizedText01": "",
                "customizedText02": "",
                "customizedText03": "",
                "customizedText04": "",
                "properties": [],
                "productName": "Matriks CC-II 30 Kapsül",
                "orderNumber": "0662693121",
                "orderDate": "2019-10-30T18:33:20.6335964",
                "deliveryType": "Standart Teslimat",
                "customerDelivery": null,
                "pickupTime": null
            }
        ]
    },
    {
        "id": "8800fe93-0e35-429f-988d-5499201e0db3",
        "status": "Open",
        "customerId": "581940b3-e68d-44fa-bc19-345d58edc3d6",
        "orderDate": "2019-10-30T15:34:37.4319677",
        "dueDate": "2019-10-31T15:00:00",
        "unpackedDate": null,
        "barcode": "6296499784291",
        "packageNumber": "649978429",
        "cargoCompany": "Sürat Kargo",
        "shippingAddressDetail": "Saraç İshak Mh.Soğanağa Camii Sok. NO.34 FATİH-BEYAZIT-İSTANBUL BEYAZIT FATİH İstanbul",
        "recipientName": "MELEK ŞİŞMAN",
        "shippingCountryCode": "TR",
        "shippingDistrict": "BEYAZIT",
        "shippingTown": "FATİH",
        "shippingCity": "İstanbul",
        "email": "tedarikciiletisim@hepsiburada.com",
        "phoneNumber": "",
        "companyName": "MELEK ŞİŞMAN",
        "billingAddress": "Salih Paşa Cd. NO.41-43 Gaziosmanpaşa-İST. MERKEZ GAZİOSMANPAŞA İstanbul",
        "billingCity": "İstanbul",
        "billingTown": "GAZİOSMANPAŞA",
        "billingDistrict": "MERKEZ",
        "taxOffice": null,
        "taxNumber": "",
        "identityNo": "99999999999",
        "items": [
            {
                "lineItemId": "1f22fb8a-ffc2-4d81-8b26-bf9bb4e50257",
                "listingId": "e45c3fae-9465-4151-b31e-16c200a791bc",
                "merchantId": "7666c89d-628b-4e5b-af5e-0e942cffcc20",
                "hbSku": "HBV00000EJ8CK",
                "merchantSku": "HBV00000EJ8CK",
                "quantity": 1,
                "price": {
                    "currency": "TRY",
                    "amount": 23.50000
                },
                "vat": 1.74000,
                "totalPrice": {
                    "currency": "TRY",
                    "amount": 23.50000
                },
                "commission": {
                    "currency": "TRY",
                    "amount": 4.00000
                },
                "unitHBDiscount": {
                    "currency": "TRY",
                    "amount": 1.50120
                },
                "totalHBDiscount": {
                    "currency": "TRY",
                    "amount": 1.50120
                },
                "merchantUnitPrice": {
                    "currency": "TRY",
                    "amount": 25.00120
                },
                "merchantTotalPrice": {
                    "currency": "TRY",
                    "amount": 25.00120
                },
                "cargoPaymentInfo": "Seller",
                "customizedText01": "",
                "customizedText02": "",
                "customizedText03": "",
                "customizedText04": "",
                "properties": [],
                "productName": "Redoxon Kids Çiğnenebilir Takviye Edici Gıda 25 Adet",
                "orderNumber": "0726510945",
                "orderDate": "2019-10-30T15:34:37.4319677",
                "deliveryType": "Standart Teslimat",
                "customerDelivery": null,
                "pickupTime": null
            }
        ]
    },
    {
        "id": "7cde4dfb-6d96-46ea-bc03-8461b63d1ba3",
        "status": "Open",
        "customerId": "278aac67-1fa1-49e4-9243-5edff4905465",
        "orderDate": "2019-10-30T21:30:11.7689192",
        "dueDate": "2019-10-31T15:00:00",
        "unpackedDate": null,
        "barcode": "6291929244840",
        "packageNumber": "192924484",
        "cargoCompany": "Sürat Kargo",
        "shippingAddressDetail": "sancaktepe mh. 899. sk. No: 17 D: 2 SANCAKTEPE/BAĞCILAR BAĞCILAR İstanbul",
        "recipientName": "bünyamin karaarslan",
        "shippingCountryCode": "TR",
        "shippingDistrict": "SANCAKTEPE/BAĞCILAR",
        "shippingTown": "BAĞCILAR",
        "shippingCity": "İstanbul",
        "email": "tedarikciiletisim@hepsiburada.com",
        "phoneNumber": "",
        "companyName": "FORTECH BGS ve KIRTASIYE ",
        "billingAddress": "inönü mh. 26/9 sk. no : 43 Reyyan Kırtasiye 34203 İNÖNÜ/BAĞCILAR BAĞCILAR İstanbul",
        "billingCity": "İstanbul",
        "billingTown": "BAĞCILAR",
        "billingDistrict": "İNÖNÜ/BAĞCILAR",
        "taxOffice": "kocasinan",
        "taxNumber": "42793370892",
        "identityNo": null,
        "items": [
            {
                "lineItemId": "2f6de51d-6a33-4080-bbff-b10f33313c5d",
                "listingId": "e45c3fae-9465-4151-b31e-16c200a791bc",
                "merchantId": "7666c89d-628b-4e5b-af5e-0e942cffcc20",
                "hbSku": "HBV00000EJ8CK",
                "merchantSku": "HBV00000EJ8CK",
                "quantity": 1,
                "price": {
                    "currency": "TRY",
                    "amount": 23.50000
                },
                "vat": 1.74000,
                "totalPrice": {
                    "currency": "TRY",
                    "amount": 23.50000
                },
                "commission": {
                    "currency": "TRY",
                    "amount": 4.00000
                },
                "unitHBDiscount": {
                    "currency": "TRY",
                    "amount": 1.50120
                },
                "totalHBDiscount": {
                    "currency": "TRY",
                    "amount": 1.50120
                },
                "merchantUnitPrice": {
                    "currency": "TRY",
                    "amount": 25.00120
                },
                "merchantTotalPrice": {
                    "currency": "TRY",
                    "amount": 25.00120
                },
                "cargoPaymentInfo": "Seller",
                "customizedText01": "",
                "customizedText02": "",
                "customizedText03": "",
                "customizedText04": "",
                "properties": [],
                "productName": "Redoxon Kids Çiğnenebilir Takviye Edici Gıda 25 Adet",
                "orderNumber": "0456600352",
                "orderDate": "2019-10-30T21:30:11.7689192",
                "deliveryType": "Standart Teslimat",
                "customerDelivery": null,
                "pickupTime": null
            }
        ]
    },
    {
        "id": "24fea740-8553-4403-a2ba-93c645654910",
        "status": "Open",
        "customerId": "93a209eb-3929-40fa-82f9-43ea741154ef",
        "orderDate": "2019-10-30T12:02:04.6597153",
        "dueDate": "2019-11-01T15:00:00",
        "unpackedDate": null,
        "barcode": "6290397206626",
        "packageNumber": "039720662",
        "cargoCompany": "Sürat Kargo",
        "shippingAddressDetail": "büyükdere mahallesi mehmet osman sokak no 86 /A BÜYÜKDERE ODUNPAZARI Eskişehir",
        "recipientName": "MUSTAFA KOZLU",
        "shippingCountryCode": "TR",
        "shippingDistrict": "BÜYÜKDERE",
        "shippingTown": "ODUNPAZARI",
        "shippingCity": "Eskişehir",
        "email": "tedarikciiletisim@hepsiburada.com",
        "phoneNumber": "",
        "companyName": "MUSTAFA KOZLU",
        "billingAddress": "büyükdere mahallesi mehmet osman sokak no 86 /A - BÜYÜKDERE ODUNPAZARI Eskişehir",
        "billingCity": "Eskişehir",
        "billingTown": "ODUNPAZARI",
        "billingDistrict": "BÜYÜKDERE",
        "taxOffice": null,
        "taxNumber": "",
        "identityNo": "99999999999",
        "items": [
            {
                "lineItemId": "78cab86b-ba5e-4c59-b77f-0a255d48c837",
                "listingId": "9bf98db1-d811-4770-b0d5-822c131baf1d",
                "merchantId": "7666c89d-628b-4e5b-af5e-0e942cffcc20",
                "hbSku": "SPORFITCCI110",
                "merchantSku": "STK45",
                "quantity": 1,
                "price": {
                    "currency": "TRY",
                    "amount": 29.00000
                },
                "vat": 2.15000,
                "totalPrice": {
                    "currency": "TRY",
                    "amount": 29.00000
                },
                "commission": {
                    "currency": "TRY",
                    "amount": 4.35000
                },
                "unitHBDiscount": {
                    "currency": "TRY",
                    "amount": 0.00000
                },
                "totalHBDiscount": {
                    "currency": "TRY",
                    "amount": 0.00000
                },
                "merchantUnitPrice": {
                    "currency": "TRY",
                    "amount": 29.00000
                },
                "merchantTotalPrice": {
                    "currency": "TRY",
                    "amount": 29.00000
                },
                "cargoPaymentInfo": "Seller",
                "customizedText01": "",
                "customizedText02": "",
                "customizedText03": "",
                "customizedText04": "",
                "properties": [],
                "productName": "Matriks CC-II 30 Kapsül",
                "orderNumber": "0186443116",
                "orderDate": "2019-10-30T12:02:04.6597153",
                "deliveryType": "Standart Teslimat",
                "customerDelivery": null,
                "pickupTime": null
            },
            {
                "lineItemId": "ff0bfc0f-af17-45a0-acd9-0bb047a86ab0",
                "listingId": "9bf98db1-d811-4770-b0d5-822c131baf1d",
                "merchantId": "7666c89d-628b-4e5b-af5e-0e942cffcc20",
                "hbSku": "SPORFITCCI110",
                "merchantSku": "STK45",
                "quantity": 1,
                "price": {
                    "currency": "TRY",
                    "amount": 29.00000
                },
                "vat": 2.15000,
                "totalPrice": {
                    "currency": "TRY",
                    "amount": 29.00000
                },
                "commission": {
                    "currency": "TRY",
                    "amount": 4.35000
                },
                "unitHBDiscount": {
                    "currency": "TRY",
                    "amount": 0.00000
                },
                "totalHBDiscount": {
                    "currency": "TRY",
                    "amount": 0.00000
                },
                "merchantUnitPrice": {
                    "currency": "TRY",
                    "amount": 29.00000
                },
                "merchantTotalPrice": {
                    "currency": "TRY",
                    "amount": 29.00000
                },
                "cargoPaymentInfo": "Seller",
                "customizedText01": "",
                "customizedText02": "",
                "customizedText03": "",
                "customizedText04": "",
                "properties": [],
                "productName": "Matriks CC-II 30 Kapsül",
                "orderNumber": "0186443116",
                "orderDate": "2019-10-30T12:02:04.6597153",
                "deliveryType": "Standart Teslimat",
                "customerDelivery": null,
                "pickupTime": null
            },
            {
                "lineItemId": "a180494b-be5f-4d52-88cf-c9a0272c22b8",
                "listingId": "9bf98db1-d811-4770-b0d5-822c131baf1d",
                "merchantId": "7666c89d-628b-4e5b-af5e-0e942cffcc20",
                "hbSku": "SPORFITCCI110",
                "merchantSku": "STK45",
                "quantity": 1,
                "price": {
                    "currency": "TRY",
                    "amount": 29.00000
                },
                "vat": 2.15000,
                "totalPrice": {
                    "currency": "TRY",
                    "amount": 29.00000
                },
                "commission": {
                    "currency": "TRY",
                    "amount": 4.35000
                },
                "unitHBDiscount": {
                    "currency": "TRY",
                    "amount": 0.00000
                },
                "totalHBDiscount": {
                    "currency": "TRY",
                    "amount": 0.00000
                },
                "merchantUnitPrice": {
                    "currency": "TRY",
                    "amount": 29.00000
                },
                "merchantTotalPrice": {
                    "currency": "TRY",
                    "amount": 29.00000
                },
                "cargoPaymentInfo": "Seller",
                "customizedText01": "",
                "customizedText02": "",
                "customizedText03": "",
                "customizedText04": "",
                "properties": [],
                "productName": "Matriks CC-II 30 Kapsül",
                "orderNumber": "0186443116",
                "orderDate": "2019-10-30T12:02:04.6597153",
                "deliveryType": "Standart Teslimat",
                "customerDelivery": null,
                "pickupTime": null
            },
            {
                "lineItemId": "e68a51f4-ea67-49a3-93da-b9b7dcefbcb0",
                "listingId": "9bf98db1-d811-4770-b0d5-822c131baf1d",
                "merchantId": "7666c89d-628b-4e5b-af5e-0e942cffcc20",
                "hbSku": "SPORFITCCI110",
                "merchantSku": "STK45",
                "quantity": 1,
                "price": {
                    "currency": "TRY",
                    "amount": 29.00000
                },
                "vat": 2.15000,
                "totalPrice": {
                    "currency": "TRY",
                    "amount": 29.00000
                },
                "commission": {
                    "currency": "TRY",
                    "amount": 4.35000
                },
                "unitHBDiscount": {
                    "currency": "TRY",
                    "amount": 0.00000
                },
                "totalHBDiscount": {
                    "currency": "TRY",
                    "amount": 0.00000
                },
                "merchantUnitPrice": {
                    "currency": "TRY",
                    "amount": 29.00000
                },
                "merchantTotalPrice": {
                    "currency": "TRY",
                    "amount": 29.00000
                },
                "cargoPaymentInfo": "Seller",
                "customizedText01": "",
                "customizedText02": "",
                "customizedText03": "",
                "customizedText04": "",
                "properties": [],
                "productName": "Matriks CC-II 30 Kapsül",
                "orderNumber": "0186443116",
                "orderDate": "2019-10-30T12:02:04.6597153",
                "deliveryType": "Standart Teslimat",
                "customerDelivery": null,
                "pickupTime": null
            }
        ]
    },
    {
        "id": "27cc6874-21bc-49bb-9ff3-99388aabc8bd",
        "status": "Unpacked",
        "customerId": "fb62aad0-9b0a-4878-8bd9-f3a87cc7fc1e",
        "orderDate": "2019-10-18T11:04:20.4170777",
        "dueDate": "2019-10-18T15:00:00",
        "unpackedDate": "2019-10-30T11:14:25.923",
        "barcode": "6296861691769",
        "packageNumber": "686169176",
        "cargoCompany": "Sürat Kargo",
        "shippingAddressDetail": "Eczacıbaşı Girişim Binası\r\nRüzgarlı Bahçe Mahallesi,\r\nKavak Sokak No:20 34805 KAVACIK BEYKOZ İstanbul",
        "recipientName": "Alpaslan  İtez",
        "shippingCountryCode": "TR",
        "shippingDistrict": "KAVACIK",
        "shippingTown": "BEYKOZ",
        "shippingCity": "İstanbul",
        "email": "tedarikciiletisim@hepsiburada.com",
        "phoneNumber": "",
        "companyName": "Alpaslan  İtez",
        "billingAddress": "Eczacıbaşı Girişim Binası\r\nRüzgarlı Bahçe Mahallesi,\r\nKavak Sokak No:20 34805 KAVACIK BEYKOZ İstanbul",
        "billingCity": "İstanbul",
        "billingTown": "BEYKOZ",
        "billingDistrict": "KAVACIK",
        "taxOffice": null,
        "taxNumber": "",
        "identityNo": "33460975748",
        "items": [
            {
                "lineItemId": "8585a252-a8fc-4ba1-84b5-b7f81e238032",
                "listingId": "28983e5b-c37d-4d45-af5a-b9af94629ed2",
                "merchantId": "7666c89d-628b-4e5b-af5e-0e942cffcc20",
                "hbSku": "HBV00000385OJ",
                "merchantSku": "HBV00000385OJ",
                "quantity": 1,
                "price": {
                    "currency": "TRY",
                    "amount": 45.00000
                },
                "vat": 3.33000,
                "totalPrice": {
                    "currency": "TRY",
                    "amount": 45.00000
                },
                "commission": {
                    "currency": "TRY",
                    "amount": 6.75000
                },
                "unitHBDiscount": {
                    "currency": "TRY",
                    "amount": 0.00000
                },
                "totalHBDiscount": {
                    "currency": "TRY",
                    "amount": 0.00000
                },
                "merchantUnitPrice": {
                    "currency": "TRY",
                    "amount": 45.00000
                },
                "merchantTotalPrice": {
                    "currency": "TRY",
                    "amount": 45.00000
                },
                "cargoPaymentInfo": "Seller",
                "customizedText01": "",
                "customizedText02": "",
                "customizedText03": "",
                "customizedText04": "",
                "properties": [],
                "productName": "Sambucol Plus Kids Yummies 60 Tablet",
                "orderNumber": "0501475431",
                "orderDate": "2019-10-18T11:04:20.4170777",
                "deliveryType": "Standart Teslimat",
                "customerDelivery": null,
                "pickupTime": null
            }
        ]
    },
    {
        "id": "6257a9ff-5b67-4083-811e-99d944248016",
        "status": "Open",
        "customerId": "06044a0d-06cc-4958-87ed-8e826c64b361",
        "orderDate": "2019-10-30T11:39:36.7675305",
        "dueDate": "2019-10-30T15:00:00",
        "unpackedDate": null,
        "barcode": "6290547502905",
        "packageNumber": "054750290",
        "cargoCompany": "Sürat Kargo",
        "shippingAddressDetail": "Hüseyin çokal cad ekşioglu piramit residanse c blok kat 3 no7 ŞEMİKLER MERKEZEFENDİ Denizli",
        "recipientName": "Fatma Kara",
        "shippingCountryCode": "TR",
        "shippingDistrict": "ŞEMİKLER",
        "shippingTown": "MERKEZEFENDİ",
        "shippingCity": "Denizli",
        "email": "tedarikciiletisim@hepsiburada.com",
        "phoneNumber": "",
        "companyName": "Fatma Kara",
        "billingAddress": "Hüseyin çokal cad ekşioglu piramit residanse c blok kat 3 no7 ŞEMİKLER MERKEZEFENDİ Denizli",
        "billingCity": "Denizli",
        "billingTown": "MERKEZEFENDİ",
        "billingDistrict": "ŞEMİKLER",
        "taxOffice": null,
        "taxNumber": "",
        "identityNo": "99999999999",
        "items": [
            {
                "lineItemId": "6141361e-8cab-48ae-97da-740c6fa3789d",
                "listingId": "e45c3fae-9465-4151-b31e-16c200a791bc",
                "merchantId": "7666c89d-628b-4e5b-af5e-0e942cffcc20",
                "hbSku": "HBV00000EJ8CK",
                "merchantSku": "HBV00000EJ8CK",
                "quantity": 2,
                "price": {
                    "currency": "TRY",
                    "amount": 23.50000
                },
                "vat": 3.48000,
                "totalPrice": {
                    "currency": "TRY",
                    "amount": 47.00000
                },
                "commission": {
                    "currency": "TRY",
                    "amount": 4.00000
                },
                "unitHBDiscount": {
                    "currency": "TRY",
                    "amount": 0.00000
                },
                "totalHBDiscount": {
                    "currency": "TRY",
                    "amount": 0.00000
                },
                "merchantUnitPrice": {
                    "currency": "TRY",
                    "amount": 23.50000
                },
                "merchantTotalPrice": {
                    "currency": "TRY",
                    "amount": 47.00000
                },
                "cargoPaymentInfo": "Seller",
                "customizedText01": "",
                "customizedText02": "",
                "customizedText03": "",
                "customizedText04": "",
                "properties": [],
                "productName": "Redoxon Kids Çiğnenebilir Takviye Edici Gıda 25 Adet",
                "orderNumber": "0259169053",
                "orderDate": "2019-10-30T11:39:36.7675305",
                "deliveryType": "Standart Teslimat",
                "customerDelivery": null,
                "pickupTime": null
            }
        ]
    },
    {
        "id": "04ddb2d5-663c-4eb2-8ab9-9b48b12d77ec",
        "status": "Open",
        "customerId": "a1571053-9cad-4883-9edd-5c9ebe0b97a0",
        "orderDate": "2019-10-31T01:24:53.7633038",
        "dueDate": "2019-11-01T15:00:00",
        "unpackedDate": null,
        "barcode": "6293602133748",
        "packageNumber": "360213374",
        "cargoCompany": "Sürat Kargo",
        "shippingAddressDetail": "latif başkal asm ESENYURT MELİKGAZİ Kayseri",
        "recipientName": "ziya aktan",
        "shippingCountryCode": "TR",
        "shippingDistrict": "ESENYURT",
        "shippingTown": "MELİKGAZİ",
        "shippingCity": "Kayseri",
        "email": "tedarikciiletisim@hepsiburada.com",
        "phoneNumber": "",
        "companyName": "ziya aktan",
        "billingAddress": "latif başkal asm ESENYURT MELİKGAZİ Kayseri",
        "billingCity": "Kayseri",
        "billingTown": "MELİKGAZİ",
        "billingDistrict": "ESENYURT",
        "taxOffice": null,
        "taxNumber": "",
        "identityNo": "99999999999",
        "items": [
            {
                "lineItemId": "e096f276-aa11-48af-91c5-be987d210bf0",
                "listingId": "9bf98db1-d811-4770-b0d5-822c131baf1d",
                "merchantId": "7666c89d-628b-4e5b-af5e-0e942cffcc20",
                "hbSku": "SPORFITCCI110",
                "merchantSku": "STK45",
                "quantity": 10,
                "price": {
                    "currency": "TRY",
                    "amount": 28.99800
                },
                "vat": 21.48000,
                "totalPrice": {
                    "currency": "TRY",
                    "amount": 289.98000
                },
                "commission": {
                    "currency": "TRY",
                    "amount": 4.35000
                },
                "unitHBDiscount": {
                    "currency": "TRY",
                    "amount": 0.00000
                },
                "totalHBDiscount": {
                    "currency": "TRY",
                    "amount": 0.00000
                },
                "merchantUnitPrice": {
                    "currency": "TRY",
                    "amount": 28.99800
                },
                "merchantTotalPrice": {
                    "currency": "TRY",
                    "amount": 289.98000
                },
                "cargoPaymentInfo": "Seller",
                "customizedText01": "",
                "customizedText02": "",
                "customizedText03": "",
                "customizedText04": "",
                "properties": [],
                "productName": "Matriks CC-II 30 Kapsül",
                "orderNumber": "0262256227",
                "orderDate": "2019-10-31T01:24:53.7633038",
                "deliveryType": "Standart Teslimat",
                "customerDelivery": null,
                "pickupTime": null
            }
        ]
    },
    {
        "id": "5edb1d80-d68b-4ba6-94a2-a82cca6944bc",
        "status": "Open",
        "customerId": "7d84423d-c99b-449e-ab80-0b3e3cbf050c",
        "orderDate": "2019-10-30T16:56:21.6025449",
        "dueDate": "2019-11-01T15:00:00",
        "unpackedDate": null,
        "barcode": "6294641305684",
        "packageNumber": "464130568",
        "cargoCompany": "Sürat Kargo",
        "shippingAddressDetail": "Güzelyalı Mah. 81193,sok Sıla Apt.Kat 1 D1 01170 ÇUKUROVA Adana",
        "recipientName": "Neslihan Yılmaz",
        "shippingCountryCode": "TR",
        "shippingDistrict": "",
        "shippingTown": "ÇUKUROVA",
        "shippingCity": "Adana",
        "email": "tedarikciiletisim@hepsiburada.com",
        "phoneNumber": "",
        "companyName": "Neslihan Yılmaz",
        "billingAddress": "Güzelyalı Mah. 81193,sok Sıla Apt. Kat1 D1 01170 ÇUKUROVA Adana",
        "billingCity": "Adana",
        "billingTown": "ÇUKUROVA",
        "billingDistrict": "",
        "taxOffice": null,
        "taxNumber": "",
        "identityNo": "99999999999",
        "items": [
            {
                "lineItemId": "6acf3824-06ce-4c3c-93df-398f1754424d",
                "listingId": "9bf98db1-d811-4770-b0d5-822c131baf1d",
                "merchantId": "7666c89d-628b-4e5b-af5e-0e942cffcc20",
                "hbSku": "SPORFITCCI110",
                "merchantSku": "STK45",
                "quantity": 2,
                "price": {
                    "currency": "TRY",
                    "amount": 29.00000
                },
                "vat": 4.30000,
                "totalPrice": {
                    "currency": "TRY",
                    "amount": 58.00000
                },
                "commission": {
                    "currency": "TRY",
                    "amount": 4.35000
                },
                "unitHBDiscount": {
                    "currency": "TRY",
                    "amount": 0.00000
                },
                "totalHBDiscount": {
                    "currency": "TRY",
                    "amount": 0.00000
                },
                "merchantUnitPrice": {
                    "currency": "TRY",
                    "amount": 29.00000
                },
                "merchantTotalPrice": {
                    "currency": "TRY",
                    "amount": 58.00000
                },
                "cargoPaymentInfo": "Seller",
                "customizedText01": "",
                "customizedText02": "",
                "customizedText03": "",
                "customizedText04": "",
                "properties": [],
                "productName": "Matriks CC-II 30 Kapsül",
                "orderNumber": "0670470708",
                "orderDate": "2019-10-30T16:56:21.6025449",
                "deliveryType": "Standart Teslimat",
                "customerDelivery": null,
                "pickupTime": null
            }
        ]
    },
    {
        "id": "494770a9-59fd-4333-9f24-c1cc0ff3b531",
        "status": "Open",
        "customerId": "dbde79ad-0b4d-4ec9-bb04-52e937cbd430",
        "orderDate": "2019-10-30T11:41:36.1933739",
        "dueDate": "2019-10-30T20:00:00",
        "unpackedDate": null,
        "barcode": "6290468024234",
        "packageNumber": "046802423",
        "cargoCompany": "Sürat Kargo",
        "shippingAddressDetail": "75. Yil mh. Cumhuriyet cd. No 65 kat 1 daire 2 sultangazi 75. YIL SULTANGAZİ İstanbul",
        "recipientName": "deniz Ilbeyi",
        "shippingCountryCode": "TR",
        "shippingDistrict": "75. YIL",
        "shippingTown": "SULTANGAZİ",
        "shippingCity": "İstanbul",
        "email": "tedarikciiletisim@hepsiburada.com",
        "phoneNumber": "",
        "companyName": "deniz llbeyi ",
        "billingAddress": "cumhuriyet cd. no 65 kat 1 daire 2 75. YIL SULTANGAZİ İstanbul",
        "billingCity": "İstanbul",
        "billingTown": "SULTANGAZİ",
        "billingDistrict": "75. YIL",
        "taxOffice": "küçükköy",
        "taxNumber": "36760288426",
        "identityNo": null,
        "items": [
            {
                "lineItemId": "b0d1fae4-242a-4083-ab57-74ef86840bff",
                "listingId": "e45c3fae-9465-4151-b31e-16c200a791bc",
                "merchantId": "7666c89d-628b-4e5b-af5e-0e942cffcc20",
                "hbSku": "HBV00000EJ8CK",
                "merchantSku": "HBV00000EJ8CK",
                "quantity": 1,
                "price": {
                    "currency": "TRY",
                    "amount": 23.50000
                },
                "vat": 1.74000,
                "totalPrice": {
                    "currency": "TRY",
                    "amount": 23.50000
                },
                "commission": {
                    "currency": "TRY",
                    "amount": 4.00000
                },
                "unitHBDiscount": {
                    "currency": "TRY",
                    "amount": 0.00000
                },
                "totalHBDiscount": {
                    "currency": "TRY",
                    "amount": 0.00000
                },
                "merchantUnitPrice": {
                    "currency": "TRY",
                    "amount": 23.50000
                },
                "merchantTotalPrice": {
                    "currency": "TRY",
                    "amount": 23.50000
                },
                "cargoPaymentInfo": "Seller",
                "customizedText01": "",
                "customizedText02": "",
                "customizedText03": "",
                "customizedText04": "",
                "properties": [],
                "productName": "Redoxon Kids Çiğnenebilir Takviye Edici Gıda 25 Adet",
                "orderNumber": "0797415389",
                "orderDate": "2019-10-30T11:41:36.1933739",
                "deliveryType": "Standart Teslimat",
                "customerDelivery": null,
                "pickupTime": null
            }
        ]
    },
    {
        "id": "9e6b0960-3a96-40d7-b60d-c2a0e1540f94",
        "status": "Open",
        "customerId": "d9e4f1bf-7157-4785-88d8-dec3d4e24e82",
        "orderDate": "2019-10-30T14:01:20.6572939",
        "dueDate": "2019-10-31T15:00:00",
        "unpackedDate": null,
        "barcode": "6294169669459",
        "packageNumber": "416966945",
        "cargoCompany": "Sürat Kargo",
        "shippingAddressDetail": "Hasanefendi mah. 1904 sok. No:2 K:5 aydın 09100 HASANEFENDİ-RAMAZAN PAŞA EFELER Aydın",
        "recipientName": "Sevtap  Menteş ",
        "shippingCountryCode": "TR",
        "shippingDistrict": "HASANEFENDİ-RAMAZAN PAŞA",
        "shippingTown": "EFELER",
        "shippingCity": "Aydın",
        "email": "tedarikciiletisim@hepsiburada.com",
        "phoneNumber": "",
        "companyName": "Sevtap  Menteş ",
        "billingAddress": "Cumhuriyet mah. 1965 sok. No:11 aydın 09100 EFELER Aydın",
        "billingCity": "Aydın",
        "billingTown": "EFELER",
        "billingDistrict": "",
        "taxOffice": null,
        "taxNumber": "",
        "identityNo": "99999999999",
        "items": [
            {
                "lineItemId": "b945ff9f-4c34-450d-9e48-55652e04f059",
                "listingId": "e45c3fae-9465-4151-b31e-16c200a791bc",
                "merchantId": "7666c89d-628b-4e5b-af5e-0e942cffcc20",
                "hbSku": "HBV00000EJ8CK",
                "merchantSku": "HBV00000EJ8CK",
                "quantity": 1,
                "price": {
                    "currency": "TRY",
                    "amount": 23.50000
                },
                "vat": 1.74000,
                "totalPrice": {
                    "currency": "TRY",
                    "amount": 23.50000
                },
                "commission": {
                    "currency": "TRY",
                    "amount": 4.00000
                },
                "unitHBDiscount": {
                    "currency": "TRY",
                    "amount": 1.50120
                },
                "totalHBDiscount": {
                    "currency": "TRY",
                    "amount": 1.50120
                },
                "merchantUnitPrice": {
                    "currency": "TRY",
                    "amount": 25.00120
                },
                "merchantTotalPrice": {
                    "currency": "TRY",
                    "amount": 25.00120
                },
                "cargoPaymentInfo": "Seller",
                "customizedText01": "",
                "customizedText02": "",
                "customizedText03": "",
                "customizedText04": "",
                "properties": [],
                "productName": "Redoxon Kids Çiğnenebilir Takviye Edici Gıda 25 Adet",
                "orderNumber": "0801462429",
                "orderDate": "2019-10-30T14:01:20.6572939",
                "deliveryType": "Standart Teslimat",
                "customerDelivery": null,
                "pickupTime": null
            }
        ]
    },
    {
        "id": "b81102d5-4a24-4a4b-bd79-c4f09a0fcb2e",
        "status": "Open",
        "customerId": "832511ad-7b4d-4b1e-9bd0-2f08b718ba73",
        "orderDate": "2019-10-30T20:58:23.2532461",
        "dueDate": "2019-11-01T00:00:00",
        "unpackedDate": null,
        "barcode": "6291658527610",
        "packageNumber": "165852761",
        "cargoCompany": "Sürat Kargo",
        "shippingAddressDetail": "Sanayi mah sanayi sitesi 22 sokak no 4 çağ rot balans ELAZIĞ MERKEZ MERKEZ Elazığ",
        "recipientName": "Harun Akkuzu",
        "shippingCountryCode": "TR",
        "shippingDistrict": "MERKEZ",
        "shippingTown": "MERKEZ",
        "shippingCity": "Elazığ",
        "email": "tedarikciiletisim@hepsiburada.com",
        "phoneNumber": "",
        "companyName": "ÇAĞ ROT BALANS  ",
        "billingAddress": "Sanayi mah sanayi sitesi 22sokak no 4 MERKEZ MERKEZ Elazığ",
        "billingCity": "Elazığ",
        "billingTown": "MERKEZ",
        "billingDistrict": "MERKEZ",
        "taxOffice": "Hazar",
        "taxNumber": "21445806910",
        "identityNo": null,
        "items": [
            {
                "lineItemId": "07b6e48c-3a56-4e57-a022-985b6598f5f7",
                "listingId": "9bf98db1-d811-4770-b0d5-822c131baf1d",
                "merchantId": "7666c89d-628b-4e5b-af5e-0e942cffcc20",
                "hbSku": "SPORFITCCI110",
                "merchantSku": "STK45",
                "quantity": 2,
                "price": {
                    "currency": "TRY",
                    "amount": 29.00000
                },
                "vat": 4.30000,
                "totalPrice": {
                    "currency": "TRY",
                    "amount": 58.00000
                },
                "commission": {
                    "currency": "TRY",
                    "amount": 4.35000
                },
                "unitHBDiscount": {
                    "currency": "TRY",
                    "amount": 0.00000
                },
                "totalHBDiscount": {
                    "currency": "TRY",
                    "amount": 0.00000
                },
                "merchantUnitPrice": {
                    "currency": "TRY",
                    "amount": 29.00000
                },
                "merchantTotalPrice": {
                    "currency": "TRY",
                    "amount": 58.00000
                },
                "cargoPaymentInfo": "Seller",
                "customizedText01": "",
                "customizedText02": "",
                "customizedText03": "",
                "customizedText04": "",
                "properties": [],
                "productName": "Matriks CC-II 30 Kapsül",
                "orderNumber": "0307459440",
                "orderDate": "2019-10-30T20:58:23.2532461",
                "deliveryType": "Standart Teslimat",
                "customerDelivery": null,
                "pickupTime": null
            }
        ]
    },
    {
        "id": "6091d6ab-119b-4577-9bac-ecd88d843bc3",
        "status": "Open",
        "customerId": "9802386a-18ee-4497-bbd6-d0759444de06",
        "orderDate": "2019-10-30T16:56:35.7436691",
        "dueDate": "2019-10-31T15:00:00",
        "unpackedDate": null,
        "barcode": "6298852018425",
        "packageNumber": "885201842",
        "cargoCompany": "Sürat Kargo",
        "shippingAddressDetail": "fatih sultan mah.üniversite cad.arsia apart no:44 BAĞLICA ETİMESGUT ANKARA BAĞLICA ETİMESGUT Ankara",
        "recipientName": "veli can çınar",
        "shippingCountryCode": "TR",
        "shippingDistrict": "BAĞLICA",
        "shippingTown": "ETİMESGUT",
        "shippingCity": "Ankara",
        "email": "tedarikciiletisim@hepsiburada.com",
        "phoneNumber": "",
        "companyName": "veli can çınar",
        "billingAddress": "fatih sultan mah.üniversite cad.arsia apart no:44 BAĞLICA ETİMESGUT ANKARA BAĞLICA ETİMESGUT Ankara",
        "billingCity": "Ankara",
        "billingTown": "ETİMESGUT",
        "billingDistrict": "BAĞLICA",
        "taxOffice": null,
        "taxNumber": "",
        "identityNo": "99999999999",
        "items": [
            {
                "lineItemId": "a6eeb3dd-d12a-4350-94bf-98af36f51f3f",
                "listingId": "e090b903-8d4f-4b97-a447-9275d143babc",
                "merchantId": "7666c89d-628b-4e5b-af5e-0e942cffcc20",
                "hbSku": "SGUCIL9314",
                "merchantSku": "54132AFRZ3",
                "quantity": 1,
                "price": {
                    "currency": "TRY",
                    "amount": 94.49000
                },
                "vat": 14.41000,
                "totalPrice": {
                    "currency": "TRY",
                    "amount": 94.49000
                },
                "commission": {
                    "currency": "TRY",
                    "amount": 13.23000
                },
                "unitHBDiscount": {
                    "currency": "TRY",
                    "amount": 0.00000
                },
                "totalHBDiscount": {
                    "currency": "TRY",
                    "amount": 0.00000
                },
                "merchantUnitPrice": {
                    "currency": "TRY",
                    "amount": 94.49000
                },
                "merchantTotalPrice": {
                    "currency": "TRY",
                    "amount": 94.49000
                },
                "cargoPaymentInfo": "Seller",
                "customizedText01": "",
                "customizedText02": "",
                "customizedText03": "",
                "customizedText04": "",
                "properties": [],
                "productName": "Priorin Şampuan 3 Al 2 Öde ( Yağlı Saçlar) Saç Dökülmesine Karşı",
                "orderNumber": "0238975280",
                "orderDate": "2019-10-30T16:56:35.7436691",
                "deliveryType": "Standart Teslimat",
                "customerDelivery": null,
                "pickupTime": null
            }
        ]
    },
    {
        "id": "cd17165d-32a7-424c-84f6-fc498df1d79f",
        "status": "Open",
        "customerId": "933d0d34-63aa-489f-8727-36f7f89e3157",
        "orderDate": "2019-10-30T11:47:35.5430113",
        "dueDate": "2019-10-30T15:00:00",
        "unpackedDate": null,
        "barcode": "6293593148462",
        "packageNumber": "359314846",
        "cargoCompany": "Sürat Kargo",
        "shippingAddressDetail": "ZÜMRÜTEVLER MAH. URAL SOK. NO.22 NAS PLAZA, B BLOK, KAT:1 CHINT ELEKTRIK A.Ş. 34852 ZÜMRÜTEVLER MALTEPE İstanbul",
        "recipientName": "TUERXUNJIANG SHABIER",
        "shippingCountryCode": "TR",
        "shippingDistrict": "ZÜMRÜTEVLER",
        "shippingTown": "MALTEPE",
        "shippingCity": "İstanbul",
        "email": "tedarikciiletisim@hepsiburada.com",
        "phoneNumber": "",
        "companyName": "TUERXUNJIANG SHABIER",
        "billingAddress": "ZÜMRÜTEVLER MAH. URAL SOK. NO.22 NAS PLAZA, B BLOK, KAT:1 CHINT ELEKTRIK A.Ş. 34852 ZÜMRÜTEVLER MALTEPE İstanbul",
        "billingCity": "İstanbul",
        "billingTown": "MALTEPE",
        "billingDistrict": "ZÜMRÜTEVLER",
        "taxOffice": null,
        "taxNumber": "",
        "identityNo": "99999999999",
        "items": [
            {
                "lineItemId": "5d2b807a-8788-44c1-b148-46a5d05a01e5",
                "listingId": "e45c3fae-9465-4151-b31e-16c200a791bc",
                "merchantId": "7666c89d-628b-4e5b-af5e-0e942cffcc20",
                "hbSku": "HBV00000EJ8CK",
                "merchantSku": "HBV00000EJ8CK",
                "quantity": 1,
                "price": {
                    "currency": "TRY",
                    "amount": 23.50000
                },
                "vat": 1.74000,
                "totalPrice": {
                    "currency": "TRY",
                    "amount": 23.50000
                },
                "commission": {
                    "currency": "TRY",
                    "amount": 4.00000
                },
                "unitHBDiscount": {
                    "currency": "TRY",
                    "amount": 0.00000
                },
                "totalHBDiscount": {
                    "currency": "TRY",
                    "amount": 0.00000
                },
                "merchantUnitPrice": {
                    "currency": "TRY",
                    "amount": 23.50000
                },
                "merchantTotalPrice": {
                    "currency": "TRY",
                    "amount": 23.50000
                },
                "cargoPaymentInfo": "Seller",
                "customizedText01": "",
                "customizedText02": "",
                "customizedText03": "",
                "customizedText04": "",
                "properties": [],
                "productName": "Redoxon Kids Çiğnenebilir Takviye Edici Gıda 25 Adet",
                "orderNumber": "0521260555",
                "orderDate": "2019-10-30T11:47:35.5430113",
                "deliveryType": "Standart Teslimat",
                "customerDelivery": null,
                "pickupTime": null
            }
        ]
    }
]';
 return json_decode($data);
    } 


public function getOrder() {


$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "https://oms-external.hepsiburada.com/packages/merchantid/7666c89d-628b-4e5b-af5e-0e942cffcc20?timespan=150",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "GET",
  CURLOPT_HTTPHEADER => array(
    "Authorization: Basic ZGVybWVsYV9kZXY6RGUxMjM0NSE=,Basic ZGVybWVsYV9kZXY6M3I3d2tFcUhQOU16R2Qh",
    "Postman-Token: 95f1364d-643a-480d-9f73-29425d8419c4",
    "cache-control: no-cache"
  ),
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
  echo "cURL Error #:" . $err;
} else {
  echo $response;
}

	
// 	$curl = curl_init();

// curl_setopt_array($curl, array(
//   CURLOPT_URL => "https:/oms-external.hepsiburada.com/packages/merchantid/7666c89d-628b-4e5b-af5e-0e942cffcc20?timespan=180",
//   CURLOPT_RETURNTRANSFER => true,
//   CURLOPT_ENCODING => "",
//   CURLOPT_MAXREDIRS => 10,
//   CURL_VERSION_SSL => false,
//   CURLOPT_TIMEOUT => 30,
//   CURLOPT_SSLVERSION => 6,
//   CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
//   CURLOPT_CUSTOMREQUEST => "GET",
//   CURLOPT_HTTPHEADER => array(
//     "authorization: Basic ZGVybWVsYV9kZXY6RGUxMjM0NSE=",
//     "cache-control: no-cache",
//     "postman-token: 7d9aef02-d84f-520c-f1bd-310b2c673f4a"
//   ),
// )); 


// $response = curl_exec($curl);
// $err = curl_error($curl);

// curl_close($curl);

//  if ($err) {
//       print_r($err);
//             //return "cURL Error #:" . $err;
//         } else {
//             print_r($response);
//           // return json_decode($response);
//         }
	
	
    }




 
    public function urunlist($id) {
        $query = $this->db->where("OrderId", $id)->get("FaturaUrun")->result();
        echo json_encode($query);
    }

    public function tedarik($id) {
        $query = $this->db->where("id", $id)->set("tedarik", "1")->update("Fatura");
        redirect("Beta/Entegrasyon/HepsiBurada");
    }

    public function Hazir($id) {
        $query = $this->db->where("id", $id)->set("tedarik", "0")->update("Fatura");
        redirect("Beta/Entegrasyon/HepsiBurada");
    }
 public function orders() {
        $data = $this->order();
        echo"<pre>";
         print_r($data);
         foreach ($data as $val) {
        
          $siparis = $this->db->where("siparisid",$val->id)->get("Fatura");
          if($siparis->num_rows() == 0)
          {
              $array = array(
                'siparisid' => $val->id,
                'orderDate' => $val->orderDate,
                'cargoCompany' => $val->cargoCompany,
                'shippingAddressDetail' => $val->shippingAddressDetail,
                'recipientName' => $val->recipientName,
                'shippingCountryCode' => $val->shippingCountryCode,
                'shippingDistrict' => $val->shippingDistrict,
                'shippingCity' => $val->shippingCity,
                'email' => $val->email,
                'phoneNumber' => $val->phoneNumber,
                'companyName' => $val->companyName,
                'billingAddress' => $val->billingAddress,
                'billingCity' => $val->billingCity,
                'billingDistrict' => $val->billingDistrict,
                'taxOffice' => $val->taxOffice,
                'taxNumber' => $val->taxNumber,
                'identityNo' => $val->identityNo,
                'barcode' => $val->barcode,
                'status' => $val->status,
                'orderId' => $val->id,
                'platform' => "Hepsi Burada",
            );
            $this->db->insert("Fatura", $array);
            $lastid = $this->db->insert_id();
            foreach ($val->items as $vals) {
                $arrays = array(
                    'OrderId' => $lastid,
                    'merchantSku' => $vals->merchantSku,
                    'ProductsName' => $vals->productName,
                    'ProductPrice' => $vals->price->amount,
                    'ProductQuantity' => $vals->quantity,
                    'vat' => $vals->vat,
                    'TotalPrice' => $vals->totalPrice->amount,
                );
                $this->db->insert("FaturaUrun", $arrays);
          }
       }

        }
    }

}
