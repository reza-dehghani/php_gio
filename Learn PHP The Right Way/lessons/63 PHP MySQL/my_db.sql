CREATE TABLE users (
id int UNSIGNED PRIMARY KEY AUTO_INCREMENT,
email varchar(255) NOT NULL,
full_name varchar(255) NOT NULL,
is_active boolean DEFAULT 0 NOT NULL,
created_at datetime NOT NULL,
KEY is_active(is_active),
UNIQUE KEY email(email)
);

INSERT INTO users (email, full_name, is_active, created_at)
	VALUES ('reza@gmail.com', 'Reza', 1, NOW()), ('jane@doe.com', 'Jane Doe', 1, NOW());
	
	create table invoices(
		id int unsigned primary key auto_increment,
		amount decimal(10, 4),
		user_id int unsigned,
		foreign key (user_id) references user(id)
		on delete set null
		on update cascade
		);