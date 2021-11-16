<!DOCTYPE html>
<html>
    <head>
    <title>VIM - Sala Musk</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- Ubuntu GFonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">

    <!-- dedicated stylesheet -->
    <link rel="stylesheet" href="../css/VIM.css" type="text/css">
    <!-- generic stylesheet -->
    <link rel="stylesheet" href="../../css/style.css" type="text/css">

    <!-- font awesome 5 -->
    <script src="https://kit.fontawesome.com/95ae55bd9a.js" crossorigin="anonymous"></script>

    <!-- scrollLink - Scroll to Link -->
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
	  <script type="text/javascript">
	    $(document).ready(function(){
        $( "a.scrollLink" ).click(function( event ) {
    	    event.preventDefault();
          $("html, body").animate({ scrollTop: $($(this).attr("href")).offset().top }, 1000);
    	  });
	    });
	  </script>

    <!-- AOS css -->
		<link href="../../css/AOS/aos.css" rel="stylesheet">


    </head>
    <body id="gototop">

        <!-- https://codepen.io/albizan/pen/mMWdWZ -->

    <nav class="nav">
        <div class="container">
            <div class="logo">
                <a href="../it/"><img src="../img/sala-musk-logo.png" alt="logo" height="45px"></a><img src="../img/vertical-line-white.png" height="45px"><a href="../it/"><img src="../img/vim-terminal.png" alt="" height="45px"></a>
            </div>
            <div id="mainListDiv" class="main_list">
                <ul class="navlinks">
                    <li><a href=""><span class="scorrimentofigo"><i class="fas fa-home"></i></span></a></li>
                    <li><a href="docs"><span class="scorrimentofigo">Documentazione</span></a></li>
                    <li><a href="resources"><span class="scorrimentofigo">Risorse</span></a></li>
                    <li><a href="../../it#aboutus"><span class="scorrimentofigo">Chi Siamo</span></a></li>
                    <li class="font-weight-lighter"><a href="../"><img src="../img/bandiera-en.png" alt="" height="30%"> <small>EN</small></a></li>
                </ul>
            </div>
            <span class="navTrigger">
                <i></i>
                <i></i>
                <i></i>
            </span>
        </div>
    </nav>


    <div class="video-container"> 
      
      <video class="bg-video" autoplay loop muted playsinline>
        <source src="../img/programming-intro.mp4" type="video/mp4">
        <source src="../img/programming-intro.webm" type="video/webm">
      </video>

      <div class="container h-100">
        <div class="d-flex h-100">
          <div class="w-100 flex-centro-100vh" id="VIM-titolo" style="color: white;">
            <h1 class="title title-evidenziato">VIM - Vi IMproved</h1>
            <h4 class="title-evidenziato">VIM tutorial</h4>
            <h5 class="title-evidenziato">Presented by Sala Musk</h5>
          </div>
        </div>
      </div>
  </div>

<div>
  something like get started - download vim - etc
</div>

<!-- Footer -->
<footer class="text-center text-white custom-footer-1" style="font-size: 1rem !important;">
      <!-- Grid container -->
      <div class="container p-4">

      <?php include("../assets/footer-it.html"); ?>

        <a href="../" style="color: white" class="a-hover-none"><img src="../img/bandiera-en.png" height="20px"> <u>Versione in inglese</u></a><br/>
        <a href="#gototop" style="color: white" class="a-hover-none scrollLink"><u>Torna in alto</u></a>
      </div>
    
      <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.3);">
        &copy; 2021 <span style="font-weight: 700;">3CI IN Organization</span> per l'insegnamento. <span class="text-muted">Progetto Open Source.</span></a>
      </div>
    
</footer>
    
<?php include("../assets/footer_ver-it.html"); ?>




        


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <!-- inizialize AOS  -->
    <script type="text/javascript" src="../../css/AOS/aos.js"></script>
    <script type="text/javascript">
	    AOS.init();
    </script>

    <!-- Jquery needed -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  
  <!-- Function used to shrink nav bar removing paddings and adding black background -->
    <script>
      $(window).scroll(function() {
        if ($(document).scrollTop() > 50) {
          $('.nav').addClass('affix');
            console.log("OK");
          } else {
          $('.nav').removeClass('affix');
        }
      });
    </script>
    <!-- navbar script -->
      <script>
        $('.navTrigger').click(function () {
      $(this).toggleClass('active');
      console.log("Clicked menu");
      $("#mainListDiv").toggleClass("show_list");
      $("#mainListDiv").fadeIn();
  
      });
  
      </script>
    </body>
</html>