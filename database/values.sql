START TRANSACTION;
USE `cjam`;

DELETE FROM `cjam`.`cm_users`;

INSERT INTO `cjam`.`cm_users` (`name`, `user_id`, `email`, `password`, `privilege`, `phone`) VALUES ('Jean-Francois Ouellette', '819-623-3436', 'jfr.ouellette@gmail.com', MD5('supersecret'), 100, NULL);
INSERT INTO `cjam`.`cm_users` (`name`, `user_id`, `email`, `password`, `privilege`, `phone`) VALUES ('Martine Lemant', '514-203-2103', 'diane@lemant.com', MD5('supersecret'), 1, NULL);
INSERT INTO `cjam`.`cm_users` (`name`, `user_id`, `email`, `password`, `privilege`, `phone`) VALUES ('Montagne Douce', '+41797919660', 'jean@yves.com', MD5('supersecret'), 1, NULL);

COMMIT;