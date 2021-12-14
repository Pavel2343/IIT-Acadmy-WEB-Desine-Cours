<?php
//-------------------------------------------------------------
//Практическое занятие День 1 - Блок2 п.9
//Алилуенко Павел
//-------------------------------------------------------------


$player1 = "Я";
$player2 = "Робот";
$player3 = "Кот";
$player1Points = 0;
$player2Points = 0;
$player3Points = 0;

//player1
echo "Бросаем кости игроку - {$player1}", '<br>';

$player1Points += rand(1,6);

echo "Ход 1. {$player1}, поздлавряем у вас {$player1Points}!!!", '<br>';

$player1Points += rand(1,6);

echo "Ход 2. {$player1}, поздлавряем у вас {$player1Points}!!!", '<br>';

$player1Points += rand(1,6);

echo "Ход 3. {$player1}, поздлавряем у вас {$player1Points}!!!", '<br>';

//player2
echo "Бросаем кости игроку - {$player2}", '<br>';

$player2Points += rand(1,6);

echo "Ход 1. {$player2}, поздлавряем у вас {$player2Points}!!!", '<br>';

$player2Points += rand(1,6);

echo "Ход 2. {$player2}, поздлавряем у вас {$player2Points}!!!", '<br>';

$player2Points += rand(1,6);

echo "Ход 3. {$player2}, поздлавряем у вас {$player2Points}!!!", '<br>';

//player3
echo "Бросаем кости игроку - {$player3}", '<br>';

$player3Points += rand(1,6);

echo "Ход 1. {$player3}, поздлавряем у вас {$player3Points}!!!", '<br>';

$player3Points += rand(1,6);

echo "Ход 2. {$player3}, поздлавряем у вас {$player3Points}!!!", '<br>';

$player3Points += rand(1,6);

echo "Ход 3. {$player3}, поздлавряем у вас {$player3Points}!!!", '<br>';


if ($player1Points > $player2Points and $player1Points > $player3Points) {
    echo "Поздравляем, победил игрок - {$player1}";
} elseif ($player2Points > $player1Points and $player2Points > $player3Points ) {
  echo "Поздравляем, победил игрок - {$player2}";}
  elseif ($player3Points > $player2Points and $player3Points > $player1Points){
  echo "Поздравляем, победил игрок -{$player3}";}

 else {
    echo "Ничья.";
}

?>
