<?php 

class m0005_create_table_player_infos
{

    public function up()
    {
        $db = \app\core\Application::$app->db;
        $SQL = "CREATE TABLE player_infos(
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
            ";
        $db->pdo->exec($SQL);
    }

    public function down()
    {
        $db = \app\core\Application::$app->db;
        $SQL = "DROP TABLE player_infos;";
        $db->pdo->exec($SQL);
    }

}