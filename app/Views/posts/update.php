<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Modifier un post</title>
    <link rel="stylesheet" href="<?= base_url('css/style.css') ?>">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=JetBrains+Mono:ital,wght@0,100..800;1,100..800&display=swap" rel="stylesheet">
</head>
<body>
    <h1>Modifier le post</h1>

    <form action="<?= base_url('/post/update/' . $post['id']) ?>" method="post" enctype="multipart/form-data">
        <?= csrf_field() ?>

        <label for="title">Titre</label>
        <input type="text" name="title" value="<?= esc($post['title']) ?>" required>

        <label for="content">Contenu</label>
        <textarea name="content" rows="5" required><?= esc($post['content']) ?></textarea>

        <?php if (!empty($post['image'])): ?>
            <p>Image actuelle :</p>
            <img src="<?= base_url('uploads/' . $post['image']) ?>" width="200">
        <?php endif; ?>

        <label for="image">Nouvelle image</label>
        <input type="file" name="image">

        <button type="submit">Mettre à jour</button>
    </form>
</body>
</html>
