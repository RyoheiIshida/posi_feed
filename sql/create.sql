drop table users;
CREATE TABLE users (
    id INT(32) NOT NULL PRIMARY KEY AUTO_INCREMENT,
    email VARCHAR(32) NOT NULL,
    password VARCHAR(32) NOT NULL,
    authority VARCHAR(32) NOT NULL
)ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;


create table feeds (
    id int(32) NOT NULL PRIMARY KEY AUTO_INCREMENT,
    created_users_id INT(32) NOT NULL,
    posted_users_id INT(32) NOT NULL,
    content text(140) NOT NULL,
    private boolean not null DEFAULT true,
    created_at datetime,
    updated_at datetime
);
