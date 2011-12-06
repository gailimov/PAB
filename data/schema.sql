-- Posts --
CREATE TABLE IF NOT EXISTS `posts` (
    `id` SMALLINT(5) AUTO_INCREMENT,
    `slug` VARCHAR(50) NOT NULL,
    `title` VARCHAR(100) NOT NULL,
    `content` MEDIUMTEXT NOT NULL,
    `created_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY (`id`),
    UNIQUE KEY (`slug`)
) ENGINE = MyISAM CHARACTER SET utf8 COLLATE utf8_general_ci;

-- Comments --
CREATE TABLE IF NOT EXISTS `comments` (
    `id` MEDIUMINT(7) AUTO_INCREMENT,
    `post_id` SMALLINT(5) UNSIGNED NOT NULL,
    `author` VARCHAR(50) NOT NULL,
    `url` VARCHAR(50),
    `content` TEXT NOT NULL,
    `created_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY (`id`),
    KEY (`post_id`)
) ENGINE = MyISAM CHARACTER SET utf8 COLLATE utf8_general_ci;

-- Tags --
CREATE TABLE IF NOT EXISTS `tags` (
    `id` SMALLINT(5) AUTO_INCREMENT,
    `title` VARCHAR(50) NOT NULL,
    PRIMARY KEY (`id`),
    UNIQUE KEY (`title`)
) ENGINE = MyISAM CHARACTER SET utf8 COLLATE utf8_general_ci;

-- Posts-tags --
CREATE TABLE IF NOT EXISTS `posts_tags` (
    `post_id` SMALLINT(5),
    `tag_id` SMALLINT(5),
    PRIMARY KEY (`post_id`, `tag_id`)
) ENGINE = MyISAM CHARACTER SET utf8 COLLATE utf8_general_ci;
