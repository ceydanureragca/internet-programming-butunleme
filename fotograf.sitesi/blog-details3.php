<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="assets/images/favicon.ico">
    <link href="./efes.css" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <title>PHPJabbers.com | Free Blog Website Template</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/owl.css">



  </head>

  <body>

    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    <!-- ***** Preloader End ***** -->

    <!-- Header -->
    <header class="">
      <nav class="navbar navbar-expand-lg">
        <div class="container">
          <a class="navbar-brand" href="index.php"><h2>KADRAJ <em>PHOTOGRAPHY</em></h2></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Home
                      <span class="sr-only">(current)</span>
                    </a>
                </li> 

                <li class="nav-item active"><a class="nav-link" href="blog.php">BLOG</a></li>

                <li class="nav-item"><a class="nav-link" href="about-us.php">HAKKIMIZDA</a></li>

                <li class="nav-item"><a class="nav-link" href="team.php">EK??B??M??Z</a></li>

                <li class="nav-item"><a class="nav-link" href="contact.php">B??ZE ULA??IN</a></li>

                

                <?php
              if(isset($_SESSION["username"]))
              {
                echo "<form action =\"\" method=\"Post\" > ";
                echo("<li class=\"nav-item\"><input class=\"nav-link\" value=\"??IKI??\" type=\"submit\" name=\"cikis\"></li>");
                echo "</form>";
              }

              else {
                echo "<li class=\"nav-item\"><a class=\"nav-link\" href=\"giris.php\">Giri??</a></li>";
              }
              
                if(isset($_SESSION["username"]))
                {
                  ?>
                  <li class="nav-item"><a class="nav-link" href=""><?php echo $_SESSION["username"] ?></a></li>
                  <?php
                }
              ?>

            </ul>
          </div>
        </div>
      </nav>
    </header>

    <!-- Page Content -->
    <div class="page-heading about-heading header-text" style="background-image: url(assets/images/foto/resim1.jpg);">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="text-content">
              <h4><i class="fa fa-user"></i> MEL??H ??ELT??K &nbsp;&nbsp;&nbsp;&nbsp;  <i class="fa fa-calendar"></i> 12/06/2020 10:30   &nbsp;&nbsp;&nbsp;&nbsp; <i class="fa fa-eye"></i> 114</h4>
              <h2>EFES ANT??K KENT</h2>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="products">
      <div class="container">
        <div class="row">
            <div class="col-md-12">
              <div class="section-heading">
                <h2> EFES ANT??K KENT  </h2>
              </div>
            </div>

            <div class="col-md-8">
                <p> Efes Antik Kenti, Ege b??lgesindeki ??zmir ??ehrinde yer al??yor. ??ehre yakla????k bir saat mesafedeki Sel??uk il??esinin 3 km g??neybat??s??nda bulunuyor.<br>

                <br>
                Do??u ile bat?? aras??ndaki bir liman kenti olan ??zmir Efes Antik Kent tarihi, M.??. 8600 y??l??na kadar uzan??yor. B??lgeyi bu denli ??nemli yapan ??zelli??i ise, tarih boyunca pek ??ok medeniyete ev sahipli??i yapm???? olmas??ndan kaynaklan??yor. Ev sahipli??i yapt?????? medeniyetler aras??nda Romal??lar, Bizans ??mparatorlu??u, Osmanl?? ??mparatorlu??u ve pek ??ok Anadolu beylikleri yer al??yor.

Liman kenti olmas?? sebebiyle tarihteki ??nemli ticaret yollar??n??n ??zerinde bulunmas?? ve sahip oldu??u verimli topraklar, b??lgeyi hem hareketli hem de ??nemli bir konuma ta????yor.
            </p>

                <br>

                <h5>iZM??R'??N M??RAS?? EFES ANT??K KENT</h5>

                <br>

                <p> Kad??n sava??????lar taraf??ndan kuruldu??u rivayet edilen kentin, ismini Ana Krali??e Kenti olarak ??evrilen Arzawa???dan ald?????? s??yleniyor. Romal??lar d??nemi ile birlikte iyice geli??ip g????lenen b??lge, d??nemin en ??nemli ticaret merkezi haline geliyor.
Bu denli ??nemli bir konumda oldu??u i??in, tarih boyunca pek ??ok medeniyet buraya sahip olman??n yollar??n?? ar??yor. 1300???l?? y??llar ile birlikte T??rklerin eline ge??en Efes, Mo??ol sald??r??lar?? nedeniyle b??y??k bir tahribata u??ruyor ve zamanla eski ??nemini yitirmeye ba??l??yor. <br>

                <br>
                ??ZM??R'DE YAPTI??IMIZ ??EK??MLER</p>
            </div>

            <div class="col-md-4">
              <div class="left-content">
                <h4>MEL??H ??ELT??K</h4>

                <br>
                
                <p>G??ZEL ??LKEM??Z??N DO??AL G??ZELL??KLER??NDEN B??R?? OLAN EFES ANT??K KENT??^N?? ADIM ADIM GEZEREK M??KEMMEL MANZARALARINI KADRAJLAYARAK S??ZLERE G??STERMEK ??STED??M.<S></S>
                </p>
                
                <p></p>
              </div>
            </div>
        </div>

        <br>
        
        <div>       
