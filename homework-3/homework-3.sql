CREATE TABLE language
(
    ID int not null auto_increment,
    NAME VARCHAR(100) NOT NULL,
    PRIMARY KEY (ID)
);

CREATE TABLE movie_title
(
    MOVIE_ID int not null,
    LANGUAGE_ID int not null,
    TITLE varchar(500) not null,
    PRIMARY KEY (MOVIE_ID, LANGUAGE_ID),
    FOREIGN KEY MT_MOVIE_ID (MOVIE_ID)
        REFERENCES movie(ID)
        ON UPDATE RESTRICT
        ON DELETE RESTRICT,
    FOREIGN KEY MT_LANGUAGE_ID (LANGUAGE_ID)
        REFERENCES language(ID)
        ON UPDATE RESTRICT
        ON DELETE RESTRICT
);

INSERT INTO language (ID, NAME)
VALUES (1, 'RU'),
       (2, 'EN'),
       (3, 'DE');
INSERT INTO movie_title (MOVIE_ID, LANGUAGE_ID, TITLE)
VALUES (1,1,'Терминатор'),
       (2,1,'Чужой'),
       (3,1,'Нечто'),
       (4,1, 'Сияние'),
       (5,1, 'Аватар'),
       (1,2,'The Terminator'),
       (2,2, 'Alien'),
       (3,2,'The Thing'),
       (4,2, 'The Shining'),
       (5,2,'Avatar'),
       (1,3, 'Terminator'),
       (2,3, 'Newcomer'),
       (3,3, 'Etwas'),
       (4,3, 'Leuchten'),
       (5,3, 'Avatar');

SELECT MOVIE_TITLE.title, movie.release_year, movie.rating, movie.LENGTH, movie.MIN_AGE, movie.RATING
from  (movie_title inner join movie on movie.id =  movie_title.MOVIE_ID)
where MOVIE_TITLE.LANGUAGE_ID = 1;

