# Harshika Agrawal, IT202 & 004, Internet Applications, Phase 2, ha542@njit.edu

CREATE TABLE PlayboxCategories (
    PlayboxCategoryID   INT(11)        NOT NULL,
    PlayboxCategoryCode VARCHAR(10)    NOT NULL UNIQUE,
    PlayboxCategoryName VARCHAR(255)   NOT NULL,
    PlayboxShelfNumber  INT(3)         NOT NULL,
    DateCreated         DATETIME       NOT NULL,
    PRIMARY KEY (PlayboxCategoryID)
);

SELECT* FROM PlayboxCategories;

# SELECT DATABASE();
# SHOW TABLES;
# DELETE FROM PlayboxCategories WHERE PlayboxCategoryID = 100;
# DROP TABLE PlayboxCategories

INSERT INTO PlayboxCategories (PlayboxCategoryID, PlayboxCategoryCode, PlayboxCategoryName, PlayboxShelfNumber, DateCreated)
VALUES (100, 'BDG', 'Board Games', 1, NOW());

INSERT INTO PlayboxCategories (PlayboxCategoryID, PlayboxCategoryCode, PlayboxCategoryName, PlayboxShelfNumber, DateCreated)
VALUES (200, 'RCC', 'Remote Control Car', 2, NOW());

INSERT INTO PlayboxCategories (PlayboxCategoryID, PlayboxCategoryCode, PlayboxCategoryName, PlayboxShelfNumber, DateCreated)
VALUES (300, 'DOLL', 'Dollhouse', 3, NOW());

INSERT INTO PlayboxCategories (PlayboxCategoryID, PlayboxCategoryCode, PlayboxCategoryName, PlayboxShelfNumber, DateCreated)
VALUES (400, 'LEGO', 'Lego Set', 4, NOW());

INSERT INTO PlayboxCategories (PlayboxCategoryID, PlayboxCategoryCode, PlayboxCategoryName, PlayboxShelfNumber, DateCreated)
VALUES (500, 'PUZZ', 'Puzzle', 5, NOW());



