<?php
require "../config/db.php";
$table = $_GET['table'] ?? 'Unknown';
?>

<!DOCTYPE html>
<html>
<head>
  <title>Menu</title>
  <link href="../assets/css/main.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-4">

<h3>Table No: <?= htmlspecialchars($table) ?></h3>

<p>Menu loading…</p>

</body>
</html>
