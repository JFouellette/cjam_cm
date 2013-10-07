START TRANSACTION;
USE `cjam`;

INSERT INTO `cjam`.`cm_users` (`name`, `email`, `password`, `privilege`, `phone`) VALUES ('Jean-Francois Ouellette', 'jfr.ouellette@gmail.com', MD5('supersecret'), 100, '819-612-3120');
INSERT INTO `cjam`.`cm_users` (`name`, `email`, `password`, `privilege`, `phone`) VALUES ('Martine Lemant', 'diane@lemant.com', MD5('supersecret'), 1, '514-320-2012');
INSERT INTO `cjam`.`cm_users` (`name`, `email`, `password`, `privilege`, `phone`) VALUES ('Montagne Douce', 'jean@yves.com', MD5('supersecret'), 1, '+41797919660');

COMMIT;