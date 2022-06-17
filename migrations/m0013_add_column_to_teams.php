<?php 

class m0013_add_column_to_teams
{
    public function up()
    {
        $db = \app\core\Application::$app->db;
        $SQL = "ALTER TABLE teams ADD created_by INT;";
        $db->pdo->exec($SQL);
    }

    public function down()
    {
        $db = \app\core\Application::$app->db;
        $SQL = "ALTER TABLE teams DROP created_by;";
        $db->pdo->exec($SQL);
    }

}