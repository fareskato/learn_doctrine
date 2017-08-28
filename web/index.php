<?php
include 'partials/header.php';
$posts = $em->getRepository('Blog\Entity\Post')->findAll()  ;
?>
    <div class="container">
        <div class="blog-header">
            <h1 class="blog-title">All posts</h1>
        </div>
        <?php foreach ($posts as $post): ?>
        <div class="row">
            <div class="col-sm-12 blog-main">
                <div class="blog-post">
                    <h2 class="blog-post-title"><?php echo $post->getTitle() ?></h2>
                    <p class="blog-post-meta"><?= $post->getPublicationDate()->format('Y-m-d H:i:s') ;?> <a href="#">Mark</a></p>
                    <p><?=nl2br(htmlspecialchars($post->getBody()))?></p>
                </div><!-- /.blog-post -->
            </div><!-- /.blog-main -->
        </div><!-- /.row -->
        <?php endforeach; ?>
    </div>
<?php include 'partials/footer.php'; ?>