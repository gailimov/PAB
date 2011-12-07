<section id="comments">
    <header>
        <h2>Комментарии (<?= count($comments) ?>) <sup><a href="#" title="RSS-лента">rss</a></sup></h2>
    </header>
<?php if (count($comments) < 1) : ?>
    <article>
        <p>Комментариев нет</p>
    </article>
<?php else : $i = 0; foreach ($comments as $comment) : $i++ ?>
    <article id="comment-<?= $comment['id'] ?>">
        <h3 class="left vcard">
            <a href="#comment-<?= $comment['id'] ?>" title="Постоянная ссылка">#<?= $i ?></a>
            <span class="fn">
            <?php if (!empty($comment['url'])) : ?>
                <a href="<?= $comment['url'] ?>" class="url"><?= $comment['author'] ?></a>
            <?php else : ?>
                <?= $comment['author'] ?>
            <?php endif ?>
            </span>
        </h3>
        <div class="right"><?= $this->getHelper('Date')->russianDate($comment['created_at']) ?></div>
        <div class="clear"></div>
        <div class="comment">
            <?= $comment['content'] ?>
        </div>
    </article>
<?php endforeach; endif ?>
</section> <!-- #comments -->
