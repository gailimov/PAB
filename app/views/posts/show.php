<section class="content">
    <article>
        <h1><a href="#" title="Посмотреть все посты за эту дату"><?= $this->getHelper('Date')->russianDate($post['created_at'], false) ?></a> &rarr; <?= $post['title'] ?></h1>
        <div class="post">
            <?= $post['content'] ?>
        </div>
        <div class="left">
            <a href="#" rel="tag" title="Посмотреть все посты с этой меткой">запись</a>, <a href="#" rel="tag" title="Посмотреть все посты с этой меткой">искусство</a>
        </div>
        <div class="right">
            # <a href="<?= $this->getConfig()->params['url'] ?>/posts/show/<?= $post['slug'] ?>" title="Постоянная ссылка"><?= $post['title'] ?></a>
        </div>
        <div class="clear"></div>
    </article>
</section> <!-- .content -->
<section id="comments">
    <header>
        <h2>Комментарии (3) <sup><a href="#" title="RSS-лента">rss</a></sup></h2>
    </header>
    <article id="comment-1">
        <h3 class="left vcard"><a href="#comment-1" title="Постоянная ссылка">#1</a> <span class="fn"><a href="#" class="url">Вася Пупкин</a></span></h3>
        <div class="right">5 декабря 2011 г. в 20:34</div>
        <div class="clear"></div>
        <div class="comment">
            Даосизм, как следует из вышесказанного, ментально преобразует закон внешнего мира, хотя в официозе принято обратное. Даосизм осмысленно трансформирует здравый смысл, не учитывая мнения авторитетов. Суждение непредсказуемо. Современная критика принимает во внимание гедонизм, изменяя привычную реальность. Освобождение выводит мир, ломая рамки привычных представлений. Наряду с этим сомнение оспособляет гравитационный парадокс, не учитывая мнения авторитетов.<br />
Гетерономная этика преобразует типичный бабувизм, отрицая очевидное. Вещь в себе вырождена. Интересно отметить, что эклектика индуцирует гравитационный парадокс, при этом буквы А, В, I, О символизируют соответственно общеутвердительное, общеотрицательное, частноутвердительное и частноотрицательное суждения. Язык образов индуцирует сенсибельный мир, учитывая опасность, которую представляли собой писания Дюринга для не окрепшего еще немецкого рабочего движения.
        </div>
    </article>
    <article id="comment-2">
        <h3 class="left vcard"><a href="#comment-2" title="Постоянная ссылка">#2</a> <span class="fn">Маша</span></h3>
        <div class="right">5 декабря 2011 г. в 20:35</div>
        <div class="clear"></div>
        <div class="comment">
            Даосизм :)
        </div>
    </article>
    <article id="comment-3">
        <h3 class="left vcard"><a href="#comment-3" title="Постоянная ссылка">#3</a> <span class="fn"><a href="#" class="url">Петя</a></span></h3>
        <div class="right">5 декабря 2011 г. в 20:36</div>
        <div class="clear"></div>
        <div class="comment">
            Даосизм, как следует из вышесказанного, ментально преобразует закон внешнего мира, хотя в официозе принято обратное. Даосизм осмысленно трансформирует здравый смысл, не учитывая мнения авторитетов. Суждение непредсказуемо. Современная критика принимает во внимание гедонизм, изменяя привычную реальность. Освобождение выводит мир, ломая рамки привычных представлений. Наряду с этим сомнение оспособляет гравитационный парадокс, не учитывая мнения авторитетов.
        </div>
    </article>
</section> <!-- #comments -->
<section id="comment-form">
    <header>
        <h2>Оставить комментарий</h2>
    </header>
    <div class="error">
        <p>Необходимо исправить следующие ошибки:</p>
        <ul>
            <li>Введите текст комментария, пожалуйста</li>
            <li>Представьтесь, пожалуйста</li>
        </ul>
    </div>
    <form action="#" method="post">
        <p><textarea name="comment[content]" placeholder="Текст комментария *" required></textarea></p>
        <p>
            <input type="text" name="comment[author]" placeholder="Представьтесь *" required />
            <input type="url" name="comment[url]" placeholder="Блог" />
        </p>
        <p><input type="submit" value="Добавить комментарий" /></p>
    </form>
</section> <!-- #comment-form -->
