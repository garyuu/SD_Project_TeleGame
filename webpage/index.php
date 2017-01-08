<?php
session_start();
$stage = new SessionManager();

if($_SESSION['stage']){
	switch($_SESSION['stage']){
		case "wait": /** 等待中 **/
			Page("module/wait.html");
			break;
		case "play": /** 遊戲中 **/
			Page("module/play_game.html");
			break;
		case "end": /** 遊戲結束 **/
			Page("module/end_game.html");
			break;
	}
}
else{ 
	if($_GET['room']){ /** 進入遊戲房 **/
		Page("module/enter_room.html");
	}
	else{ /** 創建房間 **/
		Page("module/game_create.html");
	}	
}
function Page($target){ /** 顯示網頁 **/
	readfile($target);
}

?>