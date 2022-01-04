
<?php
//Задача 1
$numbers = [];
$counter=0;
$i=0;
//Усложним создадим массив произвольной длинны
//наполненный произвольными числами
echo "Числа массива:<br>";
for ($i = 0; rand(0, 10); $i++) {
   $numbers[] = rand (0,100);
   echo "$i :   $numbers[$i] <br>";
};

//Способ 1 используя foreach как поо условию
foreach ($numbers as $key) {
  $counter++;
};
echo "Элементов в массиве (v1): $counter  <br>";
//Способ 2 используя функцию
echo "Элементов в массиве (v2):" , count($numbers),  "<br>";

// Задача 2 выводим предпоследний элемент не используя foreach
$index=(count($numbers)-2);
echo "Предпоследний элемент в массиве (v1):" ,  $numbers[$index], "<br>";

//используя foreach вар.1
$counter = 0;
foreach ($numbers as $key){
  $counter++;
};
$index=($counter-2);
echo "Предпоследний элемент в массиве (v2):" ,  $numbers[$index], "<br>";

//используя foreach вар.2
$last = 0 ;
$pre_last = 0;
foreach ($numbers as $key => $value){
  $pre_last=$last;
  $last=$value;
};
echo "Предпоследний элемент в массиве (v3):" ,  $pre_last, "<br>";
#Задача 3
$k= 0;
$arr = array(
"Купить хлеб"
, "Выгулять собаку"
, "Покормить кота"
, "Покормить морскую свинку"
, "Почистить клетку"
, "Постирать"
);
#Задача 4
$arr[]= "Купить молоко";
#Задача 5
$arr[4]="Покупать кота";
echo "$arr[0]<br>";
echo "$arr[1]<br>";

#Задача 6
foreach ($arr as $key => $value){

  echo " $value<br> ";
};

#Задача 7
for ($k = 0;  $k <=count($arr);  $k+=2) {

   echo "$k :   $arr[$k] <br>";
};

#Задача 8
for ($k = 2;  $k <=count($arr)-1;  $k++) {

   echo "$k :   $arr[$k] <br> ";
};


#Задача 9
array_unshift($arr, "Сходить в магазин");
print_r($arr);
echo "<br>";


$user = array(
"first_name" => "Владимир"
, "last_name" => "Романичев"
, "email" => "email@email.com"
, "password" => "123456"
);
#Задача 10
echo $user["first_name"] ,  "<br>";
echo $user["email"], "<br>";
#Задача 11
$user["password"] = "128";
#Задача 11
echo $user["first_name"] , "<br>";
#Задача 12
foreach ($user as $key => $value){
if ($key <> "password"){
echo $key," => " ,$value, "</br>";
};
};

foreach ($user as $key){
  echo $key;
};

$user["first_name"] = "Петр";


echo $user["first_name"] , " " , $user["last_name"] , "<br>";



if ($user["password"] <> "34234"){
echo "Пароли не совпадают </br>";
};

//Вариант 1 по индексу
foreach ($user as $key => $value){
$user[$key] = "test";
};
var_dump($user);
echo "</br>";

//Вариант 2 по ссылке
foreach ($user as &$value){
$value = "test";
};
 unset($value);

var_dump($user);
echo "</br>";

$users = array(
array("login" => "administrator", "role" => "admin")
, array("login" => "vasya", "role" => "user")
, array("login" => "petya", "role" => "user")
, array("login" => "vova", "role" => "user")
, array("login" => "klava", "role" => "user")
);

echo $users[1]["login"] , "<br>";
echo $users[2]["role"] , "<br>" ;

$users[1]["role"]="admin";
echo $users[1]["role"], "<br>";
$users[4]["login"]="last";
echo $users[4]["login"];

foreach ($users as $key=>$value){
echo $users[$key]["login"] , "<br>";

};
echo "-----</br>";
foreach ($users as $key=>$value){
if ($users[$key]["role"]=="user"){
echo $users[$key]["login"], "<br>";
};
};
echo "-----</br>";
foreach ($users as $key=>$value){
if ($users[$key]["login"]=="vova"){
echo $users[$key]["role"], "<br>";
};
};
echo "-----</br>";

foreach ($users as $key=>$value){
if ($users[$key]["login"]=="vova"){
$users[$key]["role"]="admin";
};
if ($users[$key]["role"]=="admin"){
echo $users[$key]["login"], "<br>";
};
};

echo "-----</br>";

$count=0;

foreach ($users as $key=>$value){
if ($users[$key]["role"]=="admin"){
$count++;
};
};
echo $count;


echo "-----</br>";

$last_user= "";
$pre_last_user="";

foreach ($users as $key=>$value){
$pre_last_user= $last_user;
$last_user=$users[$key]["login"];


};

echo "Последний пользователь:" , $last_user , "<br>";
echo "Предпоследний пользователь:" , $pre_last_user , "<br>";

$players = [
    ['name' => 'test name', 'point' => 1],
    ['name' => 'test name 2', 'point' => 3],
    ['name' => 'test name 3', 'point' => 5]
];


function my_array_column(array $arrr, string $column): array
{  $result = [];
foreach ($arrr as $key=>$value) {
$result[] = $value[$column] ;
//вариант 2
//$result[] = $arrr[$key][$column] ;
}
return $result;
};

$points=[];
$points=my_array_column($players , "point");
var_dump($points);
?>
