-- Create roles list 
INSERT INTO roles (code, description, role_name) 
            VALUEs (1, 'administrateur de l application', 'admin');
INSERT INTO roles (code, description, role_name) 
            VALUEs (2, 'utilisateur de l application', 'user');

-- Create addresses list
INSERT INTO addresses (address, city, country, postale_code) 
            VALUES ('numero 1 rue sebtah Qu El mohammadi', 'YOUSSOUFIA', 'Morocco', '46300');
INSERT INTO addresses (address, city, country, postale_code) 
            VALUES ('146 Zen9et Zela9a Achour', 'Fez', 'Morocco', '4000');
INSERT INTO addresses (address, city, country, postale_code) 
            VALUES ('Imb 1 Hamria', 'Meknes', 'Morocco', '5000');
INSERT INTO addresses (address, city, country, postale_code) 
            VALUES ('1 street Wang', 'Libreville', 'South Africa', '12121');
INSERT INTO addresses (address, city, country, postale_code) 
            VALUES ('Copa cabana', 'Reo dejanero', 'Bresil', '12222');

-- Create account list
INSERT INTO users (firstname, lastname, age, phone, email, password, fk_address, fk_role, status) 
            VALUES ('Tayeb', 'SOUINI', 27, '0607189671', 'Tayebsouini.2@gmail.com', '123456', 1, 1, 1);

INSERT INTO users (firstname, lastname, age, phone, email, password, fk_address, fk_role, status) 
            VALUES ('Sanae', 'RAFYA', 23, '0603831256', 'Sanaerafya@gmail.com', '123456', 2, 1, 1);

INSERT INTO users (firstname, lastname, age, phone, email, password, fk_address, fk_role, status) 
            VALUES ('Khalid', 'HAGANE', 26, '0607143271', 'KhalidHAGANE@gmail.com', '123456', 3, 2, 0);

INSERT INTO users (firstname, lastname, age, phone, email, password, fk_address, fk_role, status) 
            VALUES ('Aymen', 'DARJI', 25, '0604223671', 'AymenDARJI@gmail.com', '123456', 2, 2, 1);

INSERT INTO users (firstname, lastname, age, phone, email, password, fk_address, fk_role, status) 
            VALUES ('Sabir', 'LKHALOUFI', 24, '0607776571', 'SabirLKHALOUFI@gmail.com', '123456', 4, 1, 0);


-- Create player information
INSERT INTO player_infos (post, weight, height, favorite_number, favorite_foot)
            VALUES ('CB', 67, 178, '8', 'foot_1');
INSERT INTO user_player (fk_player, fk_user)
            VALUEs (1, 1);

INSERT INTO player_infos (post, weight, height, favorite_number, favorite_foot)
            VALUES ('CF', 72, 185, '4', 'foot_2');
INSERT INTO user_player (fk_player, fk_user)
            VALUEs (2, 3);

INSERT INTO player_infos (post, weight, height, favorite_number, favorite_foot)
            VALUES ('RWF', 82, 193, '11', 'foot_2');
INSERT INTO user_player (fk_player, fk_user)
            VALUEs (3, 4);

-- Create teams list
INSERT INTO teams (name, quote, city, postale_code, max_age, min_age, number_max_of_players) 
            VALUES ('Namek', 'Worior', 'Youssoufia', '46300', 28, 16, 8);

INSERT INTO teams (name, quote, city, postale_code, max_age, min_age, number_max_of_players) 
            VALUES ('Aliens', 'This is aliens team', 'Youssoufia', '46300', 32, 16, 10);

INSERT INTO teams (name, quote, city, postale_code, max_age, min_age, number_max_of_players) 
            VALUES ('Error 404', 'How we are', 'Youssoufia', '46300', 37, 18, 23);


-- insert players to teams all player to team Namek
UPDATE player_infos SET fk_team = 1;

-- Create match
INSERT INTO matchs (date) VALUES ('24/02/2022');

INSERT INTO matchs (date) VALUES ('30/3/2022');

-- insert team to match
INSERT INTO team_match (fk_match, fk_team) VALUES (1, 1);
INSERT INTO team_match (fk_match, fk_team) VALUES (1, 2);

INSERT INTO team_match (fk_match, fk_team) VALUES (2, 3);
INSERT INTO team_match (fk_match, fk_team) VALUES (2, 2);

-- insert goal
INSERT INTO goals (fk_player, minute, type) VALUEs (1, '20', 'foot_1');
INSERT INTO goals (fk_player, minute, type) VALUEs (1, '23', 'head');
INSERT INTO goals (fk_player, minute, type) VALUEs (3, '54', 'foot_2');


-- get number of player 
SELECT COUNT(*) as 'Number_of_players' FROM player_infos;