
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <link rel="shortcut icon" href="img/favicon.png">
    <title>.::Oséias | Freitas::.</title>

    <!-- Bootstra -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/theme.css" rel="stylesheet">
    <link href="css/bootstrap-reset.css" rel="stylesheet">
    <!--css esterno-->
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link rel="stylesheet" href="css/flexslider.css"/>
    <link href="assets/bxslider/jquery.bxslider.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="css/animate.css">
    <link href='http://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>

    <link href="css/style.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet" />
    <!--[if lt IE 9]>
<script src="js/html5shiv.js">
</script>
<script src="js/respond.min.js">
</script>
<![endif]-->
  </head>

  <body>
    <!--header início-->
        <header class="head-section">

            <div class="navbar navbar-default navbar-static-top container">

                <div class="navbar-header">

                    <button class="navbar-toggle" data-target=".navbar-collapse" data-toggle="collapse" type="button">

                         <span class="icon-bar"></span>

                         <span class="icon-bar"></span>

                         <span class="icon-bar"></span>

                    </button>

                     <a class="navbar-brand" href="index.html">Oséias Freitas<span> Web design</span></a>

                </div>

                <div class="navbar-collapse collapse">

                    <ul class="nav navbar-nav">

                        <li>

                             <a href="index.php">Home</a>

                        </li>

                        <li>

                             <a href="perfil_profissional.php">Quem Sou</a>

                        </li>

                        <li>

                             <a href="portfolio-3-col.php">Portfólios</a>

                        </li>                        

                        <li>

                             <a href="contact.php">Contato</a>

                        </li>

                        <form name="" class="form-busca" action="resultado.php" method="get">
                            <!--<input type="text" class="form-control search" placeholder=" Buscar" />-->
                            <input type="text" name="Buscar" class="form-field search" placeholder=" Buscar" />
                            <input type="submit" name="" id="" alt="" title="" value="Buscar" class="btn btn-info  "/>
                        </form>

                    </ul>

                </div>

            </div>

        </header>    <!--header fim-->

    <!--breadcrumbs início-->
    <div class="breadcrumbs">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 col-sm-4">
            <h1>
              Contato</h1>
          </div>
          <div class="col-lg-8 col-sm-8">
            <ol class="breadcrumb pull-right">
              <li>
                <a href="index.php">
                  Home
                </a>
              </li>
             
         
            </ol>
          </div>
        </div>
      </div>
    </div>
    <!--breadcrumbs fim-->



    <!--container início-->
    <div class="container">


      <div class="row">
        <div class="col-lg-5 col-sm-5 address">

         
          <section class="contact-infos">
            <h4>
              TELEFONE
            </h4>
            <p>
              <i class="icon-phone">
              </i>
              (51) 3315-3147
            </p>

            <p>
              <i class="icon-phone">
              </i>
              (51) 8638-3429
            </p>

          </section>
          
          <section class="contact-infos">
            <h4>
              E-MAIL
            </h4>
            <p>
              <i class="icon-phone">
              </i>
              oseiasdesginb@gmail.com
            </p>


          </section>
          
        </div>
        <div class="col-lg-7 col-sm-7 address">
          <h3 style="color:#666666">
            VAMOS CONVERSAR
          </h3><br/><br/>
          <div class="contact-form">
            <form name="enviar" action="email.php" method="post" role="form">
              <div class="form-group">
                <label for="name">
                  <h4 style="color:#999999">Nome</h4>
                </label>
                <input name="nome" type="text" placeholder="Nome Completo" required maxlength="80" id="name" class="form-control">
              </div>
              <div class="form-group">
                <label for="email">
                  <h4 style="color:#999999">Email</h4>
                </label>
                <input type="mail" placeholder="E-Mail" required maxlength="80" name="email"  id="email" class="form-control">
              </div>
              <div class="form-group">
                <label for="phone">
                  <h4 style="color:#999999">Assunto</h4>
                </label>
                <input type="text" required maxlength="80" placeholder="assunto" name="telefone" id="phone" class="form-control">
              </div>
              <div class="form-group">
                <label for="phone">
                  <h4 style="color:#999999">Mensagem</h4>
                </label>
                <textarea placeholder="" rows="5" class="form-control" name="mensagen">
                </textarea>
              </div>
              <button class="btn btn-info" type="submit" name="enviar">
                Enviar Formulário
              </button><br/>
              <!--<button class="btn btn-info" type="submit" name="">
                Pagagar Formulário
              </button>-->
            </form>

          </div>
        </div>
      </div>

    </div>
    <!--container fim-->

    <!--google map-->
    <div class="contact-map">
      <div id="map-canvas" style="width: 100%; height: 400px">
      </div>
    </div>
    <!--google map fim-->




          </div>

        </div>
      </div>
    </div>

    <!--footer start-->
        <footer class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-sm-3 address wow fadeInUp" data-wow-duration="2s" data-wow-delay=".1s">
                         <h1>

              contato

            </h1>
                         <address>

              <p><i class="fa fa-mobile pr-10"></i>Telefone : (51) 3315-3147 </p>

              <p><i class="fa fa-phone pr-10"></i>Celular : (51) 8638-3429/ 8466-9535 </p>

              <p><i class="fa fa-envelope pr-10"></i>Email :   <a href="javascript:;">oseiasdesginb@gmail.com</a></p>

            </address>
                    </div>
                    
                    </div>
                   
                </div>
            </div>
        </footer>
        <!-- footer end -->
        <!--small footer start -->
        <footer class="footer-small">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-sm-6 pull-right">
                        <ul class="social-link-footer list-unstyled">
                            <li class="wow flipInX" data-wow-duration="2s" data-wow-delay=".1s"><a href="https://www.facebook.com/oseiasd.freitas"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li class="wow flipInX" data-wow-duration="2s" data-wow-delay=".2s"><a href="https://plus.google.com/u/0/"><i class="fa fa-google-plus"></i></a>
                            </li>
                            <!--<li class="wow flipInX" data-wow-duration="2s" data-wow-delay=".4s"><a href="#"><i class="fa fa-linkedin"></i></a>
                            </li>-->
                            <!--<li class="wow flipInX" data-wow-duration="2s" data-wow-delay=".8s"><a href="#"><i class="fa fa-youtube"></i></a>
                            </li>-->
                        </ul>
                    </div>
                    <div class="col-md-4">
                        <div class="copyright">
                            <p>Site Desenvolvido por - Oséias Freitas</p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    <!--small footer end-->

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="js/jquery.js">
    </script>
    <script src="js/bootstrap.min.js">
    </script>
    <script type="text/javascript" src="js/hover-dropdown.js">
    </script>
    <script type="text/javascript" src="assets/bxslider/jquery.bxslider.js">
    </script>


    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&AMP;sensor=false">
    </script>

    <!--common script for all pages-->
    <script src="js/common-scripts.js">
    </script>
    <script src="js/wow.min.js">
    </script>
    <script>
      wow = new WOW(
        {
          boxClass:     'wow',      // default
          animateClass: 'animated', // default
          offset:       0          // default
        }
      )
        wow.init();
    </script>


    <script>
      $(document).ready(function() {
        //Set the carousel options
        $('#quote-carousel').carousel({
          pause: true,
          interval: 4000,
        }
                                     );
      }
                       );

      //google map
      function initialize() {
        var myLatlng = new google.maps.LatLng(51.508742,-0.120850);
        var mapOptions = {
          zoom: 5,
          center: myLatlng,
          mapTypeId: google.maps.MapTypeId.ROADMAP
        }
            var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);
        var marker = new google.maps.Marker({
          position: myLatlng,
          map: map,
          title: 'Contact'
        }
                                           );
      }
      google.maps.event.addDomListener(window, 'load', initialize);



    </script>

  </body>
</html>
