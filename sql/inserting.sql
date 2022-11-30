use store;


/*
inserting values into  category
*/
    
insert into category VALUES
('FullHD'),
('Pejzaz'),
('Portret'),
('Abstrakcja'),
('Krajobraz');


/*
inserting values into users
*/
    
insert into users (`user_id`, `login`,`email`,`pass`,`fname`,`lname` ,`country` ,`town`,`street`,`house_nr`,`zipcode`,`privileges`) values 
(1,'login1','email1','pass1','fname1','lname1','country1','town1','street1','nr1','zipcode1','user'),
(2,'login2','email2','pass2','fname2','lname2','country2','town2','street2','nr2','zipcode2','user'),
(3,'login3','email3','pass3','fname3','lname3','country3','town3','street3','nr3','zipcode3','user'),
(4,'user','user@user','$2y$10$NyeOS9GGkOQpNNes047YdOvBqVCWjvxmJdII3LVClxmkrYLVbrK6G','user','user','user','user','user','user','user','user'),
-- password for user is User1234!!!!!!!!!!!!
(5,'admin','admin@admin','$2y$10$L9OgOC4vt8f/shXpDUBOJ.xFX.WPhEFTClpaWKs/EOkZe/26oMgya','admin','admin','admin','admin','admin','admin','admin','admin');
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

/*
inserting values into pictures
*/

insert into authors VALUES
('Andrew Tate'),
('Andrzej Tatowski'),
('Alejandro Tateviz'),
('Ondreje Tateova'),
('Arjantin Telek');




insert into pictures(`picture_id`, `pic_name`, `price`, `description`, `width`, `height`, `image_path`, `privileges`,`category`) VALUES
(1,'Howling',8,'Wolf howling at moon!', 1920,1080,'grafiki/1.jpg','user','FullHD'),
(2,'Stand',12,'Man wathing stars!', 1440,900,'grafiki/2.jpg','admin','Portret'),
(3,'Mountains',20,'Beautiful mountain!', 1600,900,'grafiki/3.jpg','user','Krajobraz'),
(4,'Sunset',40,'Sunset!', 1600,900,'grafiki/4.jpg','admin','Pejzaz'),
(5,'Sunset man',5,'Man wathing sunset!', 1440,900,'grafiki/5.jpg','user','Portret'),
(6,'SpoderMan',100,'Spoderman watching city!', 1920,1080,'grafiki/6.jpg','admin','Abstrakcja'),
(7,'Nebula',63,'Giant gas cloud!', 1440,900,'grafiki/7.jpg','user','Abstrakcja'),
(8,'Sandy',15,'Desert in night!', 1600,900,'grafiki/8.jpg','admin','Pejzaz'),
(9,'Skull',99,'Very intelligent skull!', 1600,900,'grafiki/9.jpg','user','Abstrakcja'),
(10,'Hellfire',84,'Hellgate!', 800,600,'grafiki/10.jpg','user','Abstrakcja'),
(11,'The nights',65,'Halloween is comming!', 640,480,'grafiki/11.jpg','user','Abstrakcja'),
(12,'I hate math',9,'I really hate maths!', 1440,900,'grafiki/12.jpg','admin','Abstrakcja'),
(13,'Best Friends',38,'Just some friends!', 600,600,'grafiki/13.jpg','user','Portret'),
(14,'Book worm',55,'Reading books is good!', 1920,1080,'grafiki/14.jpg','user','FullHD'),
(15,'Standing bookwarm',17,'Standing book!', 600,600,'grafiki/15.jpg','admin','Abstrakcja');
