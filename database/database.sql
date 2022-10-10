CREATE DATABASE IF NOT EXISTS `remember_her`;

CREATE TABLE Killer (
    `killer_id` INT(11) NOT NULL AUTO_INCREMENT , 
    `relationship` VARCHAR(255) NOT NULL,
    PRIMARY KEY (`killer_id`)
) ENGINE = InnoDB character set=utf8; 

CREATE TABLE Crime (
    `crime_id` int(11) NOT NULL AUTO_INCREMENT,
    `crime_type` varchar(255) NOT NULL,
    PRIMARY KEY (`crime_id`)
) ENGINE=InnoDB character set=utf8;

CREATE TABLE Sources (
    `sources_id` int(11) NOT NULL AUTO_INCREMENT,
    `source_1` varchar(255) NOT NULL,
    `source_2` varchar(255),
    `source_3` varchar(255),
    `source_4` varchar(255),
    `source_5` varchar(255),
    PRIMARY KEY (`sources_id`)
) ENGINE=InnoDB character set=utf8;

CREATE TABLE Victims (
    `post_creation_date` ,---
    `victim_id` int(11) NOT NULL AUTO_INCREMENT,

    --------------------- The victim -------------------------
    `first_name` varchar(255) NOT NULL,
    `last_name` varchar(255) NOT NULL,
    `age` int(2) NOT NULL, 
    `country_origin` varchar(255) NOT NULL,
    `photo` varchar(255) NOT NULL,

    --------------------- The crime -------------------------
    `crime_type` INT, -- Foreign key
    `crime_tool` varchar(255) NOT NULL, 
    `country_crime` varchar(255) NOT NULL, 
    `date_of_death` int(4) NOT NULL,
    `killer` INT, -- Foreign key

    --------------------- The story -------------------------
    `story` TEXT NOT NULL,
    `sources` INT, -- Foreign key

    --------------------- keys -------------------------
    PRIMARY KEY (`victim_id`),
    INDEX USING BTREE (first_name), -- logical key

    -- link other tables to this one (many to one)
    CONSTRAINT FOREIGN KEY (`crime_type`)
        REFERENCES Crime (`crime_id`)
        ON DELETE CASCADE ON UPDATE CASCADE,
    
    CONSTRAINT FOREIGN KEY (`killer`)
        REFERENCES Killer (`killer_id`)
        ON DELETE CASCADE ON UPDATE CASCADE,

    CONSTRAINT FOREIGN KEY (`sources`)
        REFERENCES Sources (`sources_id`)
        ON DELETE CASCADE ON UPDATE CASCADE,

) ENGINE=InnoDB character set=utf8;

CREATE TABLE Admins (
    `admin_id` int(11) NOT NULL AUTO_INCREMENT,
    `username` varchar(255) NOT NULL,
    `password` varchar(255) NOT NULL,
    `email` varchar(255) NOT NULL,
    `location` varchar(255) NOT NULL, -- get automatically using js
    `admin` Binary,
    PRIMARY KEY (`admin_id`)
) ENGINE=InnoDB character set=utf8;