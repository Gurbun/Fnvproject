<?php include 'includes/header.php'; ?>

<section class="page-header">
    <div class="container">
        <h1><?php echo $lang === 'en' ? 'Information' : 'Informatie'; ?></h1>
        <p>
            <?php echo $lang === 'en'
                ? 'Information about the services at FNV Heerenveen.'
                : 'Informatie over de dienstverlening van FNV Heerenveen.'; ?>
        </p>
    </div>
</section>

<section class="py-5">
    <div class="container">
        <div class="row g-4">

            <div class="col-md-6">
                <div class="card fnv-card p-4">
                    <h3><?php echo $lang === 'en' ? 'Work & Income consultation' : 'Spreekuur Werk en Inkomen'; ?></h3>
                    <p>
                        <?php echo $lang === 'en'
                            ? 'For questions about collective agreements, illness, reintegration, contracts, work, income, schedules, salary and related subjects.'
                            : 'Voor vragen over cao, ziekte, re-integratie, contracten, werk, inkomen, roosters, inschaling, salaris en andere onderwerpen.'; ?>
                    </p>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card fnv-card p-4">
                    <h3><?php echo $lang === 'en' ? 'Career consultation' : 'Loopbaanspreekuur'; ?></h3>
                    <p>
                        <?php echo $lang === 'en'
                            ? 'FNV members can receive a free one-hour career consultation about career wishes, development, applications and suitable training.'
                            : 'FNV-leden kunnen een gratis loopbaangesprek van één uur krijgen over loopbaanwensen, ontwikkeling, solliciteren en passende trainingen.'; ?>
                    </p>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card fnv-card p-4">
                    <h3><?php echo $lang === 'en' ? 'Tax service' : 'Belastingservice'; ?></h3>
                    <p>
                        <?php echo $lang === 'en'
                            ? 'FNV also offers tax service support for members during the tax return period.'
                            : 'FNV biedt ook ondersteuning via de Belastingservice voor leden tijdens de periode van de belastingaangifte.'; ?>
                    </p>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card fnv-card p-4">
                    <h3><?php echo $lang === 'en' ? 'Courses and meetings' : 'Cursussen en bijeenkomsten'; ?></h3>
                    <p>
                        <?php echo $lang === 'en'
                            ? 'The local union house is also used for courses, local meetings and theme meetings about current topics.'
                            : 'Het lokale vakbondshuis wordt ook gebruikt voor cursussen, lokale bijeenkomsten en themabijeenkomsten over actuele onderwerpen.'; ?>
                    </p>
                </div>
            </div>

        </div>

        <div class="card fnv-card p-4 mt-4">
            <h3><?php echo $lang === 'en' ? 'Visiting address' : 'Bezoekadres'; ?></h3>
            <p><strong>FNV Heerenveen</strong></p>
            <p>Koornbeursweg 32<br>8442 DJ Heerenveen</p>

            <a 
                href="https://www.google.com/maps/search/?api=1&query=Koornbeursweg+32+8442+DJ+Heerenveen" 
                target="_blank" 
                class="btn-fnv"
            >
                <?php echo $lang === 'en' ? 'Open route' : 'Route openen'; ?>
            </a>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>