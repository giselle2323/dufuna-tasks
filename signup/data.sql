CREATE DATABASE registration; 
USE registration; 
CREATE TABLE users ( 
id INT NOT NULL AUTO_INCREMENT, 
firstname VARCHAR(150) NOT NULL, 
lastname VARCHAR(150) NOT NULL,
email VARCHAR(150) NOT NULL,
 `password` VARCHAR(17) NOT NULL,
`confirmpassword` VARCHAR(17) NOT NULL,
telephone VARCHAR(19),
gender VARCHAR (9),
country VARCHAR (40),
created_date DATETIME, 
PRIMARY KEY ( id ) 
); 