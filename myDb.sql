# I won't create any Database because it is supposed I already created one with heroku.

CREATE TABLE login_credentials
(
	user_id SERIAL NOT NULL PRIMARY KEY,
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

CREATE TABLE membership
(
	id SERIAL NOT NULL PRIMARY KEY,
	userInformation_id INTEGER NOT NULL,
	loginCredentials_id INTEGER NOT NULL,
	membershipNumber_id INTEGER NOT NULL,
	create_date DATE NOT NULL,
	updated_date DATE NOT NULL

);
