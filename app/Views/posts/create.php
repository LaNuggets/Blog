<!DOCTYPE html>
<html>
<head>
    <title>Create post</title>
    <link rel="stylesheet" href="<?= base_url('css/style.css') ?>">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=JetBrains+Mono:ital,wght@0,100..800;1,100..800&display=swap" rel="stylesheet">
</head>
<body>
    <h1>Créer un post</h1>

    <form action="<?= base_url('/post/save') ?>" method="post" enctype="multipart/form-data">
        <?= csrf_field() ?>

        <label for="title">Titre</label>
        <input type="text" name="title" required><br><br>

        <label for="date">Date</label>
        <input type="date" name="date"><br><br>

        <label for="content">Contenu</label><br>
        <textarea name="content" rows="5" required></textarea><br><br>

        <label for="image">Image</label>
        <input type="file" name="image" accept="image/*"><br><br>

        <button type="submit">Publier</button>
    </form>
</body>
</html>
