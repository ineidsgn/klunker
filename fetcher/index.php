<?php

echo "<pre>";

require_once("browser.php");
require_once("fetcher.php");
require_once("fetcher_exist.php");

$parts=array(
	"54302-AV425"
);


foreach ($parts as $part) {
	echo "\n\nКод: $part\n";

	$fetcher_exist=new fetcher_exist($part);
	$fetcher_exist->fetch();

	if ($fetcher_exist->is_ok()) {
		echo "Оригинал: ".$fetcher_exist->get_original()." руб.\n";
		if ($fetcher_exist->has_replacement()) {
			echo "Заменитель: ".$fetcher_exist->get_replacement()." руб.\n";
		} else {
			echo "Заменителя нет\n";
		}
	} else {
		echo "Артикул не найден, код ошибки: ".$fetcher_exist->get_error()."\n";
	}

}

