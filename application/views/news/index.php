<h2><?php echo $title; ?></h2>

<?php foreach ($news as $news_item): ?>

        <h3><?php echo $news_item['id']; ?></h3>
        <div class="main">
                <?php echo $news_item['promoCode']; ?>
        </div>
       

<?php endforeach; ?>