<?php 

class m0001_create_table_roles
{
    public function up()
    {
        $db = \app\core\Application::$app->db;
        $SQL = "CREATE TABLE roles(
                id INT AUTO_INCREMENT PRIMARY KEY,
                role_name VARCHAR(20) NOT NULL,
                description VARCHAR(255),
                code VARCHAR(10) NOT NULL UNIQUE,
                created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
            ) ENGINE=INNODB; 
            ";
        $db->pdo->exec($SQL);
    }

    public function down()
    {
        $db = \app\core\Application::$app->db;
        $SQL = "DROP TABLE roles;";
        $db->pdo->exec($SQL);
    }

}