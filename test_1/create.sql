CREATE TABLE `users` (
  `id`         INT(11) NOT NULL AUTO_INCREMENT,
  `name`       VARCHAR(255) DEFAULT NULL,
  `gender`     INT(11) NOT NULL COMMENT '0 - не указан, 1 - мужчина, 2 - женщина.',
  `birth_date` INT(11) NOT NULL COMMENT 'Дата в unixtime.',
  PRIMARY KEY (`id`)
);

ALTER TABLE users ADD INDEX `IDX1_BIRTH_DATE` (`birth_date`);

CREATE TABLE `phone_numbers` (
  `id`      INT(11) NOT NULL AUTO_INCREMENT,
  `user_id` INT(11) NOT NULL,
  `phone`   VARCHAR(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
);

ALTER TABLE phone_numbers ADD INDEX `IDX1_USER_ID` (`user_id`);