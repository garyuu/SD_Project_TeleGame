<?php
require_once('function/mysql_connect.php');

class RoomHashGenerator{
    public $name;
    public $settings;
    public $hash;

    # Settings should be labeled array
    function __construct($name, $settings){
        $this->name = $name;
        $this->settings = $settings;
        $this->hash = $this->generate_hash();
        $this->send_row();
    }

    function generate_hash(){
        return md5($name.json_encode($settings));
    }

    function send_row(){
        $db = new MySQLConnect();
        $db->save_room($name, $settings, $hash);
    }
}
?>
