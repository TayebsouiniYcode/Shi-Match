<?php 

class m0002_create_table_users
{

    public function up()
    {
        $db = \app\core\Application::$app->db;
        $SQL = "CREATE TABLE users(
                    id INT AUTO_INCREMENT PRIMARY KEY,
                    email VARCHAR(100) NOT NULL,
                    firstname VARCHAR(50) NOT NULL,
                    lastname VARCHAR(50) NOT NULL,
                    age int,
                    phone VARCHAR(30),
                    poste varchar(100),
                    country VARCHAR (30),
                    city VARCHAR (30),
                    postaleCode VARCHAR (30),
                    status TINYINT NOT NULL,
                    password VARCHAR (30) NOT NULL,
                    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
                    fk_role INT,
                        FOREIGN KEY (fk_role)
                        REFERENCES roles(id)
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