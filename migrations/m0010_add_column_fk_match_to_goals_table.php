<?php 

class m0010_add_column_fk_match_to_goals_table
{
    public function up()
    {
        $db = \app\core\Application::$app->db;
        $SQL = "ALTER TABLE goals ADD fk_match INT;
                ALTER TABLE goals ADD CONSTRAINT fk_match FOREIGN KEY (fk_match) REFERENCES matchs(id);
        ";
        $db->pdo->exec($SQL);
    }

    public function down()
    {
        $db = \app\core\Application::$app->db;
        $SQL = "ALTER TABLE goals DROP fk_match";
        $db->pdo->exec($SQL);
    }

}