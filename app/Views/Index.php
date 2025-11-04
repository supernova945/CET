<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>JD Servicios Eléctricos</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="<?= base_url('assets/css/HOME.css') ?>">
  <link rel="stylesheet" href="<?= base_url('assets/css/INICIIO.css') ?>">
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






 <div class="container-main">
    

    <div class="grid">

      <!-- IZQUIERDA: secciones texto -->
      <div class="left-col">
        <section class="panel" id="quienes-somos">
          <h3>Quiénes somos</h3>
          <p>
            Somos una empresa dedicada a promocionar soluciones eléctricas confiables y de calidad para hogares y negocios.
          </p>
        </section>

        <section class="panel" id="mision">
          <h3>Misión</h3>
          <p>
            Brindar servicios eléctricos de alta calidad a precios competitivos, atendiendo desde problemas comunes en hogares hasta proyectos de construcción y asesoramiento en obra gris, con eficiencia y confianza.
          </p>
        </section>

        <section class="panel" id="vision">
          <h3>Visión</h3>
          <p>
            Ser reconocidos como un referente de excelencia, confiabilidad y calidad en la comunidad, ofreciendo soluciones eléctricas integrales y contribuyendo al desarrollo de proyectos residenciales y comerciales.
          </p>
        </section>

        <section class="panel" id="valores">
          <h3>Valores</h3>
          <p><strong>Calidad</strong> - Ofrecemos servicios eléctricos confiables y con altos estándares técnicos.<br>
          <strong>Confianza</strong> - Cumplimos con cada compromiso con transparencia y profesionalismo.<br>
          <strong>Eficiencia</strong> - Brindamos soluciones rápidas y efectivas sin comprometer la calidad.<br>
          <strong>Responsabilidad</strong> - Trabajamos con compromiso y respeto hacia nuestros clientes y proyectos.<br>
          <strong>Seguridad</strong> - Garantizamos la protección de las personas y las instalaciones en cada servicio.</p>
        </section>

        <section class="panel" id="equipo">
          <h3>Equipo de trabajo</h3>
          <div style="margin-top:10px; color:var(--muted); font-size:14px">
            Electricista de cuarta categoría
          </div>

          <!-- aquí añadimos la tarjeta del vídeo (imagen de la chica con overlay) -->
          <div class="team-card mt-3">
            <div class="media-thumb"
                 role="button"
                 aria-label="Ver video de equipo"
                 data-bs-toggle="modal"
                 data-bs-target="#videoModal"
                 data-video-url="<?= esc('YOUR_FACEBOOK_VIDEO_URL') ?>">
              <img src="<?= base_url('assets/img/jocelynne.jpg') ?>" alt="Jocelynne - Electricista">
              <div class="overlay">
                <button class="play-btn" type="button" aria-label="Ver video">
                  <span class="play-dot">▶</span>
                  <span>Ver video</span>
                </button>
              </div>
            </div>

            <div class="caption mt-2">Conoce la historia que brilla en la electricidad: haz clic para reproducir el video.</div>

            <!-- lista reducida de miembros (ejemplo) -->
           
          </div>
        </section>

      </div>

      <!-- DERECHA: resumen / contacto o tarjeta destacada -->
      <aside class="side">
        <div class="team-card">
          <h3 style="margin-bottom:8px">Contacto rápido</h3>
          <p style="color:var(--muted); font-size:14px; margin-bottom:12px">Tel: +503 7803-7104<br>Email: servicios.electricos.jyd@gmail.com</p>

          <div style="margin-top:12px">
            <a class="btn btn-warning w-100" href="<?= base_url('contacto') ?>">Contacto / Cotizar</a>
          </div>

          <hr style="border-color: rgba(255,255,255,0.04); margin:14px 0">

          <h6 style="margin:0 0 8px 0">Servicios destacados</h6>
          <ul style="color:var(--muted); padding-left:18px; margin:0; font-size:14px; line-height:1.6">
            <li>Instalaciones residenciales</li>
            <li>Mantenimiento preventivo</li>
            <li>Proyectos industriales</li>
          </ul>
        </div>
      </aside>

    </div> <!-- /grid -->

    
  </div>

  <!-- MODAL VIDEO -->
  <div class="modal fade video-modal" id="videoModal" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content" style="background:transparent;border:none;">
      <div class="modal-body p-0">
        <!-- contenedor donde inyectaremos el <video> -->
        <div class="video-wrap" id="videoContainer" aria-live="polite"></div>

        <!-- fallback: en caso de que el navegador no soporte el video -->
        <div id="videoFallback" style="display:none; padding:18px; text-align:center; color:#eee;">
          <p style="margin-bottom:12px;">Tu navegador no soporta la reproducción aquí. Abre el video en una nueva pestaña:</p>
          <a id="openLocal" class="btn" style="background:#f6c84b;color:#111;font-weight:700;border-radius:8px;" target="_blank" rel="noopener">Abrir video</a>
        </div>
      </div>

      <div class="modal-footer justify-content-between" style="background:rgba(0,0,0,0.25);border-top:none;border-radius:0 0 12px 12px;">
        <div class="ms-2" style="color:#fff;font-size:14px">Reproducción local</div>
        <button type="button" class="btn btn-sm" data-bs-dismiss="modal" style="background:var(--accent);color:#111;font-weight:700;border-radius:8px;">Cerrar</button>
      </div>
    </div>
  </div>
