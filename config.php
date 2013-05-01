<?php
  $logs = 'logi.txt';//Не трогать
	$date = date('d-m-Y H:i:s');//Не трогать
	//MySQL
	$db_host = 'Хост базы данных';
	$db_user = 'Пользователь базы данных'; 
	$db_pass = 'Пароль базы данных'; // пароль базы данных
	$db_base = 'База данных с плагинами(db игры)'; 
	$db_econ = 'iConomy'; // Таблица MySQL с iConomy
	$db_realmon = 'dle_users'; //Для автодоната. Не трогать!
	$link = mysql_connect($db_host, $db_user, $db_pass)or die('Соединение приостановлена. Произошла ошибка: ' . mysql_error()); //не трогать
	//MySQL end
	$jobs = $_SERVER['REQUEST_URI']; //Для плагина Jobs. Не трогать!
	$skins_folder = 'engine/modules/mcskins/skins'; //Папка со скинами для игроков. Можно менять.
	$cloak_folder = 'engine/modules/mcskins/cloaks'; //Папка с плащиками для игроков. Можно менять.
	$lk_files = 'php'; //Не трогать, путь к файлам PHP
	$username = $member_id['name'];//Не трогать, настройка для юзеров.
	$url = $_SERVER['HTTP_HOST'];//Для ссылок. Не трогать.
	//Покупка VIP и PREMIUM статуса
	$BuyVip = 'Цена VIP статуса'; 
	$BuyPrem = 'Цена премиум-статуса'; 
	$NextVipBuy = 'Цена продления VIP-статуса'; 
	$NextPremBuy = 'Цена продления премиум-статуса';
	//End
	//Разбан
	$unban_1 = 'Цена первого разбана'; 
	$unban_2 = '60'; // цена 2 разбана
	$unban_3 = '100'; // цена 3 разбана
	//End
	$exchangehow = 'Цена игровой валюты эквивалентом в 1 рубль';
	//IK
	$id_ik = 'ID вашего магазина в системе InterKassa'; 
	$key_ik = 'Ваш секретный ключ от ИнтерКасса';
?>
