<?php
   //*********TOTAL USUARIOS*******
   $urlUsuarios = "https://api.foldingathome.org/user-count"; 
   $chUsuarios = curl_init($urlUsuarios); 
   curl_setopt($chUsuarios, CURLOPT_RETURNTRANSFER, true); 
   curl_setopt($chUsuarios, CURLOPT_SSL_VERIFYPEER, false); 
   $datosUsuarios = json_decode(curl_exec($chUsuarios));
   
   //***** TOTAL EQUIPOS**********
   $urlEquipos = "https://api.foldingathome.org/team/count"; 
   $chEquipos = curl_init($urlEquipos); 
   curl_setopt($chEquipos, CURLOPT_RETURNTRANSFER, true); 
   curl_setopt($chEquipos, CURLOPT_SSL_VERIFYPEER, false); 
   $datosEquipos = json_decode(curl_exec($chEquipos));
   
   //***** Donante top 1**********
   $urlDonante = "https://stats.foldingathome.org/api/donors"; 
   $chDonante = curl_init($urlDonante); 
   curl_setopt($chDonante, CURLOPT_RETURNTRANSFER, true); 
   curl_setopt($chDonante, CURLOPT_SSL_VERIFYPEER, false); 
   $datosDonante = json_decode(curl_exec($chDonante));
   
   //**** equipo top 1 *********
   $urlTeam = "https://stats.foldingathome.org/api/teams"; 
   $chTeam = curl_init($urlTeam); 
   curl_setopt($chTeam, CURLOPT_RETURNTRANSFER, true); 
   curl_setopt($chTeam, CURLOPT_SSL_VERIFYPEER, false); 
   $datosTeam = json_decode(curl_exec($chTeam));
   
   ?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta content="width=device-width, initial-scale=1.0" name="viewport">
      <meta content="" name="descriptison">
      <meta content="" name="keywords">
      <!-- Favicons -->
      <link href="assets/img/favicon.png" rel="icon">
      <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
      <!-- Google Fonts -->
      <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
      <!-- Vendor CSS Files -->
      <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
      <link href="assets/css/font-awesome.css" rel="stylesheet">
      <link href="assets/vendor/bootstrap/css/bootstrap-social.css" rel="stylesheet">
      <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
      <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
      <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
      <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
      <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
      <link href="assets/vendor/aos/aos.css" rel="stylesheet">
      <!-- Template Main CSS File -->
      <link href="assets/css/style.css" rel="stylesheet">
   </head>
   <body>
      <!-- ======= Header ======= -->
      <header id="header" class="fixed-top ">
         <div class="container-fluid d-flex align-items-center justify-content-between">
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
            <nav class="nav-menu d-none d-lg-block">
               <ul>
                  <li class="active"><a href="#header">Inicio</a></li>
                  <li><a href="#instalacion">Instalación</a></li>
                  <li><a href="#idea">La idea</a></li>
                  <li><a href="#about-boxes">Acerca de Folding at home</a></li>
                  <li><a href="#clients">Clientes</a></li>
                  <li><a href="#covid">Covid-19</a></li>                  
                  <li><a href="#api">Estadísticas</a></li>                 
                  <li><a href="#team">Equipo</a></li>
                  <li><a href="#contact">Contacto</a></li>
               </ul>
            </nav>
            <!-- .nav-menu -->
            <a href="#instalacion" class="get-started-btn scrollto">DESCARGA EL PROGRAMA</a>
         </div>
      </header>
      <!-- End Header -->
      <!-- ======= Hero Section ======= -->
      <section id="hero">
         <div class="hero-container" data-aos="fade-up" data-aos-delay="150">
            <h1>Folding at Home</h1>
            <h2>Cómo tú puedes ayudar con el Covid-19 y otras enfermedades</h2>
         </div>
      </section>
      <!-- End Hero -->
      <main id="main">
         <!--VIDEO DE LA INSTALACIÓN-->
         <section id="instalacion" class="about">
            <div class="container" data-aos="fade-up">
            <div class="row justify-content-end">
            <div class="col-lg-11">
               <br>
               <div class="row">
                  <div class="col-lg-6 video-box align-self-baseline" data-aos="zoom-in" data-aos-delay="100">
                     <img src="assets/img/about.jpg" class="img-fluid" alt="">
                     <a href="https://www.youtube.com/watch?v=4c_L3Xw9gAM" class="venobox play-btn mb-4" data-vbtype="video" data-autoplay="true"></a>
                  </div>
                  <div class="col-lg-6 pt-3 pt-lg-0 content">
                     <h3>INSTALACIÓN BÁSICA DE LA APLICACIÓN</h3>
                     <p class="font-italic">
                        Al descargar la aplicación, les estás proporcionando la potencia que necesitan para encontrar nuevas curas. Y al correr la voz, les estás dando a más personas la oportunidad de contribuir.
                     </p>
                     <ul>
                        <li><i class="bx bx-check-double"></i> Descargue la aplicación desde
                           <a href="https://foldingathome.org/start-folding" target="_blank">https://foldingathome.org/start-folding</a>
                        </li>
                        <li><i class="bx bx-check-double"></i> Ejecute el instalador</li>
                        <li><i class="bx bx-check-double"></i> Pulse en "Express install"</li>
                        <li><i class="bx bx-check-double"></i> Finalmente se abrirá la aplicación</li>
                     </ul>
                     <p>
                        Si lo prefiere, puede descargar la aplicación para Windows pinchando
                        <a href="assets/app/fah-installer_7.6.13_x86.exe" download>
                        aquí 
                        </a>
                     </p>
                  </div>
               </div>
            </div>
         </div>
      </div>
         </section>
         <!-- End About Section -->
         <!--Conferencia-->
         <section id="idea" class="about">
            <div class="container" data-aos="fade-up">
            <div class="row justify-content-end">
            <div class="col-lg-11">
               <br>
               <div class="row">
                  <div class="col-lg-6 pt-3 pt-lg-0 content">
                     <h3>LA IDEA DE LA PÁGINA WEB</h3>
                     <p class="font-italic">
                        Desde Cuatrovientos pensamos que era buena idea dar a conocer el trabajo realizado por Folding At Home, creando una página web enlazada con 
                        <a href="http://www.cuatrovientos.org" download>http://www.cuatrovientos.org</a> para que así, más personas puedan contribuir a buscar la cura de diferentes enfermedades como el COVID19.
                     </p>
                     <p>
                        Por la situación en la que nos encontrábamos a causa de la pandemia, no pudimos mandar a nuestros alumnos a realizar las FCT. Así que decidimos que los alumnos del ciclo "Administración de Sistemas Informáticos en Red" y los alumnos del ciclo "Desarrollo de Aplicaciones Multiplataforma" colaborasen juntos para realizar esta página web. 
                     </p>
                     <P> 
                        En la siguiente videoconferencia se puede observar algunas de las decisiones que tomamos mientras llevábamos a cabo la realización de la página web.
                     </P>
                  </div>
                  <div class="col-lg-6 video-box align-self-baseline" data-aos="zoom-in" data-aos-delay="100">
                     <img src="assets/img/videoconferencia.png" class="img-fluid" alt="">
                     <a href="https://www.youtube.com/watch?v=j3QXAmM_Xq0" class="venobox play-btn mb-4" data-vbtype="video" data-autoplay="true"></a>
                  </div>
               </div>
            </div>
         </div>
      </div>
         </section>
         <!-- End Conferencia Section -->
         <!-- ======= About Boxes Section ======= -->
         <section id="about-boxes" class="about-boxes">
            <div class="container" data-aos="fade-up">
               <div class="row">
                  <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
                     <div class="card">
                        <img src="assets/img/folding.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                           <h5 class="card-title"><a href="">¿Qué es el Folding?</a></h5>
                           <p class="card-text">Folding at home, es un proyecto de computación creado para poder simular los enlaces de las proteínas y sus pliegues (en inglés Folding), en una variedad de enfermedades. Esto sirve de ayuda a los científicos para entender mejor la biología detrás de estas enfermedades, y así poder desarrollar mejores tratamientos para estas.</p>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
                     <div class="card">
                        <img src="assets/img/fondo2.png" class="card-img-top" alt="...">
                        <div class="card-body">
                           <h5 class="card-title"><a href="">¿Cómo colaborar?</a></h5>
                           <p class="card-text">Al descargar y ejecutar el programa, cualquier voluntario puede donar parte de la capacidad de su ordenador para ayudar con los cálculos en las simulaciones y se puede regular para que no afecte al rendimiento de los componentes.</p>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="300">
                     <div class="card">
                        <img src="assets/img/coronavirus.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                           <h5 class="card-title"><a href="">¿En qué enfermedades se puede ayudar?</a></h5>
                           <p class="card-text">Se pueden donar recursos para distintas enfermedades, las cuales son:
                              Cáncer de mama, riñón, epigenético y el p53; fiebre del Dengue, enfermedad de Chagas, virus Zika, Hepatitis C y el Ébola; y otras enfermedades como el Alzheimer, Huntington y Parkinson
                           </p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!-- End About Boxes Section -->
         <!-- ======= Clients Section ======= -->
         <section id="clients" class="clients">
            <div class="container" data-aos="zoom-in">
               <div class="row">
                  <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                     <img src="assets/img/clients/client1.png" class="img-fluid" alt="">
                  </div>
                  <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                     <img src="assets/img/clients/client2.png" class="img-fluid" alt="">
                  </div>
                  <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                     <img src="assets/img/clients/client3.png" class="img-fluid" alt="">
                  </div>
                  <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                     <img src="assets/img/clients/client4.png" class="img-fluid" alt="">
                  </div>
                  <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                     <img src="assets/img/clients/client5.png" class="img-fluid" alt="">
                  </div>
                  <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                     <img src="assets/img/clients/client6.png" class="img-fluid" alt="">
                  </div>
                  <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                     <img src="assets/img/clients/client7.png" class="img-fluid" alt="">
                  </div>
                  <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                     <img src="assets/img/clients/client8.png" class="img-fluid" alt="">
                  </div>
                  <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                     <img src="assets/img/clients/client9.png" class="img-fluid" alt="">
                  </div>
               </div>
            </div>
         </section>
         <!-- End Clients Section -->
         <!-- ======= Features Section ======= -->
         <section id="covid" class="features">
            <div class="container" data-aos="fade-up">
               <ul class="nav nav-tabs row d-flex">
                  <li class="nav-item col-4">
                     <a class="nav-link active show" data-toggle="tab" href="#tab-1">
                        <i class="ri-gps-line"></i>
                        <h4 class="d-none d-lg-block">Impacto contra el covid</h4>
                     </a>
                  </li>
                  <li class="nav-item col-4">
                     <a class="nav-link" data-toggle="tab" href="#tab-2">
                        <i class="ri-body-scan-line"></i>
                        <h4 class="d-none d-lg-block">¡Te necesitamos!</h4>
                     </a>
                  </li>
                  <li class="nav-item col-4">
                     <a class="nav-link" data-toggle="tab" href="#tab-3">
                        <i class="ri-youtube-fill"></i>
                        <h4 class="d-none d-lg-block">Avances contra el covid</h4>
                     </a>
                  </li>
              
               </ul>
               <div class="tab-content">
                  <div class="tab-pane active show" id="tab-1">
                     <div class="row">
                        <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
                           <h3>El covid-19 la enfermedad que ha paralizado el mundo. </h3>
                           <p class="font-italic">
                             Esta nueva enfermedad proveniente de china ha sido la culpable de esta tragedia que estamos viviendo. Y uno de los objetivos de folding at home es buscar una solución.
                           </p>
                           <p>
                              Para ello debemos entender que las proteínas son sistemas moleculares que realizan funciones que asociamos 
                              con la vida. Estas están formadas por una cadena lineal de productos químicos llamados aminoácidos, que en muchos casos se pliegan espontániamente en estructuras compactas y funcionales.
                           </p>
                           <p>Por lo dicho anteriormente para abordar el problema con el coronavirus queremos entender como funcionan sus proteinas para poder diseñar tratamientos para pararlo.  </p>
                           <p>
                              Por último, nuestra función se centra en hacer simulaciones de ordenador para poder entender como se mueven las proteínas por dentro. Porque observar como se mueven los átomos de las proteínas nos otorga valiosa información. Y si conseguimos entender del todo como funciona podremos conbatirlo.
                           </p>
                           
                        </div>
                        <div class="col-lg-6 order-1 order-lg-2 text-center">
                           <img src="assets/img/imgcov1.jpg" alt="" class="img-fluid">
                        </div>
                     </div>
                  </div>
                  <div class="tab-pane" id="tab-2">
                     <div class="row">
                        <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
                           <h3>¿Qué es lo que puedes hacer yo?</h3>
                           <p class="font-italic">
                              1) Tu nos puedes ser de gran ayuda con tan solo un click.
                           </p>
                           <p>
                              Lo único que necesitan de ti es que les permitas utilizar la fuerza de tu PC, desde folding at home se comprometen   a no coger los datos de sus  usuarios. Lo unico que buscan es los recursos para poder hacer simulaciones.
                           </p>
                           
                           <ul>
                              <li><i class="ri-check-double-line"></i> pincha <a href="#instalacion" >AQUÍ</a> para poder instalarte la aplicación.</li>
                     
                           </ul>
                           <p class="font-italic">
                              2) En el caso que no tengas ordenador tambien puedes colaborar
                           </p>
                           <p >
                             La siguiente forma de colaborar sería hacer <a href="https://gifts.wustl.edu/med/index.html?other_designation_description=Folding@Home%20(Dr%20Greg%20Bowman,%20Dept%20of%20Biochemistry)&0_d_tr1=71&sc=NG">donaciones</a> a traves de la universidad de Whasington en St.louis. Estos fondos se usan para diferentes propositos entre ellos:

                           </p>
                           <ul>
                              <li><i class="ri-check-double-line"></i> Para apoyar su ingeniería del software y también a sus servidores.Ya que cada vez se necesitan más.  </li>
                              <li><i class="ri-check-double-line"></i> Para comprar compuestos para poder experimentar en la realidad basandose en las simulaciones</li>
                     
                           </ul>
                        </div>
                        <div class="col-lg-6 order-1 order-lg-2 text-center">
                           <img src="assets/img/features-2.png" alt="" class="img-fluid">
                        </div>
                     </div>
                  </div>
                  <div class="tab-pane" id="tab-3">
                     <section id="instalacion" class="about">
            <div class="container" data-aos="fade-up">
            <div class="row justify-content-end">
            <div class="col-lg-12">
               
               <div class="row ">
                  <div class="col-lg-12 video-box align-self-baseline" data-aos="zoom-in" data-aos-delay="100">
                     <img src="assets/img/covideo.jpg" class="img-fluid" alt="">
                     <a href="https://www.youtube.com/watch?v=NTLU1anxe8c" class="venobox play-btn mb-4" data-vbtype="video" data-autoplay="true"></a>
                  </div>
                
               </div>
            </div>
         </div>
      </div>
         </section>
                  </div>
             
               </div>
            </div>
         </section>
         <!-- End Features Section -->
       
         <!-- ======= LEEMOS LAS APIS DE ESTADISTICAS ======= -->
         <section id="api" class="about">
            <div class="container" data-aos="fade-up">
               <div class="row justify-content-end">
                  <div class="col-lg-12">
                     <div class="content text-center">
                        <br>
                        <br>
                        <h3>ESTADÍSTICAS GENERALES</h3>
                     </div>
                     <div class="row justify-content-end">
                        <div class="col-lg-3 col-md-5 col-6 d-md-flex align-items-md-stretch">
                           <div class="count-box">
                              <i class="icofont-simple-smile"></i>               
                              <span data-toggle="counter-up" id="num"><?=$datosUsuarios?></span>
                              <p>Usuarios Totales</p>
                           </div>
                        </div>
                        <div class="col-lg-3 col-md-5 col-6 d-md-flex align-items-md-stretch">
                           <div class="count-box">
                              <i class="icofont-document-folder"></i>
                              <span data-toggle="counter-up"><?=$datosEquipos?></span>
                              <p>Equipos Totales</p>
                           </div>
                        </div>
                        <div class="col-lg-3 col-md-5 col-6 d-md-flex align-items-md-stretch">
                           <div class="count-box">
                              <i class="icofont-clock-time"></i>
                              <?php
                                 $i = 0;
                                 foreach($datosTeam->results as $Dato) {
                                 $i++;
                                 if($i==1){
                                   ?> <span><?=$Dato->name?></span>
                              <p>Equipo que más ha donado</p>
                              <?php
                                 }
                                 ?>                  
                              <?php } ?>
                           </div>
                        </div>
                        <div class="col-lg-3 col-md-5 col-6 d-md-flex align-items-md-stretch">
                           <div class="count-box">
                              <i class="icofont-award"></i>
                              <?php
                                 $i = 0;
                                 foreach($datosDonante->results as $Dato) {
                                 $i++;
                                 if($i==1){
                                   ?> <span><?=$Dato->name?></span>
                              <p>Donante que más ha donado</p>
                              <?php
                                 }
                                 ?>                  
                              <?php } ?>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!-- End API Section -->
      
         <!-- ======= Team Section ======= -->
         <section id="team" class="team section-bg">
            <div class="container" data-aos="fade-up">
               <div class="section-title">
                  <h2>Equipo</h2>
                  <p>Miembros</p>
               </div>
               <div class="row">
                  <div class="col-lg-3 col-md-6">
                     <div class="member" data-aos="fade-up" data-aos-delay="100">
                        <!--<div class="pic"><img src="assets/img/team/anonimo.png" class="img-fluid" alt=""></div>-->
                        <div class="member-info">
                           <h4>Fernando Caballero</h4>
                           <!--<span></span>-->
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
                     <div class="member">
                        <!--<div class="pic"><img src="assets/img/team/anonimo.png" class="img-fluid" alt=""></div>-->
                        <div class="member-info">
                           <h4>xabier Martirena</h4>
                           <!--<span></span>-->
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
                     <div class="member">
                        <!--<div class="pic"><img src="assets/img/team/anonimo.png" class="img-fluid" alt=""></div>-->
                        <div class="member-info">
                           <h4>Javier Gonzalez</h4>
                           <!--<span></span>-->
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
                     <div class="member">
                        <!--<div class="pic"><img src="assets/img/team/anonimo.png" class="img-fluid" alt=""></div>-->
                        <div class="member-info">
                           <h4>Jon Cantero</h4>
                           <!--<span></span>-->
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!-- End Team Section -->
         <!-- ======= Contact Section ======= -->
         <section id="contact" class="contact">
            <div class="container" data-aos="fade-up">
               <div class=" section-title">
                  <h2>Contacto</h2>
                  <p>Contacta con folding at home</p>
               </div>
               <div class="row">
                  <div class="col-lg-12 mt-4 mt-lg-0">
                     <div  class="info-box">
                        <ul class="list-group list-group-flush">
                           <li class="list-group-item lead font-weight-bold">Podéis encontrar información sobre folding at home en los siguientes enlaces :</li>
                           <li class="list-group-item"><a href="https://discord.com/invite/97Z2wBF">Discord</a></li>
                           <li class="list-group-item"><a href="https://www.facebook.com/Foldinghome-136059519794607">Faccebook</a></li>
                           <li class="list-group-item"><a href="https://twitter.com/foldingathome">Twitter</a></li>
                           <li class="list-group-item"><a href="https://foldingathome.org/">Foldingforum.org</a></li>

                           <li class="list-group-item lead font-weight-bold">Quieres reportar algun tipo de bug  o problema?</li>
                           <li class="list-group-item"><a href="https://github.com/FoldingAtHome/fah-issues/issues">Github</a></li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!-- End Contact Section -->
      </main>
      <!-- End #main -->
      <!-- ======= Footer ======= -->
      <footer id="footer">
         <div class="footer-top">
            <div class="container">
               <div class="row">
                  <div class="col-12  text-center">
                     <h1 class="display-4">¡Apoyanos!</h1>
                  </div>
                               
               </div>
               <br>
                <div class="row">
                  
                          
                        <div class="col-lg-3  text-center" >
                           <a href="https://twitter.com/intent/tweet?button_hashtag=foldingathome&ref_src=twsrc%5Etfw" class="twitter-hashtag-button" data-show-count="false" data-size="large">Compartir</a><script async src="https://platform.twitter.com/widgets.js" charset="utf-8" ></script>
                        </div>
                        <div class="col-lg-3  text-center">
                           <a href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Ffoldingathome.org%2Fcovid19%2F" class="btn btn-social btn-dropbox"><span class="fa fa-facebook"></span>Compartir</a>
                        </div>
                        <div class="col-lg-3  text-center">
                           <a href="https://www.linkedin.com/sharing/share-offsite/?url=https%3A%2F%2Ffoldingathome.org%2Fcovid19%2F" class="btn btn-social btn-linkedin"><span class="fa fa-linkedin"></span>Compartir</a>
                        </div>
                        <div class="col-lg-3  text-center">
                           <a href="https://www.pinterest.es/pin/create/bookmarklet/?media=https://foldingathome.org/wp-content/uploads/2017/08/folding-at-home-logo.png&url=https://foldingathome.org/covid19/&is_video=no&description=Covid19" class="btn btn-social btn-pinterest"><span class="fa fa-pinterest"></span>Compartir</a>
                        </div>
                                                 
                                     
                </div>
                <br><br>
                <div class="row">
                   <div class="col-12 text-center">

                      © Copyright 2001-2020 Copyright.es - Todos los Derechos Reservados - Legal
                   </div>
                </div>
            </div>
         </div>
         <div class="container">
         </div>
      </footer>
      <!-- End Footer -->
      <a href="#" class="back-to-top"><i class="ri-arrow-up-line"></i></a>
      <div id="preloader"></div>
      <!-- Vendor JS Files -->
      <script src="assets/vendor/jquery/jquery.min.js"></script>
      <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
      <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
      <script src="assets/vendor/php-email-form/validate.js"></script>
      <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
      <script src="assets/vendor/counterup/counterup.min.js"></script>
      <script src="assets/vendor/venobox/venobox.min.js"></script>
      <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
      <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
      <script src="assets/vendor/aos/aos.js"></script>
      <!-- Template Main JS File -->
      <script src="assets/js/main.js"></script>
   </body>
</html>