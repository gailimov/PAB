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
