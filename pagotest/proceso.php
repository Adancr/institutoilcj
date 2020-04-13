<?php

// Cargamos Requests y Culqi PHP
require 'requests/library/Requests.php';
Requests::register_autoloader();
require 'culqui/lib/culqi.php';

// require "requests/library/Requests.php";
// Requests::register_autoloader();
// require "culqi/lib/culqi.php";

// Configurar tu API Key y autenticación
$SECRET_KEY = "sk_test_UBOMYfEfstHZMvX0";

$culqi = new Culqi\Culqi(array('api_key' => $SECRET_KEY));


// Creamos Cargo a una tarjeta
$charge = $culqi->Charges->create(
  array(
    "amount" => $_POST['price'],
    "capture" => true,
    "currency_code" => "PEN",
    "description" => $_POST['description'],
    "email" => $_POST['email'],
    "installments" => 0,
    // "antifraud_details" => array(
    //     "address" => "Av. Lima 123",
    //     "address_city" => "LIMA",
    //     "country_code" => "PE",
    //     "first_name" => "Will",
    //     "last_name" => "Muro",
    //     "phone_number" => "9889678986",
    // ),
    "source_id" => $_POST['token']
  )
);

//Respuesta
// print_r($charge);



// $culqi -> Charges ->create(
//  array(
//      "amount" => $_POST['price'],
//      "currency_code" => "PEN",
//      "description" => $_POST['product'],
//      "email" => $_POST['email'],
//      "source_id" => $_POST['token']
//    )
// );

echo 'exito';

exit;

