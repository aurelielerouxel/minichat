DROP DATABASE IF EXISTS minichat;
CREATE DATABASE minichat CHARACTER SET utf8 COLLATE utf8_general_ci;
USE minichat;

DROP USER IF EXISTS 'Rakhlur'@'localhost';
CREATE USER 'Rakhlur'@'localhost';
GRANT ALL PRIVILEGES ON minichat.* To 'Rakhlur'@'localhost' IDENTIFIED BY 'lol';

CREATE TABLE user (
    id INT PRIMARY KEY AUTO_INCREMENT,
    -- user_last_name VARCHAR (50) NOT NULL,
    -- user_name VARCHAR (50) NOT NULL,
    user_pseudo VARCHAR (30) NOT NULL,
    -- user_email VARCHAR (50) NOT NULL UNIQUE,
    -- user_password VARCHAR (50) NOT NULL,
    user_message TEXT (100) NOT NULL
)
ENGINE = InnoDB;
-- INSERT INTO user (user_last_name, user_name, user_pseudo, user_email, user_password, user_message)
-- VALUES("Katty", "Penneflamm", "Katpe", "tunes@pas.fr", "2notre", "galaxie"),
    -- ("Aurélie", "Lerouxel", "Rakhlur", "mhonku@surdesglasson.com", "lol", "ranafouth");

INSERT INTO user (user_pseudo, user_message)
VALUES("Katpe", "galaxie"),
    ("Rakhlur", "ranafouth");


