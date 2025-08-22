<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="<?= base_url('css/style.css') ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Explication</title>
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
            <h1>Explication</h1>
        </div>
        <p>
        Comme dit plus haut ce site avait déjà été commencé par d'ancien stagiaires.<br>
        Les technos qui ont été choisis sont : PHP avec le framework Codeigniter 3, JavaScript avec materialize js, html, css.<br>
        En ce qui me concerne je connaissais évidemment déjà tous c'est langage mais pas les framework.<br>
        Après utilisation je peux dire que codeigniter à avantage et inconvénient.<br>
        Il est très léger (même pas 50 Mo), comme beaucoup il utilise le model MVC(Model, Vue, controlleur).<br>
        Beaucoup de choses sont faite de manière automatique comme les routes (pas besoin de les créer manuellement dans un quelconque fichier, il suffit de créer une fonction dans un controller et bim la route est opérationnelle), il est d'une facilité d'utilisation remarquable, ça mise en service est d'une rapidité qui m'a beaucoup épaté.<br>
        Je l'ai utilisé pour faire mon blog et je m'attendais à mettre plusieurs minutes, voir même heures pour l'installer et commencé à codé. Que nenni ! Il suffit de cloner le repo github supprimer 2 fichiers et c'est partie.<br>
        Cependant ce framework a aussi des default.<br>
        Il n'y a aucune commande pour la création d'un MVC, tous doivent être créé manuellement ce qui est parfois fatiguant.<br>
        C'est d'ailleurs le seul problème vraiment impactant que j'ai trouvé mais il est de taille.<br>
        </br>
        Pour une vue plus approfondit voici a quoi ressemble l'arborescence des fichiers (je n'ai mis ici que les fichiers principaux):<br>
        </br>
        ┬ Projet<br>
        ├───┬ applications/<br>
        │   ├──── config/<br>
        │   ├──── controllers/<br>
        │   ├──── database/<br>
        │   ├──── heplers/<br>
        │   ├──── models/<br>
        │   ├──── logs/<br>
        │   ├──── viwes/<br>
        │   └──── ...<br>
        ├───┬ assets/<br>
        │   ├──── css/<br>
        │   ├──── js/<br>
        │   └──── ...<br>
        ├───┬ cron/<br>
        │   ├──── everyDay.php<br>
        │   └──── every3month.php<br>
        │<br>
        └───┬ system/<br>
            └──── Des fichies de config...<br>
        </p>
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
        </div>
    </div>
</body>
</html>