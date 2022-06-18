<?php 

class m0015_add_column_time_to_matchs
{
    public function up()
    {
        $db = \app\core\Application::$app->db;
        $SQL = "ALTER TABLE matchs ADD time time;";
        $db->pdo->exec($SQL);
    }

    public function down()
    {
        $db = \app\core\Application::$app->db;
        $SQL = "ALTER TABLE matchs DROP time;";
        $db->pdo->exec($SQL);
    }

}