<?php 

class m0007_create_table_matchs
{
    public function up()
    {
        $db = \app\core\Application::$app->db;
        $SQL = "CREATE TABLE matchs(
                    id INT AUTO_INCREMENT PRIMARY KEY,
                    date DATE,
                    number_of_goals INT,
                    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
                ) ENGINE=INNODB;
            ";
        $db->pdo->exec($SQL);
    }

    public function down()
    {
        $db = \app\core\Application::$app->db;
        $SQL = "DROP TABLE matchs;";
        $db->pdo->exec($SQL);
    }

}