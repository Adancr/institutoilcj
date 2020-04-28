<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pagar Online</title>
  <!-- Incluye Culqi Checkout en tu sitio web-->
  <script src="https://checkout.culqi.com/js/v3"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

</head>

<body>
  Producto 1

  <button id="buyButton" data-product="Diplomado" data-description="Derecho Penal" data-price=25000>Pagar</button>



  <script>
  Culqi.publicKey = 'pk_test_qcemolzgllVoPbTL';


  var product;
  var price;
  var description;



  $('#buyButton').on('click', function(e) {

    product =  $(this).attr('data-product');
    price =  $(this).attr('data-price');
    description =  $(this).attr('data-description');
  

    Culqi.settings({
      title: product,
      currency: 'PEN',
      description: description,
      amount: price
    });
    // Abre el formulario con la configuración en Culqi.settings
    Culqi.open();
    e.preventDefault();
  });

  function culqi() {
    if (Culqi.token) { // ¡Objeto Token creado exitosamente!
      var token = Culqi.token.id;

      var email = Culqi.token.email;

      var data = {
        product:product,
        price: price,
        token: token,
        email: email,
        description: description
      }

      var url = "proceso.php";

      $.post(url, data, function(res) {
        alert(res);
      });

      // alert('Se ha creado un token:' + token);
      //En esta linea de codigo debemos enviar el "Culqi.token.id"
      //hacia tu servidor con Ajax
    } else { // ¡Hubo algún problema!
      // Mostramos JSON de objeto error en consola
      console.log(Culqi.error);
      alert(Culqi.error.user_message);
    }
  };
  </script>






</body>

</html>