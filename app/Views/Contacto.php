<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>JD Servicios Eléctricos</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="<?= base_url('assets/css/HOME.css') ?>">
  <link rel="stylesheet" href="<?= base_url('assets/css/Contacto.css') ?>">
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



<main>
 <div class="container py-5">
    <div class="text-center mb-5">
      <h1>⚡ ¡Bienvenidos a Servicios Eléctricos J&D! ⚡</h1>
      <h2 class="fw-bold">Contáctanos</h2>
      <p class="fst-italic">Estamos listos para ayudarte con tus proyectos eléctricos residenciales e industriales.</p>
    </div>

    <!-- Tarjetas de contacto -->
    <div class="row text-center mb-5 g-4">
      <div class="col-md-4 fade-in">
        <div class="contact-info h-100">
          <i class="bi bi-telephone-fill"></i>
          <h5>Teléfono</h5>
          <p>+503 7803-7104</p>
        </div>
      </div>
      <div class="col-md-4 fade-in">
        <div class="contact-info h-100">
          <i class="bi bi-envelope-fill"></i>
          <h5>Correo</h5>
          <p>servicios.electricos.jyd@gmail.com</p>
        </div>
      </div>
      <div class="col-md-4 fade-in">
        <div class="contact-info h-100">
          <i class="bi bi-geo-alt-fill"></i>
          <h5>Zona de cobertura</h5>
          <p>Cojutepeque, San Vicente, Ilobasco, San Martín y zonas del centro del país.</p>
        </div>
      </div>
    </div>

    <!-- Formulario -->
    <div class="contact-form fade-in">
      <h4 class="mb-4 text-center">📨 Envíanos un mensaje</h4>
      <form>
        <div class="mb-3">
          <label>Nombre completo</label>
          <input type="text" class="form-control" placeholder="Ingresa tu nombre">
        </div>
        <div class="mb-3">
          <label>Correo electrónico</label>
          <input type="email" class="form-control" placeholder="ejemplo@gmail.com">
        </div>
        <div class="mb-3">
          <label>Teléfono</label>
          <input type="text" class="form-control" placeholder="+503 ...">
        </div>
        <div class="mb-3">
          <label>Mensaje</label>
          <textarea class="form-control" rows="4" placeholder="Escribe tu mensaje aquí..."></textarea>
        </div>
        <div class="text-center">
          <button type="submit" class="btn btn-custom px-5">Enviar Mensaje</button>
        </div>
      </form>
    </div>
  </div>

  <script>
    const fadeEls = document.querySelectorAll('.fade-in');
    const observer = new IntersectionObserver(entries => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.classList.add('visible');
        }
      });
    });
    fadeEls.forEach(el => observer.observe(el));
  </script>
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
