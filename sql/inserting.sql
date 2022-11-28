use store;


/*
inserting values into  category
*/
    
insert into category VALUES
(1, 'category1'),
(2, 'category2'),
(3, 'category3'),
(4, 'category4'),
(5, 'category5'),
(6, 'category6');



/*
inserting values into pictures
*/

insert into pictures(`picture_id`, `pic_name`, `price`, `description`, `height`, `width`,`image_path`,`privileges`) VALUES
(1,'picture1',10,'We share the best photos on the internet. Best prices and customer service!', 100,100,'grafiki/1.jpg','user'),
(2,'picture2',10,'We share the best photos on the internet. Best prices and customer service!', 200,200,'grafiki/2.jpg','admin'),
(3,'picture3',10,'We share the best photos on the internet. Best prices and customer service!', 600,600,'grafiki/3.jpg','user'),
(4,'picture4',10,'We share the best photos on the internet. Best prices and customer service!', 600,600,'grafiki/4.jpg','admin'),
(5,'picture5',10,'We share the best photos on the internet. Best prices and customer service!', 600,600,'grafiki/5.jpg','user'),
(6,'picture6',10,'We share the best photos on the internet. Best prices and customer service!', 600,600,'grafiki/6.jpg','admin'),
(7,'picture7',10,'We share the best photos on the internet. Best prices and customer service!', 600,600,'grafiki/7.jpg','user'),
(8,'picture8',10,'We share the best photos on the internet. Best prices and customer service!', 600,600,'grafiki/8.jpg','admin'),
(9,'picture9',10,'We share the best photos on the internet. Best prices and customer service!', 600,600,'grafiki/9.jpg','user'),
(10,'picture10',10,'We share the best photos on the internet. Best prices and customer service!', 600,600,'grafiki/10.jpg','user'),
(11,'picture11',10,'We share the best photos on the internet. Best prices and customer service!', 600,600,'grafiki/11.jpg','user'),
(12,'picture12',10,'We share the best photos on the internet. Best prices and customer service!', 600,600,'grafiki/12.jpg','admin'),
(13,'picture13',10,'We share the best photos on the internet. Best prices and customer service!', 600,600,'grafiki/13.jpg','user'),
(14,'picture14',10,'We share the best photos on the internet. Best prices and customer service!', 600,600,'grafiki/14.jpg','user'),
(15,'picture15',10,'We share the best photos on the internet. Best prices and customer service!', 600,600,'grafiki/15.jpg','admin');



/*
inserting values into users
*/
    
insert into users (`user_id`, `login`,`email`,`pass`,`fname`,`lname` ,`country` ,`town`,`street`,`house_nr`,`zipcode`,`privileges`) values 
(1,'login1','email1','pass1','fname1','lname1','country1','town1','street1','nr1','zipcode1','user'),
(2,'login2','email2','pass2','fname2','lname2','country2','town2','street2','nr2','zipcode2','user'),
(3,'login3','email3','pass3','fname3','lname3','country3','town3','street3','nr3','zipcode3','user'),
(4,'login4','email4','pass4','fname4','lname4','country4','town4','street4','nr4','zipcode4','user'),
(5,'login5','email5','pass5','fname5','lname5','country5','town5','street5','nr5','zipcode5','user'),
(6,'admin','admin@admin','$2y$10$L9OgOC4vt8f/shXpDUBOJ.xFX.WPhEFTClpaWKs/EOkZe/26oMgya','admin','admin','admin','admin','admin','admin','admin','admin');
-- password for admin is Admin123!!!!!!!!!!!!

/*
inserting values into privileges
*/
    
insert into all_privileges VALUES 
('user'),
('vip'),
('super_vip'),
('admin');



/*
inserting values into  users_privileges
*/
    
insert into order_info(`order_id`,`order_date`,`order_status`)VALUES
(1,'2022-10-11','done'),
(2,'2022-05-19','done'),
(3,'2021-12-23','done'),
(4,'2022-02-02','done');
