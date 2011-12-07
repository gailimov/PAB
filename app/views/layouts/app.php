<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="<?= $this->getBaseUrl() ?>/public/css/style.css" media="all" />
        <title><?= $this->title ?></title>
    </head>
    <body>
        <div class="wrapper">
            <div class="header">
                <header class="title">
                    <h1><a href="<?= $this->getBaseUrl() ?>" title="На главную"><?= $this->getConfig()->params['title'] ?></a></h1>
                </header>
                <nav>
                    <ul>
                        <li><a href="<?= $this->getBaseUrl() ?>">Посты</a></li>
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
<!-- Отработало за <?php printf('%f', microtime(true) - \core\Registry::get('startTime')) ?> сек. Схавало памяти <?= round(memory_get_peak_usage() / (1024 * 1024), 2) ?> MB -->
