<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="<?= base_url('css/style.css') ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    <header>
        <div class="nav-links">
            <a href="<?= base_url('/') ?>" class="btn-posts">Accueil</a>
            <a href="<?= base_url('/info') ?>" class="btn-posts">L'entreprise</a>
            <a href="<?= base_url('/posts') ?>" class="btn-posts">Les Posts</a>
            <a href="<?= base_url('/contact') ?>" class="btn-posts">Contact</a>
        </div>
    </header>
    <hr>
    <main style="padding:20px;">
        <div class="main-header">
            <h1>Mon blog</h1>
        </div>
        <h3>Pour validé ma 2ème année de bachelor informatique à Ynov j'ai du faire un stage et ce blog en est la retranscription !</h3>
    </main>
    <hr>
    <footer>
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
    </footer>
</body>
</html>