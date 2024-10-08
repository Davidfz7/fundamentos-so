-- DROP DATABASE IF EXISTS forlifeDB;
-- CREATE DATABASE forlifeDB;
-- DROP USER IF EXISTS 'david'@'localhost';
-- CREATE USER 'david'@'localhost' IDENTIFIED BY '1234';
-- GRANT ALL PRIVILEGES ON forlifeDB.* TO 'david'@'localhost';
-- FLUSH PRIVILEGES;

USE forlifeDB;
DROP TABLE IF EXISTS user;
CREATE TABLE user(
    id INT PRIMARY KEY AUTO_INCREMENT,
    uusername VARCHAR(255) NOT NULL UNIQUE,
    uname VARCHAR(255) NOT NULL,
    ufirstsurname VARCHAR(255) NOT NULL,
    usecondsurname VARCHAR(255) NOT NULL, 
    upassword VARCHAR(50) NOT NULL
)ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb4;

DROP TABLE IF EXISTS client;
CREATE TABLE client(
    cid INT PRIMARY KEY AUTO_INCREMENT,
    cname VARCHAR(255) NOT NULL,
    cfirstsurname VARCHAR(255) NOT NULL,
    csecondsurname VARCHAR(255) NOT NULL,
    cpassword VARCHAR(50) NOT NULL
)ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb4;

INSERT INTO client(cname, cfirstsurname, csecondsurname, cpassword)
VALUES
    ('Jose', 'Mora', 'Lopez', '1234'),
    ('Alejandro', 'Alvarado', 'Sanchez', '1234');

INSERT INTO user(uusername, uname, ufirstsurname, usecondsurname, upassword)
VALUES 
    ('Paipex', 'Felipe', 'Jimenez', 'Chavarria', '1234');
