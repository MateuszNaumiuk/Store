use store;
/*
creating indexes
*/

ALTER TABLE `users` ADD INDEX(`privileges`);
ALTER TABLE `category` ADD INDEX(`cat_name`);
ALTER TABLE `order_info` ADD INDEX(`user_id`);
ALTER TABLE `order_info` ADD INDEX(`picture_id`);
ALTER TABLE `pictures` ADD INDEX(`privileges`);
ALTER TABLE `pictures` ADD INDEX(`author_name`);


/*
creating references
*/

ALTER TABLE pictures ADD FOREIGN KEY (category) REFERENCES category(cat_name);

ALTER TABLE pictures ADD FOREIGN KEY (privileges) REFERENCES all_privileges(privileges);

ALTER TABLE order_info ADD FOREIGN KEY (user_id) REFERENCES users(user_id);

ALTER TABLE order_info ADD FOREIGN KEY (picture_id) REFERENCES pictures(picture_id);

ALTER TABLE users ADD FOREIGN KEY (privileges) REFERENCES all_privileges(privileges);

ALTER TABLE pictures ADD FOREIGN KEY (author_name) REFERENCES `authors`(author_name);


/* with restrictions on delete and update */ 

/*
ALTER TABLE pictures ADD FOREIGN KEY (category_id) REFERENCES category(category_id) ON DELETE RESTRICT ON UPDATE RESTRICT;
*/
