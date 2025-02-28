
# Toys & Games Shop -- PLAYBOX
SHOW DATABASES;

CREATE TABLE playBoxManagers (
 playBoxManagerID     INT(11)       NOT NULL   AUTO_INCREMENT,
 emailAddress           VARCHAR(255)   NOT NULL   UNIQUE,
 password               VARCHAR(64)    NOT NULL,
 pronouns               VARCHAR(60)    NOT NULL,
 firstName              VARCHAR(60)    NOT NULL,
 lastName               VARCHAR(60)    NOT NULL,
 dateCreated            DATETIME       NOT NULL,
 PRIMARY KEY (playBoxManagerID)
);

SHOW TABLES;

SHOW CREATE TABLE playBoxManagers;

DESCRIBE playBoxManagers;

INSERT INTO playBoxManagers
(emailAddress, password, pronouns, firstName, lastName, dateCreated)
VALUES
('pokimist@playbox.com', SHA2('p0kib@ll', 256), 'She/Her', 'Misty', 'Ash', NOW());


INSERT INTO playBoxManagers
(emailAddress, password, pronouns, firstName, lastName, dateCreated)
VALUES
('itselena@playbox.com', SHA2('my@gentE0', 256), 'She/Her', 'Elena', 'Burke', NOW());


INSERT INTO playBoxManagers
(emailAddress, password, pronouns, firstName, lastName, dateCreated)
VALUES
('nealb@playbox.com', SHA2('ne@18ennett', 256), 'He/him', 'Neal', 'Bennett', NOW());


INSERT INTO playBoxManagers
(emailAddress, password, pronouns, firstName, lastName, dateCreated)
VALUES
('wintersmoz@playbox.com', SHA2('mozz@w1n', 256), 'He/him', 'Mozart', 'Winters', NOW());


SELECT * FROM playBoxManagers;


