<section class="content">
<?php foreach ($posts as $post) : ?>
    <article>
        <h1><a href="#" title="Посмотреть все посты за эту дату"><?= $this->getHelper('Date')->russianDate($post['created_at'], false) ?></a> &rarr; <a href="<?= $this->getConfig()->params['url'] ?>/posts/show/<?= $post['slug'] ?>"><?= $post['title'] ?></a></h1>
        <div class="post">
            <?= $post['content'] ?>
        </div>
        <div class="left">
            <a href="#" rel="tag" title="Посмотреть все посты с этой меткой">запись</a>, <a href="#" rel="tag" title="Посмотреть все посты с этой меткой">искусство</a>
        </div>
        <div class="right">
            <a href="#"><?= $post['comments_count'] ?> <?= $this->getHelper('Numbers')->getRussianNumberEndings($post['comments_count'], 'комментариев', 'комментарий', 'комментария') ?></a>
        </div>
        <div class="clear"></div>
    </article>
<?php endforeach ?>
    <div class="pagination">
        <ul>
            <li><a href="#" title="На первую страницу">&larr;</a></li>
            <li><a href="#">1</a></li>
            <li><a href="#">2</a></li>
            <li class="current">3</li>
            <li><a href="#">4</a></li>
            <li><a href="#">5</a></li>
            <li><a href="#" title="На последнюю страницу">&rarr;</a></li>
        </ul>
    </div>
</section> <!-- .content -->
