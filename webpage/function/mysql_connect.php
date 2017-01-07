<?php
require_once('mysql_connection_setting.php')

class MySQLConnect{
    private $host; 
    private $user;
    private $password;
    private $database;
    private $dbh;

    function __construct($host=DB_HOST, $user=DB_USER,
                         $password=DB_PASSWORD, $database=DB_NAME){
        $this->host = $host;
        $this->user = $user;
        $this->password = $password;
        $this->database = $database;
        $this->dbh = sql_connect;
    }

    function sql_connect(){
        $dsn = 'mysql:host='.$this->host.';dbname='.$this->database;
        return new PDO($dsn, $this->user, $this->password);
    }
}    
?>
