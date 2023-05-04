
<?php require "app/views/partials/head.php" ?>

   <h1>about</h1>
    <p>this is a simple view for test</p>
    <?php if (!empty($articles)):?>
    <?php foreach ($articles as $article):?>
    <?php endforeach;?>
    <h1><?php echo $articles['title'];?></h1>
    <h1><?php echo $articles['url'];?></h1>
    <h1><?php echo $articles['description'];?></h1>
    <?php endif;?>
<?php require "app/views/partials/foot.php" ?>
