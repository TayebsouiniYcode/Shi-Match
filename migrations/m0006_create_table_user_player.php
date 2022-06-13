<?php 

class m0006_create_table_user_player
{

    public function up()
    {
        $db = \app\core\Application::$app->db;
        $SQL = "CREATE TABLE user_player(
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
            ";
        $db->pdo->exec($SQL);
    }

    public function down()
    {
        $db = \app\core\Application::$app->db;
        $SQL = "DROP TABLE user_player;";
        $db->pdo->exec($SQL);
    }

}