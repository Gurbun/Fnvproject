<?php include 'includes/header.php'; ?>

<section class="page-header">
    <div class="container">
        <h1><?php echo $lang === 'en' ? 'About us' : 'Over ons'; ?></h1>
        <p>
            <?php echo $lang === 'en'
                ? 'FNV Heerenveen-Opsterland is the local union house in the Heerenveen region.'
                : 'FNV Heerenveen-Opsterland is het lokale vakbondshuis in de regio Heerenveen.'; ?>
        </p>
    </div>
</section>

<section class="py-5">
    <div class="container">

        <div class="row g-4">
            <div class="col-md-6">
                <div class="card fnv-card p-4">
                    <h3><?php echo $lang === 'en' ? 'Who we are' : 'Wie wij zijn'; ?></h3>
                    <p>
                        <?php echo $lang === 'en'
                            ? 'At the local union house in Heerenveen, members and non-members can come in with questions or for a cup of coffee or tea.'
                            : 'In het lokale vakbondshuis in Heerenveen kunnen leden en niet-leden binnenkomen met vragen of voor een kopje koffie of thee.'; ?>
                    </p>
                    <p>
                        <?php echo $lang === 'en'
                            ? 'Certified and knowledgeable FNV volunteers take the time to help visitors with personal questions about work, income and membership.'
                            : 'Gecertificeerde en deskundige FNV-vrijwilligers nemen de tijd om bezoekers te helpen met persoonlijke vragen over werk, inkomen en lidmaatschap.'; ?>
                    </p>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card fnv-card p-4">
                    <h3><?php echo $lang === 'en' ? 'Our location' : 'Onze locatie'; ?></h3>
                    <p><strong>FNV Heerenveen</strong></p>
                    <p>Koornbeursweg 32<br>8442 DJ Heerenveen</p>
                    <p>
                        <?php echo $lang === 'en'
                            ? 'The union house offers services on location, by telephone and online.'
                            : 'Het vakbondshuis biedt dienstverlening op locatie, telefonisch en online.'; ?>
                    </p>

                    <a 
                        href="https://www.google.com/maps/search/?api=1&query=Koornbeursweg+32+8442+DJ+Heerenveen"
                        target="_blank"
                        class="btn-fnv"
                    >
                        <?php echo $lang === 'en' ? 'Open route' : 'Route openen'; ?>
                    </a>
                </div>
            </div>
        </div>

        <div class="card fnv-card p-4 mt-4">
            <h3><?php echo $lang === 'en' ? 'What we offer' : 'Wat wij aanbieden'; ?></h3>
            <p>
                <?php echo $lang === 'en'
                    ? 'FNV Heerenveen offers support with work and income, career questions, social provisions, tax service, open house moments and consultation hours.'
                    : 'FNV Heerenveen biedt ondersteuning bij werk en inkomen, loopbaanvragen, sociale voorzieningen, belastingservice, Open Huis-momenten en spreekuren.'; ?>
            </p>

            <div class="row g-3 mt-2">
                <div class="col-md-4">
                    <div class="highlight-card h-100">
                        <h4><?php echo $lang === 'en' ? 'Work & Income' : 'Werk & Inkomen'; ?></h4>
                        <p><?php echo $lang === 'en' ? 'Advice about contracts, salary, illness and reintegration.' : 'Advies over contracten, salaris, ziekte en re-integratie.'; ?></p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="highlight-card h-100">
                        <h4><?php echo $lang === 'en' ? 'Career advice' : 'Loopbaanadvies'; ?></h4>
                        <p><?php echo $lang === 'en' ? 'Free career consultation for FNV members.' : 'Gratis loopbaangesprek voor FNV-leden.'; ?></p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="highlight-card h-100">
                        <h4><?php echo $lang === 'en' ? 'Open House' : 'Open Huis'; ?></h4>
                        <p><?php echo $lang === 'en' ? 'General information and help choosing the right service.' : 'Algemene informatie en hulp bij het kiezen van de juiste dienstverlening.'; ?></p>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

<?php include 'includes/footer.php'; ?>