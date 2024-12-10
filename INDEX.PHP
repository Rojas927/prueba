<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../farmacia/CSS/estilos.css">
    <script src="https://kit.fontawesome.com/9df778104c.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <title>Inicio</title>
</head>
<body>
<header id="navegador">
<div class="container d-flex justify-content-between align-items-center">
    <div class="logo">
      <img src="../farmacia/IMG/farmacia12.png" alt="Logo de la Farmacia" style="max-height: 60px;">
    </div>
    <div class="text-center">
      <h1 class="mb-0">Farmacia Salud y Bienestar</h1>
      <p class="text-muted">Cuidamos tu salud, cada día</p>
    </div>
    <div class="contact-info">
      <p class="text-muted">Llámanos: <strong>(+57) 123-456-789</strong></p>
      <p class="text-muted">Horario: <strong>8 AM - 8 PM</strong></p>
    </div>
  </div>
</header>
<nav class=" navbar ">
<ul class="nav">
  <li class="nav-item">
    <a class="nav-link" href="../farmacia/INDEX.PHP">Inicio</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="../farmacia/LOGIN/REGISTRATE.PHP">Registrarse</a>
  </li>
  <ul class="nav nav-pills">
  <li class="nav-item">
    <a class="nav-link active" href="../farmacia/LOGIN/LOGIN.PHP">Iniciar Sesion</a>
  </li>
  </ul>
</ul>
</nav>
<div class="dropdown">
  <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false">
  <i class="fa-solid fa-capsules"></i>&nbsp;&nbsp;
    Categorias de Medicamentos
  </button>
  <div class="dropdown-menu">
    <a class="dropdown-item" href="#"><i class="fa-solid fa-tablets"></i>&nbsp;&nbsp;Analgesicos</a>&nbsp;&nbsp;
    <a class="dropdown-item" href="#"><i class="fa-solid fa-capsules"></i>&nbsp;&nbsp;Antibioticos</a>&nbsp;&nbsp;
    <a class="dropdown-item" href="#"><i class="fa-solid fa-syringe"></i>&nbsp;&nbsp;Antiinflamatorios</a>&nbsp;&nbsp;
    <a class="dropdown-item" href="#"><i class="fa-solid fa-thermometer"></i>&nbsp;&nbsp;Antipireticos</a>&nbsp;&nbsp;
    <a class="dropdown-item" href="#"><i class="fa-solid fa-brain"></i>&nbsp;&nbsp;Antidepresivos</a>&nbsp;&nbsp;
    <a class="dropdown-item" href="#"><i class="fa-solid fa-hand-dots"></i>&nbsp;&nbsp;Antihistaminicos</a>&nbsp;&nbsp;
    <a class="dropdown-item" href="#"><i class="fa-solid fa-bug"></i>&nbsp;&nbsp;Antiparasitarios</a>&nbsp;&nbsp;
    <a class="dropdown-item" href="#"><i class="fa-solid fa-viruses"></i>&nbsp;&nbsp;Antivirales</a>&nbsp;&nbsp;
    <a class="dropdown-item" href="#"><i class="fa-solid fa-vials"></i>&nbsp;&nbsp;Antifungicos</a>&nbsp;&nbsp;
    <a class="dropdown-item" href="#"><i class="fa-solid fa-venus-mars"></i>&nbsp;&nbsp;Anticonceptivos</a>&nbsp;&nbsp;
    <a class="dropdown-item" href="#"><i class="fa-solid fa-bottle-droplet"></i>&nbsp;&nbsp;Jarabes</a>&nbsp;&nbsp;
    
  </div>
</div>
<br><br>
<div id="carouselExampleControls" class="carousel slide" data-ride="carousel" data-interval="2000">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="../farmacia/IMG/161952-500-auto.png" class="d-block w-auto mx-auto" alt="...">
    </div>
    <div class="carousel-item">
      <img src="../farmacia/IMG/196-loperamida.jpg" class="d-block w-auto mx-auto" alt="...">
    </div>
    <div class="carousel-item">
      <img src="../farmacia/IMG/7702057091163_Hero_Image_1_Alta_2.webp" class="d-block w-auto mx-auto" alt="...">
    </div>
    <div class="carousel-item">
      <img src="../farmacia/IMG/D_NQ_NP_923145-MCO46510631497_062021-O.webp" class="d-block w-auto mx-auto" alt="...">
    </div>
    <div class="carousel-item">
      <img src="../farmacia/IMG/noraver.jpg" class="d-block w-auto mx-auto" alt="...">
    </div>
    <div class="carousel-item">
      <img src="../farmacia/IMG/nextGL.jpg" class="d-block w-auto mx-auto" alt="...">
    </div>
    <div class="carousel-item">
      <img src="../farmacia/IMG/femelle.jpeg" class="d-block w-auto mx-auto" alt="...">
    </div>
  </div>
 <button class="carousel-control-prev" type="button" data-target="#carouselExampleControls" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-target="#carouselExampleControls" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </button>
</div>

<!-- Pie de página -->
<footer class="footer">
    <div class="container">
        <div class="footer-row">
            <div class="footer-links">
                <h4>Elaborado Por</h4>
                <ul>
                    <li><a href="#">Daniel Alexander Rojas Acevedo</a></li>
                    <li><a href="#">Juan Felipe Leguizamon Cruz</a></li>
                    <li><a href="#">David Alexander Ortega Coronado</a></li>
                    <li><a href="#"></a></li>
                </ul>
            </div>
            <div class="footer-links">
                <h4>Tecnologo</h4>
                <ul>
                    <li><a href="#">ADSI</a></li>
                    <li><a href="#">Ficha</a></li>
                    <li><a href="#">2827793-A</a></li>
                    <li><a href="#"></a></li>
                    <li><a href="#"></a></li>
                </ul>
            </div>
            <div class="footer-links">
                <h4>Ejercicio Farmacia</h4>
                <ul>
                    <li><a href="#">Usuarios</a></li>
                    <li><a href="#">Reportes</a></li>
                    <li><a href="#">Medicamentos</a></li>
                    <li><a href="#">Facturas</a></li>
                </ul>
            </div>
            <div class="footer-links">
                <h4>Siguenos</h4>
                <div class="social-link">
                    <a href="https://web.facebook.com/profile.php?id=61556202412567"><i class="fab fa-facebook-f"></i></a>
                    <a href="https://www.instagram.com/rojas_d27/"><i class="fab fa-instagram"></i></a>
                    <a href="https://www.instagram.com/dav_idortega7/"><i class="fab fa-twitter"></i></a>
                    <a href=""><i class="fab fa-linkedin"></i></a>
                </div>
            </div>
        </div>
    </div>
</footer>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
</body>
</html>