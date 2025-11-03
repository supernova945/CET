<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pago Exitoso - CET</title>
    <style>
        body {
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

        .box {
            background: rgba(255,255,255,0.05);
            padding: 40px 50px;
            border-radius: 20px;
            border: 1px solid rgba(255,255,255,0.1);
            box-shadow: 0 10px 30px rgba(0,0,0,0.6);
            backdrop-filter: blur(8px);
            animation: fadeIn 1s ease-in-out;
        }

        h1 {
            color: #f6c84b;
            font-size: 2rem;
            margin-bottom: 15px;
        }

        p {
            color: #ccc;
            font-size: 1rem;
            margin-bottom: 25px;
        }

        a {
            display: inline-block;
            margin-top: 20px;
            padding: 12px 26px;
            background: #f6c84b;
            color: #111;
            text-decoration: none;
            border-radius: 10px;
            font-weight: 600;
            transition: 0.3s;
        }

        a:hover {
            filter: brightness(1.1);
            transform: translateY(-2px);
        }

        .checkmark {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            background: #28a745;
            margin: 0 auto 20px auto;
            animation: pop 0.4s ease-in-out;
        }

        .checkmark::after {
            content: "✓";
            font-size: 2.5rem;
            color: #fff;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        @keyframes pop {
            0% { transform: scale(0.5); opacity: 0; }
            100% { transform: scale(1); opacity: 1; }
        }
    </style>
</head>
<body>
    <div class="box">
        <div class="checkmark"></div>
        <h1>¡Pago Exitoso!</h1>

        <?php 
            $name = $_GET['name'] ?? 'Cliente';
            $cotizacion = $_GET['cotizacion'] ?? 'Cotización';
            $orderId = $_GET['orderId'] ?? '';
        ?>

        <p><?= htmlspecialchars($name) ?>, tu <?= htmlspecialchars($cotizacion) ?> fue procesada correctamente.</p>
        <p><strong>ID de orden:</strong> <?= htmlspecialchars($orderId) ?></p>

        <a href="<?= base_url('/') ?>">← Volver al inicio</a>
    </div>
</body>
</html>
