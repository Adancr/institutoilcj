<?php
	// Cargamos Requests y Culqi PHP
	require 'requests/library/Requests.php';
	Requests::register_autoloader();
	require 'culqi/lib/culqi.php';

	// Configurar tu API Key y autenticación
	$SECRET_KEY = "sk_test_UBOMYfEfstHZMvX0";
	$culqi = new Culqi\Culqi(array('api_key' => $SECRET_KEY));

	$culqi->Customers->create(
	  array(
	    "address" => $_POST['address'],
	    "address_city" => $_POST['address_city'],
	    "country_code" => $_POST['country_code'],
	    "email" => $_POST['email'],
	    "first_name" => $_POST['first_name'],
	    "last_name" => $_POST['last_name'],
	    "metadata" => array("test"=>"test"),
	    "phone_number" => $_POST['phone_number']
	  )
	);

	echo "exito";

	exit();
?>