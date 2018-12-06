CREATE TABLE users
(
	id_user serial not null,
	user_name varchar(25),
	user_pwd varchar(50),
	user_email varchar(50),
	PRIMARY KEY (id_user)
);
