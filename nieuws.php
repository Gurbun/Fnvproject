<?php include 'includes/header.php'; ?>

<section class="page-header">
    <div class="container">
        <h1><?php echo $lang === 'en' ? 'News' : 'Nieuws'; ?></h1>
        <p>
            <?php echo $lang === 'en'
                ? 'News and current information from FNV Heerenveen-Opsterland.'
                : 'Nieuws en actuele informatie van FNV Heerenveen-Opsterland.'; ?>
        </p>
    </div>
</section>

<section class="py-5">
    <div class="container">

        <div class="row g-4">

            <div class="col-md-4">
                <div class="card fnv-card p-4">
                    <h3><?php echo $lang === 'en' ? 'Open House' : 'Open Huis'; ?></h3>
                    <p>
                        <?php echo $lang === 'en'
                            ? 'During the Open House visitors can ask general questions and receive help choosing the right FNV service.'
                            : 'Tijdens het Open Huis kunnen bezoekers algemene vragen stellen en hulp krijgen bij het kiezen van de juiste FNV-dienstverlening.'; ?>
                    </p>
                    <p>
                        <strong><?php echo $lang === 'en' ? 'Times:' : 'Tijden:'; ?></strong><br>
                        <?php echo $lang === 'en'
                            ? 'Tuesday, Wednesday and Friday 14:00 - 16:00. Thursday 14:00 - 16:00 and 19:30 - 21:00.'
                            : 'Dinsdag, woensdag en vrijdag 14.00 - 16.00 uur. Donderdag 14.00 - 16.00 uur en 19.30 - 21.00 uur.'; ?>
                    </p>
                    <a href="informatie.php?lang=<?php echo $lang; ?>" class="btn-fnv mt-2">
                        <?php echo $lang === 'en' ? 'More information' : 'Meer informatie'; ?>
                    </a>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card fnv-card p-4">
                    <h3><?php echo $lang === 'en' ? 'Walk-in consultation Work & Income' : 'Inloopspreekuur Werk & Inkomen'; ?></h3>
                    <p>
                        <?php echo $lang === 'en'
                            ? 'FNV-certified union volunteers provide independent advice and answer questions about work and income.'
                            : 'FNV-gecertificeerde vakbondsvrijwilligers geven onafhankelijk advies en beantwoorden vragen over werk en inkomen.'; ?>
                    </p>
                    <p>
                        <strong><?php echo $lang === 'en' ? 'Time:' : 'Tijd:'; ?></strong>
                        <?php echo $lang === 'en' ? 'Tuesday 19:30 - 20:30' : 'Dinsdag 19.30 - 20.30 uur'; ?>
                    </p>
                    <a href="agenda.php?lang=<?php echo $lang; ?>" class="btn-fnv mt-2">
                        <?php echo $lang === 'en' ? 'View agenda' : 'Bekijk agenda'; ?>
                    </a>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card fnv-card p-4">
                    <h3><?php echo $lang === 'en' ? 'Tax service' : 'Belastingservice'; ?></h3>
                    <p>
                        <?php echo $lang === 'en'
                            ? 'FNV tax service helps members with their income tax return. Members can make an appointment for support.'
                            : 'De Belastingservice van de FNV helpt leden met de aangifte inkomstenbelasting. Leden kunnen hiervoor een afspraak maken.'; ?>
                    </p>
                    <a href="contact.php?lang=<?php echo $lang; ?>" class="btn-fnv mt-2">
                        <?php echo $lang === 'en' ? 'Contact us' : 'Neem contact op'; ?>
                    </a>
                </div>
            </div>

        </div>

        <div class="card fnv-card p-4 mt-4">
            <h3><?php echo $lang === 'en' ? 'Region North' : 'Regio Noord'; ?></h3>
            <p>
                <?php echo $lang === 'en'
                    ? 'The regional FNV website for the north of the Netherlands contains regional news, activities and opinion pieces about society and politics.'
                    : 'De website van regio Noord bevat nieuws uit de regio, activiteiten en opiniestukken over maatschappij en politiek.'; ?>
            </p>
            <a href="https://www.fnv.nl/nieuws?regio=noord" target="_blank" class="btn btn-secondary">
                <?php echo $lang === 'en' ? 'Go to regional news' : 'Ga naar regionaal nieuws'; ?>
            </a>
        </div>

    </div>
</section>

<?php include 'includes/footer.php'; ?>