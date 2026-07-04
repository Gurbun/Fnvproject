<?php
session_start();

if (!isset($_SESSION["admin"])) {
    header("Location: login.php");
    exit;
}

include "../includes/db.php";

$totalEvents = 0;
$result = $conn->query("SELECT COUNT(*) AS total FROM events");

if ($result) {
    $row = $result->fetch_assoc();
    $totalEvents = $row["total"];
}
?>

<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <title>Admin dashboard - FNV</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>

<div class="container py-5">

    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h1 class="section-title mb-1">Admin dashboard</h1>
            <p class="text-muted mb-0">Beheer de dynamische onderdelen van de website.</p>
        </div>

        <a href="logout.php" class="btn btn-danger">Uitloggen</a>
    </div>

    <div class="row g-4">

        <div class="col-md-6">
            <div class="card fnv-card p-4">
                <h3>Agenda beheren</h3>
                <p>Voeg evenementen toe, pas ze aan of verwijder ze.</p>

                <a href="events.php" class="btn btn-success w-100">
                    Evenementen beheren
                </a>
            </div>
        </div>

        <div class="col-md-6">
            <div class="card fnv-card p-4">
                <h3>Aantal evenementen</h3>
                <p class="display-5 fw-bold text-success mb-0">
                    <?php echo $totalEvents; ?>
                </p>
                <p class="mb-0">evenement(en) in de database</p>
            </div>
        </div>

    </div>

</div>

</body>
</html>