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


CREATE TABLE generalCon
( id SERIAL NOT NULL PRIMARY KEY,
  author VARCHAR(100) NOT NULL,
  topicName VARCHAR(100) NOT NULL,
  year INTEGER NOT NULL,
  link VARCHAR(100) NOT NULL);

INSERT INTO generalCon ( author,
                         topicName, 
                         year,
                         link) 
                VALUES ( 'Elder Ulisses Soares',
                         'How Can I Understand?',
                         '2019',
                         'https://www.churchofjesuschrist.org/study/general-conference/2019/04/11soares?lang=eng');	

INSERT INTO generalCon ( author,
                         topicName, 
                         year,
                         link) 
                VALUES ( 'President M. Russell Ballard',
                         'The True, Pure, and Simple Gospel of Jesus Christ',
                         '2019',
                         'https://www.churchofjesuschrist.org/study/general-conference/2019/04/23ballard?lang=eng');	

INSERT INTO generalCon ( author,
                         topicName, 
                         year,
                         link) 
                VALUES ( 'Elder Neil L. Andersen',
                         'The Eye of Faith',
                         '2019',
                         'https://www.churchofjesuschrist.org/study/general-conference/2019/04/25andersen?lang=eng');	

INSERT INTO generalCon ( author,
                         topicName, 
                         year,
                         link) 
                VALUES ( 'Elder Jeffrey R. Holland',
                         'Behold the Lamb of God',
                         '2019',
                         'https://www.churchofjesuschrist.org/study/general-conference/2019/04/28holland?lang=eng');	

INSERT INTO generalCon ( author,
                         topicName, 
                         year,
                         link) 
                VALUES ( 'President Henry B. Eyring',
                         'The Power of Sustaining Faith',
                         '2019',
                         'https://www.churchofjesuschrist.org/study/general-conference/2019/04/34eyring?lang=eng');							 

CREATE TABLE ensignArti
( id SERIAL NOT NULL PRIMARY KEY,
  author VARCHAR(100) NOT NULL,
  topicName VARCHAR(100) NOT NULL,
  year INTEGER NOT NULL,
  link VARCHAR(200) NOT NULL);


INSERT INTO ensignArti ( author,
                         topicName, 
                         year,
                         link) 
                VALUES ( 'Sister Sharon Eubank',
                         'The Blessings of Church Membership',
                         '2020',
                         'https://www.churchofjesuschrist.org/study/ensign/2020/03/the-blessings-of-church-membership?lang=eng');

INSERT INTO ensignArti ( author,
                         topicName, 
                         year,
                         link) 
                VALUES ( 'President Thomas S. Monson,',
                         'The Word of Wisdom',
                         '2017',
                         'https://www.churchofjesuschrist.org/study/ensign/2017/02/october-2016-conference-notebook/the-word-of-wisdom?lang=eng');	

INSERT INTO ensignArti ( author,
                         topicName, 
                         year,
                         link) 
                VALUES ( 'President Russell M. Nelson',
                         'A Message of Gratitude and a Promise for the Women of the Church in 2019',
                         '2019',
                         'https://www.churchofjesuschrist.org/study/ensign/2019/02/a-message-of-gratitude-and-a-promise-for-the-women-of-the-church-in-2019?lang=eng');	

INSERT INTO ensignArti ( author,
                         topicName, 
                         year,
                         link) 
                VALUES ( 'President Thomas S. Monson',
                         'The Gift of Repentance',
                         '2018',
                         'https://www.churchofjesuschrist.org/study/ensign/2018/01/the-gift-of-repentance?lang=eng');	

INSERT INTO ensignArti ( author,
                         topicName, 
                         year,
                         link) 
                VALUES ( 'Elder Quentin L. Cook',
                         'Honoring the Sabbath',
                         '2016',
                         'https://www.churchofjesuschrist.org/study/ensign/2016/02/october-2015-conference-notebook/honoring-the-sabbath?lang=eng');							 

						 