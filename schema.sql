CREATE TABLE notes(
    id int PRIMARY KEY AUTO_INCREMENT,
    codigo varchar(255) not null unique,
    title VARCHAR(255) NOT NULL,
    content TEXT NOT NULL,
    updated DATE NOT NULL
);