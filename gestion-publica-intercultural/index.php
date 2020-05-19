<?php session_start(); ?>
<!DOCTYPE html>
<html lang="es">

<head>

  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-135991360-1"></script>
  <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'UA-135991360-1');
  </script>

  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="../../dist/css/reset.css">
  <link rel="stylesheet" href="../../dist/css/lp-courses-gestion-cultural.css?v1.2">
  <script src="https://kit.fontawesome.com/4f57ccf18e.js" crossorigin="anonymous"></script>
  <link
    href="https://fonts.googleapis.com/css?family=Montserrat:400,500,600,700,800,900|Roboto:400,500,700,900&display=swap"
    rel="stylesheet">
  <link rel="stylesheet" href="../../dist/css/bootstrap.min.css">

  <title>Diplomado Gestión Pública Intercultural | Instituto ILCJ</title>
  <meta name="description" content="El mundo está en pausa ¿y tú? 💪Capacítate desde tu Hogar ¡Reserava tu cupo!">
  <link rel="canonical" href="https://institutojuridico.edu.pe/diplomado/gestion-publica-intercultural/">
  <!-- meta Social  -->
  <meta property="og:title" content="💥 60% Descuento en Diplomado Gestión Pública Intercultural" />
  <meta property="og:description"
    content="El mundo está en pausa ¿y tú? 💪Capacítate desde tu Hogar ¡Reserava tu cupo!" />
  <meta property="og:type" content="website" />
  <meta property="og:url" content="https://institutojuridico.edu.pe/diplomado/gestion-publica-intercultural/" />
  <meta property="og:image"
    content="https://institutojuridico.edu.pe/images/gestion-publica-intercultural-promo_60-dscto.jpg" />
  <meta property="fb:app_id" content="509407789723960" />
  <meta property="og:image:alt" content="Diplomado con 60% descuento" />

  <!-- Facebook Pixel Code -->
  <script>
    !function (f, b, e, v, n, t, s) {
      if (f.fbq) return; n = f.fbq = function () {
        n.callMethod ?
        n.callMethod.apply(n, arguments) : n.queue.push(arguments)
      };
      if (!f._fbq) f._fbq = n; n.push = n; n.loaded = !0; n.version = '2.0';
      n.queue = []; t = b.createElement(e); t.async = !0;
      t.src = v; s = b.getElementsByTagName(e)[0];
      s.parentNode.insertBefore(t, s)
    }(window, document, 'script',
      'https://connect.facebook.net/en_US/fbevents.js');
    fbq('init', '1060880320944459');
    fbq('track', 'PageView');
  </script>
  <noscript><img height="1" width="1" style="display:none"
      src="https://www.facebook.com/tr?id=1060880320944459&ev=PageView&noscript=1" /></noscript>
  <!-- End Facebook Pixel Code -->
  <?php
    $sid = $_SESSION['sid'] = session_id();
    $_SESSION['totCart']=200000;
    // $dni_comp = '72042683';
    // $direccion = 'Francisco Lazo';
    // $departamento = 'Lima';
    // $provincia = 'Lima';
    // $nombre_comp = 'Frank Moreno Alburqueque';
    // $correo_comp = 'admin@frankmorenoalburqueque.com';
  ?>
  <!-- Incluyendo Culqi Checkout -->
  <script type="text/javascript" src="https://checkout.culqi.com/js/v3"></script>
</head>

