<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/css/style-nosotros.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
      integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
</head>
<body>
    <div class="menu" id="menu">
      <div class="menu-container">
        <ul class="list">
          <li><a href="{{url('nosotros_')}}" class="link">Nosotros</a></li>
          <li><a href="{{url('productos_')}}" class="link">Productos</a></li>
          <li><a href="{{url('cursos_')}}" class="link">Cursos</a></li>
          <li><a href="{{url('proyectos_')}}" class="link">Proyectos</a></li>
          <li><a href="{{url('contactenos_')}}" class="link">Login</a></li>
        </ul>
        <button id="closeMenu">Cerrar</button>
      </div>
    </div>
    <nav class="nav">
      <a href="" class="enlace-logo">
        <img src="iconos/logo.jpg" alt="" href="{{url('index')}}" class="logo" />
      </a>
      <input type="checkbox" class="check" />
      <label id="checkBtn" for="" class="checkbtn">
        <i class="fa-solid fa-bars"></i>
      </label>
      <div class="menus">
        <ul class="lista">
          <li><a href="{{url('nosotros_')}}" class="link">Nosotros</a></li>
          <li><a href="{{url('productos_')}}" class="link">Productos</a></li>
          <li><a href="{{url('cursos_')}}" class="link">Cursos</a></li>
          <li><a href="{{url('proyectos_')}}" class="link">Proyectos</a></li>
          <li>
            <a href="{{url('contactenos_')}}" class="link">Contáctenos</a>
          </li>
          <li class="nav-item">
            <form method="GET" action="{{ url('intranet_') }}">
              <button class="inicio-sesion">Iniciar Sesión</button>
            </form>
          </li>
        </ul>
      </div>
    </nav>
<!-- Aqui va la mision, vision y objetivo y los docentes -->
    <section class="section-objetivos">
        <div class="objetivos-container">
            <div class="objetivos">
                <div class="objetivos-img img-izquierda">       
                    <img src="/imagenes/Pnosotros/{{$Pnosotros->imagen}}" class="img-container" alt="d1">             
                </div>
                <div class="objetivos-info"> 
                    <div class="objetivos-parrafo">
                        <h2>Nuestra <span class="color-acento">{{$Pnosotros->titulo}}</span></h2>
                        <p>{{$Pnosotros->texto}}</p> 
                    </div>              
                </div>
            </div>
            <div class="objetivos">
                <div class="objetivos-info"> 
                    <div class="objetivos-parrafo">
                        <h2>Nuestra <span class="color-acento">{{$Pnosotros->titulo2}}</span></h2>
                        <p>{{$Pnosotros->texto2}}</p>    
                    </div>               
                </div>
                <div class="objetivos-img">    
                    <img src="/imagenes/Pnosotros/{{$Pnosotros->imagen2}}" class="img-container " alt="d1">                
                </div>
            </div>
            <div class="objetivos">
                <div class="objetivos-img ">  
                    <img src="/imagenes/Pnosotros/{{$Pnosotros->imagen3}}" class="img-container" alt="d1">                  
                </div>
                <div class="objetivos-info"> 
                    <div class="objetivos-parrafo">
                        <h2>Nuestro <span class="color-acento">{{$Pnosotros->titulo3}}</span></h2>
                        <p>{{$Pnosotros->texto3}}</p>      
                    </div>         
                </div>
            </div>
        </div>
    </section>
    <section class="docentes">
      <div class="docentes-container">
        <div>
          <h2>Nuestros Docentes de "Tecnobots Perú"</h2>
        </div>
        <div class="docentes-info">
        @foreach($Pdocente as $Pdoce)
          <div class="profesores">
            <img src="/imagenes/Pdocente/{{$Pdoce->imagen}}" class="" alt="...">
            <div class="profesores-texto">
              <h5>{{$Pdoce->cargo}}</h5>
              <p>{{$Pdoce->nombre}}</p>
                  <!-- <div>
                  <a href="https://www.facebook.com/graciela.molinadelrio/" class="">
                    <img src="{{url("/imagenes/ICONOS_UTILIZADOS/face3.png")}}" alt="">
                  </a> -->    
            </div>
          </div>
        @endforeach 
        </div>
      </div>
    </section>       
    <section class="login">
      <div class="login-container">
        <form action="" class="formulario">
          <h2>
            ¡Conversemos! Hablemos por whatsapp o regístrate y te llamamos.
          </h2>
          <div class="inputs">
            <input type="text" placeholder="Apellidos y Nombres" class="a1" />
            <input type="text" placeholder="Número" class="a1" />
            <input type="text" placeholder="Correo" class="a1" />
          </div>
          <button>Enviar</button>
        </form>
      </div>
    </section>
    <footer>
      <div class="footer-container">
        <div class="footer-seccion">
          <img src="iconos/logo.jpg" alt="" class="logo-footer" />
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae
            quisquam vitae reiciendis cupiditate sint ut nihil iure numquam,
            impedit voluptas aliquam et similique accusantium corporis.
            Voluptate sequi velit culpa? Molestiae!
          </p>
          <img src="iconos/fb.png" alt="" class="footer-iconos" />
          <img src="iconos/in.png" alt="" class="footer-iconos" />
          <img src="iconos/in.png" alt="" class="footer-iconos" />
        </div>
        <div class="footer-listas">
          <ul>
            <li><a href="">Company</a></li>
            <li><a href="">About us</a></li>
            <li><a href="">Services</a></li>
            <li><a href="">Community</a></li>
            <li><a href="">Testimonial</a></li>
          </ul>
          <ul>
            <li><a href="">Company</a></li>
            <li><a href="">About us</a></li>
            <li><a href="">Services</a></li>
            <li><a href="">Community</a></li>
            <li><a href="">Testimonial</a></li>
          </ul>
          <ul>
            <li><a href="">Company</a></li>
            <li><a href="">About us</a></li>
            <li><a href="">Services</a></li>
            <li><a href="">Community</a></li>
            <li><a href="">Testimonial</a></li>
          </ul>
          <ul>
            <li><a href="">Contact Us</a></li>
            <li><a href="">(91) 98765 4321 54 </a></li>
            <li><a href="">support@gmail.com</a></li>
          </ul>
        </div>
      </div>
      <div class="copyright">
        <div class="linea"></div>
        <p>Copyright 2020 All rights Reserved . Null</p>
        <button>
          <img src="iconos/WhatsApp_icon 1.png" alt="" class="wsp" />
        </button>
      </div>
    </footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>