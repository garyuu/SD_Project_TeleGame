<?php
require_once('mysql_connection_setting.php')

class MySQLConnect{
    private $host; 
    private $user;
    private $password;
    private $database;
    private $dbh;

    function __construct(){
        $this->host = DB_HOST;
        $this->user = DB_USER;
        $this->password = DB_PASSWORD;
        $this->database = DB_NAME;
        $this->dbh = sql_connect;
    }

    function sql_connect(){
        $dsn = 'mysql:host='.$this->host.';dbname='.$this->database;
        return new PDO($dsn, $this->user, $this->password);
    }
    
}    
?>
