<?php include 'includes/header.php'; ?>

<section class="page-header">
    <div class="container">
        <h1><?php echo $lang === 'en' ? 'Photos' : 'Foto’s'; ?></h1>
        <p>
            <?php echo $lang === 'en'
                ? 'A photo impression of FNV Heerenveen-Opsterland.'
                : 'Een foto-impressie van FNV Heerenveen-Opsterland.'; ?>
        </p>
    </div>
</section>

<section class="py-5">
    <div class="container">
        <div class="row g-4">

            <?php
            $photos = [
                "ToonFoto.jpeg",
                "ToonFoto (1).jpeg",
                "ToonFoto (2).jpeg",
                "ToonFoto (3).jpeg",
                "ToonFoto (4).jpeg",
                "ToonFoto (5).jpeg",
                "ToonFoto (6).jpeg",
                "ToonFoto (7).jpeg",
                "ToonFoto (8).jpeg"
            ];

            foreach ($photos as $index => $photo):
            ?>

                <div class="col-md-4">
                    <div class="card fnv-card overflow-hidden">
                        <img 
                            src="images/<?php echo $photo; ?>" 
                            class="gallery-img" 
                            alt="FNV foto <?php echo $index + 1; ?>"
                        >
                    </div>
                </div>

            <?php endforeach; ?>

        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>