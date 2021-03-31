CREATE DATABASE carousel_page;

  use carousel_page;

  CREATE TABLE users (
    id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    firstname VARCHAR(30) NOT NULL,
    password BINARY(64) NOT NULL,
    email VARCHAR(50) NOT NULL,
    date TIMESTAMP
  );