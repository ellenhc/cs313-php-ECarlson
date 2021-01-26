CREATE TABLE users (
    userId int NOT NULL PRIMARY KEY,
    userFirstName varchar(255) NOT NULL,
    userLastName varchar(255) NOT NULL,
    userEmail varchar(255) NOT NULL,
    userPassword varchar(255) NOT NULL
);

CREATE TABLE categories (
    categoryId int NOT NULL PRIMARY KEY,
    categoryName varchar(255) NOT NULL
);

INSERT INTO categories (categoryId, categoryName) VALUES
(1, 'Donations'),
(2, 'Education'),
(3, 'Entertainment'),
(4, 'Food'),
(5, 'Health'),
(6, 'Housing'),
(7, 'Personal'),
(8, 'Pets'),
(9, 'Savings'),
(10, 'Transportation');