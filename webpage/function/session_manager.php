<?php
class SessionManager{
    function __construct(){
        session_start();
    }

    function destroy(){
        session_destroy();
    }

    function inroom(){
        return isset($_SESSION['room']);
    }

    function isreg(){
        return isset($_SESSION['name']);
    }

    function regist($name, $room){
        $_SESSION['name'] = $name;
        $_SESSION['room'] = $room;
    }
}
?>
