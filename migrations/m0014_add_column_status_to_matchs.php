<?php 

class m0014_add_column_status_to_matchs
{
    public function up()
    {
        $db = \app\core\Application::$app->db;
        $SQL = "ALTER TABLE matchs ADD status VARCHAR(50);";
        $db->pdo->exec($SQL);
    }

    public function down()
    {
        $db = \app\core\Application::$app->db;
        $SQL = "ALTER TABLE matchs DROP status;";
        $db->pdo->exec($SQL);
    }

}