CREATE TABLE roles(
    id INT AUTO_INCREMENT PRIMARY KEY,
    role_name VARCHAR(20) NOT NULL,
    description VARCHAR(255),
    code VARCHAR(10) NOT NULL UNIQUE,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
) ENGINE=INNODB; 

CREATE TABLE addresses(
    id INT AUTO_INCREMENT PRIMARY KEY,
    address VARCHAR (255),
    city VARCHAR(50),
    postale_code VARCHAR (20),
    country VARCHAR (50),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
) ENGINE=INNODB;

CREATE TABLE users(
    id INT AUTO_INCREMENT PRIMARY KEY,
    firstname VARCHAR(50) NOT NULL,
    lastname VARCHAR(50) NOT NULL,
    age int,
    email VARCHAR(100) NOT NULL,
    phone VARCHAR(30),
    status TINYINT NOT NULL,
    password VARCHAR (30) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    fk_role INT,
        FOREIGN KEY (fk_role)
        REFERENCES roles(id)
        ON DELETE CASCADE,
    fk_address INT,
        FOREIGN KEY (fk_address)
        REFERENCES adresses(id)
        ON DELETE CASCADE
) ENGINE=INNODB;

---------------------------------------------------

CREATE TABLE teams(
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100),
    quote VARCHAR (255),
    min_age INT,
    max_age INT,
    number_max_of_players INT,
    city VARCHAR (100),
    postale_code VARCHAR (50),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
)ENGINE=INNODB;

CREATE TABLE player_infos(
    id INT AUTO_INCREMENT PRIMARY KEY,
    weight INT,
    height INT,
    favorite_foot VARCHAR(50),
    favorite_number VARCHAR (5),
    post VARCHAR (100),
    fk_team INT,
        FOREIGN KEY (fk_team)
        REFERENCES teams(id)
        ON DELETE CASCADE,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
)ENGINE=INNODB;

CREATE TABLE user_player(
    fk_user INT,
        FOREIGN KEY (fk_user)
        REFERENCES users(id)
        ON DELETE CASCADE,
    fk_player INT,
        FOREIGN KEY (fk_player)
        REFERENCES player_infos(id)
        ON DELETE CASCADE,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
)ENGINE=INNODB;

CREATE TABLE matchs(
    id INT AUTO_INCREMENT PRIMARY KEY,
    date DATE,
    number_of_goals INT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
)ENGINE=INNODB;

CREATE TABLE team_match(
    fk_team INT,
        FOREIGN KEY (fk_team)
        REFERENCES teams(id)
        ON DELETE CASCADE,
    fk_match INT,
        FOREIGN KEY (fk_match)
        REFERENCES matchs(id)
        ON DELETE CASCADE,
    PRIMARY KEY (fk_team, fk_match),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
)ENGINE=INNODB;

CREATE TABLE Goals(
    id INT AUTO_INCREMENT PRIMARY KEY,
    minute VARCHAR (50),
    type VARCHAR (50),
    fk_player INT,
        FOREIGN KEY (fk_player)
        REFERENCES player_infos(id)
        ON DELETE CASCADE,
)ENGINE=INNODB;