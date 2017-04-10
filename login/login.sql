CREATE TABLE login (

id int(11) NOT NULL,
user varchar(250) NOT NULL,
password varchar(250) NOT NULL,
email varchar(250) NOT NULL,
pasadmin varchar(250) NOT NULL,
rol int(3) NOT NULL
);

INSERT INTO login (id, user, password, email, pasadmin, rol) VALUES
(1, "Administrador", "", "smartacontainer7@gmail.com', "123456", 1);
(2, 'Salvador', '12345', 'sax@gmail.com', '', 2),
(3, 'alfredo', '12345', 'alfree@gmail.com', '', 2),
(4, 'dante', '1234', 'dante@gmail.com', 'alfre', 1);