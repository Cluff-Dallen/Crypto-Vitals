DROP TABLE IF EXISTS users cascade;
DROP TABLE IF EXISTS favorites cascade;


/* Table to store data for each user */

CREATE TABLE users
(
	
	/*user_id SERIAL NOT NULL PRIMARY KEY, */
	user_email VARCHAR(55) NOT NULL PRIMARY KEY,
	user_name VARCHAR(55) NOT NULL,
	user_password VARCHAR(55) NOT NULL
);

/* Table to store data for each user's favorites*/

CREATE TABLE favorites
(
	favorite_id SERIAL NOT NULL PRIMARY KEY,	
	favorite_coingecko_id VARCHAR(55) NOT NULL UNIQUE,
	emailOfThisFavorite VARCHAR(55) NOT NULL
);


INSERT INTO users (user_name, user_email, user_password) VALUES
			('cluffrdallen', 'cluffrdallen@gmail.com', 'HardPass'),
			('userOne', 'userOne@gmail.com', 'Password#4321'),
			('userTwo', 'userTwo@yahoo.com', 'Password'),
			('userThree', 'userThree@protonmail.com', 'WeakPass');

INSERT INTO favorites (favorite_coingecko_id, emailOfThisFavorite) VALUES ('bitcoin', 'cluffrdallen@gmail.com'),('ethereum', 'cluffrdallen@gmail.com'),('ripple', 'sofia@gmail.com');

/* Display each table to ensure everything works as intended */

SELECT * FROM users;
SELECT * FROM favorites;
