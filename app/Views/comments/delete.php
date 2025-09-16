<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Gestion des commentaires</title>
</head>
<body>

    <h1>Liste des commentaires</h1>

    <?php if (! empty($comments) && is_array($comments)) : ?>
        <?php foreach ($comments as $comment) : ?>
            <div class="comment">
                <div class="author"><?= esc($comment['author']) ?></div>
                <div class="date"><?= esc($comment['comment_date']) ?></div>
                <div class="content"><?= esc($comment['content']) ?></div>

                <a class="delete-btn"
                   href="<?= site_url('comment/delete/' . $comment['id']) ?>"
                   onclick="return confirm('Voulez-vous vraiment supprimer ce commentaire ?');">
                   Supprimer
                </a>
            </div>
        <?php endforeach; ?>
    <?php else : ?>
        <p>Aucun commentaire trouvé.</p>
    <?php endif; ?>

</body>
</html>
