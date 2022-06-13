<?php 

class m0008_create_table_team_match
{
    public function up()
    {
        $db = \app\core\Application::$app->db;
        $SQL = "CREATE TABLE team_match(
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
            ";
        $db->pdo->exec($SQL);
    }

    public function down()
    {
        $db = \app\core\Application::$app->db;
        $SQL = "DROP TABLE team_match;";
        $db->pdo->exec($SQL);
    }

}