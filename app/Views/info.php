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
    <div class="header">
        <div class="nav-links">
            <a href="<?= base_url('/blog') ?>" class="btn-posts">Blog</a>
            <a href="<?= base_url('/posts') ?>" class="btn-posts">Postes</a>
        </div>
    </div>
    <hr>
    <main style="padding:20px;">
        <div class="main-header">
            <h1>IRS 2 - Nantes</h1>
        </div>
        <p>L'Institut de Recherche en Santé 2 - INSERM, C'est la où j'ai fait mon stage pendant 2 mois</p>

        <p>L'objectif de l'IRS 2 c'est de chercher et développer des méthodes qui puissent être utilisé dans des cas clinique ou épidémiologiques. L'INSERM de Nantes est spécialisé dans la biostatistique.
            Pour une meilleure organisation de leur taches l'unité de Nantes a développé en interne depuis plusieurs années, grâce à des stagiaires, une plateforme web.
            C'est sur cette dernière que j'aurais la charge d'apporter des améliorations.
        </p>

        <h2>Mon environnement de travail</h2>

        <p>L'ambiance été cool, j'étais dans un open space où nous étions rarement plus de cinq.<br>
            J'avais autour de moi des stagiaires doctorant et des doctorants depuis plus ou moins longtemps.<br>
            Tout le monde est toujours très concentré sur son travail et personne ne parle, on entend seulement le bruit des touches de clavier (comme cher le médecin).</p>

        <p>Sur les images ci-dessous vous pouvez voir l'open space dans le quelle j'ai pu travailler.</p>
        <div class="img_pres">
            <img src="images/bureau_recto.png" alt="Mon bureau vu de face">
            <img src="images/bureau_verso.png" alt="Mon bureau vu de dos">
        </div>

        <h2>Mes missions ?</h2>
        <p>Au début du stage j'ai fait un rendez-vous avec mon maitre de stage pour qu'il m'explique les taches que j'aurais à faire.
    </br>
        3 missions principale sont ressorties :
    </br>
        - Créer un nouvel onglet pour la création de temps de rencontre (point PMB).
    </br>
        - Modifier l'accès à certaines données et rajouter des filtres.
    </br>
        - Modifier le fonctionnement du calcul du temps de travail des employés ainsi que l'affichage graphique et le rendre rétroactif.
    </br>
        D'autres petites taches ce sont rajouter ici et là mais le plus gros de mon travail se résume à ça.
</br>

        <h2>C'est quoi ce site ?</h2>
        <p>Ce site est découpé en 6 outils bien distinct.</p>
    </br>
        - GEPETHO qui permet de gérer le temps passé sur les projets</br>
    </br>
        - CLEO qui calcule le taux d'activité de chaque personne</br>
    </br>
        - PINOCCHIO qui est un forum de questions/réponses et permet de créer des ordres du jour de réunion</br>
    </br>
        - JIMINY qui fait de l'archivage de PINOCCHIO</br>
    </br>
        - FIGARO qui est une todolist</br>
    </br>
        - GEDEON qui permet de recenser des non conformités aux procédures qualité</br>
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