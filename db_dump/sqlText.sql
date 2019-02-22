create table news
(
  id SERIAL,
  title varchar(100),
  text TEXT,
  author varchar(100)
);

INSERT INTO news (title, text, author) VALUES ('First title', 'First news text', 'Evgenii');
INSERT INTO news (title, text, author) VALUES ('Second title', 'Second news text', 'Maria');
INSERT INTO news (title, text, author) VALUES ('Third title', 'Third news text', 'Anna');