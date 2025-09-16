<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="<?= base_url('css/style.css') ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=JetBrains+Mono:ital,wght@0,100..800;1,100..800&display=swap" rel="stylesheet">
    <title>Accueil</title>
</head>
<body>
    <div class="header">
        <div class="nav-links">
            <a href="<?= base_url('/blog') ?>" class="btn-posts">Blog</a>
        </div>
    </div>
    <hr>
    <main style="padding:20px;">
        <div class="main-header">
            <h1>Bienvenue chez Aurélien Duagst !</h1>
        </div>
        <h3>Moi c'est <span style="color:#ff5555;">aurélien </span> Dugast mais mon pseudo c'est <span style="color:#ff5555;">LaNuggets</span>, j'ai 20 ans j'adore la nature, les jeux vidéo, l'informatique et transmettre des connaissances !</br>
            Je suis en jeune développeur informatique passioné par le back-end.</br>
        </h3>

        <div class="timeline">
        <div class="timeline-item">
            <div class="timeline-icon">💻</div>
            <h4>Stage en dev web fullstack</h4>
            <p>Stage de 2 mois à l'IRS 2 à Nantes. Développeur web fullstack, amélioration, maintenance et mise en production d'une plateforme web interne.</p>
        </div>

        <div class="timeline-item">
            <div class="timeline-icon">🎓</div>
            <h4>Formation en informatique</h4>
            <p>Bachelor Informatique à Ynov, spécialisation développement.</p>
        </div>

        <div class="timeline-item">
            <div class="timeline-icon">🤝</div>
            <h4>Service civique à la Maison des Jeux</h4>
            <p>Animation tout age et menuiserie</p>
        </div>

        <div class="timeline-item">
            <div class="timeline-icon">📘</div>
            <h4>Baccalauréat</h4>
            <p>Bac STI2D option SIN avec mention assez bien.</p>
        </div>
        </div>

    </main>
    <hr>
    <div class="footer">
        <div class="footer-links">
            <a href="https://github.com/LaNuggets" target="_blank" aria-label="GitHub">
                <i class="fab fa-github"></i>
            </a>
            <a href="https://www.linkedin.com/in/aur%C3%A9lien-dugast-533886334/" target="_blank" aria-label="LinkedIn">
                <i class="fab fa-linkedin"></i>
            </a>
            <a href="/uploads/CV_Aurelien_Dugast.pdf" download="CV_Aurelien_Dugast.pdf" aria-label="CV">
                <i class="fas fa-file-pdf"></i>
            </a>
            </a>
        </div>
    </div>
</body>
</html>