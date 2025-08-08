<link rel="stylesheet" href="<?= base_url('css/style.css') ?>">
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

<div class="header">
    <h1>Mes posts</h1>
    <div class="nav-links">
    <a href="<?= base_url('/blog') ?>" class="btn-posts">Stage</a>
    <a href="<?= base_url('/info') ?>" class="btn-posts">L'entreprise</a>
    </div>
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

</body>
</html>
