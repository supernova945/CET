<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>JD Servicios Eléctricos</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="<?= base_url('assets/css/HOME.css') ?>">
  <link rel="stylesheet" href="<?= base_url('assets/css/Servicios.css') ?>">
  <script src="https://www.paypal.com/sdk/js?client-id=sb&currency=USD&components=buttons,funding-eligibility"></script>

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




<div class="wrap">
    <div class="title">
      <h1>Pagos — Cotizaciones</h1>
      <div class="subtitle">Revisa tu cotización y paga con PayPal o tarjeta de crédito (modo prueba)</div>
    </div>

    <div class="grid">
      <!-- Cotización 2 -->
      <article class="quote" data-total="223.50" data-desc="Cotización #1">
        <div class="quote-head">
          <h2>Cotización #1</h2>
          <span class="tag">Premiun</span>
        </div>
        <table>
          <thead><tr><th>CANT.</th><th>MATERIAL</th><th>P.UNITARIO</th><th>TOTAL</th></tr></thead>
          <tbody>
            <tr><td>6</td><td>Tomacorriente doble polarizado</td><td>$2.25</td><td>$13.50</td></tr>
            <tr><td>50</td><td>Cable THHN #14</td><td>$0.50</td><td>$25.00</td></tr>
            <tr><td>5</td><td>Circuitos punto luminaria</td><td>$10.00</td><td>$50.00</td></tr>
          </tbody>
        </table>
        <div class="totals"><div class="box"><small>Total</small><strong>$223.50</strong></div></div>
        <div class="pay-wrap">
          <div id="paypal-1"></div>
          
        </div>
        <img class="hero-img" src="https://images.unsplash.com/photo-1581092795362-6b7d3b5b6c5c?q=80&w=1600&auto=format" alt="Decorativo">
      </article>
      <!-- Cotización 1 -->
      <article class="quote" data-total="50.84" data-desc="Cotización #2">
        <div class="quote-head">
          <h2>Cotización #2</h2>
          <span class="tag">Popular</span>
        </div>
        <table>
          <thead><tr><th>CANT.</th><th>MATERIAL</th><th>P.UNITARIO</th><th>TOTAL</th></tr></thead>
          <tbody>
            <tr><td>1</td><td>Soporte elevación acometida</td><td>$19.75</td><td>$19.75</td></tr>
            <tr><td>1</td><td>Instalación soporte acometida</td><td>$20.00</td><td>$20.00</td></tr>
          </tbody>
        </table>
        <div class="totals"><div class="box"><small>Total</small><strong>$50.84</strong></div></div>
        <div class="pay-wrap">
          <div id="paypal-2"></div>
          
        </div>
        <img class="hero-img" src="https://images.unsplash.com/photo-1541534741688-6078a672bbad?q=80&w=1600&auto=format" alt="Decorativo">
      </article>

      


      <!-- Cotización 3 -->
      <article class="quote" data-total="235.90" data-desc="Cotización #3">
        <div class="quote-head">
          <h2>Cotización #3</h2>
          <span class="tag">Super premiun</span>
        </div>
        <table>
          <thead><tr><th>CANT.</th><th>MATERIAL</th><th>P.UNITARIO</th><th>TOTAL</th></tr></thead>
          <tbody>
            <tr><td>4</td><td>Tomacorriente doble polarizado</td><td>$2.50</td><td>$10.00</td></tr>
            <tr><td>2</td><td>Roseta luminaria</td><td>$3.75</td><td>$7.50</td></tr>
            <tr><td>1</td><td>Reordenamiento acometida 220</td><td>$55.00</td><td>$55.00</td></tr>
          </tbody>
        </table>
        <div class="totals"><div class="box"><small>Total</small><strong>$235.90</strong></div></div>
        <div class="pay-wrap">
          <div id="paypal-3"></div>
          
        </div>
        <img class="hero-img" src="https://images.unsplash.com/photo-1519389950473-47ba0277781c?q=80&w=1600&auto=format" alt="Decorativo">
      </article>
    </div>

    <div class="foot-note">Modo prueba (sandbox). Puedes usar tarjetas ficticias de PayPal Developer.</div>
  </div>
  <li class="nav-item"><a class="nav-link" href="<?= base_url("gracias") ?>">Servicios</a></li>
  <script>
    const quotes = document.querySelectorAll('.quote');
    quotes.forEach((q, idx) => {
      const total = q.getAttribute('data-total');
      const desc = q.getAttribute('data-desc');
      const containerId = 'paypal-' + (idx + 1);
  

      // Botón PayPal
      paypal.Buttons({
        style: { color: 'gold', shape: 'pill', label: 'pay' },
        createOrder: (data, actions) => actions.order.create({
          purchase_units: [{ description: desc, amount: { value: total } }]
        }),
        onApprove: (data, actions) => actions.order.capture().then((details) => {
          const name = details.payer.name.given_name;
          window.location.href = "<?= base_url('gracias') ?>?orderId=" + orderId + "&cotizacion=" + cotizacion + "&name=" + nombre;

        })
      }).render('#' + containerId);

      // Botón de tarjeta (mismo flujo sandbox)
      
    });
  </script>



  

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
