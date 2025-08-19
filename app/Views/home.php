<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="<?= base_url('css/style.css') ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil</title>
</head>
<body>
    <div class="header">
        <div class="nav-links">
            <a href="<?= base_url('/blog') ?>" class="btn-posts">Blog</a>
            <a href="<?= base_url('/info') ?>" class="btn-posts">Entreprise</a>
            <a href="<?= base_url('/posts') ?>" class="btn-posts">Postes</a>
        </div>
    </div>
    <hr>
    <main style="padding:20px;">
        <div class="main-header">
            <h1>Bienvenue chez moi !</h1>
        </div>
        <h3>Moi c'est aurélien Dugast, j'ai 20 ans j'adore la nature, les jeux vidéo, l'informatique et transmettre des connaissances !</br>
            Je suis en jeune développeur informatique (je vais faire ma rentrer en 3ème année) passioné par le back-end.</br>
        </h3>
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
            <a href="/public/uploads/CV_Aurelien_Dugast.pdf" target="_blank" aria-label="CV">
                <i class="fas fa-file-pdf"></i>
            </a>
        </div>
    </div>
</body>
</html>