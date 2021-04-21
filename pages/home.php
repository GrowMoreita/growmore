<!DOCTYPE html>
<html lang="it">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
		<title>GrowMore</title>

    <!-- Bootstrap -->
		<link href="../css/bootstrap-4.4.1.css" rel="stylesheet">
		<link href="../css/style.css" rel="stylesheet">
    <!-- ScrollReveal animations-->
    <script src="https://unpkg.com/scrollreveal@4.0.0/dist/scrollreveal.min.js"></script>
    <!---->
		<link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  </head>

	<body>
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="../js/jquery-3.4.1.min.js"></script>

    <div class="header">
      <div class="logo">
        <img src="/imgs/logo.png" class="logo_img" alt="">
      </div>
      <ul class="menu">
        <li><a href="#home">Home</a></li>
        <li><a href="#chi_siamo">Chi Siamo</a></li>
        <li><a href="#servizi">Servizi</a></li>
        <li><a href="#contatti">Contatti</a></li>
      </ul>
      <div class="header_social">
          <a href="https://www.facebook.com/growmoreita"  target="_blank">
            <img src="../imgs/facebook.png" class = "social_header" alt="facebook">
          </a>
          <a href="https://www.instagram.com/growmoreita"  target="_blank">
            <img src="../imgs/instagram.png" class = "social_header" alt="instagram">
          </a>
        </div>
      <div class="hamburger">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>

    <div id = "home" class="hero">
      <div class="hero__content text-center">
        <h1 class="testo_hero enter_hero_text">Creiamo il tuo sito web<br></h1>
        <h3 class="testo_hero_2 enter_hero_text">Ti aiutiamo a crescere la visibilità della tua azienda online</h3>
        <a href="#chi_siamo" class="enter_hero_arrow" id = "scopri_di_piu">
          <img src="https://icon-library.com/images/white-down-arrow-icon/white-down-arrow-icon-7.jpg" alt="freccia" style="width: 80px; height: 80px">
        </a>
      </div>
    </div>

    <div id = "chi_siamo" class="container chi_siamo text-center">
      <h3 class="enter_on_scroll">Chi siamo</h3>
      <div class="row">
        <div class="col-12 mb-4 enter_on_scroll">
          <p>La migliore web agency online sul mercato a prezzi vantaggiosi</p>
        </div>
        <div class="col-md-4 text-left mt-4 enter_on_scroll">
          <div class="card">
            <img class="card-img-top" src="https://images.pexels.com/photos/160107/pexels-photo-160107.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" alt="Icona">
            <div class="card-body card_body_chi_siamo">
              <h5 class="card-title card_title_chi_siamo">Competenza</h5>
              <p class="card-text card_text_chi_siamo" style="color: white !important">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
          </div>
        </div>
        <div class="col-md-4 text-left mt-4 enter_on_scroll">
          <div class="card">
            <img class="card-img-top" src="https://cdn.pixabay.com/photo/2016/11/29/09/32/concept-1868728_1280.jpg" alt="Icona">
            <div class="card-body card_body_chi_siamo">
              <h5 class="card-title card_title_chi_siamo">Passione</h5>
              <p class="card-text card_text_chi_siamo" style="color: white !important">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
          </div>
        </div>
        <div class="col-md-4 text-left mt-4 enter_on_scroll">
          <div class="card">
            <img class="card-img-top" src="https://images.pexels.com/photos/1036936/pexels-photo-1036936.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" alt="Icona">
            <div class="card-body card_body_chi_siamo">
              <h5 class="card-title card_title_chi_siamo">Creatività</h5>
              <p class="card-text card_text_chi_siamo" style="color: white !important">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div id = "servizi" class="servizi text-center">
      <div class="container container_servizi">
        <h3 class="enter_on_scroll">I nostri servizi</h3>
        <div class="row mt-5">
          <div class="col-md-4 text-left enter_on_scroll mb-5 mb-md-0">
            <div class="card">
              <img class="card-img-top" src="https://images.pexels.com/photos/326501/pexels-photo-326501.jpeg?auto=compress&cs=tinysrgb&dpr=3&h=750&w=1260" alt="Icona">
              <div class="card-body">
                <h5 class="card-title">Realizzazione siti web</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              </div>
            </div>
          </div>
          <div class="col-md-4 text-left enter_on_scroll mb-5 mb-md-0">
            <div class="card">
              <img class="card-img-top" src="https://images.pexels.com/photos/1851415/pexels-photo-1851415.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" alt="Icona">
              <div class="card-body">
                <h5 class="card-title">Social Media Marketing</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              </div>
            </div>
          </div>
          <div class="col-md-4 text-left enter_on_scroll">
            <div class="card">
              <img class="card-img-top" src="https://images.pexels.com/photos/4960464/pexels-photo-4960464.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" alt="Icona">
              <div class="card-body">
                <h5 class="card-title">Ottimizzazione SEO</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div id = "contatti" class="container contact-form">
      <form method="post" name="form" id="form">
        <h3 class="enter_on_scroll">Contattaci</h3>
        <div class="row enter_on_scroll">
          <div class="col-md-6">
            <div class="form-group">
              <input type="text" name="txtName" class="form-control" placeholder="Nome" value="" />
            </div>
            <div class="form-group">
              <input type="text" name="txtEmail" class="form-control" placeholder="Email" value="" />
            </div>
            <div class="form-group">
              <input type="text" name="txtSubject" class="form-control" placeholder="Oggetto" value="" />
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <textarea name="txtMsg" class="form-control" placeholder="Messaggio" style="width: 100%; min-height: 175px; max-height: 1000px;"></textarea>
            </div>
          </div>
          <div class = "col-12 text-center pt-5">
            <div class="form-group">
              <input type="button" name="btnSubmit" id="btnSubmit" class="btnContact" onclick="inviaMail()" value="Invia" />
            </div>
          </div>
        </div>
      </form>
    </div>

    <footer id = "footer" class="footer enter_on_scroll">
      <div class="container">
        <div class="row">
          <div class="col-md-4 footer_testo_bianco text-md-center order-md-2">
            <h4>GrowMore</h4>
            <div class="row">
              <div class="col-2 offset-md-4 pl-4 pl-md-2">
                <a href="https://www.facebook.com/growmoreita"  target="_blank">
                  <img src="../imgs/facebook.png" class = "social_logo" alt="facebook">
                </a>
              </div>
              <div class="col-2">
                <a href="https://www.instagram.com/growmoreita" target="_blank">
                  <img src="../imgs/instagram.png" class = "social_logo" alt="instagram">
                </a>
              </div>
            </div>
            <div class="row policy d-none d-md-block">
              <div class="col-12 policy_text">
                <a href="privacy_cookie_policy">Privacy and Cookie Policy</a>
              </div>
            </div>
          </div>
          <div class="col-md-4 footer_testo_bianco text-md-right order-md-3 pt-4 pt-md-0">
            <h4>Sede Legale</h4>
            <p>Via Forte Ventura, 24</p>
            <p>info@growmore.it</p>
            <p>1234567890</p>
            <p>P.I. 009836488836</p>
          </div>
          <div class="col-md-4 footer_testo_bianco text-md-left d-none d-md-block order-md-1">
            <h4>Sezioni</h4>
            <a href="#home">Home</a>
            <a href="#chi_siamo">Chi siamo</a>
            <a href="#servizi">Servizi</a>
            <a href="#contatti">Contatti</a>
          </div>
        </div>
        <div class="row policy d-block d-md-none">
          <div class="col-12 policy_text">
            <a href="privacy_cookie_policy">Privacy and Cookie Policy</a>
          </div>
        </div>
      </div>
    </footer>

  <!-- Jquery -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
		<!-- Include all compiled plugins (below), or include individual files as needed -->
		<script src="../js/popper.min.js"></script>
		<script src="../js/bootstrap-4.4.1.js"></script>
  </body>
