<?php 

class m0011_add_columns_teams
{
    public function up()
    {
        $db = \app\core\Application::$app->db;
        $SQL = "ALTER TABLE teams ADD country VARCHAR(255);
                ALTER TABLE teams ADD win INT;
                ALTER TABLE teams ADD loss INT;
                ALTER TABLE teams ADD draw INT
        ";
        $db->pdo->exec($SQL);
    }

    public function down()
    {
        $db = \app\core\Application::$app->db;
        $SQL = "ALTER TABLE teams DROP country;
                ALTER TABLE teams DROP win;
                ALTER TABLE teams DROP loss;
                ALTER TABLE teams DROP draw;
        ";
        $db->pdo->exec($SQL);
    }

}