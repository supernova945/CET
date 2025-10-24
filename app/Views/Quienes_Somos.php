<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>JD Servicios Eléctricos</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="<?= base_url('assets/css/HOME.css') ?>">
  <link rel="stylesheet" href="<?= base_url('assets/css/Quienes_Somos.css') ?>">
</head>

<body>

  <!-- 🧭 NAVBAR -->
  <nav class="navbar navbar-expand-lg navbar-custom navbar-shadow fixed-top">
    <div class="container">
      <a class="navbar-brand d-flex align-items-center" href="#">
        <img src="assets/img/logo.jpg" alt="Logo JD">
        <span class="text-warning fw-bold">JD Servicios Eléctricos</span>
      </a>

      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item"><a class="nav-link active" href="<?= base_url('/') ?>">Inicio</a></li>
          <li class="nav-item"><a class="nav-link" href="<?= base_url("Servicios") ?>">Servicios</a></li>
          <li class="nav-item"><a class="nav-link" href="<?= base_url("Quienes_Somos") ?>">Quiénes Somos</a></li>
          <li class="nav-item"><a class="nav-link" href="<?= base_url('contacto') ?>">Contacto</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- 🏠 CONTENIDO DEMO -->
  <div class="container text-center" style="margin-top: 120px;">
    <h1 class="text-warning">⚡ ¡Bienvenidos a Servicios Eléctricos J&D! ⚡</h1>
    <p class="fst-italic"  >Tu aliado confiable en soluciones eléctricas industriales y residenciales.</p>
  </div>





<main>
<div class="container text-center my-5">
    <h2 class="fw-bold mb-4">⚡ Nuestro Equipo ⚡</h2>
    <div class="row justify-content-center g-4">
      
      <div class="col-md-3">
        <div class="team-card">
          <img src="assets/img/Joccelyn.jpg" alt="Jocelynne">
          <h5>De Paz Iglesias Jocelynne Guadalupe</h5>
          <small>DI21001</small>
          <p>Product Owner</p>
        </div>
      </div>

      <div class="col-md-3">
        <div class="team-card">
          <img src="assets/img/alfredo.jpg" alt="Alfredo">
          <h5>Jiménez Clavel Alfredo Vidal</h5>
          <small>JC21007</small>
          <p>Development</p>
        </div>
      </div>

      <div class="col-md-3">
        <div class="team-card">
          <img src="assets/img/jonathan.jpg" alt="Jonathan">
          <h5>Larin Alvarenga Jonathan David</h5>
          <small>LA20005</small>
          <p>Scrum Master</p>
        </div>
      </div>

      <div class="col-md-3">
        <div class="team-card">
          <img src="assets/img/jennifer.jpg" alt="Jennifer">
          <h5>Portillo Argueta Jennifer Noelia</h5>
          <small>PA20037</small>
          <p>Development</p>
        </div>
      </div>

    </div>
  </div>

</main>

  











  

  <!-- 🦶 FOOTER -->
<footer class="bg-dark text-light pt-5 pb-3 mt-5">
  <div class="container">
    <div class="row text-center text-md-start">
      
      <!-- 📂 CATEGORÍAS -->
      <div class="col-md-4 mb-4">
        <h5 class="text-uppercase fw-bold text-warning">Categorías</h5>
        <ul class="list-unstyled">
          <li><a href="#" class="text-light text-decoration-none">Instalaciones residenciales</a></li>
          <li><a href="#" class="text-light text-decoration-none">Instalaciones industriales</a></li>
          <li><a href="#" class="text-light text-decoration-none">Mantenimiento eléctrico</a></li>
          <li><a href="#" class="text-light text-decoration-none">Iluminación y domótica</a></li>
          <li><a href="#" class="text-light text-decoration-none">Otros</a></li>
        </ul>
      </div>

      <!-- 🧰 AYUDA -->
      <div class="col-md-4 mb-4">
        <h5 class="text-uppercase fw-bold text-warning">Ayuda</h5>
        <ul class="list-unstyled">
          <li><a href="#" class="text-light text-decoration-none">Acerca de</a></li>
          <li><a href="#" class="text-light text-decoration-none">Presupuesto</a></li>
          <li><a href="#" class="text-light text-decoration-none">FAQs</a></li>
        </ul>
      </div>

      <!-- 📞 CONTACTO -->
      <div class="col-md-4 mb-4">
        <h5 class="text-uppercase fw-bold text-warning">Contactos</h5>
        <div class="bg-black p-2 rounded mb-3">
          <p class="mb-0">servicios.electricos.jyd@gmail.com</p>
        </div>
        <div>
          <a href="https://www.facebook.com/share/1AQHCviiom/" class="text-light me-3 fs-4"><i class="bi bi-facebook"></i></a>
          <a href="https://www.instagram.com/services_electricos_jyd?igsh=dGQ0aGdxNWJtdm41" class="text-light me-3 fs-4"><i class="bi bi-instagram"></i></a>
          <a href="https://wa.me/50378037104" class="text-light fs-4"><i class="bi bi-whatsapp"></i></a>
        </div>
      </div>
    </div>

    <!-- ⚡ COPYRIGHT -->
    <div class="text-center mt-4 border-top border-secondary pt-3">
      <p class="mb-0">&copy; 2025 Servicios Eléctricos J&amp;D | Todos los derechos reservados ⚡</p>
    </div>
  </div>
</footer>

<!-- 📦 ICONOS BOOTSTRAP -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