<body>

  <nav class="navbar navbar-expand-lg navbar-light bg-light pb-navbar">
    <div class="container">
      <a class="navbar-brand logo" href="#"><img src="../../images/logo-ilcj.png" alt=""></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav  ml-auto">
          <li class="nav-item">
            <a class="nav-link active" href="#start-date">Inicio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="#benefits">Beneficios</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="#staff-teacher">Docentes</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="#investment">Inversion</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle wp" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
              aria-haspopup="true" aria-expanded="false">
              WhatsApp
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="https://wa.me/51989830042">989830042</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="https://wa.me/51912757657">912757657</a>
              <!-- <a class="dropdown-item" href="#">Something else here</a> -->
            </div>
          </li>

        </ul>

      </div>
    </div>
  </nav>

  <!-- start scroll principal  -->
  <div data-spy="scroll" data-target="#navbar-example2" data-offset="0">
    <section class="title-p">
      <div class="container">
        <div class="row pt-contact pb-5">
          <div class="col-md-7 text-white text-center title-p-child ">
            <h3>Diplomado Especializado</h3>
            <h1>Gestión Pública Intercultural</h1>
            <div class="certifica">
              <span>Certifica:</span>
              <img src="../../images/isotipo-cac-96ppp.png" alt="">
            </div>
          </div>

          <div id="contact" class="col-md-5">
            <!-- Form lp_web gestion publica intercultural ILCJ -->
            <form class="form-contact ml-block-form" action="https://app.mailerlite.com/webforms/submit/s6s3d4"
              data-code="s6s3d4" method="post">
              <h2>Especialízate desde tu hogar, aprovecha a ver la <span><strong>Primera Clase Gratis</strong></span>
                ¡Disponible por tiempo limitado!</h2>
              <hr>
              <div class=" form-group ">
                <div class=" input-group-prepend ">
                  <span class=" input-group-text "><i class=" fas fa-user "></i></span>
                </div>
                <input type=" text" class=" form-control p-height-50" data-inputmask="" name="fields[name]" id="name"
                  placeholder="Nombre" autocomplete="name" required>
                <div class="error-nombre "></div>
              </div>
              <div class=" form-group ">
                <div class=" input-group-prepend ">
                  <span class=" input-group-text "><i class=" fas fa-user "></i></span>
                </div>
                <input type=" text" class=" form-control p-height-50" data-inputmask="" name="fields[last_name]"
                  id="name" placeholder="Apellido" autocomplete="name" required>
                <div class="error-nombre "></div>
              </div>
              <div class="form-group ">
                <div class="input-group-prepend ">
                  <span class="input-group-text "><i class="fas fa-envelope "></i></span>
                </div>
                <input class="form-control p-height-50" type="email" data-inputmask="" name="fields[email]" id="email"
                  placeholder="Correo" autocomplete="email" required>
                <div class="error-mail"></div>
              </div>
              <div class="form-group ">
                <div class="input-group-prepend ">
                  <span class="input-group-text "><i class="fas fa-phone-alt "></i></i></span>
                </div>
                <input class="form-control p-height-50" type="text" data-inputmask="" name="fields[phone]" id="phone"
                  placeholder="Celular" autocomplete="" required minlenght="9">
                <div class="error-phone "></div>
              </div>
              <!-- <div class="form-group ">
                <div class="input-group-prepend ">
                  <span class="input-group-text "><i class="fas fa-laptop"></i></span>
                </div>
                <input class="form-control p-height-50" type="text" data-inputmask=""
                  name="fields[modalidad_presencial_o_virtual]" placeholder="Modalidad (Presencial o Virtual)"
                  autocomplete="">
                <div class="error-phone "></div>
              </div> -->

              <input type="hidden" name="ml-submit" value="1">

              <!-- <input type="hidden " name="ml-submit " value="1 "> -->

              <div class="form-group ">
                <button type="submit" class="primary btn btn-primary btn-block btn-lg" name="submit"
                  id="btn-ingresar">Ver la primera clase ¡GRATIS!</button>
                <button disabled="disabled" style="display:none " type="button" class="loading ">
                  <div class="ml-form-embedSubmitLoad ">
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                  </div>
                </button>
              </div>

            </form>
          </div>
          <!-- success email -->
          <div class="ml-form-successBody row-success" style="display:none">
            <div class="ml-form-successContent">
              <h4>Thank you!</h4>
              <p>You have successfully joined our subscriber list.</p>
            </div>
          </div>

        </div>
      </div>
    </section>
    <!-- fecha de inicio  -->
    <section class="start-date" id="start-date">
      <div class="row row-start-date-title ">
        <div class="col-12 text-center">
          <h2>Datos Generales</h2>
        </div>
      </div>
    </section>
    <!-- Detalles -->
    <div class="container ">
      <div class="row m-4 row-start-date-details justify-content-center">
        <!-- <div class="col-12 col-sm-6 col-md-6 mt-2 col-lg-3 ">
          <div class="start-date-details ">
            <span><i class="fas fa-calendar-alt "></i></span>
            <h6>Virtual (vivo)</h6>
            <div class="date-details ">
              <span>Fecha</span>
            </div>
          </div>
        </div> -->
        <div class="col-12 col-sm-6 col-md-6 mt-2 col-lg-3 ">
          <div class="start-date-details ">
            <span><i class="fas fa-clock "></i></span>
            <h6>05:00pm a 08:00pm</h6>
            <div class="date-details ">
              <span>Hora</span>
            </div>
          </div>
        </div>
        <div class="col-12 col-sm-6 col-md-6 mt-2 col-lg-3 ">
          <div class="start-date-details ">
            <span><i class="fas fa-medal "></i></span>
            <h6>240 horas académicas</h6>
            <div class="date-details ">
              <span>Certificación</span>
            </div>
          </div>
        </div>
        <div class="col-12 col-sm-6 col-md-6 mt-2 col-lg-3 ">
          <div class="start-date-details ">
            <span><i class="fas fa-laptop "></i></span>
            <h6>Virtual (en vivo)</h6>
            <div class="date-details ">
              <span>Modalidad</span>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- presentation course  -->
    <section class="presentation-course ">
      <div class="container ">
        <div class="row ">
          <div class="col-md-7 ">
            <h3>PRESENTACIÓN</h3>
            <p>El Diplomado en Gestión Pública Intercultural, tiene como objetivo de contribuir a la reflexión sobre la
              importancia y el significado del enfoque intercultural en la gestión pública, así como en la vida de
              nuestra sociedad. <br>Los principales problemas teórico-conceptuales que se vinculan con la temática
              específica de la cultura y la diversidad cultural; analiza el vínculo de interculturalidad y políticas
              públicas; elabora un mapa de avances y desafíos en relación a las políticas interculturales en la sociedad
              peruana; y, finalmente, plantea una ruta de estrategias para la materialización de políticas públicas
              interculturales en el Perú.
            </p>
          </div>
          <div class="col-md-5 ">
            <img src="../../images/diplomado-gestion-intercultural.jpg" alt="diplomado gestion publica intercultural">
          </div>
        </div>
      </div>
    </section>
    <!-- Temary course  -->
    <section class="course-curriculum ">
      <div class="container ">
        <div class="curriculum-wraper ">
          <div class="curriculum-heading ">
            <h3>PLAN DE ESTUDIOS</h3>
            <p>Duración: 2 meses</p>
          </div>
          <button class="accordion">
            <h3>MODULO I</h3>
          </button>
          <div class="panel">
            <p>Interacciones entre Cultura y Desarrollo. Nociones sobre Interculturalidad, exclusión, discriminación y
              asimilación. Colonialidad y libre determinación como paradigmas.</p>
          </div>
          <button class="accordion">
            <h3>MODULO II</h3>
          </button>
          <div class="panel">
            <p>Marco normativo nacional e internacional sobre Pueblos Indígenas, Afrodescendientes, Minorías Nacionales
              y Derechos Culturales. Marco normativo nacional sobre interculturalidad y políticas públicas.</p>
          </div>
          <button class="accordion">
            <h3>MODULO III</h3>
          </button>
          <div class="panel">
            <p>Panorama de la diversidad cultural peruana. Situación de las políticas públicas sobre el Pueblo
              Afroperuano. Situación de las políticas públicas sobre Pueblos Indígenas.</p>
          </div>
          <button class="accordion">
            <h3>MODULO IV</h3>
          </button>
          <div class="panel">
            <p>El Enfoque Intercultural (EI) en las políticas públicas: La Política Nacional para la Transversalización
              del Enfoque Intercultural. La Educación Intercultural Bilingüe. La Salud Intercultural. La Política
              Nacional de Lenguas Originarias. Otras políticas. La Institucionalidad pública en materia de
              Interculturalidad.</p>
          </div>
          <button class="accordion">
            <h3>MODULO V</h3>
          </button>
          <div class="panel">
            <p>Servicios Públicos con Pertinencia Intercultural: Implementación de la “Guía para la Aplicación del
              Enfoque Intercultural en la Gestión de Servicios Públicos” (1). Incorporación del EI en los procesos
              institucionales: la Gestión del conocimiento, planeamiento estratégico y presupuesto, infraestructura,
              comunicación y acceso, documentación, instrumentos de gestión institucional, normatividad y recursos
              humanos.</p>
          </div>
          <button class="accordion">
            <h3>MODULO VI</h3>
          </button>
          <div class="panel">
            <p>Servicios Públicos con Pertinencia Intercultural: Implementación de la “Guía para la Aplicación del
              Enfoque Intercultural en la Gestión de Servicios Públicos” (2). Incorporación del EI en la Gestión de
              Servicios Públicos: Diseño y programación, implementación y prestación, monitoreo y evaluación.
              Herramientas.</p>
          </div>
          <button class="accordion">
            <h3>MODULO VII</h3>
          </button>
          <div class="panel">
            <p>Análisis de casos de Buenas Prácticas Interculturales en la Gestión Pública. El Sello Intercultural y sus
              perspectivas para gobiernos regionales y municipales.</p>
          </div>
          <button class="accordion">
            <h3>MODULO VIII</h3>
          </button>
          <div class="panel">
            <p>Sesión: Orientaciones y recomendaciones específicos para la Gestión Pública Intercultural en gobiernos
              regionales y municipales.</p>
          </div>
          <!-- <ul>
            <li>
              <h4>Módulo I</h4>
              <p>Definición de Violencia de Género.</p>
            </li>
            <li>
              <h4>Módulo II</h4>
              <p>Violencia contra las mujeres y los integrantes del grupo familiar, en el marco de la Ley N° 30364 y su Reglamento.</p>
            </li>
            <li>
              <h4>Módulo III</h4>
              <p>Reflexiones sobre los últimos cambios planteados por los Decretos Legislativos N° 1323 y N° 1219 y otros relacionados. Maltrato Infantil. Taller de Casos Prácticos.</p>
            </li>
            <li>
              <h4>Módulo IV</h4>
              <p>Violencia Familiar y Delitos Sexuales.</p>
            </li>
            <li>
              <h4>Módulo V</h4>
              <p>Definición y Análisis de los delitos Sexuales en el Código Penal.</p>
            </li>
            <li>
              <h4>Módulo VI</h4>
              <p>Delito de Feminicidio.</p>
            </li>
            <li>
              <h4>Módulo VII</h4>
              <p>Políticas Públicas contra la Violencia de Género.</p>
            </li>
            <li>
              <h4>Módulo VIII</h4>
              <p>Acoso Virtual en el Perú. </p>
            </li>
          </ul> -->
        </div>
      </div>

    </section>
    <!-- Beneficios  -->
    <section id="benefits" class="benefits">
      <div class="benefits-title ">
        <h2>BENEFICIOS</h2>
      </div>
      <div class="container ">
        <div class="row row-benefits ">
          <div class="col-md-3 col-12 mb-1 ">
            <div class="benefits-items ">
              <img src="../../images/img-metodologia-cv.png" alt=" ">
              <div class="benefits-items-text ">
                <h4>Metodología</h4>
                <p>Aprendizaje basado en competencias y resolución de casos prácticos con asesoría del docente a cargo.
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-3 col-12 mb-1 ">
            <div class="benefits-items ">
              <img src="../../images/img-material-cv.png" alt=" ">
              <div class="benefits-items-text ">
                <h4>Material Didáctico</h4>
                <p>Clases, separatas, videos y material complementario al cual usted podrá acceder desde el inicio del
                  Curso.</p>
              </div>
            </div>
          </div>
          <div class="col-md-3 col-12 mb-1 ">
            <div class="benefits-items ">
              <img src="../../images/img-online-cv.png" alt=" ">
              <div class="benefits-items-text ">
                <h4>Campus Virtual</h4>
                <p>Acceso al aula virtual 24/7, también podrás ver clase en vivo desde tu Celular o cualquier
                  dispositivo.
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-3 col-12 ">
            <div class="benefits-items ">
              <img src="../../images/img-certificado-cv.png" alt=" ">
              <div class="benefits-items-text ">
                <h4>Certificación</h4>
                <p>Al finalizar el Diplomado especializado, el participante obtendrá una certificado a nombre del
                  Instituto
                  Latiamericano de Capacitaciones Júricas S.A.C. con una aculación de 240 horas académicas válido para
                  concursos publicos y privados.
                  <br>Certificación adiocianal por el Colegio de Abogados del Callao (costo adional de S/.100) </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Staff docentes  -->
    <section class="staff-teacher " id="staff-teacher">
      <div class="staff-teacher-title ">
        <h2>PLANA DOCENTE</h2>
      </div>
      <div class="container ">
        <div class="row row-staff-teacher justify-content-center ">
          <div class="col-12 col-md-6 text-center">
            <img src="../../images/marco-huaco.jpg" alt="Marco Huaco">
            <h3 class="mt-3">Marco Huaco Palomino</h3>
            <p>Magíster en Protección Internacional de los Derechos Humanos por la Universidad de Estrasburgo, Master en
              Gestión Pública por la EUCIM Business School, Madrid, Magister en Ciencias Sociales de la Religión por la
              UNMSM, Diplomado en Políticas Públicas y DDHH por el MERCOSUR, Diplomado en Derechos Economicos, Sociales
              y Culturales (Colegio Universitario Henry Dunant, Suiza). Tiene más de 11 años de experiencia de trabajo
              directo en fortalecimiento y asesoría legal de organizaciones indígenas y afroperuanas, así como
              comunidades campesinas y nativas. se ha desempeñado diseñando y promoviendo la adopción de políticas
              públicas a nivel regional y municipal, y como asesor parlamentario ha conducido acciones de control
              político sobre entidades públicas con competencia en asuntos interculturales y ambientales.</p>
          </div>



          <!-- <div class="col-12 col-md-6 ">
            <img src="../../images/oscar-huerta.jpg" alt="Jimmy Benites Tangoa ">
            <h3>Dr. Oscar Huerta</h3>
            <p>Abogado por la Universidad Nacional Mayor de San Marcos.
              Especialista en Derecho Registral
              Docente Universitario en la UNMSM -FDCP</p>
          </div> -->

        </div>
      </div>
    </section>
    <!-- section inversion  -->
    <section class="investment">
      <h2 class="investment-title p-3 mb-4">CERTIFICACIÓN Y MODALIDADES DE ESTUDIO</h2>
      <div class="container ">
        <div class="container ">
          <button class="accordion">
            <h3>CERTIFICACIÓN</h3>
          </button>
          <div class="panel">
            <p>Al finalizar el Diplomado especializado, el participante obtendrá una certificado a nombre del Instituto
              Latiamericano de Capacitaciones Júricas S.A.C. con una aculación de 240 horas académicas válido para
              concursos publicos y privados.</p>
          </div>
          <button class="accordion">
            <h3>ENTREGA DE DIPLOMAS</h3>
          </button>
          <div class="panel">
            <p>En la oficina del Instituto Latinoamericano de Capacitaciones Juridicas - ILCJ | ubicado en Jr. Manuel
              Segura 142 Ofiina 304 - Lince - Lima. <br>En caso que sea para interior del país, se remitirá los
              diplomados vía las agencias de correos Olva
              Currier. El costo del envío queda por cuenta del participante (pago en destino al momento del recojo).</p>
          </div>
          <button class="accordion">
            <h4>MODALIDADES DE ESTUDIO: PRESENCIAL</h4>
          </button>
          <div class="panel">
            <p>El participante que se inscriba en la modalidad presencial, asiste a las sesiones de clase en nuestro
              auditorio, en el horario establecido tendrá todos los materiales académicos impreso y digital que cada
              profesor utilizará en sus respectivas clases, así mismo recibirá los vídeos grabados de las sesiones luego
              de 48 horas por medio de correo electrónico. Tiene la opción de rendir el examen presencial o virtual.</p>
          </div>
          <button class="accordion">
            <h4>MODALIDADES DE ESTUDIO: VIRTUAL</h4>
          </button>
          <div class="panel">
            <p>El participante que se inscriba en la modalidad virtual, tendrá acceso a través de nuestra plataforma
              virtual todos los materiales académicos que cada profesor utilizará en sus respectivas clases, así mismo
              tendrán acceso a los vídeos grabados de las sesiones presenciales las 24 horas, participará en debates a
              través de un foro virtual y otras herramientas. Si adicionalmente desea participar en algunas de la
              sesiones presenciales puede asistir con normalidad, previa coordinación. Rendirá examen mediante la
              plataforma virtual. El diploma tiene el mismo valor académico que la modalidad presencial.</p>
          </div>
        </div>
        <!-- <div class="btn-mas-info">
          <a class="btn-infoFooter" href="#contact">Click Aquí y Separe su Diplomado</a>
        </div> -->
    </section>
    <!-- section inversion  -->
    <section class="investment " id="investment">
      <h2 class="investment-title ">INVERSIÓN</h2>
      <div class="container ">
        <div class="row row-investment ">
          <div class="col-md-4 mb-2 ">
            <div class="single-table text-center ">
              <div class="plan-header ">
                <h3>Virtual (en vivo)</h3>
                <div class="plan-header-offer ">
                  <p>60%</p>
                </div>
                <div class="plan-header-price ">
                  <h4>S/. 200</h4>
                  <h5><del>S/.500</del></h5>
                  <p>(Reserva tu diplomado S/100)</p>
                </div>
              </div>
              <ul>
                <li>
                  <h5>Pagos en Cuotas 5% adicional</h5>
                </li>
                <li>1° cuota S/.105</li>
                <li>2° cuota S/.105</li>
              </ul>
              <div class="buy ">
                <a target="_blank" class="btn btn-primary " href="https://express.culqi.com/pago/10154-2570">Reservar
                  con S/105 </a>
              </div>
              <div class="info-wp ">
                <a target="_blank" class="btn btn-primary " target="_blank "
                  href="https://express.culqi.com/pago/10154-2571">Pagar total S/200</a>
              </div>
              <div class="buy">
                <button type="submit" class="btn btn-primary" id="buyButton" name="prePago" title="Procesar con el Pago"><span>Procesar con el Pago</span></button>
              </div>
              <div class="buy">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#client">
                  Crear Cliente
                </button>
              </div>
            </div>
          </div>
          <!-- <div class="col-md-1 "> -->
          <!-- gap entre columnas -->
          <!-- </div>
          <div class="col-md-4 ">
            <div class="single-table text-center ">
              <div class="plan-header ">
                <h3>Virtual</h3>
                <div class="plan-header-offer ">
                  <p>40%</p>
                </div>
                <div class="plan-header-price ">
                  <h4>S/. 300</h4>
                  <h5><del>S/.500</del></h5>
                  <p>(Pago en una sola cuota)</p>
                </div>
              </div>
              <ul>
                <li>
                  <h5>Pagos en 2 Cuotas 10% Dscto.</h5>
                </li>
                <li>1° cuota S/.300</li>
                <li>2° cuota S/.150</li>
              </ul>
              <div class="buy ">
                <a class="btn btn-primary " target="_blank" href="https://pago.okchaty.com/ilcj/300">Comprar Ahora
                </a>
              </div>
              <div class="info-wp ">
                <a class="btn btn-primary " href="#contact">Más Información </a>
              </div>

            </div>
          </div> -->

        </div>
      </div>
    </section>

    <!-- whatsapp  support  -->
    <!-- <div class="main-box-wasap">
      <div class="btn-close-wasap" id="btn-close-wasap">x</div>

      <div class="box-list-chat-wasap">

        <div class="title-list-wasap">Contáctenos</div>
        <a class="item-wasap" target="_blank"
          href="https://api.whatsapp.com/send?phone=51989830042&text=Hola me interesa el diplomado gestion publica intercultural">
          <div class="box-perfil-one">
            <span></span>
            <img
              src="https://scontent.flim10-1.fna.fbcdn.net/v/t1.0-9/49710285_145872606402851_9144069387039277056_n.jpg?_nc_cat=102&_nc_sid=85a577&_nc_ohc=hFxPA9a4_vAAX_6B2jJ&_nc_ht=scontent.flim10-1.fna&oh=a85302bc290a50a8dca2f4c2a7eb68b1&oe=5E9C8E6D"
              alt="Barbara de ILCJ">
          </div>
          <div class="item-date">
            <div>

              <div class="item-name">Srta. Barbara</div>
              <div class="item-rol">989 830 042</div>
              <div class="item-dis">Disponible</div>
            </div>
          </div>

        </a>

        <a class="item-wasap" target="_blank"
          href="https://api.whatsapp.com/send?phone=51912757657&text=Hola me interesa el diplomado gestion publica intercultural">
          <div class="box-perfil-two">
            <span></span>
            <img
              src="https://scontent.flim10-1.fna.fbcdn.net/v/t1.0-9/53283330_104824514016161_7475830830015709184_n.jpg?_nc_cat=105&_nc_sid=85a577&_nc_ohc=J5vqiYXd-HAAX_hVaik&_nc_ht=scontent.flim10-1.fna&oh=1cca345664ca23d7d04e02c50695bd4c&oe=5E9C57AB"
              alt="Susan de ILCJ">
          </div>
          <div class="item-date">
            <div>

              <div class="item-name">Srta. Susan</div>
              <div class="item-rol">912 757 657</div>
              <div class="item-dis">Disponible</div>
            </div>
          </div>

        </a>
      </div>

      <div class="btn-active-list-chat-wasap" id="btn-active-list-chat-wasap"><i class="fab fa-whatsapp"></i></div>
    </div> -->
    <!-- end wp support  -->

    <a target="_blank"
      href="https://api.whatsapp.com/send?phone=51989830042&text=Hola me interesa el diplomado gestion publica intercultural">
      <div class="wp-left">
        <span><i class="fab fa-whatsapp"></i></span>
      </div>
    </a>
    <!-- inicio button llamar  -->
    <a href="tel:+51989830042">
      <div class="call">
        <span><i class="fas fa-phone-alt"></i></span>
      </div>
    </a>
    <!-- end button llamar  -->



    <!-- <section class="investment " id="investment">
      <h2 class="investment-title ">INVERSIÓN</h2>
      <div class="container ">
        <div class="row row-investment ">
          <div class="col-md-4 mb-2 ">
            <div class="single-table text-center ">
              <div class="plan-header ">
                <h3>Presencial</h3>
                <div class="plan-header-offer ">
                  <p>30%</p>
                </div>
                <div class="plan-header-price ">
                  <h4>S/. 350</h4>
                  <h5><del>S/.500</del></h5>
                  <p>(Pago en una sola cuota)</p>
                </div>
              </div>
              <ul>
                <li>
                  <h5>Pagos en 2 Cuotas 10% Dscto.</h5>
                </li>
                <li>1° cuota S/.300</li>
                <li>2° cuota S/.150</li>
              </ul>
              <div class="buy ">
                <a class="btn btn-primary " href="https://pago.okchaty.com/ilcj/350 ">Comprar Ahora </a>
              </div>
              <div class="info-wp ">
                <a class="btn btn-primary "  href="#contact">Más Información</a>
              </div>
            </div>
          </div>
          <div class="col-md-1 gap">
            gap entre columnas 
          </div>
          <div class="col-md-4 ">
            <div class="single-table text-center ">
              <div class="plan-header ">
                <h3>Virtual</h3>
                <div class="plan-header-offer ">
                  <p>40%</p>
                </div>
                <div class="plan-header-price ">
                  <h4>S/. 300</h4>
                  <h5><del>S/.500</del></h5>
                  <p>(Pago en una sola cuota)</p>
                </div>
              </div>
              <ul>
                <li>
                  <h5>Pagos en 2 Cuotas 10% Dscto.</h5>
                </li>
                <li>1° cuota S/.300</li>
                <li>2° cuota S/.150</li>
              </ul>
              <div class="buy ">
                <a class="btn btn-primary " target="_blank" href="https://pago.okchaty.com/ilcj/300">Comprar Ahora
                </a>
              </div>
              <div class="info-wp ">
                <a class="btn btn-primary " href="#contact">Más Información </a>
              </div>

            </div>
          </div>
        </div>
      </div>
    </section> -->

    <!-- section .contacts  -->

    <div class="title-contacts">
      <h2>Contáctanos</h2>
      <h4>Estamos listos para atenderte</h4>
    </div>
    <section class="contacs">
      <div class="wrap-contacts">
        <div class="icon-contacts">
          <i class="fas fa-phone-alt"></i></i>
          <h4>Teléfonos</h4>
          <p>989 830 042</p>
          <p>912 757 657</p>
        </div>
        <div class="icon-contacts">
          <i class="fas fa-map-marker-alt"></i>
          <h4>Dirección</h4>
          <p>Jr. Manuel Segura 142 Ofic. 304 Lince</p>
        </div>
        <div class="icon-contacts">
          <i class="fas fa-envelope"></i>
          <h4>Correo:</h4>
          <a href="mailto:ilcj@institutojuridico.edu.pe">ilcj@institutojuridico.edu.pe</a>
        </div>
      </div>

      <footer class="footer ">
        <div class="container ">
          <div class="row ">
            <div class="col-12 ">
              <p><small>© Copyright 2019 | Instituto ILCJ</small></p>
            </div>
          </div>
        </div>
      </footer>

  </div>
  <!-- end scroll  -->
  <!-- <script src="../../dist/js/main.js"></script> -->
  <script src="../../dist/js/courses.js"></script>

  <!-- wp support  -->
  <!-- <script src="../../dist/js/wp_support.js"></script> -->





  <!-- Script subscriber mailerte  -->
  <script>
    function ml_webform_success_1855348() { try { window.top.location.href = "https://institutojuridico.edu.pe/gestion-publica-intercultural/clase-gratis" } catch (t) { window.location.href = "https://institutojuridico.edu.pe/gestion-publica-intercultural/clase-gratis" } }
  </script>
  <img src="https://track.mailerlite.com/webforms/o/1855348/s6s3d4?vee71a8848f3cc4af6b2730283dbdc659" width="1"
    height="1" style="max-width:1px;max-height:1px;visibility:hidden;padding:0;margin:0;display:block" alt="."
    border="0">
  <script src="https://static.mailerlite.com/js/w/webforms.min.js?vee71a8848f3cc4af6b2730283dbdc659"
    type="text/javascript"></script>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="../../dist/js/jquery-3.4.1.min.js"></script>
  <script src="../../dist/js/bootstrap.min.js"></script>
  <script src="../../dist/js/popper.min.js"></script>
  <script src="../../dist/js/swiper.min.js"></script>

  <div class="modal fade" id="client" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <form method="post">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Crear cliente</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="form-group">
              <label class="label-control">Dirección:</label>
              <input type="text" class="form-control" id="address" required="required">
            </div>
            <div class="form-group">
              <label class="label-control">Ciudad:</label>
              <input type="text" class="form-control" id="address_city" required="required">
            </div>
            <div class="form-group">
              <label class="label-control">Código de Ciudad:</label>
              <input type="text" class="form-control" id="country_code" maxlength="2" required="required">
            </div>
            <div class="form-group">
              <label class="label-control">Correo Electrónico:</label>
              <input type="text" class="form-control" id="email" required="required">
            </div>
            <div class="form-group">
              <label class="label-control">Nombres:</label>
              <input type="text" class="form-control" id="first_name" required="required">
            </div>
            <div class="form-group">
              <label class="label-control">Apellidos:</label>
              <input type="text" class="form-control" id="last_name" required="required">
            </div>
            <div class="form-group">
              <label class="label-control">Celular:</label>
              <input type="text" class="form-control" id="phone_number" required="required">
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" id="reg_clients" class="btn btn-primary">Save changes</button>
          </div>
        </div>
      </form>
    </div>
  </div>

  <script>
    Culqi.publicKey = 'pk_test_qcemolzgllVoPbTL';

    //descompocición del total:
    var largo, millones, millares, centenas, decimales, totalPago;
    largo = <?php echo strlen($_SESSION['totCart']); ?>;
    if (largo<7) {
      centenas = '<?php echo substr($_SESSION['totCart'],0, -3); ?>';
      decimales = '<?php echo substr($_SESSION['totCart'], -2) ?>';
      totalPago = centenas + decimales;
    }
    if (largo>=7 && largo<11) {
      millares = '<?php echo substr($_SESSION['totCart'],0, -6); ?>';
      centenas = '<?php echo substr($_SESSION['totCart'],-6, 3); ?>';
      decimales = '<?php echo substr($_SESSION['totCart'], -2) ?>';
      totalPago = millares + centenas + decimales;
    }
    if (largo>=10 && largo<14) {
      millones = '<?php echo substr($_SESSION['totCart'],0, -10); ?>';
      millares = '<?php echo substr($_SESSION['totCart'],0, -6); ?>';
      centenas = '<?php echo substr($_SESSION['totCart'],-6, 3); ?>';
      decimales = '<?php echo substr($_SESSION['totCart'], -2) ?>';
      totalPago = millones + millares + centenas + decimales;
    }

    Culqi.settings({
      title: 'Instituto ILCJ',
      currency: 'PEN',
      description: 'Diplomado Gestión Pública Intercultural',
      amount: totalPago,
      metadata:{
        order_id: "<?php echo $sid; ?>"
      }
    });

    $('#buyButton').on('click', function(e) {
        // Abre el formulario con la configuración en Culqi.settings
        Culqi.open();
        e.preventDefault();
    });

    function pdf() {
      window.location.assign("./?pagado=si");
    }

    function culqi() {
      if (Culqi.token) { // ¡Objeto Token creado exitosamente!
        var token = Culqi.token.id;
        var email = Culqi.token.email;

        var data = { 
          id:'<?php echo $sid; ?>', 
          producto:'Diplomado Gestión Pública Intercultural', 
          precio: totalPago, 
          token: token, 
          customer_id: "<?php echo $dni_comp.'_'.$sid; ?>",
          address: "<?php echo $direccion; ?>",
          address_city: "<?php echo $departamento.' - '.$provincia; ?>",
          first_name: "<?php echo $nombre_comp; ?>",
          email: '<?php echo $correo_comp; ?>' 
        };

        var url = "../../plugins/proceso.php";

        $.post(url,data,function(res){
          alert(' Tu pago se Realizó con ' + res + '. Agradecemos tu preferencia.');
          if (res=="exito") {
            pdf();
          }else{
            alert("No se logró realizar el pago.");
          }
        });

        //En esta linea de codigo debemos enviar el "Culqi.token.id"
        //hacia tu servidor con Ajax
      } else { // ¡Hubo algún problema!
        // Mostramos JSON de objeto error en consola
        console.log(Culqi.error);
        alert(Culqi.error.user_message);
      }
    };
  </script>

  <script>
    Culqi.publicKey = 'pk_test_qcemolzgllVoPbTL';

    if (Culqi.token) { // ¡Objeto Token creado exitosamente!
      var token = Culqi.token.id;
      $('#reg_clients').on('click', function(e) {
        var url2 = 'https://api.culqi.com/v2/customers';
        var data2 = { 
            token:token, 
            object: 'customer', 
            id: 'cus_live_<?php echo $sid; ?>', 
            creation_date: '<?php $fec = new DateTime(); echo $fec->format("U = Y-m-d H:i:s"); ?>', 
            email: document.getElementById('email').value,
            antifraud_details:{
              country_code: document.getElementById('email').value,
              first_name: document.getElementById('first_name').value,
              last_name: document.getElementById('last_name').value,
              address_city: document.getElementById('address_city').value,
              address: document.getElementById('address').value,
              phone_number: document.getElementById('phone_number').value,
              object: 'client'
            }
        };

        $.post(url2,data2,function(res){
          alert(' Estado del Cliente: ' + res + '.');
          if (res=="exito") {
            
          }else{
            alert("No se logró realizar el pago.");
          }
        });
      });
    }else { // ¡Hubo algún problema!
      // Mostramos JSON de objeto error en consola
      console.log(Culqi.error);
      alert(Culqi.error.user_message);
    }
  </script>
</body>

</html>