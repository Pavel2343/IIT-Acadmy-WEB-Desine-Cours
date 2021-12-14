
<?php
//-------------------------------------------------------------
//Практическое занятие День 2 - Блок2 п4-14
//Алилуенко Павел
//-------------------------------------------------------------

$day = rand(0, 10);
$day = 6;
switch ($day) {
    case 1:
    case 2:
    case 3:
    case 4:
    case 5:
        echo "Это рабочий день";
        break;
    case 6:
    case 7:
        echo "Это выходной день";
        break;
    default:
        echo "Неизвестный день";
      };

echo "<br><hr>";

        $bmw = Array(
                'model' => "X5",
                'speed' => 120,
                'doors' => 5,
                'year'  => "2015"
            );

            $toyota = Array(
                'model' => "Carina",
                'speed' => 130,
                'doors' => 4,
                'year'  => "2007"
            );

            $opel = Array(
                'model' => "Corsa",
                'speed' => 140,
                'doors' => 5,
                'year'  => "2006"
            );
    echo "Модель:      $bmw[model] <br>
          Скорость:    $bmw[speed] <br>
          Двери:       $bmw[doors] <br>
          Год выпуска: $bmw[year]  <br> <hr>";

    # Вывод значений массива Toyota
    echo "Модель:      $toyota[model] <br>
          Скорость:    $toyota[speed] <br>
          Двери:       $toyota[doors] <br>
          Год выпуска: $toyota[year]  <br> <hr>";

    # Вывод значений массива Opel
    echo "Модель:      $opel[model] <br>
          Скорость:    $opel[speed] <br>
          Двери:       $opel[doors] <br>
          Год выпуска: $opel[year]  <br> <hr>";



$bmw["speed"]= $bmw["speed"]+20;
$bmw["year"]= $bmw["year"]+10;
echo "Модель:      $bmw[model] <br>
      Скорость:    $bmw[speed] <br>
      Двери:       $bmw[doors] <br>
      Год выпуска: $bmw[year]  <br> <hr>";

$toyota["speed"]= $toyota["speed"]+20;
$toyota["year"]= $toyota["year"]+10;
echo "Модель:      $toyota[model] <br>
      Скорость:    $toyota[speed] <br>
      Двери:       $toyota[doors] <br>
      Год выпуска: $toyota[year]  <br> <hr>";

$opel["speed"]= $opel["speed"]+20;
$opel["year"]= $opel["year"]+10;
echo "Модель:      $toyota[model] <br>
      Скорость:    $toyota[speed] <br>
      Двери:       $toyota[doors] <br>
      Год выпуска: $toyota[year]  <br> <hr>";






echo "<br> <hr>";
$goods = Array(Array('Наименование' => 'Гречка', 'Стоимость' => 30),
               Array ('Наименование' => 'Рис' ,'Стоимость'  => 25),
               Array ('Наименование' =>  'Яйца' , 'Стоимость'=> 25 ));

  //var_dump ($goods);
  echo $goods[0]['Стоимость'];
  echo $goods[1]['Наименование'];
  echo "<br> <hr>";


  for ($i = 0; $i < 10; $i++)
{
   echo "Привет.<br> ";

};
echo "<br> <hr>";
for ($i = 1; $i <= 50; $i++)
{
  echo "<br>";
 echo $i;
}

echo "<br> <hr>";

//$numbers = array[];

for ($n = 0; $n < 10; $n++){
  $numbers[]=rand(0,10);
};

for ($n = 0; $n < 10; $n++){
 $numbers[$n]=$numbers[$n] * 2 ;
 echo "$numbers[$n] <br>";
};



$menu = array('Главная','Новости','Цены', 'Контакты');
foreach($menu as $key => $value)
{
  echo "Пункт меню ", ($key + 1), "- $value <br>";
}

echo "<hr><br>";

//решения первой задачи

//1 вариант решения
$chislo = "136785434";
$sum = 0;

foreach (str_split($chislo, 1) as $value)
{
   $sum += $value;
}

echo "Число: {$chislo}<br> ";
echo "Сумма: {$sum} ";
echo "<hr><br>";
//2 вариант решения
$number = "1892";
$sum = 0;

for ($i = 0; $i < strlen($number); $i++) {
    $sum += $number[$i];
}
echo "Число: {$number}<br> ";
echo "Сумма: {$sum} ";
echo "<hr><br>";


//Задача 2
//1 вариант решения
$number = '442158755745';
$num = '5';
echo "В числе ", $number," встречается цифра ", $num, " ", substr_count($number, $num), " раз.";
echo "<hr><br>";

//2 вариант решения
$number = '442158755745';
$num = '5';
$counter = 0;
$tmp = '';
for ($i = 0; $i < strlen($number); $i++) {
      if ( $number[$i] == $num) {
         $counter++;
        }
}
echo "В числе ", $number,  " встречается цифра ", $num, " ", $counter, " раз.";
echo "<hr><br>";



//Задача 3

$start = 20;
$end = 45;
$sum = 0;

// Числа от 20 до 45
for ($i = $start; $i <= $end; $i++) {
    if (fmod($i, 5) == 0) {
        $sum += $i;
    }
}

echo "Сумма: {$sum} <br> <hr>";
echo "<hr><br>";


//Задача 4
$numbers = [];
$length = 8;
$min = 10000;
$min_key = 0;
$max = 0;
$max_key = 0;

echo "Числа массива:<br>";
for ($i = 0; $i < $length; $i++) {
$numbers[] = rand (0,100);
echo "$i :   $numbers[$i] <br>";

if($numbers[$i] > $max) {
    $max = $numbers[$i];
    $max_key = $i;
}

if($numbers[$i] < $min) {
    $min = $numbers[$i];
    $min_key = $i;
}

}
echo "Min: $min Min_key: $min_key <br>" ;
echo "Max: $max Max_key: $max_key <br>" ;

$numbers[$min_key] = $max;
$numbers[$max_key] = $min;

echo "Числа массива полсе перестановки мин и макс:<br>";
for ($i = 0; $i < $length; $i++) {
echo "$i :   $numbers[$i] <br>";
}
echo "<hr><br>";




//Задача 5
//В условии задачи ошибка:
//По условию массив заполняется числами от 0 до 100, т.е. положительными
//а потом сказано что надо вычислять произведение и выдодить на экран
//те что больше нуля, т.е. можно было бы не проверять на условие больше нуля
//но я все равно сделал проверку на случай если поменять условия
//заполнения массива

$arr = [];
for ($i = 0; $i < 10; $i++) {
    $arr[] = rand(1, 100);
}
echo '<p>Исходный массив</p>';
echo '<pre>';
print_r($arr);
echo '</pre>';

$mul = 0;
// Вариант 1: приращение $i с шагом 2
for ($i = 2; $i < count($arr); $i += 2) {
    if ($arr[$i] > 0) {
        $mul *= $arr[$i];
    }
}
echo "<p> Произведение элементов с четными индексами: {$mul}</p>";

echo '<p>Элементы у которых нечетные индексы:</p>';
// Вариант 2: используем foreach
foreach ($arr as $key => $value) {
    if ($value > 0 && $key % 2) {
        echo "{$value}<br>";
    }
}






?>
