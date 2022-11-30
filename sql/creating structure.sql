create database if not EXISTS store;
use store;

    /*
    creating category
    */

create table if not EXISTS category (
    cat_name varchar(255) not null,
    PRIMARY KEY (cat_name)
);

    /*
    creating pictures
    */
    
create table if not EXISTS pictures (
    picture_id int AUTO_INCREMENT not null,
    pic_name varchar(255) not null,
    price double unsigned,
    description text,
    height int unsigned,
    width int unsigned,
    image_path VARCHAR(255),
    privileges varchar(64),
    category varchar(255),
    author_name varchar(255),
    PRIMARY KEY (picture_id)
);

create table if not EXISTS authors (
    author_name varchar(255) not null,
    PRIMARY KEY (author_name)
);


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
    birthDate date,
    phoneNumber varchar(64),
    country varchar(255),
    town varchar(255),
    street varchar(255),
    house_nr varchar(255),
    zipcode varchar(255),
    privileges varchar(255),
    PRIMARY KEY(user_id)
    );


    /*
    creating users_privileges
    */


create table  if not EXISTS all_privileges (
    privileges varchar(255) not null,
    PRIMARY KEY (privileges)
);

	/*
    creating users_privileges
    */

create table if not EXISTS order_info (
    order_id int AUTO_INCREMENT not null,
    user_id int,
    picture_id int,
    order_date date,
    order_status varchar(20),
    fname varchar(255),
    lname varchar(255),
    phone varchar(255),
    PRIMARY KEY (order_id)
    );
    
