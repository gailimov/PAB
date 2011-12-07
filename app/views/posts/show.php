<section class="content">
    <article>
        <h1><a href="#" title="Посмотреть все посты за эту дату"><?= $this->getHelper('Date')->russianDate($post['created_at'], false) ?></a> &rarr; <?= $post['title'] ?></h1>
        <div class="post">
            <?= $post['content'] ?>
        </div>
        <div class="left">
            <?php $formattedTags = array(); foreach ($tags as $tag) : ?>
                <?php $formattedTags[] = '<a href="#" rel="tag" title="Посмотреть все посты с этой меткой">' . $tag['title'] . '</a>' ?>
            <?php endforeach ?>
            <?php echo implode(', ', $formattedTags) ?>
        </div>
        <div class="right">
            # <a href="<?= $this->getBaseUrl() ?>/posts/show/<?= $post['slug'] ?>" title="Постоянная ссылка"><?= $post['title'] ?></a>
        </div>
        <div class="clear"></div>
    </article>
</section> <!-- .content -->
<?php $this->renderPartial('posts/_comments', compact('comments')) ?>
<?php $this->renderPartial('posts/_commentForm') ?>
