<?php

require_once __DIR__ . "/../src/init.php";

$stmt = $pdo->prepare("SELECT clientId, clientName, clientAge, clientEmail, clientStreet, clientNeighborhood, clientCity, createdAt FROM clients ORDER BY createdAt DESC");
$stmt->execute();
$clients = $stmt->fetchAll();

require_once __DIR__ . "/../templates/index.view.php";

?>