</div>
  <br>
        
        <div>
        <div class="wrapframe">
<div class="slideshows">
  <div class="slideshow slideshow--hero">
    <div class="mainslides">
      <div class="slide slide1"></div>
      <div class="slide slide2"></div>
      <div class="slide slide3"></div>
    </div>
  </div>
  <div class="slideshow slideshow--contrast slideshow--contrast--before">
    <div class="secondslides">
      <div class="slide slide1"></div>
      <div class="slide slide2"></div>
      <div class="slide slide3"></div>
    </div>
  </div>
  <div class="slideshow slideshow--contrast slideshow--contrast--after">
    <div class="thirdslides">
      <div class="slide slide1"></div>
      <div class="slide slide2"></div>
      <div class="slide slide3"></div>
    </div>
  </div>
</div>
  </div>
         

<br />
 
<!--dots start-->
<div class="dots">
    <span class="dot dot1"></span>
    <span class="dot dot2"></span>
    <span class="dot dot3"></span>
</div>
<!--dots end-->
 
<!--carousel end-->
 
        </div>
      </div>
    </div>

    <div class="send-message">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>Yorum Yap??n</h2>
            </div>
          </div>
          <div class="col-md-8">
            <div class="contact-form">
              <form id="contact" action="" method="post">
                <div class="row">
                  <div class="col-lg-12 col-md-12 col-sm-12">
                    <fieldset>
                      <input name="name" type="text" class="form-control" id="name" placeholder="Full Name" required="">
                    </fieldset>
                  </div>
                  <div class="col-lg-12 col-md-12 col-sm-12">
                    <fieldset>
                      <input name="email" type="text" class="form-control" id="email" placeholder="E-Mail Address" required="">
                    </fieldset>
                  </div>
                  <div class="col-lg-12">
                    <fieldset>
                      <textarea name="message" rows="6" class="form-control" id="message" placeholder="Your Message" required=""></textarea>
                    </fieldset>
                  </div>
                  <div class="col-lg-12">
                    <fieldset>
                      <button type="submit" id="form-submit" class="filled-button">G??nder</button>
                    </fieldset>
                  </div>
                </div>
              </form>
            </div>
          </div>

          <div class="col-md-4">
              <div class="left-content">

                <p>Di??er platformlardan'da bize ula??abilirsiniz.</p>

                <br> 

                <ul class="social-icons">
                  <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                  <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                  <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                  <li><a href="#"><i class="fa fa-behance"></i></a></li>
                </ul>
              </div>
            </div>
        </div>
      </div>
    </div>

    <footer>
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="inner-content">
              <p>Copyright ?? 2020 Company Name - Template by: <a href="https://www.phpjabbers.com/">PHPJabbers.com</a></p>
            </div>
          </div>
        </div>
      </div>
    </footer>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Book Now</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="contact-form">
              <form action="#" id="contact">
                  <div class="row">
                       <div class="col-md-6">
                          <fieldset>
                            <input type="text" class="form-control" placeholder="Pick-up location" required="">
                          </fieldset>
                       </div>

                       <div class="col-md-6">
                          <fieldset>
                            <input type="text" class="form-control" placeholder="Return location" required="">
                          </fieldset>
                       </div>
                  </div>

                  <div class="row">
                       <div class="col-md-6">
                          <fieldset>
                            <input type="text" class="form-control" placeholder="Pick-up date/time" required="">
                          </fieldset>
                       </div>

                       <div class="col-md-6">
                          <fieldset>
                            <input type="text" class="form-control" placeholder="Return date/time" required="">
                          </fieldset>
                       </div>
                  </div>
                  <input type="text" class="form-control" placeholder="Enter full name" required="">

                  <div class="row">
                       <div class="col-md-6">
                          <fieldset>
                            <input type="text" class="form-control" placeholder="Enter email address" required="">
                          </fieldset>
                       </div>

                       <div class="col-md-6">
                          <fieldset>
                            <input type="text" class="form-control" placeholder="Enter phone" required="">
                          </fieldset>
                       </div>
                  </div>
              </form>
           </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
            <button type="button" class="btn btn-primary">Book Now</button>
          </div>
        </div>
      </div>
    </div>


    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


    <!-- Additional Scripts -->
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/owl.js"></script>
  </body>

</html>
