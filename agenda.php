<?php
include 'includes/header.php';
include 'includes/db.php';

$result = $conn->query("SELECT * FROM events ORDER BY event_date ASC");
?>

<section class="page-header">
    <div class="container">
        <h1>Agenda</h1>
        <p>
            <?php echo $lang === 'en'
                ? 'View upcoming meetings, consultation hours and activities.'
                : 'Bekijk aankomende bijeenkomsten, spreekuren en activiteiten.'; ?>
        </p>
    </div>
</section>

<section class="py-5">
    <div class="container">
        <?php if ($result && $result->num_rows > 0): ?>
            <div class="row g-4">
                <?php while ($event = $result->fetch_assoc()): ?>
                    <div class="col-md-6">
                        <div class="card fnv-card p-4">
                            <h3><?php echo htmlspecialchars($event["title"]); ?></h3>
                            <p><?php echo htmlspecialchars($event["description"]); ?></p>

                            <p class="mb-1">
                                <strong>Datum:</strong>
                                <?php echo date("d-m-Y", strtotime($event["event_date"])); ?>
                            </p>

                            <p class="mb-1">
                                <strong>Tijd:</strong>
                                <?php echo date("H:i", strtotime($event["event_time"])); ?> uur
                            </p>

                            <p class="mb-0">
                                <strong>Locatie:</strong>
                                <?php echo htmlspecialchars($event["location"]); ?>
                            </p>
                        </div>
                    </div>
                <?php endwhile; ?>
            </div>
        <?php else: ?>
            <div class="alert alert-info">
                Er staan op dit moment geen evenementen gepland.
            </div>
        <?php endif; ?>
    </div>
</section>

<?php include 'includes/footer.php'; ?>