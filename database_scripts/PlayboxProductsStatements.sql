# Harshika Agrawal, IT202 & 004, Internet Applications, Phase 2, ha542@njit.edu

CREATE TABLE PlayboxProducts (
    PlayboxProductID     INT(11)        NOT NULL,
    PlayboxProductCode   VARCHAR(10)    NOT NULL UNIQUE,
    PlayboxProductName   VARCHAR(255)   NOT NULL,
    PlayboxDescription   TEXT           NOT NULL,
    PlayboxModel         VARCHAR(25)    NOT NULL,
    PlayboxCategoryID    INT(11)        NOT NULL,
    PlayboxWholesalePrice DECIMAL(10,2) NOT NULL,
    PlayboxListPrice     DECIMAL(10,2)  NOT NULL,
    DateCreated          DATETIME       NOT NULL,
    PRIMARY KEY (PlayboxProductID)
);
SELECT * FROM PlayboxProducts;

# DELETE FROM PlayboxProducts WHERE PlayboxCategoryID = 100;

INSERT INTO PlayboxProducts (PlayboxProductID, PlayboxProductCode, PlayboxProductName, PlayboxDescription, PlayboxModel, PlayboxCategoryID, PlayboxWholesalePrice, PlayboxListPrice, DateCreated)
VALUES
    (101, 'MONO', 'Monopoly Classic Board Game', 'Monopoly is a classic board game where players buy, sell, and trade properties. It is a fun, competitive game for friends and family.', 'Monopoly Classic', 100, 10.00, 19.99, NOW()),
    (102, 'CATAN', 'Catan - Trade Build Settle', 'Catan is a strategic game of resource management and settlement building. Players compete to build settlements and cities on the island of Catan.', 'Catan Classic', 100, 25.00, 49.99, NOW()),
    (103, 'SCRAB', 'Scrabble Classic Game', 'Scrabble is a word game where players create words from letter tiles. It is an educational game that is also fun for the entire family.', 'Scrabble Classic', 100, 9.50, 19.99, NOW());

INSERT INTO PlayboxProducts (PlayboxProductID, PlayboxProductCode, PlayboxProductName, PlayboxDescription, PlayboxModel, PlayboxCategoryID, PlayboxWholesalePrice, PlayboxListPrice, DateCreated)
VALUES
    (201, 'NQD', 'NQD Remote Control Formula 1 Racing Car', 'The NQD F1 Racing Car features a sleek design and high-speed racing capabilities. It is perfect for enthusiasts of remote control racing cars.', 'NQD Formula 1', 200, 35.00, 69.99, NOW()),
    (202, 'TERRA', 'TerraFury RC Car (F1 Style)', 'The TerraFury RC car combines high-speed performance with off-road durability. It mimics the sleek design of an F1 car for thrilling races.', 'F1 TerraFury', 200, 45.00, 89.99, NOW()),
    (203, 'RAZOR', 'Razor Ground Force Drifter Electric F1 Go-Kart', 'The Razor Ground Force Drifter is an electric go-kart designed for drifting. It combines F1 aesthetics and performance for fun and exciting rides.', 'Razor Drifter', 200, 200.00, 399.99, NOW());

INSERT INTO PlayboxProducts (PlayboxProductID, PlayboxProductCode, PlayboxProductName, PlayboxDescription, PlayboxModel, PlayboxCategoryID, PlayboxWholesalePrice, PlayboxListPrice, DateCreated)
VALUES
    (301, 'BARBIE', 'Barbie Dreamhouse Dollhouse', 'The Barbie Dreamhouse has three floors with seven rooms and accessories. It encourages imaginative storytelling with Barbie and friends.', 'Dreamhouse', 300, 85.00, 179.99, NOW()),
    (302, 'PINKMAN', 'KidKraft Wooden Pink Mansion Dollhouse', 'The KidKraft Pink Mansion Dollhouse features 3 floors with elegant furniture. It is ideal for fostering creative play and storytelling.', 'Pink Mansion', 300, 115.00, 229.99, NOW()),
    (303, 'MELVIC', 'Melissa & Doug Wooden Victorian Dollhouse', 'The Melissa & Doug Victorian Wooden Dollhouse is crafted from wood and includes 11 pieces of furniture. It is perfect for hours of imaginative play.', 'Victorian Dollhouse', 300, 95.00, 159.99, NOW());

INSERT INTO PlayboxProducts (PlayboxProductID, PlayboxProductCode, PlayboxProductName, PlayboxDescription, PlayboxModel, PlayboxCategoryID, PlayboxWholesalePrice, PlayboxListPrice, DateCreated)
VALUES
    (401, 'LEGOWAR', 'LEGO Star Wars Millennium Falcon', 'This LEGO Star Wars Millennium Falcon set lets you build the iconic ship. It is perfect for fans and collectors alike.', 'Millennium Falcon', 400, 150.00, 199.99, NOW()),
    (402, 'LEGOCOAST', 'LEGO Creator Expert Roller Coaster', 'Build a fully functional roller coaster with this LEGO set. It includes a lift and track for realistic fun.', 'Roller Coaster', 400, 280.00, 379.99, NOW()),
    (403, 'LEGOFRIEN', 'LEGO Friends Central Perk Set', 'Recreate Central Perk café from Friends with this LEGO set. It features mini-figures and a detailed café interior.', 'Central Perk', 400, 55.00, 89.99, NOW());

INSERT INTO PlayboxProducts (PlayboxProductID, PlayboxProductCode, PlayboxProductName, PlayboxDescription, PlayboxModel, PlayboxCategoryID, PlayboxWholesalePrice, PlayboxListPrice, DateCreated)
VALUES
    (501, 'RUBIK', 'Rubik’s Cube', 'This 3x3 Rubik’s Cube is a classic puzzle. It has smooth rotation and vibrant colors, perfect for puzzle lovers.', 'Speed 3x3 Cube', 500, 6.00, 12.99, NOW()),
    (502, 'RAVENS', 'Ravensburger 1000-Piece Puzzle', 'This Ravensburger 1000-piece puzzle features beautiful imagery. It Is a challenging puzzle for all skill levels.', '1000-Piece Puzzle', 500, 10.00, 19.99, NOW()),
    (503, '3DPUZ', '3D Puzzle - Eiffel Tower', 'Build a detailed 3D replica of the Eiffel Tower with this challenging puzzle. It is perfect for collectors and puzzle fans.', 'Eiffel Tower 3D', 500, 15.00, 25.99, NOW());
