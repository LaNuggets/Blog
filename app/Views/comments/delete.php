<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="<?= base_url('css/style.css') ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=JetBrains+Mono:ital,wght@0,100..800;1,100..800&display=swap" rel="stylesheet">
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
