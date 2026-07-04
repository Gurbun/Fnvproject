<?php include 'includes/header.php'; ?>

<section class="page-header">
    <div class="container">
        <h1>Contact</h1>
        <p>
            <?php echo $lang === 'en'
                ? 'Get in touch with FNV Heerenveen-Opsterland.'
                : 'Neem contact op met FNV Heerenveen-Opsterland.'; ?>
        </p>
    </div>
</section>

<section class="py-5">
    <div class="container">
        <div class="row g-4">

            <div class="col-md-6">
                <div class="card fnv-card p-4">
                    <h3><?php echo $lang === 'en' ? 'Contact details' : 'Contactgegevens'; ?></h3>

                    <p>
                        <strong><?php echo $lang === 'en' ? 'Organisation:' : 'Organisatie:'; ?></strong>
                        FNV Heerenveen-Opsterland
                    </p>

                    <p>
                        <strong>E-mail:</strong>
                        <a href="mailto:info@fnvheerenveen.nl" class="contact-link">
                            info@fnvheerenveen.nl
                        </a>
                    </p>

                    <p>
                        <strong><?php echo $lang === 'en' ? 'Phone:' : 'Telefoon:'; ?></strong>
                        <a href="tel:0883680368" class="contact-link">
                            088 - 368 0 368
                        </a>
                    </p>

                    <p>
                        <strong><?php echo $lang === 'en' ? 'Address:' : 'Adres:'; ?></strong>
                        <a 
                            href="https://www.google.com/maps/search/?api=1&query=Koornbeursweg+32+8442+DJ+Heerenveen" 
                            target="_blank" 
                            class="contact-link"
                        >
                            Koornbeursweg 32, 8442 DJ Heerenveen
                        </a>
                    </p>

                    <p>
                        <strong><?php echo $lang === 'en' ? 'Opening hours:' : 'Openingstijden:'; ?></strong>
                        <?php echo $lang === 'en' ? 'By appointment / during consultation hours' : 'Op afspraak / tijdens spreekuren'; ?>
                    </p>

                    <a href="mailto:info@fnvheerenveen.nl" class="btn-fnv mt-2">
                        <?php echo $lang === 'en' ? 'Send an email' : 'Stuur een e-mail'; ?>
                    </a>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card fnv-card p-4">
                    <h3><?php echo $lang === 'en' ? 'What can you contact us for?' : 'Waarvoor kunt u contact opnemen?'; ?></h3>
                    <ul>
                        <li><?php echo $lang === 'en' ? 'Questions about work and income' : 'Vragen over werk en inkomen'; ?></li>
                        <li><?php echo $lang === 'en' ? 'Questions about contracts, illness or reintegration' : 'Vragen over contracten, ziekte of re-integratie'; ?></li>
                        <li><?php echo $lang === 'en' ? 'Information about consultation hours' : 'Informatie over spreekuren'; ?></li>
                        <li><?php echo $lang === 'en' ? 'Career consultation for FNV members' : 'Loopbaanspreekuur voor FNV-leden'; ?></li>
                    </ul>

                    <a 
                        href="https://www.google.com/maps/search/?api=1&query=Koornbeursweg+32+8442+DJ+Heerenveen" 
                        target="_blank" 
                        class="btn btn-secondary mt-3"
                    >
                        <?php echo $lang === 'en' ? 'Open in Google Maps' : 'Open in Google Maps'; ?>
                    </a>
                </div>
            </div>

        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>