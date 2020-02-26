# I won't create any Database because it is supposed I already created one with heroku.

CREATE TABLE users
(
	id SERIAL NOT NULL PRIMARY KEY,
	username VARCHAR(50) NOT NULL UNIQUE,
	password VARCHAR(50) NOT NULL

);

CREATE TABLE user_information
(
	id SERIAL NOT NULL PRIMARY KEY,
	firstName VARCHAR(50) NOT NULL,
	lastName VARCHAR(50) NOT NULL,
	address VARCHAR (100) NOT NULL,
	city VARCHAR (50) NOT NULL,
	state VARCHAR (50) NOT NULL,
	zip INTEGER NOT NULL,
	phone INTEGER NOT NULL,
	email VARCHAR(100) NOT NULL

);

CREATE TABLE scriptures
( id SERIAL NOT NULL PRIMARY KEY,
  book VARCHAR(100) NOT NULL,
  chapter INTEGER NOT NULL,
  verse INTEGER NOT NULL,
  link VARCHAR(100) NOT NULL);
  
INSERT INTO scriptures ( book,
                         chapter, 
                         verse,
                         link) 
                VALUES ( '1 Nephi',
                         '3',
                         '7',
                         'https://www.churchofjesuschrist.org/study/scriptures/bofm/1-ne/3?lang=eng');

INSERT INTO scriptures ( book,
                         chapter, 
                         verse,
                         link) 
                VALUES ( 'Moses',
                         '1',
                         '39',
                         'https://www.churchofjesuschrist.org/study/scriptures/pgp/moses/1.39?lang=eng#p39');

INSERT INTO scriptures ( book,
                         chapter, 
                         verse,
                         link) 
                VALUES ( '2 Nephi',
                         '2',
                         '25',
                         'https://www.churchofjesuschrist.org/study/scriptures/bofm/2-ne/2.25?lang=eng#p25');
INSERT INTO scriptures ( book,
                         chapter, 
                         verse,
                         link) 
                VALUES ( 'Matthew',
                         '11',
                         '28',
                         'https://www.churchofjesuschrist.org/study/scriptures/nt/matt/11.28-30?lang=eng#p28');

INSERT INTO scriptures ( book,
                         chapter, 
                         verse,
                         link) 
                VALUES ( 'D&C',
                         '6',
                         '36',
                         'https://www.churchofjesuschrist.org/study/scriptures/dc-testament/dc/6.36?lang=eng#p36');
						 