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
    <title>Explication</title>
</head>
<body>
    <div class="header">
        <div class="nav-links">
            <a href="<?= base_url('/blog') ?>" class="btn-posts">Blog</a>
            <a href="<?= base_url('/info') ?>" class="btn-posts">Entreprise</a>
            <a href="<?= base_url('/posts') ?>" class="btn-posts">Postes</a>
            <a href="<?= base_url('/exp') ?>" class="btn-posts">Retour d'experience</a>
        </div>
    </div>
    <hr>
    <main style="padding:20px;">
        <div class="main-header">
            <h1>Explication technique</h1>
        </div>
        <h2>Technologies utilisées</h2>
            <p>
                Comme dit avant, ce site avait déjà été commencé par d'ancien stagiaires tous de 2ème année.<br>
                Les technos qui ont été choisis sont : PHP avec le framework Codeigniter 3, JavaScript avec materialize js, HTML, CSS.<br>
                En ce qui me concerne je connaissais évidemment déjà tous ces langages mais pas les frameworks.<br>
            </p>
        </br>

        <h2>CodeIgniter : avantages et inconvénients</h2>
            <p>
                Il est très léger (même pas 50 Mo), comme beaucoup il utilise le model MVC(Model, Vue, contrôleur).<br>
                Beaucoup de choses sont automatisées, comme les routes : il suffit de créer une fonction dans un contrôleur et hop, la route est opérationnelle. il est d'une facilité d'utilisation remarquable, ça mise en service est d'une rapidité qui m'a beaucoup épaté.<br>
                Cependant ce framework a aussi des défauts.<br>
                Il n'y a aucune commande pour la création d'un MVC, tous doivent être créé manuellement ce qui est parfois fatiguant.<br>
                C'est d'ailleurs le seul problème vraiment impactant que j'ai trouvé mais il est de taille.<br>    
            </p>
        </br>
        <h2>Le MVC</h2>
            <p>
                En développement web, on parle souvent du MVC : Modèle, Vue et Contrôleur.  
                Le <strong>Modèle</strong> contient les fonctions qui interagissent avec la base de données : récupérer des informations, les modifier ou les supprimer. On appelle cela un CRUD (Create, Read, Update, Delete).  
                La <strong>Vue</strong> correspond à ce que voit l'utilisateur, c'est-à-dire la page web. C'est ici que l'on met en page, change les couleurs, la disposition et affiche les données.  
                Le <strong>Contrôleur</strong> fait le lien entre les deux. Par exemple, si l'on veut afficher tous les employés de l'entreprise, le Contrôleur va appeler le Modèle pour récupérer les informations, puis les envoyer à la Vue pour qu’elle les affiche.  
                Et voilà, maintenant vous êtes incollable sur le MVC !
            </p>
        </br>
            <h2>Arborescence des fichiers</h2>
            <p>Voici à quoi ressemble l'arborescence des principaux fichiers :</p>
        </br>
        <pre>
        ┬ Projet
        ├───┬ applications/
        │   ├──── config/
        │   ├──── controllers/
        │   ├──── database/
        │   ├──── heplers/
        │   ├──── models/
        │   ├──── logs/
        │   ├──── viwes/
        │   └──── ...
        ├───┬ assets/
        │   ├──── css/
        │   ├──── js/
        │   └──── ...
        ├───┬ cron/
        │   ├──── everyDay.php
        │   └──── every3month.php
        │
        └───┬ system/
            └──── Des fichiers de config...
        </pre>
        </br>
        <p>Pour mon retour d'expérience c'est ici !</p>
        <a href="<?= base_url('/exp') ?>" class="btn-posts">Mon ressenti</a>
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