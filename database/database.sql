-- SQL file to create database for CJAM case manager

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

-- Base de données: 'cjam_cm'

-- ----------------

--
-- Structure de la table 'cm_users'
--

DROP TABLE IF EXISTS cm_users;

CREATE TABLE cm_users (
	id INT(11) PRIMARY KEY AUTO_INCREMENT,
	firstname VARCHAR(32),
	lastname VARCHAR(32) NOT NULL,
	email VARCHAR(32)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ;

INSERT INTO cm_users VALUES (null, 'Jean', 'Lassy', 'jfr.ouellette@gmail.com');
INSERT INTO cm_users VALUES (null, 'Roger', 'Lamothe', 'roger@lamothe.com');
INSERT INTO cm_users VALUES (null, 'Jobin', 'Dupont', 'jobdup@lavie.ch');