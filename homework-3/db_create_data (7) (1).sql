INSERT INTO director (ID, NAME)
VALUES (1, 'Джеймс Кэмерон'),
       (2, 'Ридли Скотт'),
       (3, 'Джон Карпентер'),
       (4, 'Стэнли Кубрик');


INSERT INTO actor (ID, NAME)
VALUES (1, 'Арнольд Шварценеггер'),
       (2, 'Майкл Бин'),
       (3, 'Линда Хэмилтон'),
       (4, 'Сигурни Уивер'),
       (5, 'Том Скеррит'),
       (6, 'Иэн Холм'),
       (7, 'Курт Рассел'),
       (8, 'Кит Дэвид'),
       (9, 'Уилфорд Бримли'),
       (10, 'Джек Николсон'),
       (11, 'Сэм Уортингтон'),
       (12, 'Зои Салдана');


INSERT INTO movie (ID, RELEASE_YEAR, LENGTH, MIN_AGE, RATING, DIRECTOR_ID)
VALUES (1, 1984, 108, 16, 8.0, 1),
       (2,  1979, 116, 16, 8.1, 2),
       (3,  1982, 109, 16, 7.9, 3),
       (4,  1982, 144, 18, 7.8, 4),
       (5,  2009, 162, 12, 7.9, 1);



INSERT INTO movie_actor (MOVIE_ID, ACTOR_ID)
VALUES (1, 1),
       (1, 2),
       (1, 3),
       (2, 4),
       (2, 5),
       (2, 6),
       (3, 7),
       (3, 8),
       (3, 9),
       (4, 10),
       (5, 11),
       (5, 12),
       (5, 4);