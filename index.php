<?php
include 'includes/header.php';
include 'includes/db.php';

$popupEvent = null;
$popupResult = $conn->query("SELECT * FROM events WHERE event_date >= CURDATE() ORDER BY event_date ASC LIMIT 1");

if ($popupResult && $popupResult->num_rows > 0) {
    $popupEvent = $popupResult->fetch_assoc();
}
?>

<?php if ($popupEvent): ?>
<div class="modal fade" id="eventPopup" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"><?php echo $lang === 'en' ? 'Upcoming event' : 'Aankomend evenement'; ?></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>

            <div class="modal-body">
                <h4><?php echo htmlspecialchars($popupEvent["title"]); ?></h4>
                <p><?php echo htmlspecialchars($popupEvent["description"]); ?></p>
                <p><strong>Datum:</strong> <?php echo date("d-m-Y", strtotime($popupEvent["event_date"])); ?></p>
                <p><strong>Tijd:</strong> <?php echo date("H:i", strtotime($popupEvent["event_time"])); ?> uur</p>
                <p><strong>Locatie:</strong> <?php echo htmlspecialchars($popupEvent["location"]); ?></p>
            </div>

            <div class="modal-footer">
                <a href="agenda.php?lang=<?php echo $lang; ?>" class="btn btn-success">
                    <?php echo $lang === 'en' ? 'View agenda' : 'Bekijk agenda'; ?>
                </a>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                    <?php echo $lang === 'en' ? 'Close' : 'Sluiten'; ?>
                </button>
            </div>
        </div>
    </div>
</div>
<?php endif; ?>

<section class="modern-hero">
    <div class="hero-overlay">
        <div class="container">
            <div class="hero-content">
                <span class="hero-label">FNV Heerenveen-Opsterland</span>

                <h1>
                    <?php echo $lang === 'en'
                        ? 'Support with work, income and social security'
                        : 'Ondersteuning bij werk, inkomen en sociale zekerheid'; ?>
                </h1>

                <p>
                    <?php echo $lang === 'en'
                        ? 'We are here for workers, benefit recipients and pensioners in the Heerenveen region.'
                        : 'Wij zijn er voor werkenden, uitkeringsgerechtigden en gepensioneerden in de regio Heerenveen.'; ?>
                </p>

                <div class="hero-buttons">
                    <a href="agenda.php?lang=<?php echo $lang; ?>" class="btn-fnv">
                        <?php echo $lang === 'en' ? 'View agenda' : 'Bekijk agenda'; ?>
                    </a>

                    <a href="contact.php?lang=<?php echo $lang; ?>" class="btn-outline-fnv">
                        <?php echo $lang === 'en' ? 'Contact us' : 'Neem contact op'; ?>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="py-5">
    <div class="container">
        <h2 class="section-title mb-4">
            <?php echo $lang === 'en' ? 'What we do' : 'Wat wij doen'; ?>
        </h2>

        <div class="row g-4">
            <div class="col-md-4">
                <div class="card fnv-card p-4">
                    <div class="card-icon">💼</div>
                    <h3><?php echo $lang === 'en' ? 'Work' : 'Werk'; ?></h3>
                    <p><?php echo $lang === 'en' ? 'Advice and support with questions about work and rights.' : 'Advies en ondersteuning bij vragen over werk en rechten.'; ?></p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card fnv-card p-4">
                    <div class="card-icon">💶</div>
                    <h3><?php echo $lang === 'en' ? 'Income' : 'Inkomen'; ?></h3>
                    <p><?php echo $lang === 'en' ? 'Information about income, benefits and social security.' : 'Informatie over inkomen, uitkering en sociale zekerheid.'; ?></p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card fnv-card p-4">
                    <div class="card-icon">📅</div>
                    <h3><?php echo $lang === 'en' ? 'Meetings' : 'Bijeenkomsten'; ?></h3>
                    <p><?php echo $lang === 'en' ? 'View meetings, consultation hours and local activities.' : 'Bekijk bijeenkomsten, spreekuren en lokale activiteiten.'; ?></p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="info-block py-5">
    <div class="container">
        <div class="row align-items-center g-4">
            <div class="col-md-6">
                <h2><?php echo $lang === 'en' ? 'Clear and accessible information' : 'Duidelijke en toegankelijke informatie'; ?></h2>
                <p>
                    <?php echo $lang === 'en'
                        ? 'The renewed website makes it easier for visitors to find information, contact FNV and view upcoming activities.'
                        : 'De vernieuwde website maakt het makkelijker voor bezoekers om informatie te vinden, contact op te nemen en aankomende activiteiten te bekijken.'; ?>
                </p>
            </div>

            <div class="col-md-6">
                <div class="highlight-card">
                    <h3><?php echo $lang === 'en' ? 'Important for visitors' : 'Belangrijk voor bezoekers'; ?></h3>
                    <ul>
                        <li><?php echo $lang === 'en' ? 'Quick access to the agenda' : 'Snel toegang tot de agenda'; ?></li>
                        <li><?php echo $lang === 'en' ? 'Clear contact information' : 'Duidelijke contactgegevens'; ?></li>
                        <li><?php echo $lang === 'en' ? 'Modern and mobile-friendly design' : 'Modern en mobielvriendelijk ontwerp'; ?></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>

<?php if ($popupEvent): ?>
<script>
    const eventPopup = new bootstrap.Modal(document.getElementById('eventPopup'));
    eventPopup.show();
</script>
<?php endif; ?>