<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>JD Servicios Eléctricos</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="<?= base_url('assets/css/HOME.css') ?>">
  <link rel="stylesheet" href="<?= base_url('assets/css/Servicios.css') ?>">
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
    <h1 class="text-warning">Bienvenido a JD Servicios Eléctricos ⚡</h1>
    <p class="text-muted">Tu aliado confiable en soluciones eléctricas industriales y residenciales.</p>
  </div>







<section class="pricing-section">
    <h1>⚡ Nuestros Planes de Servicio ⚡</h1>
    <p class="text-center text-light mb-5">Elige el plan que mejor se adapte a tus necesidades eléctricas, con la calidad y seguridad de JD Servicios Eléctricos.</p>

    <div class="container">
      <div class="row g-4 justify-content-center">
        
        <!-- PLAN BÁSICO -->
        <div class="col-lg-3 col-md-6">
          <div class="card h-100 text-center">
            <div class="card-header">
              <h4>Plan Básico</h4>
              <div class="price">$0 <span class="period">/consulta</span></div>
            </div>
            <div class="card-body">
              <ul>
                <li><i class="bi bi-check2-circle text-warning"></i> Asesoría inicial gratuita</li>
                <li><i class="bi bi-check2-circle text-warning"></i> Diagnóstico básico</li>
                <li><i class="bi bi-check2-circle text-warning"></i> Revisión de instalaciones pequeñas</li>
                <li><i class="bi bi-check2-circle text-warning"></i> Recomendaciones generales</li>
              </ul>
              <button class="btn btn-custom mt-3">Seleccionar</button>
              <!--<img src="https://img.freepik.com/foto-gratis/tecnico-revisando-cableado-industrial_23-2149373485.jpg" alt="Plan Industrial" class="plan-img">-->
            </div>
          </div>
        </div>

        <!-- PLAN RESIDENCIAL -->
        <div class="col-lg-3 col-md-6">
          <div class="card h-100 text-center">
            <div class="card-header">
              <h4>Plan Residencial</h4>
              <div class="price">$25 <span class="period">/servicio</span></div>
            </div>
            <div class="card-body">
              <ul>
                <li><i class="bi bi-check2-circle text-warning"></i> Inspección eléctrica completa</li>
                <li><i class="bi bi-check2-circle text-warning"></i> Instalación de circuitos y tomacorrientes</li>
                <li><i class="bi bi-check2-circle text-warning"></i> Revisión de medidor y tablero</li>
                <li><i class="bi bi-check2-circle text-warning"></i> Mantenimiento preventivo</li>
              </ul>
              <button class="btn btn-custom mt-3">Seleccionar</button>
              <!--<img src="https://img.freepik.com/foto-gratis/tecnico-revisando-cableado-industrial_23-2149373485.jpg" alt="Plan Industrial" class="plan-img">-->
            </div>
          </div>
        </div>

        <!-- PLAN INDUSTRIAL -->
        <div class="col-lg-3 col-md-6">
          <div class="card h-100 text-center">
            <div class="card-header">
              <h4>Plan Industrial</h4>
              <div class="price">$60 <span class="period">/servicio</span></div>
            </div>
            <div class="card-body">
              <ul>
                <li><i class="bi bi-check2-circle text-warning"></i> Análisis de carga trifásica</li>
                <li><i class="bi bi-check2-circle text-warning"></i> Instalaciones industriales</li>
                <li><i class="bi bi-check2-circle text-warning"></i> Pruebas de seguridad eléctrica</li>
                <li><i class="bi bi-check2-circle text-warning"></i> Soporte técnico y mantenimiento</li>
              </ul>
              <button class="btn btn-custom mt-3">Seleccionar</button>
              <!--<img src="https://img.freepik.com/foto-gratis/tecnico-revisando-cableado-industrial_23-2149373485.jpg" alt="Plan Industrial" class="plan-img">-->
            </div>
          </div>
        </div>

        <!-- PLAN PREMIUM -->
        <div class="col-lg-3 col-md-6">
          <div class="card h-100 text-center">
            <div class="card-header">
              <h4>Plan Premium</h4>
              <div class="price">$120 <span class="period">/servicio</span></div>
            </div>
            <div class="card-body">
              <ul>
                <li><i class="bi bi-check2-circle text-warning"></i> Atención prioritaria 24/7</li>
                <li><i class="bi bi-check2-circle text-warning"></i> Instalación de sistemas automatizados</li>
                <li><i class="bi bi-check2-circle text-warning"></i> Certificación de seguridad eléctrica</li>
                <li><i class="bi bi-check2-circle text-warning"></i> Soporte técnico anual incluido</li>
              </ul>
              <button class="btn btn-custom mt-3">Seleccionar</button>
              <!--<img src="https://img.freepik.com/foto-gratis/tecnico-revisando-cableado-industrial_23-2149373485.jpg" alt="Plan Industrial" class="plan-img">-->
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>






  

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
