<!DOCTYPE html>
<html>
    <head>
    <title>Sala Musk</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- Ubuntu GFonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/style.css" type="text/css">
    <link rel="stylesheet" href="css/index/index.css" type="text/css">

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
	<link href="css/aos/aos.css" rel="stylesheet">

  <meta name="description" content="Sala Musk Homepage">

<!-- scroll debugging css 
  <style>
    #scroll {
      height:40px;
      position:fixed;
	      width:100%;
	      background:#fff;
	      bottom:0;
	      text-align:center;
	      color:red;
        z-index: 10000;
      }
  </style>
-->

    </head>
    <body id="gototop">
      <!-- scrollbar with progress
      <div id="progressbar"></div>
      <script type="text/javascript">
        $(window).scroll(function(){
          var scroll = $(window).scrollTop(),
          dh = $(document).height(),
          wh = $(window).height();
          scrollPercent = (scroll / (dh-wh)) * 100;
          $('#progressbar').css('height', scrollPercent + '%')
        })
      </script>
      -->

    <!-- https://codepen.io/albizan/pen/mMWdWZ -->

    <?php include("assets/navbar.html"); ?>
    




<div class="header" id="projects">
  <h1 class="projectstext">OUR PROJECTS</h1>
</div>


<!-- https://codepen.io/andymerskin/pen/XNMWvQ -->
<div id="app" class="card-container">
  <a href="VIM">
  <card data-image="img/vim-terminal.png">
    <h1 slot="header">VIM</h1>
    <p class="card-p" slot="content">VIM explanation and tutorials.</p>
  </card>
  </a>
</div>
<!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/vue/2.0.1/vue.min.js'></script>
  <script src="css/index/card/card.js"></script>
<!-- OLD METHOD TO HIDE #APP - IT'S BUGGY
<script>
document.addEventListener('scroll', function(){

    var h = document.documentElement, 
        b = document.body,
        st = 'scrollTop',
        sh = 'scrollHeight';

    var percent = (h[st]||b[st]) / ((h[sh]||b[sh]) - h.clientHeight) * 100;

    if (percent>22)
     {
        $('.card-container').hide();
     }
    else
     {
        $('.card-container').show();
     }
	
    /* document.getElementById('scroll').textContent = 'scrolled: ' + percent + '%'; */
});
</script>
 for scroll debugging
<div id="scroll">Scroll to see percentage</div>
-->

<!-- hide app when scrolled past aboutus div -->
<script>
  window.addEventListener("scroll", function() {
  var elementTarget = document.getElementById("aboutus");
  if (window.scrollY > (elementTarget.offsetTop + elementTarget.offsetHeight)) {
    $('.card-container').addClass('opacity0');
  }else{
    $('.card-container').removeClass('opacity0');
  }
});
</script>



<!-- https://codepen.io/hexagoncircle/pen/JjRYaZw -->

<header class="header" id="aboutus"> 
  <h1>ABOUT US</h1>
</header>

