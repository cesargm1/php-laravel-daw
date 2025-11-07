<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<title>Variables del servidor</title>
<style>
  body {
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    background: linear-gradient(135deg, #6a11cb 0%, #2575fc 100%);
    color: #fff;
    margin: 0;
    padding: 20px;
  }
  h1 {
    text-align: center;
    margin-bottom: 20px;
    text-shadow: 0 0 5px rgba(0,0,0,0.3);
  }
  table {
    width: 100%;
    border-collapse: collapse;
    background: rgba(255, 255, 255, 0.1);
    box-shadow: 0 8px 16px rgba(0,0,0,0.3);
    border-radius: 8px;
    overflow: hidden;
  }
  th, td {
    padding: 12px 15px;
    text-align: left;
  }
  th {
    background-color: rgba(255, 255, 255, 0.2);
    font-weight: 600;
    text-transform: uppercase;
  }
  tr:nth-child(even) {
    background-color: rgba(255, 255, 255, 0.05);
  }
  tr:hover {
    background-color: rgba(255, 255, 255, 0.15);
    cursor: default;
  }
</style>
</head>
<body>

<table>
  <thead>
    <tr>
      <th>Clave</th>
      <th>Valor</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($_SERVER as $key => $value) { ?>
      <tr>
        <td><?php echo htmlspecialchars($key); ?></td>
        <td><?php echo htmlspecialchars($value); ?></td>
      </tr>
    <?php } ?>
  </tbody>
</table>

</body>
</html>

   