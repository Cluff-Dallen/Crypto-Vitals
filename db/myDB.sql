DROP TABLE IF EXISTS users cascade;
DROP TABLE IF EXISTS favorites cascade;
DROP TABLE IF EXISTS transactions cascade;


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

/* Table to store data for each user's transactions */

CREATE TABLE transactions
(
	transaction_id SERIAL NOT NULL PRIMARY KEY,	
	emailOfThisTransaction VARCHAR(55) NOT NULL,
	transaction_asset VARCHAR(55) NOT NULL,
	transaction_date VARCHAR(55) NOT NULL,
	transaction_exchange VARCHAR(55) NOT NULL,
	transaction_amount decimal,
	transaction_type VARCHAR(10) NOT NULL
);

INSERT INTO transactions (emailOfThisTransaction, transaction_asset, transaction_date, transaction_exchange, transaction_amount, transaction_type) VALUES
			('cluffrdallen@gmail.com', 'bitcoin', '07/22/2021', 'Beaxy', 3001.97, 'BOUGHT'),
			('cluffrdallen@gmail.com', 'bitcoin', '04/05/2019', 'Beaxy', 5591.48, 'SOLD'),
			('testAccount@gmail.com', 'chainlink', '12/12/2016', 'Binance', 0.15, 'BOUGHT'),
			('cluffrdallen@gmail.com', 'XRP', '02/05/2017', 'Coinbase', 4.89, 'SOLD'),
		    ('cluffrdallen@gmail.com', 'litecoin', '02/04/2021', 'Coinbase', 4.89, 'SOLD');



INSERT INTO users (user_name, user_email, user_password) VALUES
			('cluffrdallen', 'cluffrdallen@gmail.com', 'HardPass'),
			('testAccount', 'testAccount@gmail.com', 'Password'),
			('userTwo', 'userTwo@yahoo.com', 'PasswordOne'),
			('userThree', 'userThree@protonmail.com', 'WeakPass');

INSERT INTO favorites (favorite_coingecko_id, emailOfThisFavorite) VALUES ('bitcoin', 'cluffrdallen@gmail.com'),('ethereum', 'cluffrdallen@gmail.com'),('ripple', 'sofia@gmail.com');

/* Display each table to ensure everything works as intended */

SELECT * FROM users;
SELECT * FROM favorites;
SELECT * FROM transactions;

