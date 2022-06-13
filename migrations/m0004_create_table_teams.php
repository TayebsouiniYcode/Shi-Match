<?php 

class m0004_create_table_teams
{

    public function up()
    {
        $db = \app\core\Application::$app->db;
        $SQL = "CREATE TABLE teams(
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
            ";
        $db->pdo->exec($SQL);
    }

    public function down()
    {
        $db = \app\core\Application::$app->db;
        $SQL = "DROP TABLE teams;";
        $db->pdo->exec($SQL);
    }

}