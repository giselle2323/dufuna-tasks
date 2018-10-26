CREATE DATABASE registration; 
USE registration; 
CREATE TABLE users ( 
id INT NOT NULL AUTO_INCREMENT, 
Firstname VARCHAR(150) NOT NULL, 
Lastname VARCHAR(150) NOT NULL,
email VARCHAR(150) NOT NULL,
 `password` VARCHAR(17) NOT NULL,
`confirm password` VARCHAR(17) NOT NULL,
telephone TINYINT (15),
gender VARCHAR (9),
country VARCHAR (40),
created_date DATETIME, 
PRIMARY KEY ( id ) 
); 