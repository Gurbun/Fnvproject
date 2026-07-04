<footer class="fnv-footer mt-5">
    <div class="container py-4">
        <div class="row g-4">
            <div class="col-md-4">
                <h5>FNV Heerenveen-Opsterland</h5>
                <p><?php echo $lang === 'en' ? 'Work, income and social security in the Heerenveen region.' : 'Werk, inkomen en sociale zekerheid in de regio Heerenveen.'; ?></p>
            </div>

            <div class="col-md-4">
                <h5><?php echo $lang === 'en' ? 'About FNV' : 'Over FNV'; ?></h5>
                <p><?php echo $lang === 'en' ? 'Local support for workers, benefit recipients and pensioners.' : 'Lokale ondersteuning voor werkenden, uitkeringsgerechtigden en gepensioneerden.'; ?></p>
            </div>

            <div class="col-md-4">
                <h5>Contact</h5>
                <p><strong>E-mail:</strong> info@fnvheerenveen.nl</p>
                <p><strong><?php echo $lang === 'en' ? 'Opening hours:' : 'Openingstijden:'; ?></strong> <?php echo $lang === 'en' ? 'By appointment' : 'Op afspraak'; ?></p>
            </div>
        </div>

        <hr>

        <p class="text-center mb-0">
            © <?php echo date("Y"); ?> FNV Heerenveen-Opsterland
        </p>
    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>
<script src="js/script.js"></script>
</body>
</html>