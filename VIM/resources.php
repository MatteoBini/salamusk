<!DOCTYPE html>
<html>
    <head>
    <title>Docs - VIM</title>
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
    <link rel="stylesheet" href="css/VIM.css" type="text/css">
    <link rel="stylesheet" href="css/resource.css">
    <!-- generic stylesheet -->
    <link rel="stylesheet" href="../css/style.css" type="text/css">

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
    <link href="../css/AOS/aos.css" rel="stylesheet">
  <script type="text/javascript" src="javascript/resources.js"></script>
    </head>
    <body id="gototop">

        <!-- https://codepen.io/albizan/pen/mMWdWZ -->

    <nav class="nav">
        <div class="container">
            <div class="logo">
                <a href="../index"><img src="img/sala-musk-logo.png" alt="logo" height="45px"></a><img src="img/vertical-line-white.png" height="45px"><a href="../VIM/"><img src="img/vim-terminal.png" alt="" height="45px"></a>
            </div>
            <div id="mainListDiv" class="main_list">
                <ul class="navlinks">
                  <li><a href="../VIM/"><span class="scorrimentofigo"><i class="fas fa-home"></i></span></a></li>
                  <li><a href="docs"><span class="scorrimentofigo">Docs</span></a></li>
                  <li><a href="resources"><span class="scorrimentofigo">Resources</span></a></li>
                  <li><a href="../index#aboutus"><span class="scorrimentofigo">About Us</span></a></li>
                  <li class="font-weight-lighter"><a href="it/resources"><img src="img/bandiera-it.png" alt="" height="30%"> <small>IT</small></a></li>
                  <li><button class="dark-mode-btn" id="dm-id" onclick="DarkMode()">Dark Theme</button></li>
                </ul>
            </div>
            <span class="navTrigger">
                <i></i>
                <i></i>
                <i></i>
            </span>
        </div>
    </nav>


    <div id="no-mobile">

    <table id="tabella-bottone" align="left">
      <tr>
        <td align="center" class="titoletti" onmouseover="spostatesto()" onmouseout="spostatesti()">Presentazione</td>
      </tr>
      <tr>
        <td align="center"><a href="downlodable/Esposizione.pptx" download="esposizione"><button class="bottoni-download" onmouseover="spostatesto()" onmouseout="spostatesti()">Download</button></a></td>
      </tr>
      <tr>
        <td align="center" class="titoletti" onmouseover="spostatesto2()" onmouseout="spostatesti2()">Palindromo</td>
      </tr>
      <tr>
        <td align="center" ><a href="downlodable/palindrome.pdf" download="palindromo"><button class="bottoni-download" onmouseover="spostatesto2()" onmouseout="spostatesti2()">Download</button></a></td>
      </tr>
      <tr>
        <td align="center" class="titoletti" onmouseover="spostatesto3()" onmouseout="spostatesti3()">Documentazione</td>
      </tr>
      <tr>
        <td align="center"><a href="downlodable/Docs.docx" download="documentazione"><button class="bottoni-download" onmouseover="spostatesto3()" onmouseout="spostatesti3()">Download</button></a></td>
      </tr>
    </table>

    <img src="../VIM/img/ceo-bini.jpg" class="img1">
    <img src="../VIM/img/ceo-bini.jpg" class="img2">
    <img src="../VIM/img/ceo-bini.jpg" class="img3">

    <div style="height: 1000px;">
    </div>

    </div>

    <div id="no-desktop">

        <div class="dl-divider">
          <h1 class="title1">Download the resources</h1>
        </div>

        <div class="dl-divider" style="margin-top: 10px;">
          <h1 class="p-2" style="text-shadow:-1px 1px 0 #000,1px 1px 0 #000,1px -1px 0 #000,-1px -1px 0 #000;">Documentation</h1>
          <p>Our documents about VIM (long but it has what you need).</p>
          <div class="p-3">
            <a href="" download="SalaMusk-VIM_Documentation" class="mobile-bottoni-download p-2 px-5">Download</a>
          </div>
        </div>

        <div class="dl-divider" style="margin-top: 10px;">
          <h1 class="p-2" style="text-shadow:-1px 1px 0 #000,1px 1px 0 #000,1px -1px 0 #000,-1px -1px 0 #000;">Presentation</h1>
          <p>Our presentation about VIM (just the essential informations but definitely prettier than the documentation).</p>
          <div class="p-3">
            <a href="" download="SalaMusk-VIM_Presentation" class="mobile-bottoni-download p-2 px-5">Download</a>
          </div>
        </div>

        <div class="dl-divider" style="margin-top: 10px;">
          <h1 class="p-2">Banena</h1>
        </div>
        <div class="dl-divider" style="margin-top: 10px;">
          <h1 style="text-shadow:-1px 1px 0 #000,1px 1px 0 #000,1px -1px 0 #000,-1px -1px 0 #000;" class="p-2">Website files</h1>
          <p>Yes, you can download the whole website.</p>
          <div class="p-3">
            <a href="" download="SalaMusk-VIM_Website" class="mobile-bottoni-download p-2 px-5">Download</a>
          </div>
        </div>

    </div>
    



    <!-- Footer -->
    <footer class="text-center text-white custom-footer-1" style="font-size: 1rem !important;">
      <!-- Grid container -->
      <div class="container p-4">
        
        <?php include("assets/footer.html"); ?>

        <a href="it/resources" style="color: white" class="a-hover-none"><img src="img/bandiera-it.png" height="20px"> <u>Italian version</u></a><br/>
        <a href="#gototop" style="color: white" class="a-hover-none scrollLink"><u>Go to top</u></a>
      </div>
    
      <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.3);">
        &copy; 2021 <span style="font-weight: 700;">3CI IN Organization</span> for education. <span class="text-muted">Open Source project.</span></a>
      </div>
    
    </footer>
    
    <?php include("assets/footer_ver.html"); ?>
  
  
  
  
          
  
  
      <!-- Optional JavaScript -->
      <!-- jQuery first, then Popper.js, then Bootstrap JS -->
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
      <!-- inizialize AOS  -->
      <script type="text/javascript" src="../css/AOS/aos.js"></script>
      <script type="text/javascript">
          AOS.init();
      </script>
  
      <!-- Jquery needed -->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>


      <!-- script to detect touch screen device -->
      <script>
        function touch() {
            return ( 'ontouchstart' in window ) || 
                   ( navigator.maxTouchPoints > 0 ) ||
                   ( navigator.msMaxTouchPoints > 0 );
        }
      
        if(touch()) {
          var nomobile = document.getElementById('no-mobile');
          nomobile.style.display = 'none';
        }
        else {
          var nodesktop = document.getElementById('no-desktop');
          nodesktop.style.display = 'none';
        }
      </script>

      <!-- https://css-tricks.com/a-complete-guide-to-dark-mode-on-the-web/#storing-preferences -->
    <script>
      // Select the button
      const btn = document.querySelector(".dark-mode-btn");

      // Select the theme preference from localStorage
      const currentTheme = localStorage.getItem("theme");

      // If the current theme in localStorage is "dark"...
      if (currentTheme == "dark") {
        // ...then use the .dark-theme class
        $('#no-desktop').addClass('no-desktop-dark');
        $(".custom-footer-1").addClass('custom-dark-footer-1');
        $(".custom-version-bar").addClass('custom-dark-version-bar');
        document.getElementById("dm-id").innerHTML = "Light Theme";
      }

      // Listen for a click on the button 
      btn.addEventListener("click", function () {
        // Toggle the .dark-theme class on each click
        document.body.classList.toggle("dark-mode");
        $("#no-desktop").toggleClass('no-desktop-dark');
        $(".custom-footer-1").toggleClass('custom-dark-footer-1');
        $(".custom-version-bar").toggleClass('custom-dark-version-bar');

        // Let's say the theme is equal to light
        let theme = "light";
        // If the body contains the .dark-theme class...
        if (document.body.classList.contains("dark-mode")) {
          // ...then let's make the theme dark
          theme = "dark";
        }
        // Then save the choice in localStorage
        localStorage.setItem("theme", theme);
      });


      function DarkMode() {
          if (document.getElementById("dm-id").innerHTML === "Dark Theme") {
            document.getElementById("dm-id").innerHTML = "Light Theme";
          } else {
            document.getElementById("dm-id").innerHTML = "Dark Theme";
          }
      }
    </script>
    
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
        console.log("Clicked menu");
        $("#mainListDiv").toggleClass("show_list");
        $("#mainListDiv").fadeIn();
    
        });
    
        </script>
      </body>
  </html>