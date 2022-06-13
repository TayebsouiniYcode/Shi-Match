<?php 

class m0002_create_table_addresses
{

    public function up()
    {
        $db = \app\core\Application::$app->db;
        $SQL = "CREATE TABLE addresses(
                    id INT AUTO_INCREMENT PRIMARY KEY,
                    address VARCHAR (255),
                    city VARCHAR(50),
                    postale_code VARCHAR (20),
                    country VARCHAR (50),
                    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
                ) ENGINE=INNODB; 
            ";
        $db->pdo->exec($SQL);
    }

    public function down()
    {
        $db = \app\core\Application::$app->db;
        $SQL = "DROP TABLE addresses;";
        $db->pdo->exec($SQL);
    }

}