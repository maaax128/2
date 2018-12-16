<?php
$continents=[
	'Africa' => [
		'lion', 
		'elephant', 
		'leopard'
	], 
	'Antarctica'=> [
		'Leopard seal', 
		'Crabeater seal', 
		'Adélie Penguin'
	], 
	'Australia'=> [
		'kangaroo', 
		'koala', 
		'numbat'
	], 
	'Eurasia'=> [
		'Meles meles', 
		'Nannospalax leucodon', 
		'Sicista betulina'
	], 
	'North America'=> [
		'Alopex lagopus', 
		'Canis latrans', 
		'Canis lupus', 
		'Canis rufus', 
		'Urocyon cinereoargenteus'
	], 
	'South America'=> [
		'Lynx rufus', 
		'Panthera onca', 
		'Puma concolor', 
		'Puma yagouaroundi', 
		'Herpestes javanicus'
	]
];



foreach ($continents as $animals) {
	foreach ($animals as $key => $animal) {
		$name = explode(" ", $animal);
		if (count($name) == 2) {
			$one[] = $name[0];
			$two[] = $name[1];
			$list[] = "$name[0] $name[1]";

		}
	}
}


shuffle($one);
shuffle($two);
$result = array_combine($one, $two);





?>



<!DOCTYPE html>
<html lang="ru">
  <head>
     <meta charset="UTF-8"> 
     <title>Домашнее задание № 1</title>
  </head>
  <body>

<p><em>1. Исходный массив:</em></p>

<?php 
foreach ($continents as $animals) {
	foreach ($animals as $key => $animal) {
		echo "$animal <br>";
	}
}
?>

<p><em>2. Названия, состоящие из двух слов:</p></em>

<?php 
foreach ($list as $value) {
	echo "$value <br>";
}
?>

<p><em>3. "Фантазийные" названия:</p></em>

<?php
foreach ($result as $results => $finish) {
	echo "$results $finish <br>";
}
?>
