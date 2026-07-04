<?php
session_start();

if (!isset($_SESSION["admin"])) {
    header("Location: login.php");
    exit;
}

include "../includes/db.php";

if (!isset($_GET["id"])) {
    header("Location: events.php");
    exit;
}

$id = $_GET["id"];
$message = "";

$sql = "SELECT * FROM events WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $id);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows === 0) {
    header("Location: events.php");
    exit;
}

$event = $result->fetch_assoc();

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $title = $_POST["title"];
    $description = $_POST["description"];
    $event_date = $_POST["event_date"];
    $event_time = $_POST["event_time"];
    $location = $_POST["location"];

    $updateSql = "UPDATE events 
                  SET title = ?, description = ?, event_date = ?, event_time = ?, location = ?
                  WHERE id = ?";

    $updateStmt = $conn->prepare($updateSql);
    $updateStmt->bind_param("sssssi", $title, $description, $event_date, $event_time, $location, $id);
    $updateStmt->execute();

    $message = "Evenement is aangepast.";

    $event["title"] = $title;
    $event["description"] = $description;
    $event["event_date"] = $event_date;
    $event["event_time"] = $event_time;
    $event["location"] = $location;
}
?>

<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <title>Evenement bewerken</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>

<div class="container py-5">

    <h1 class="section-title mb-4">Evenement bewerken</h1>

    <?php if ($message): ?>
        <div class="alert alert-success">
            <?php echo $message; ?>
        </div>
    <?php endif; ?>

    <div class="card fnv-card p-4">
        <form method="POST">

            <div class="mb-3">
                <label class="form-label">Titel</label>
                <input type="text" class="form-control" name="title" value="<?php echo htmlspecialchars($event["title"]); ?>" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Beschrijving</label>
                <textarea class="form-control" name="description" required><?php echo htmlspecialchars($event["description"]); ?></textarea>
            </div>

            <div class="mb-3">
                <label class="form-label">Datum</label>
                <input type="date" class="form-control" name="event_date" value="<?php echo htmlspecialchars($event["event_date"]); ?>" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Tijd</label>
                <input type="time" class="form-control" name="event_time" value="<?php echo htmlspecialchars($event["event_time"]); ?>">
            </div>

            <div class="mb-3">
                <label class="form-label">Locatie</label>
                <input type="text" class="form-control" name="location" value="<?php echo htmlspecialchars($event["location"]); ?>">
            </div>

            <button type="submit" class="btn btn-success">
                Wijzigingen opslaan
            </button>

            <a href="events.php" class="btn btn-secondary">
                Terug naar evenementen
            </a>

        </form>
    </div>

</div>

</body>
</html>