drop database garage;
create database garage;

use garage;

CREATE TABLE `cars` (
   `id` int UNIQUE NOT NULL AUTO_INCREMENT,
   `price` int,
   `name` varchar(40),
   `year_` varchar(50),
   `img` varchar(50),
   `desc_` varchar(250),
   PRIMARY KEY(id)
);

INSERT INTO cars VALUES(1, 200, 'Mercedes','2000','merc1.jpg', 'Rust bucket from Berlin.' );
INSERT INTO cars VALUES(2, 250, 'BMW',     '2004', 'bmw1.jpg', 'Apart from all the dents its a great a car.');
INSERT INTO cars VALUES(4, 350, 'Audi',    '2001', 'audi1.jpg', 'A bit better than the rest.');