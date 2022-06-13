<?php 

class m0009_create_table_goals
{
    public function up()
    {
        $db = \app\core\Application::$app->db;
        $SQL = "CREATE TABLE goals(
                    id INT AUTO_INCREMENT PRIMARY KEY,
                    minute VARCHAR (50),
                    type VARCHAR (50),
                    fk_player INT,
                        FOREIGN KEY (fk_player)
                        REFERENCES player_infos(id)
                        ON DELETE CASCADE
                )ENGINE=INNODB;
            ";
        $db->pdo->exec($SQL);
    }

    public function down()
    {
        $db = \app\core\Application::$app->db;
        $SQL = "DROP TABLE goals;";
        $db->pdo->exec($SQL);
    }

}