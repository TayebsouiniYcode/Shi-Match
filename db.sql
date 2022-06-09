CREATE TABLE addresses(
	id INT PRIMARY KEY AUTO_INCREMENT,
    country VARCHAR(50),
    city VARCHAR (50),
    postale_code VARCHAR(10),
    address VARCHAR(100),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
) ENGINE=INNODB;

CREATE TABLE roles(
    id INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(20),
    description VARCHAR(255),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
) ENGINE=INNODB;

CREATE TABLE users (
	id INT PRIMARY KEY AUTO_INCREMENT,
    firstname VARCHAR(50),
    lastname VARCHAR(50),
    birth_date DATE,
    fk_address INT,
        FOREIGN KEY (fk_address)
        REFERENCES addresses(id)
        ON DELETE CASCADE,
    email VARCHAR(100),
    password VARCHAR(30),
    fk_role INT, 
    	FOREIGN KEY (fk_role)
    	REFERENCES roles(id)
    	ON DELETE CASCADE,
    stat BOOLEAN,

    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
) ENGINE=INNODB;