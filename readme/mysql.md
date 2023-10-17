mysql -u root -p

show databases;

create database my_db

UNSIGNED = store only positive numbers.

use my_db;

CREATE TABLE users (
	id int UNSIGNED PRIMARY KEY AUTO_INCREMENT,
    email varchar(255) NOT NULL,
    full_name varchar(255) NOT NULL,
    is_active boolean DEFAULT 0 NOT NULL,
    created_at datetime NOT NULL,
    KEY `is_active`(`is_active`),
    UNIQUE KEY `email`(`email`)
    );

describe users;

ALTER TABLE users ADD COLUMN foo varchar(150), DROP COLUMN is_active, MODIFY full_name varchar(150);

insert into users (email, full_name, is_active, created_at)
	values ('john@dow.com', 'John Dow', 1, now()), ('jane@dow.com', 'Jane Dow', 1, now());

SELECT * from users;

SELECT * from users where id = 2;

SELECT * from users where is_active = 1 order by created_at ASC;

SELECT * from users where email LIKE '%jo%';

LIKE 'john%' - email starts with john ...

NOT LIKE

UPDATE users
SET email = 'jane@gmail.com';
LIMIT 5; - update max 5 rows.

delete from users where id=0;

amount decimal(10,4) - integer have 10 digits and 4 of them is on the right of comma.

user_id int unsigned, - should be the same as ref field.
FOREIGN KEY (user_id) REFERENCES users(id)
ON DELETE SET NULL - if user would be deleted from users then user_id = 0.
ON UPDATE CASCADE
if ON DELETE CASCADE - with deleting user - delete invoices of that user.   

select invoices.id, amount, full_name
from invoices
inner join users on users.id=user_id
WHERE full_name LIKE '%ja%';