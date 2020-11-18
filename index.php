 <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
      <link rel="stylesheet" type="text/css" href="css/materialize.css"/>
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <!-- Fuentes -->
      <link rel="stylesheet" type="text/css" href="fonts/Fuentes.css">
      <style type="text/css">
        
       .light:hover {
          background-color: rgb(41, 206, 194);
          border-radius: 2px;
        }
      footer{
        margin-top: 0;

      }
      .jac{
        margin-top: 0;
        padding-bottom: 0;
        bottom: 0;
        min-width: 100%;
        max-height: 10%;

      }
      .row1{
        background-color: rgb(5, 163, 144);
      }
      .row2{
      }
      h1,h2,h3,h4,h5{
        font-family: 'Abel', sans-serif;
      }
      #Poiret{
        font-family: 'Poiret', cursive;
      }
      #Myanmar{
        font-family: 'Myanmar',sans-serif;
      }

      </style>

    </head>

    <body>

      <!--BARRA DE NAVEGACION-->

    <nav class="grey darken-4">
    <div class="nav-wrapper container">
      <ul class="right hide-on-med-and-down">
        <li class="light"><a href="Index.php" id="Poiret" style=" font-size: 18pt;"><i class=" small material-icons left">home</i>Inicio</a></li>
        <li class="light"><a href="Portafolio.php" id="Poiret" style="font-size: 18pt;"><i class="small material-icons left">collections</i>Portafolio</a></li>
        <li > <a href="Index.php" class="brand-logo"><img src="imagenes/JAClogo.jpg" width="60px" style="margin-top: 2%; margin-left: 2%;"  ></a></li>
      </ul>


      <ul id="slide-out" class="side-nav">
        <li>
          <div class="user-view">
            <div class="background">
              <img class="responsive-img" src="imagenes/nav.jpg" >
            </div>
            <a href="Index.php" style="margin-bottom: 10px;"><img class="circle" src="imagenes/JAClogo.jpg"></a>
            <span><h4 class="white-text" style=" font-size: 24pt; margin-bottom: 10px;">Bienvenido</h4></span>
          </div>
        </li>
        <li class="light"><a href="Index.php" id="Poiret" class="black-text" style="font-size: 18pt;"><i class="material-icons">home</i>Inicio</a></li>
        <li class="light"><a href="Portafolio.php" id="Poiret" class="black-text" style="font-size: 18pt;"><i class="material-icons">collections</i>Portafolio</a></li>
      </ul>
      <a href="#" data-activates="slide-out" class="button-collapse"><i class="material-icons">menu</i></a>
      <a href="index.php" id="logo-container"  data-activates="slide-out" class="brand-logo center button-collapse"><img  class= "responsive-img" src="imagenes/JAClogo.jpg" width="50px" style="margin-top: 4%; margin-left: 2%;"  ></a>
    </div>
  </nav>

   <!--FIN DE LA BARRA DE NAVEGACION-->

   
  <!--Cuerpo de la pagina-->

<!--Slideeer-->
   


      <div class="slider">
        
    <ul class="slides">
      <li>
        <img class="responsive-img" src="imagenes/diseño de pag de JAC FINAL.jpg"> <!-- random image -->
        <div class="caption center-align">
          <h3>This is our big Tagline!</h3>
          <h5 class="grey-text text-lighten-3">Here's our small slogan.</h5>
        </div>
      </li>
      <li>
        <img class="responsive-img" src="imagenes/JAClogo.jpg"> <!-- random image -->
        <div class="caption left-align">
          <h3>Left Aligned Caption</h3>
          <h5 class="grey-text text-lighten-3">Here's our small slogan.</h5>
        </div>
      </li>
      <li>
        <img src="imagenes/Imagen 2.jpg" class="responsive-img"> <!-- random image -->
        <div class="caption right-align">
          <h3>Right Aligned Caption</h3>
          <h5 class=" grey-text text-lighten-3">Here's our small slogan.</h5>
        </div>
      </li>
      
    </ul>
  
  </div>
    
        

  <!--final de slider-->






<div class="container" >
    
  <div class="row black-text">
    <br>
    <h2  style="font-size: 36pt"> Sobre Nosotros </h2>
    
      <p id="Poiret" style="font-size: 24pt;"> JAC es una asociación formada por un equipo, dispuesto a resolver todas sus necesidades con el máximo apoyo </p>
  </div>
<br>
</div>


 <!--contenedor parallax-->
<div class="parallax-container">
      <div class="parallax"><img class="responsive-img" src="imagenes/parallax.jpg" ></div>
    </div>

  <!--fin paralax-->
    

<div class="row1  white-text">
    <div class="container">
        <div class="section">
          <h2 style="font-size: 36pt;">¿Que podemos hacer por usted?</h2>
          <p id="Poiret" style="font-size: 24pt;">
              · Desarrolladores web (Html5, Materialize, Boostrap, MySql, Php, Javascript y Css)
             <br> · Diseño web
             <br> · Desarrollo de logotipo
             <br> · Fotografía
             <br> · Edición / retoque de fotos
             <br> · También sabemos español e inglés</p>
        <br>
      </div>
    </div>
     </div>
<!--Final del cuerpo-->


<!--Pie de pagina-->
  
  <footer class="page-footer black">
          <div class="container">
            <div class="row">
              <div class="col s12 center m12 center ">
                <p id="Myanmar" style="font-size: 16pt" class="grey-text text-lighten-4">
                Contáctanos 
                <br>
                Jacsystem2018@gmail.com
                <br>
                +58 412689-3533/+58 424309-1410 
                </p>
              </div>
            </div>
          </div>
          <div class="row2"><img src="imagenes/Jac parte de abajo.jpg" width="100%"></div>
  </footer>
                    
        
            
<!--fin del pie de pagina-->
  

      <!--JavaScript at end of body for optimized loading-->
      <script type="text/javascript" src="js/materialize.min.js"></script>
      <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <script type="text/javascript" src="js/materialize.js"></script>
      <script type="text/javascript">
        
          $(document).ready(function(){
          $(".button-collapse").sideNav();
            $('.parallax').parallax();
          $('.slider').slider({full_width:false, indicators:false, height:700 });
          
         
  
          });</script>
  </body>

    

    
</html>