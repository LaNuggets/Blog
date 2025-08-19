<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="<?= base_url('css/style.css') ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Postes</title>
</head>
<?php
$formatter = new \IntlDateFormatter(
    'fr_FR',
    \IntlDateFormatter::LONG,
    \IntlDateFormatter::NONE,
    null,
    null,
    'd MMMM yyyy'
);
?>
<body>

    <div class="header">
        <div class="nav-links">
        <a href="<?= base_url('/blog') ?>" class="btn-posts">Stage</a>
        <a href="<?= base_url('/info') ?>" class="btn-posts">Entreprise</a>
        </div>
    </div>
    <hr>
    <main style="padding:20px;">
        <div class="main-header">
            <h1>Mes posts</h1>
        </div>
</br>
</br>
</br>
</br>
<?php foreach ($posts as $index => $post): ?>
<div class="post-container <?= $index % 2 === 1 ? 'row-reverse' : '' ?>" 
     style="flex-direction: <?= $index % 2 === 0 ? 'row' : 'row-reverse' ?>;">
    <div class="post">
        <p><strong>Date :</strong> <?= $formatter->format(strtotime($post['publication_date'])) ?></p>
        <h2><?= esc($post['title']) ?></h2>
        <p><?= esc($post['content']) ?></p>

        <?php if ($post['image']): ?>
            <div class="image-wrapper">
                <img src="<?= base_url('uploads/' . $post['image']) ?>">
            </div>
        <?php endif; ?>

        <div class="post-actions">
            <button onclick="document.getElementById('comment-form-<?= $post['id'] ?>').style.display='block'">
                Ajouter un commentaire
            </button>

            <!-- Formulaire de commentaire -->
            <div id="comment-form-<?= $post['id'] ?>" style="display:none; margin-top:10px;">
                <form action="<?= base_url('/comment/save') ?>" method="post">
                    <?= csrf_field() ?>
                    <input type="hidden" name="post_id" value="<?= $post['id'] ?>">

                    <label>Nom :</label>
                    <input type="text" name="author" required>

                    <label>Commentaire :</label>
                    <textarea name="content" rows="3" required></textarea>

                    <button type="submit">Envoyer</button>
                </form>
            </div>

            <!-- Commentaires -->
            <div class="comments">
                <h4>Commentaires :</h4>
                <?php if (!empty($post['comments'])): ?>
                    <?php foreach ($post['comments'] as $comment): ?>
                        <div>
                            <strong><?= esc($comment['author']) ?></strong>
                            <em>(<?= esc($comment['comment_date']) ?>)</em><br>
                            <?= nl2br(esc($comment['content'])) ?>
                            <hr style="border: 0; border-top: 1px solid #333;">
                        </div>
                    <?php endforeach; ?>
                <?php else: ?>
                    <p>Aucun commentaire pour le moment.</p>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
<?php endforeach; ?>
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
</main>
</body>
</html>
