create database if not EXISTS store;
use store;

    /*
    creating category
    */

create table if not EXISTS category (
    category_id int AUTO_INCREMENT not null,
    cat_name varchar(255) not null,
    PRIMARY KEY (category_id)
);

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
    creating pictures
    */
    
create table if not EXISTS pictures (
    picture_id int AUTO_INCREMENT not null,
    pic_name varchar(255) not null,
    price double unsigned,
    description text,
    category_id int,
    height int unsigned,
    width int unsigned,
    PRIMARY KEY (picture_id)
);

/*
    inserting values into pictures
    */
    
    insert into pictures(`picture_id`, `pic_name`, `price`, `description`, `height`, `width`) VALUES
(1,'picture1',10,'We share the best photos on the internet. Best prices and customer service!', 600,600),
(2,'picture2',10,'We share the best photos on the internet. Best prices and customer service!', 600,600), (3,'picture3',10,'We share the best photos on the internet. Best prices and customer service!', 600,600),
(4,'picture4',10,'We share the best photos on the internet. Best prices and customer service!', 600,600),
(5,'picture5',10,'We share the best photos on the internet. Best prices and customer service!', 600,600),
(6,'picture6',10,'We share the best photos on the internet. Best prices and customer service!', 600,600),
(7,'picture7',10,'We share the best photos on the internet. Best prices and customer service!', 600,600),
(8,'picture8',10,'We share the best photos on the internet. Best prices and customer service!', 600,600),
(9,'picture9',10,'We share the best photos on the internet. Best prices and customer service!', 600,600),
(10,'picture10',10,'We share the best photos on the internet. Best prices and customer service!', 600,600),
(11,'picture12',10,'We share the best photos on the internet. Best prices and customer service!', 600,600),
(12,'picture13',10,'We share the best photos on the internet. Best prices and customer service!', 600,600),
(13,'picture14',10,'We share the best photos on the internet. Best prices and customer service!', 600,600),
(14,'picture15',10,'We share the best photos on the internet. Best prices and customer service!', 600,600),
(15,'picture1',10,'We share the best photos on the internet. Best prices and customer service!', 600,600);


	/*
  creating users
    */
    
create table if not EXISTS users (
    user_id int AUTO_INCREMENT not null,
    login varchar(255),
    email varchar(255),
   	pass varchar(255),
    fname varchar(255),
    lname varchar(255),
    country varchar(255),
    town varchar(255),
    street varchar(255),
    house_nr varchar(255),
    zipcode varchar(255),
    user_privileges int,
    PRIMARY KEY(user_id)
    );
    
        	/*
  inserting values into  users
    */
    
insert into users (`user_id`, `login`,`email`,`pass`,`fname`,`lname` ,`country` ,`town`,`street`,`house_nr`,`zipcode`) values 
(1,'login1','email1','pass1','fname1','lname1','country1','town1','street1','nr1','zipcode1'),
(2,'login2','email2','pass2','fname2','lname2','country2','town2','street2','nr2','zipcode2'),
(3,'login3','email3','pass3','fname3','lname3','country3','town3','street3','nr3','zipcode3'),
(4,'login4','email4','pass4','fname4','lname4','country4','town4','street4','nr4','zipcode4'),
(5,'login5','email5','pass5','fname5','lname5','country5','town5','street5','nr5','zipcode5');

    /*
    creating users_privileges
    */


create table  if not EXISTS users_privileges (
    user_privileges int AUTO_INCREMENT not null,
    type varchar(30),
    PRIMARY KEY (user_privileges)
);

    	/*
  inserting values into  users_privileges
    */
    

insert into users_privileges VALUES 
(1,'type1'),
(2,'type2'),
(3,'type3'),
(4,'type4'),
(5,'type5');

	/*
    creating users_privileges
    */

create table if not EXISTS order_info (
    order_id int AUTO_INCREMENT not null,
    user_id int,
    picture_id int,
    order_date date,
    quantity int,
    order_status varchar(20),
    PRIMARY KEY (order_id)
    );
    
    	/*
  inserting values into  users_privileges
    */
    
insert into order_info(`order_id`,`order_date`,`quantity`,`order_status`)VALUES
(1,'2022-10-11',24,'done'),
(2,'2022-05-19',12,'done'),
(3,'2021-12-23',44,'done'),
(4,'2022-02-02',231,'done');

    