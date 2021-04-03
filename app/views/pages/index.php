<?php require APP_ROOT . '/views/includes/header.php'; ?>
    <div class="jumbotron bg-light jumbotron-fluid text-center">
        <div class="container">
            <h1 class="display-4"><?php echo $data['title']; ?></h1>
            <p class="lead"><?php echo $data['description']; ?></p>
        </div>
    </div>
    <ul>
        <?php foreach($data['posts'] as $post) : ?>
            <li><?php echo $post->title . '<br />' . $post->body; ?></li>
        <?php endforeach?>
    </ul>
<?php require APP_ROOT . '/views/includes/footer.php'; ?>