<?php require_once('Connections/db.php'); ?>
<?php
if (!function_exists("GetSQLValueString")) {
function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
{
  $theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;

  $theValue = function_exists("mysql_real_escape_string") ? mysql_real_escape_string($theValue) : mysql_escape_string($theValue);

  switch ($theType) {
    case "text":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;    
    case "long":
    case "int":
      $theValue = ($theValue != "") ? intval($theValue) : "NULL";
      break;
    case "double":
      $theValue = ($theValue != "") ? "'" . doubleval($theValue) . "'" : "NULL";
      break;
    case "date":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;
    case "defined":
      $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
      break;
  }
  return $theValue;
}
}

$Buscar_resultado_dois = "-1";
if (isset($_GET['Buscar'])) {
  $Buscar_resultado_dois = $_GET['Buscar'];
}
mysql_select_db($database_db, $db);
$query_resultado_dois = sprintf("SELECT * FROM busca_simples WHERE titulo LIKE %s ORDER BY id DESC", GetSQLValueString($Buscar_resultado_dois . "%", "text"));
$resultado_dois = mysql_query($query_resultado_dois, $db) or die(mysql_error());
$row_resultado_dois = mysql_fetch_assoc($resultado_dois);
$totalRows_resultado_dois = mysql_num_rows($resultado_dois);
?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <link rel="shortcut icon" href="img/favicon.png">
    <title>.::Oséias | Freitas::.</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/theme.css" rel="stylesheet">
    <link href="css/bootstrap-reset.css" rel="stylesheet">
    <!--css externo-->
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link rel="stylesheet" href="css/flexslider.css"/>
    <link href="assets/bxslider/jquery.bxslider.css" rel="stylesheet" />
    <link rel="stylesheet" href="css/animate.css"/>
    <link href='http://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="assets/owlcarousel/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="css/mixitup.css">

    <link rel="stylesheet" type="text/css" href="css/component.css">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet" />
    <link href="css/resultado.css" rel="stylesheet" />
    <link rel="stylesheet" href="css/magnific-popup.css">
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 tooltipss and media queries -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->
    <script>
function funcao1(){
alert("Este Site está sendo reformado, em breve estará disponível");
}
</script>

  </head>

  <body>
    <!--header início-->
       <!--header-->
       <header class="head-section">
         <div class="navbar navbar-default navbar-static-top container">

                <div class="navbar-header">

                    <button class="navbar-toggle" data-target=".navbar-collapse" data-toggle="collapse" type="button">

                         <span class="icon-bar"></span>

                         <span class="icon-bar"></span>

                         <span class="icon-bar"></span>                    </button>


                         <img src="img/logob.png"/>              </div>


                    
                        <form name="" class="form-busca" action="resultado_dois.php" method="get">

                            <!--<input type="text" class="form-control search" placeholder=" Buscar" />-->

                            <input type="text" name="Buscar" class="form-field search" placeholder=" Buscar" />

                            <input type="submit" name="" id="" alt="" title="" value="Buscar" class="btn btn-info  "/>

                        </form>


                <div class="navbar-collapse collapse">



                    <ul class="nav navbar-nav">
                        <li>
                             <a href="index.php">Home</a>
                        </li>

                        <li>
                            <a href="perfil_profissional.php">Quem Sou</a>
                        </li>

                        <li>
                            <a href="dominio_hospedagem.php">O que é Domínio e Hospedagem</a>
                        </li>
                        
                        <li>
                             <a href="portfolio-3-col.php">Portfólios</a>
                        </li>                        
                        
                        <li>
                             <a href="contato.php">Contato</a>
                        </li>


                    </ul>

                </div>

            </div>



    </header>    <!--header-->

    <!--breadcrumbs início-->
    <div class="breadcrumbs">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-sm-4">
                    <h1>Resultado</h1>
                </div>
                <div class="col-lg-8 col-sm-8">
                    <ol class="breadcrumb pull-right">
                        <li><a href="index.php">Home</a></li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!--breadcrumbs fim-->

  <br/>
  
  <section id="resultado">
  <a href="index.php" class="btn btn-info">VOLTAR PARA A PÁGINA INICIAL</a><br/><br/><br/>

   <table width="200" border="0">
   <?php if ($totalRows_resultado_dois == 0) { // Show if recordset empty ?>
    <tr>
      <td><h1 style="color:#666666">Nenhum Resultado</h1></td>
    </tr>
    <?php } // Show if recordset empty ?>

  <?php do { ?>
    <tr>
      <td><a href="noticias.php?id=<?php echo $row_resultado_dois['id']; ?>"><?php echo $row_resultado_dois['titulo']; ?></a></td>
    </tr>
    <?php } while ($row_resultado_dois = mysql_fetch_assoc($resultado_dois)); ?>
</table>
</section>
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



        <!-- js placed at the end of the document so the pages load faster

<script src="js/jquery.js">

</script>

-->

        <script src="js/jquery-1.8.3.min.js">

            

        </script>

        <script src="js/bootstrap.min.js">

            

        </script>

        <script type="text/javascript" src="js/hover-dropdown.js">

            

        </script>

        <script defer src="js/jquery.flexslider.js">

            

        </script>

        <script type="text/javascript" src="assets/bxslider/jquery.bxslider.js">

            

        </script>



        <script type="text/javascript" src="js/jquery.parallax-1.1.3.js">

            

        </script>

        <script src="js/wow.min.js">

            

        </script>

        <script src="assets/owlcarousel/owl.carousel.js">

            

        </script>



        <script src="js/jquery.easing.min.js">

            

        </script>

        <script src="js/link-hover.js">

            

        </script>

        <script src="js/superfish.js">

            

        </script>

        <script type="text/javascript" src="js/parallax-slider/jquery.cslider.js">

            

        </script>

        <script type="text/javascript">

            $(function() {



                $('#da-slider').cslider({

                        autoplay: true,

                        bgincrement: 100

                    });



            });

        </script>







        <!--common script for all pages-->

        <script src="js/common-scripts.js">

            

        </script>



        <script type="text/javascript">

            jQuery(document).ready(function() {





                $('.bxslider1').bxSlider({

                        minSlides: 5,

                        maxSlides: 6,

                        slideWidth: 360,

                        slideMargin: 2,

                        moveSlides: 1,

                        responsive: true,

                        nextSelector: '#slider-next',

                        prevSelector: '#slider-prev',

                        nextText: 'Avançar →',

                        prevText: '← Voltar'

                    });



            });

        </script>





        <script>

            $('a.info').tooltip();



            $(window).load(function() {

                $('.flexslider').flexslider({

                        animation: "slide",

                        start: function(slider) {

                            $('body').removeClass('loading');

                        }

                    });

            });



            $(document).ready(function() {



                $("#owl-demo").owlCarousel({



                        items: 4



                    });



            });



            jQuery(document).ready(function() {

                jQuery('ul.superfish').superfish();

            });



            new WOW().init();

        </script>

    </body>
</html>
<?php
mysql_free_result($resultado_dois);
?>
