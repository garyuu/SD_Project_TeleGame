<?php
require_once('mysql_connection_setting.php')

class MySQLConnect{
    private $host; 
    private $user;
    private $password;
    private $database;

    function __construct($host=DB_HOST, $user=DB_USER,
                         $password=DB_PASSWORD, $database=DB_NAME){
        $this->host = $host;
        $this->user = $user;
        $this->password = $password;
        $this->database = $database;
    }

    function sql_connect(){
        $dsn = 'mysql:host='.$this->host.';dbname='.$this->database;
        return new PDO($dsn, $this->user, $this->password);
    }

    function save_room($name, $settings, $hash){
        $dbh = $this->sql_connect();
        $sth = $dbh->prepare("
            INSERT INTO `room`(`name`, `settings`, `hash`, `players`)
            VALUES (:name, :settings, :hash, :players)
        ");
        $sth->bindparam(':name', $name, PDO::PARAM_STR, 20);
        $sth->bindparam(':settings', json_encode($settings), PDO::PARAM_STR);
        $sth->bindparam(':hash', $hash, PDO::PARAM_STR);
        $sth->bindparam(':players', json_encode(array()), PDO::PARAM_STR);
        if (!$sth->execute())
            print($sth->errorinfo());
    }
}    
?>
