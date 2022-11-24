use store;
/*
creating indexes
*/

ALTER TABLE `users` ADD INDEX(`privileges`);
ALTER TABLE `category` ADD INDEX(`category_id`);
ALTER TABLE `order_info` ADD INDEX(`user_id`);
ALTER TABLE `order_info` ADD INDEX(`picture_id`);
ALTER TABLE `pictures` ADD INDEX(`privileges`);


/*
creating references
*/

ALTER TABLE pictures ADD FOREIGN KEY (category_id) REFERENCES category(category_id);

ALTER TABLE pictures ADD FOREIGN KEY (privileges) REFERENCES all_privileges(privileges);

ALTER TABLE order_info ADD FOREIGN KEY (user_id) REFERENCES users(user_id);

ALTER TABLE order_info ADD FOREIGN KEY (picture_id) REFERENCES pictures(picture_id);

ALTER TABLE users ADD FOREIGN KEY (privileges) REFERENCES all_privileges(privileges);


/* with restrictions on delete and update */ 

/*
ALTER TABLE pictures ADD FOREIGN KEY (category_id) REFERENCES category(category_id) ON DELETE RESTRICT ON UPDATE RESTRICT;
*/
