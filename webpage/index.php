<?php

if($_COOKIE['stage']){
	switch($_COOKIE['stage']){
		case 'waiting': 
		/** 等待中 **/
			require_once("wait.php");
			HTML("wait.html");
			WAITING();
			break;
		case 'playing':
		/** 遊戲中 **/

			break;

	}
}
else{ 
/** 創建房間 **/
	HTML("game_create.html");
}
function HTML($target){
/** 顯示網頁 **/
	if(is_file($target))
		readfile($target);
}
function WAITING(){
}

?>