<?php 

class m0012_add_columns_image_team
{
    public function up()
    {
        $db = \app\core\Application::$app->db;
        $SQL = "ALTER TABLE teams ADD image VARCHAR(100);";
        $db->pdo->exec($SQL);
    }

    public function down()
    {
        $db = \app\core\Application::$app->db;
        $SQL = "ALTER TABLE teams DROP image;";
        $db->pdo->exec($SQL);
    }

}