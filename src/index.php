<?php
declare(strict_types=1);

$now = date('Y-m-d H:i:s');

?>
<!doctype html>
<html lang="es">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>WSL + Docker Workflow Demo</title>
  <style>
    body{font-family:Arial, sans-serif; max-width:900px; margin:40px auto; padding:0 16px;}
    code{background:#f2f2f2; padding:2px 6px; border-radius:6px;}
    .card{border:1px solid #e5e5e5; border-radius:12px; padding:16px; margin:16px 0;}
  </style>
</head>
<body>
  <h1>WSL + Docker Workflow Demo</h1>

  <div class="card">
    <p><strong>Hora del contenedor:</strong> <?= htmlspecialchars($now) ?></p>
    <p><strong>Host:</strong> <?= htmlspecialchars(gethostname() ?: 'N/A') ?></p>
    <p><strong>PHP:</strong> <?= htmlspecialchars(PHP_VERSION) ?></p>
  </div>

  <div class="card">
    <h2>TODO (para completar desde el laptop)</h2>
    <ul>
      <li>Agregar una ruta <code>/health</code> simple (por ejemplo, <code>health.php</code>).</li>
      <li>Agregar un <code>healthcheck</code> en <code>docker-compose.yml</code>.</li>
      <li>Agregar un ejemplo de endpoint JSON <code>/api/info.php</code>.</li>
      <li>Opcional: sumar MySQL (LAMP) y una tabla demo.</li>
    </ul>
  </div>
</body>
</html>
