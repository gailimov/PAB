<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="<?= $this->getConfig()->params['url'] ?>/public/css/style.css" media="all" />
        <title><?= $this->title ?></title>
    </head>
    <body>
        <div class="wrapper">
            <div class="header">
                <header class="title">
                    <h1><a href="<?= $this->getConfig()->params['url'] ?>" title="На главную"><?= $this->getConfig()->params['title'] ?></a></h1>
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
                &copy; <?= date('Y') ?> &laquo;<?= $this->getConfig()->params['title'] ?>&raquo;
            </footer>
        </div> <!-- .wrapper -->
    </body>
</html>
