CREATE TABLE news (
  id     bigint UNSIGNED AUTO_INCREMENT,
  title  varchar(100) NULL,
  text   text         NULL,
  author varchar(100) NULL,
  CONSTRAINT id
    UNIQUE (id)
);

INSERT INTO hw08.news (id, title, text, author) VALUES (1, 'First title', 'First news text', 'Evgenii');
INSERT INTO hw08.news (id, title, text, author) VALUES (2, 'Second title', 'Second news text', 'Maria');
INSERT INTO hw08.news (id, title, text, author) VALUES (3, 'Third title', 'Third news text', 'Anna');