</html>

<script>
  ScrollReveal().reveal('.enter_on_scroll' , { distance: '50px', duration: 1000, easing: 'cubic-bezier(.215, .61, .355, 1)', interval: 200 });
  ScrollReveal().reveal('.enter_header' , { origin: 'top', distance: '100%', duration: 1500, easing: 'cubic-bezier(.215, .61, .355, 1)', interval: 300  });
  ScrollReveal().reveal('.enter_hero_text' , { origin: 'left', distance: '100%', duration: 1500, easing: 'cubic-bezier(.215, .61, .355, 1)', interval: 300  });
  ScrollReveal().reveal('.enter_hero_arrow' , { origin: 'bottom', distance: '100%', duration: 1500, easing: 'cubic-bezier(.215, .61, .355, 1)', interval: 300, afterReveal: function(el) {  el.classList.add('animate__animated'); el.classList.add('animate__bounce');} });
</script>

<script>
    function inviaMail () {
      document.getElementById("btnSubmit").disabled = true;
      var d = $('form').serialize();
        $.ajax({
            url:"/php/sendmail.php",
            type: "post",
            dataType: 'json',
            data: d,
            success:function(result){
              if( result.error == 'OK' ) {
                const f = document.getElementById("form");
                f.classList.add('animate__animated', 'animate__zoomOutRight');
                f.addEventListener('animationend', () => {
                  f.classList.remove('animate__animated', 'animate__zoomOutRight');
                  f.reset();
                  f.classList.add('animate__animated', 'animate__fadeInDown');
                  f.addEventListener('animationend', () => {
                    f.classList.remove('animate__animated', 'animate__fadeInDown');
                  });
                });
                document.getElementById("btnSubmit").disabled = false;
              } else {
                const f = document.getElementById("form");
                f.classList.add('animate__animated', 'animate__shakeX');
                f.addEventListener('animationend', () => {
                  f.classList.remove('animate__animated', 'animate__shakeX');
                  document.getElementById("btnSubmit").disabled = false;
                });
              }
            }
        });
    }
</script>

<script>
  $( document ).ready(function() {

    /* Open Panel */
    $( ".hamburger" ).on('click', function() {
      $(".menu").toggleClass("menu--open");
      $("#scopri_di_piu").toggleClass("d-none");
    });

  });
</script>
