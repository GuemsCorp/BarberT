CREATE TABLE users(
    id_user INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    role_user TINYINT(1) NOT NULL DEFAULT 0,
    firstname_user VARCHAR (45) NOT NULL,
    lastname_user VARCHAR (45) NOT NULL,
    email VARCHAR (225) UNIQUE NOT NULL,
    phone INT (20) NOT NULL,
    pwd VARCHAR(225) NOT NULL
);

CREATE TABLE services(
    id_service INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    name_service VARCHAR (45) NOT NULL,
    price_service DECIMAL (10,2),
    duration_service TIME,
    id_type_service INT(11) NOT NULL,
    FOREIGN KEY (id_type_service) REFERENCES type_services(id_type_service)
);


CREATE TABLE type_services(
    id_type_service INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    name_type_service VARCHAR (45) NOT NULL
);


CREATE TABLE reservations(
    id_reservation INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    date_reservation DATE NOT NULL,
    hours_reservation TIME NOT NULL,
    id_user INT(11) NOT NULL,
    FOREIGN KEY (id_user) REFERENCES users(id_user)
);

CREATE TABLE reservations_service(
    id_service INT(11) NOT NULL,
    id_reservation INT(11) NOT NULL,
    PRIMARY KEY (id_service ,id_reservation),
    FOREIGN KEY (id_service) REFERENCES services(id_service),
    FOREIGN KEY (id_reservation) REFERENCES reservations(id_reservation)
);