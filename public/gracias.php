<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Gracias por tu pago</title>
  <style>
    body{
      font-family: 'Poppins', sans-serif;
      background: radial-gradient(circle at 20% 20%, #111, #000);
      color: #fff;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      height: 100vh;
      text-align: center;
      margin: 0;
    }
    h1{color:#f6c84b;margin-bottom:12px;}
    p{color:#ccc;font-size:16px;max-width:500px;}
    .box{
      background: rgba(255,255,255,0.05);
      padding: 30px;
      border-radius: 16px;
      border: 1px solid rgba(255,255,255,0.08);
      box-shadow: 0 8px 24px rgba(0,0,0,0.5);
      backdrop-filter: blur(8px);
    }
    a{
      display:inline-block;
      margin-top:24px;
      padding:12px 22px;
      background:#f6c84b;
      color:#111;
      text-decoration:none;
      border-radius:8px;
      font-weight:600;
      transition:.3s;
    }
    a:hover{filter:brightness(1.1);}
  </style>
</head>
<body>
  <div class="box">
    <h1>¡Pago exitoso!</h1>
    <p id="msg">Gracias por tu pago. Procesando información...</p>
    
    <a href="<?= base_url('/') ?>">← Volver a cotizaciones</a>
  </div>

  <script>
    const params = new URLSearchParams(window.location.search);
    const name = params.get('name') || 'Cliente';
    const cotizacion = params.get('cotizacion') || 'Cotización';
    const orderId = params.get('orderId') || '';
    document.getElementById('msg').textContent = `${name}, tu ${cotizacion} ha sido procesada correctamente. ID de orden: ${orderId}`;
  </script>
</body>
</html>
