USE `jetbrains`;

CREATE TABLE `country` (
  `country_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  `abbreviation` varchar(2) NOT NULL,
  PRIMARY KEY (`country_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

CREATE TABLE `city` (
  `city_id` int(11) NOT NULL,
  `name` varchar(45) NOT NULL,
  `country_id` int(11) NOT NULL,
  PRIMARY KEY (`city_id`),
  KEY `FK_city_country_idx` (`country_id`),
  CONSTRAINT `FK_city_country` FOREIGN KEY (`country_id`) REFERENCES `country` (`country_id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `person` (
  `person_id` int(11) NOT NULL,
  `name` varchar(45) NOT NULL,
  `city_id` int(11) DEFAULT NULL,
  `nationality_country_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`person_id`),
  KEY `FK_person_city_idx` (`city_id`),
  KEY `FK_person_country_nationality_idx` (`nationality_country_id`),
  CONSTRAINT `FK_person_city` FOREIGN KEY (`city_id`) REFERENCES `city` (`city_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `FK_person_country_nationality` FOREIGN KEY (`nationality_country_id`) REFERENCES `country` (`country_id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


INSERT INTO country (country_id, name, abbreviation) VALUES (1, 'Belgium', 'BE');
INSERT INTO country (country_id, name, abbreviation) VALUES (2, 'The Netherlands', 'NL');
INSERT INTO country (country_id, name, abbreviation) VALUES (3, 'Spain', 'ES');
INSERT INTO country (country_id, name, abbreviation) VALUES (4, 'Sweden', 'SE');
INSERT INTO country (country_id, name, abbreviation) VALUES (5, 'Russia', 'RU');
INSERT INTO country (country_id, name, abbreviation) VALUES (6, 'Germany', 'DE');


INSERT INTO city (city_id, name, country_id) VALUES (1, 'Antwerp', 1);
INSERT INTO city (city_id, name, country_id) VALUES (2, 'St. Petersburg', 5);
INSERT INTO city (city_id, name, country_id) VALUES (3, 'Munich', 6);
INSERT INTO city (city_id, name, country_id) VALUES (4, 'Malaga', 3);

INSERT INTO person (person_id, name, city_id, nationality_country_id) VALUES (1, 'Maarten', 1, 1);
INSERT INTO person (person_id, name, city_id, nationality_country_id) VALUES (2, 'Mikhail', 2, 2);
INSERT INTO person (person_id, name, city_id, nationality_country_id) VALUES (3, 'Hadi', 4, 4);
