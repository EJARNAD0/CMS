USE sample_cms;

DROP TABLE IF EXISTS `post`;
DROP TABLE IF EXISTS `post_types`;

CREATE TABLE `post` (
    `id` BIGINT(20) NOT NULL AUTO_INCREMENT,
    `post_type_id` INT(11) DEFAULT NULL,
    `post_status_id` INT(11) DEFAULT NULL,
    `post_title` TEXT COLLATE utf8mb4_general_ci DEFAULT NULL,
    `post_content` LONGTEXT COLLATE utf8mb4_general_ci DEFAULT NULL,
    `post_date` DATE DEFAULT NULL,
    `post_excerpt` TEXT COLLATE utf8mb4_general_ci DEFAULT NULL,
    `post_author_id` INT(11) DEFAULT NULL,
    PRIMARY KEY (`id`)
);

CREATE TABLE `post_types` (
    `id` INT(11) NOT NULL AUTO_INCREMENT,
    `post_type` VARCHAR(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
    PRIMARY KEY (`id`)
);