</div>


  <!-- BOOTSTRAP JS -->
  <script>
  // Reemplaza el data-video-url anterior por la ruta local. Si usas CodeIgniter, puedes
  // asignar al atributo data-video-src en el trigger o mantener la ruta fija aquí.
  // Ejemplo de uso en la tarjeta: data-video-src="<?= base_url('assets/videos/Video_Facebook.mp4') ?>"

  const videoModal = document.getElementById('videoModal');
  const videoContainer = document.getElementById('videoContainer');
  const fallback = document.getElementById('videoFallback');
  const openLocal = document.getElementById('openLocal');

  videoModal.addEventListener('show.bs.modal', function (event) {
    const trigger = event.relatedTarget;
    if (!trigger) return;

    // Obtenemos la ruta del video. Si tu trigger tiene data-video-src la usamos;
    // si no, ponemos una ruta por defecto (ajusta si cambias el nombre).
    const srcFromAttr = trigger.getAttribute('data-video-src');
    const videoSrc = srcFromAttr ? srcFromAttr : '<?= base_url('assets/videos/Video_Facebook.mp4') ?>';

    // limpiar contenedores
    videoContainer.innerHTML = '';
    fallback.style.display = 'none';
    openLocal.href = videoSrc;

    // Crear elemento <video> con varias opciones
    const video = document.createElement('video');
    video.setAttribute('controls', '');          // muestra controles
    video.setAttribute('playsinline', '');       // para móviles iOS
    video.setAttribute('webkit-playsinline', '');
    video.setAttribute('preload', 'metadata');   // evita descargarlo completo hasta play
    video.style.width = '100%';
    video.style.height = '100%';
    video.style.borderRadius = '10px';
    video.muted = false; // si deseas autoplay sin interacción, set muted=true (pero no recomendado)

    // Poster opcional (muestra imagen antes de reproducir) - descomenta y ajusta si tienes poster
    // video.setAttribute('poster', '<?= base_url("assets/img/poster_jocelynne.png") ?>');

    // Añadir sources (mejor ofrecer más de un formato si tienes)
    const srcMp4 = document.createElement('source');
    srcMp4.src = videoSrc;
    srcMp4.type = 'video/mp4';
    video.appendChild(srcMp4);

    // Si tienes webm, puedes añadir:
    // const srcWebm = document.createElement('source');
    // srcWebm.src = '<?= base_url("assets/videos/video_jocelynne.webm") ?>';
    // srcWebm.type = 'video/webm';
    // video.appendChild(srcWebm);

    // Si el navegador no soporta <video>, mostraremos fallback
    video.addEventListener('error', function(e) {
      console.error('Error al cargar el video local:', e);
      videoContainer.innerHTML = '';
      fallback.style.display = 'block';
    });

    // Envoltorio con proporción 16:9
    const wrap = document.createElement('div');
    wrap.style.position = 'relative';
    wrap.style.paddingBottom = '56.25%';
    wrap.style.height = '0';
    wrap.style.overflow = 'hidden';
    wrap.style.borderRadius = '10px';
    video.style.position = 'absolute';
    video.style.top = '0';
    video.style.left = '0';
    video.style.width = '100%';
    video.style.height = '100%';
    wrap.appendChild(video);
    videoContainer.appendChild(wrap);

    // Opcional: iniciar reproducción automáticamente cuando el usuario abre modal
    // Muchos navegadores bloquean autoplay con audio; aquí solo iniciamos si muted=true.
    // video.muted = true; video.play().catch(()=>{/* no autoplay */});

    // Accessibility: focus en el video controlador
    setTimeout(()=> {
      try { video.focus(); } catch(e){}
    }, 300);

    // Guardar para usar al cerrar (pausar)
    videoModal._currentVideo = video;
  });

  // Al cerrar: pausar y limpiar para liberar memoria / detener audio
  videoModal.addEventListener('hidden.bs.modal', function () {
    const v = videoModal._currentVideo;
    if (v) {
      try { v.pause(); v.currentTime = 0; } catch(e){}
    }
    videoContainer.innerHTML = '';
    fallback.style.display = 'none';
  }, { once: false });
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
