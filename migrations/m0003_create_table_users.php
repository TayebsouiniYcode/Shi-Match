<?php 

class m0003_create_table_users
{

    public function up()
    {
        $db = \app\core\Application::$app->db;
        $SQL = "CREATE TABLE users(
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
                        REFERENCES addresses(id)
                        ON DELETE CASCADE
                ) ENGINE=INNODB;
            ";
        $db->pdo->exec($SQL);
    }

    public function down()
    {
        $db = \app\core\Application::$app->db;
        $SQL = "DROP TABLE users;";
        $db->pdo->exec($SQL);
    }

}