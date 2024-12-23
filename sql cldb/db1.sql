
CREATE DATABASE carelick_dir;
use carelick_dir;


create table carelick_users (

first_name VARCHAR(50) NOT NULL,
last_name VARCHAR (50) NOT NULL,
city VARCHAR (50) NOT NULL,
state VARCHAR (50) NOT NULL,
country VARCHAR (50) NOT NULL,
profession VARCHAR (50) NOT NULL,
email VARCHAR (50) NOT NULL
);

INSERT INTO carelick_users (first_name, last_name, city, state, country, profession, email) VALUES
(Farooq, Ahmed, Waterloo, Ontario, Canada, Banker, gmail),
(Obama, Barack, New_York, New_York, USA, President, outlook),
(Barry, Benson, Honeycomb, Pensilvannia, USA, Bee, yahoo), 
(Salman, Akhtar, Cambridge, Ontario, Canada, Entrepreneur, gmail);
