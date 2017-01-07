<?php
require_once("function/ession_manager.php");


if($_COOKIE['stage']){
	switch($_COOKIE['stage']){
		case 'waiting': /** 等待中 **/
			HTML("module/wait.html");
			break;
		case 'playing': /** 遊戲中 **/
		
			HTML("module/play_game.html");
			break;
		case 'ending': /** 遊戲結束 **/
			HTML("module/end_game.html");
			break;
	}
}
else{ 
/** 創建房間 **/
	HTML("module/game_create.html");
}
function HTML($target){ /** 顯示網頁 **/
	if(is_file($target))
		readfile($target);
}
function WAITING(){
}

?>