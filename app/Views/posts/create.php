<!DOCTYPE html>
<html>
<head>
    <title>Create post</title>
</head>
<body>
    <h1>Créer un post</h1>

    <form action="<?= base_url('/post/save') ?>" method="post" enctype="multipart/form-data">
        <?= csrf_field() ?>

        <label for="title">Titre</label>
        <input type="text" name="title" required><br><br>

        <label for="content">Contenu</label><br>
        <textarea name="content" rows="5" required></textarea><br><br>

        <label for="image">Image</label>
        <input type="file" name="image" accept="image/*"><br><br>

        <button type="submit">Publier</button>
    </form>
</body>
</html>
