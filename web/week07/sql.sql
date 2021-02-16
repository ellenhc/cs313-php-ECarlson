CREATE TABLE users (
    userId SERIAL PRIMARY KEY NOT NULL, 
    username varchar(255) NOT NULL, 
    userPassword varchar(255) NOT NULL
);