<main class="main">
  <section class="section">
      <figure class="image-container"><img src="img/ceo-bini.jpg" alt=""/></figure>
      <article class="content">
          <h2 class="section-title">CEO</h2><h3>Bini</h3>
          <p>Bini Matteo is the Chief Executive Officer of Sala Musk. He directed personally the researches for the resources and documentation of the project.</p>
          <p>Bini, born 08/03/2004 in Viadana, is an aspiring student of 3CI IN at ITIS "Enrico Fermi" Mantua. He has competences in Python (Kivy, KivyMD, Tkinter), JavaScript and Node.js with Express for backend infrastructure, HTML, CSS, file managing, txt, csv and json database managing, rest apis managing, Linux bash commands and basic C skills. During his career, he reached 2&deg; position in national team OPS (Problem Solving) tournaments.</p>
          <a class="btn btn-outline-light btn-floating m-1" style="width:75px;" target="_blank" href="mailto:binim@fermimn.edu.it" role="button"><i class="fas fa-envelope"></i><br/>E-mail</a>
          <a class="btn btn-outline-light btn-floating m-1" style="width:75px;" target="_blank" href="https://github.com/MatteoBini" role="button"><i class="fab fa-github"></i><br/>GitHub</a>
          <a class="btn btn-outline-light btn-floating m-1" style="width:75px;" target="_blank" href="https://twitter.com/matteobini_" role="button"><i class="fab fa-twitter"></i><br/>Twitter</a>
      </article>
  </section>
  <section class="section">
      <figure class="image-container"><img src="img/rro-kevin_vaccaro.jpg" alt=""/></figure>
      <article class="content">
          <h2 class="section-title">Online Resources Team</h2><h3>Kevin & Andrea</h3>
          <p>The online resources department deals with online services, including this website. It's composed by Kevin Liu (right) and Andrea Vaccaro (left).</p>
          <p>Kevin, born 01/01/2005 in Castelfranco Veneto, is very intrested in front-end developing, in particular HTML and CSS. He has also basic competences in C, JavaScript, Python and good at copying Stack Overflow and Codepen codes. He defines himself as an Open Source Codes Collage Artist (OSCCA).</p>
          <p>Andrea, born 27/12/2005 in Casalmaggiore, has experence in front-end and back-end developing. He can code in different languages, including C, HTML5, CSS3, JavaScript and basic programs in Python. He was part of the OPS team that reached 2&deg; in the national tournament.</p>
          <p>They're both ambitious students of 3CI IN at ITIS "E. Fermi" Mantua.</p>
          <p style="font-size: 1.2rem;">Contact Kevin</p>
          <a class="btn btn-outline-light btn-floating m-1" style="width:75px;" target="_blank" href="mailto:cliu@fermimn.edu.it" role="button"><i class="fas fa-envelope"></i><br/>E-mail</a>
          <a class="btn btn-outline-light btn-floating m-1" style="width:75px;" target="_blank" href="https://github.com/kev1nl1u" role="button"><i class="fab fa-github"></i><br/>GitHub</a>
          <a class="btn btn-outline-light btn-floating m-1" style="width:75px;" target="_blank" href="https://twitter.com/kevinIiu" role="button"><i class="fab fa-twitter"></i><br/>Twitter</a>
          <p style="font-size: 1.2rem;">Contact Andrea</p>
          <a class="btn btn-outline-light btn-floating m-1" style="width:75px;" target="_blank" href="mailto:vaccaroa@fermimn.edu.it" role="button"><i class="fas fa-envelope"></i><br/>E-mail</a>
          <a class="btn btn-outline-light btn-floating m-1" style="width:75px;" target="_blank" href="https://github.com/AndreaCrazyProgrammerPazzo" role="button"><i class="fab fa-github"></i><br/>GitHub</a>
          <a class="btn btn-outline-light btn-floating m-1" style="width:75px;" target="_blank" href="https://instagram.com/vmc.andrea" role="button"><i class="fab fa-instagram"></i><br/>IG</a>
    </article>
  </section>
  <section class="section">
      <figure class="image-container"><img src="img/dw-anton_zibo_sirico.jpg" alt=""/></figure>
      <article class="content">
        <h2 class="section-title">Documentation Writers</h2><h3>Seba, Davide & Anton</h3>
        <p>The Documentation Writers Team is composed by Sebastiano Zibordi, Davide Sirico and Alessandro Anton. With Bini's coordination, the team made all the researches of the projects and wrote the documentations.</p>
        <p>Sebastiano Zibordi, born //2005 in , is </p>
        <p>Davide Sirico, born //2005 in , is </p>
        <p>Alessandro Anton, born 11/07/2005 in Pieve di Coriano, is a very peculiar boy who studies at ITIS "E. Fermi" Mantua with the goal of dominating the entire world through realistic physics in programs. With HTML, CSS, JavaScript, basic knowledge of C and C# in his mind, he has managed to move one cube up by 1 unit. He himself likes to demonstrate this achievement with glory and honor to others.</p>
        <p style="font-size: 1.2rem;">Sebastiano's socials</p>
        <a class="btn btn-outline-light btn-floating m-1" style="width:75px;" target="_blank" href="mailto:szibordi@fermimn.edu.it" role="button"><i class="fas fa-envelope"></i><br/>E-mail</a>
        <p style="font-size: 1.2rem;">Davide's socials</p>
        <a class="btn btn-outline-light btn-floating m-1" style="width:75px;" target="_blank" href="mailto:dsirico@fermimn.edu.it" role="button"><i class="fas fa-envelope"></i><br/>E-mail</a>
        <a class="btn btn-outline-light btn-floating m-1" style="width:75px;" target="_blank" href="" role="button"><i class="fab fa-github"></i><br/>GitHub</a>
        <p style="font-size: 1.2rem;">Alessandro's socials</p>
        <a class="btn btn-outline-light btn-floating m-1" style="width:75px;" target="_blank" href="mailto:aanton@fermimn.edu.it" role="button"><i class="fas fa-envelope"></i><br/>E-mail</a>
        <a class="btn btn-outline-light btn-floating m-1" style="width:75px;" target="_blank" href="https://github.com/NewAlexGamer" role="button"><i class="fab fa-github"></i><br/>GitHub</a>
      </article>
    </section>
</main>


  <?php include("assets/footer.html"); ?>







    
  
  
  
  
          
  
  
      <!-- Optional JavaScript -->
      <!-- jQuery first, then Popper.js, then Bootstrap JS -->
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
      <!-- inizialize AOS  -->
      <script type="text/javascript" src="css/AOS/aos.js"></script>
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
            } else {
            $('.nav').removeClass('affix');
          }
        });
      </script>
      <!-- navbar script -->
        <script>
          $('.navTrigger').click(function () {
        $(this).toggleClass('active');
        $("#mainListDiv").toggleClass("show_list");
        $("#mainListDiv").fadeIn();
    
        });
    
        </script>

        <!-- failed attempt to change scrollbar border-radius when reached the bottom. JS you won the battle, but not the war.
        <script>
          $(window).scroll(function() {
            if($(window).scrollTop() + $(window).height() == $(document).height()) {
    
            }
        });
        </script>
        -->
      </body>
  </html>