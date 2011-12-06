<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="<?= \core\Config::factory()->params['baseUrl'] ?>/public/css/style.css" media="all" />
        <title>Pretty Awesome Blog</title>
    </head>
    <body>
        <div class="wrapper">
            <div class="header">
                <header class="title">
                    <h1><a href="#" title="На главную">Pretty Awesome Blog</a></h1>
                </header>
                <nav>
                    <ul>
                        <li><a href="#">Посты</a></li>
                        <li><a href="#">Метки</a></li>
                    </ul>
                </nav>
            </div> <!-- .header -->
            <div class="clear"></div>
            <?= $content ?>
            <footer>
                &copy; 2011 &laquo;Pretty Awesome Blog&raquo;
            </footer>
        </div> <!-- .wrapper -->
    </body>
</html>
