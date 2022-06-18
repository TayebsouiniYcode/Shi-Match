<?php 

class m0016_create_table_team_requests
{

    public function up()
    {
        $db = \app\core\Application::$app->db;
        $SQL = "CREATE TABLE team_request(
                    id INT AUTO_INCREMENT PRIMARY KEY,
                    fk_team INT,
                        FOREIGN KEY (fk_team)
                        REFERENCES teams(id)
                        ON DELETE CASCADE,
                    fk_user INT,
                        FOREIGN KEY (fk_user)
                        REFERENCES users(id)
                        ON DELETE CASCADE,
                    status VARCHAR (20),
                    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
                )ENGINE=INNODB;
            ";
        $db->pdo->exec($SQL);
    }

    public function down()
    {
        $db = \app\core\Application::$app->db;
        $SQL = "DROP TABLE team_request;";
        $db->pdo->exec($SQL);
    }

}