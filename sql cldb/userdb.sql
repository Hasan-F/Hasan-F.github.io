-- Drop database user_db;
CREATE DATABASE user_db;

USE user_db;

CREATE TABLE users (
    userId INT(11) PRIMARY KEY AUTO_INCREMENT NOT NULL,
    usersFirstName VARCHAR(255) NOT NULL,
	usersLastName VARCHAR(255) NOT NULL,
    usersEmail VARCHAR(255) NOT NULL UNIQUE,
    usersPwd VARCHAR(255) NOT NULL
    
);
	
ALTER TABLE users 
    ADD reset_token_hash VARCHAR(64) NULL DEFAULT NULL,
    ADD reset_token_expires_at DATETIME NULL DEFAULT NULL,
    ADD UNIQUE (reset_token_hash);


select * from users