<?php
session_start();

if (!isset($_SESSION["admin"])) {
    header("Location: login.php");
    exit;
}

include "../includes/db.php";

$message = "";

if (isset($_GET["delete"])) {
    $id = $_GET["delete"];

    $sql = "DELETE FROM events WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id);
    $stmt->execute();

    $message = "Evenement is verwijderd.";
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $title = $_POST["title"];
    $description = $_POST["description"];
    $event_date = $_POST["event_date"];
    $event_time = $_POST["event_time"];
    $location = $_POST["location"];

    $sql = "INSERT INTO events (title, description, event_date, event_time, location)
            VALUES (?, ?, ?, ?, ?)";

    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssss", $title, $description, $event_date, $event_time, $location);
    $stmt->execute();

    $message = "Evenement is toegevoegd.";
}

$result = $conn->query("SELECT * FROM events ORDER BY event_date ASC");
?>

<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <title>Evenementen beheren</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>

<div class="container py-5">

    <h1 class="section-title mb-4">Evenementen beheren</h1>

    <?php if ($message): ?>
        <div class="alert alert-success">
            <?php echo $message; ?>
        </div>
    <?php endif; ?>

    <div class="card fnv-card p-4">
        <h3 class="mb-3">Nieuw evenement toevoegen</h3>

        <form method="POST">

            <div class="mb-3">
                <label class="form-label">Titel</label>
                <input type="text" class="form-control" name="title" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Beschrijving</label>
                <textarea class="form-control" name="description" required></textarea>
            </div>

            <div class="mb-3">
                <label class="form-label">Datum</label>
                <input type="date" class="form-control" name="event_date" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Tijd</label>
                <input type="time" class="form-control" name="event_time">
            </div>

            <div class="mb-3">
                <label class="form-label">Locatie</label>
                <input type="text" class="form-control" name="location">
            </div>

            <button type="submit" class="btn btn-success">
                Evenement toevoegen
            </button>

            <a href="dashboard.php" class="btn btn-secondary">
                Terug naar dashboard
            </a>

        </form>
    </div>

    <h2 class="section-title mt-5 mb-3">Bestaande evenementen</h2>

    <?php if ($result && $result->num_rows > 0): ?>
        <?php while ($event = $result->fetch_assoc()): ?>
            <div class="card fnv-card p-4 mb-3">
                <h4><?php echo htmlspecialchars($event["title"]); ?></h4>

                <p><?php echo htmlspecialchars($event["description"]); ?></p>

                <p>
                    <strong>Datum:</strong> <?php echo date("d-m-Y", strtotime($event["event_date"])); ?> |
                    <strong>Tijd:</strong> <?php echo date("H:i", strtotime($event["event_time"])); ?> uur |
                    <strong>Locatie:</strong> <?php echo htmlspecialchars($event["location"]); ?>
                </p>

                <a href="edit-event.php?id=<?php echo $event["id"]; ?>" class="btn btn-warning btn-sm">
                    Bewerken
                </a>

                <a 
                    href="events.php?delete=<?php echo $event["id"]; ?>" 
                    class="btn btn-danger btn-sm"
                    onclick="return confirm('Weet je zeker dat je dit evenement wilt verwijderen?');"
                >
                    Verwijderen
                </a>
            </div>
        <?php endwhile; ?>
    <?php else: ?>
        <div class="alert alert-info mt-3">
            Er zijn nog geen evenementen toegevoegd.
        </div>
    <?php endif; ?>

</div>

</body>
</html>