# Super Simple PHP OCI ORM 
ORM Library for PHP and OCI8 library to convert from procedural programming to object oriented programming

# Instructions
1. Put this folder in www folder
2. Copy __Config.php.example__ to __Config.php__ and complete with correct credentials:
    ``` php
    class Config {
        static $DB_HOST = 'localhost';
        static $DB_PORT = '1521';
        static $DB_USER = 'system';
        static $DB_PASS = 'oracle';
        static $DB_SID  = 'xe';
    }
    ```
3. Run index.php
4. Sample ORM query with this library
    ``` php
    $db = new Database\Database;
    $user_id = 1;
    $result = $db->query("SELECT * FROM users WHERE id = :p1")
                 ->bind(":p1", $user_id)
                 ->execute()
                 ->result();
    print_r($result);
    ```
