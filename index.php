<?php

echo "Hello World";
$var_name = "Aaron";
echo $var_name;

echo "<br>";
echo "<br>";

$age = 21;
echo $age;

echo "<br>";
echo "<br>";
$mk = "21";
echo $age - $mk;

var_dump($mk);

// Enter fruits
$fruits = array("Apple"," Oranges"," Grapes");
var_dump($fruits);

define("name","Aaron");
$age = 12;
echo name;

echo $age += $mk;

echo "<br>";

$cars = array("Volvo","BMW","Toyota");
echo "I like".$cars[0].", ".$cars[1]." and ".$cars[2].".";

echo count($cars);

echo "<br>";

// Associative Array
$age = array("Peter"=>"35", "Ben"=>" 37", "Joe"=>" 43");
echo "Peter is " .$age['Peter']." years old";

echo "Joe is " .$age['Joe']. "years old";

echo $age['Ben'];

echo "<br>";

// Multidimensional Array
$car = array(

    array("Volvo", 22,18),
    array("BMW", 15,13),
    array("Saab", 5,2),
    array("Land Rover", 17,15)

);

echo $car[1] [0];

echo "<br>";
echo "<br>";

echo $car[1][0].": In stock:".$car[1][1].", sold:".$car[1][2];

echo "<br>";
echo "<br>";

// Control Strutures
$a = 100;
$b = "100";
if($a>$b) {

    echo "Hello World";

}elseif ($a<$b) {
    echo "a is equal to b";
}elseif ($a===$b) {
    echo "A is identical to B";
}
else{
    echo "a is not identical to b";
}

echo "<br>";
echo "<br>";


// SWITCH CONDITION
$favcolor = "white";

switch ($favcolor) {
    case 'red':
        echo "Your favorite color is red!";
        break;

        case 'blue':
            echo "Your favorite color is blue!";
            break;

            case 'green':
                echo "Your favorite color is green!";
                break;
    
    default:
    echo "Your favorite color is neither red, blue, nor green!";
}

echo "<br>";
echo "<br>";

// LOOP
for ($i = 0; $i<=10; $i++) { 
    echo $i;
}

echo "<br>";
echo "<br>";
$cars1 = array("Volvo"," BMW"," Passat"," Volkswagen"," Toyota"," Highlander"," Rangerover"," Honda"," Camry");
$countcars = count($cars1);
for ($c = 0; $c<$countcars; $c++) { 
    echo $cars1[$c];
}

echo "<br>";
echo "<br>";


// WHILE LOOP
$a = 0;
while ($a <= 4) {
    echo "Hello";
$a++;
}

echo "<br>";
echo "<br>";
$x=0;
while ($x < 10) {
    if ($x == 4) {
    break;
    }
    echo $x;
    $x++;
}

echo "<br>";
echo "<br>";
// DO ... WHILE LOOP

$x = 1;

do {
    echo "The number is:" . $x. "<br>";
    $x++;
} while ($x <= 5);


echo "<br>";
echo "<br>";
// FOREAH LOOP
$colors = array("red"," green"," blue", " yellow");
foreach ($colors as $colors => $value) {
    echo $value . "<br>";
}

echo "<br>";
echo "<br>";
$age = array("Peter"=>"35", "Ben"=>" 37", "Joe"=>" 43");
foreach ($age as $x => $val) {
    echo $x. "=" . $val. "<br>";
}


echo "<br>";
echo "<br>";
// FUNCTION
function writeMsg(){
    echo "Hello World!";
} 

writeMsg();

echo "<br>";
echo "<br>";
// FUNCTION
function area(){
$base = 5;
$height = 10;
$triarea = $base * $height / 2;
echo $triarea;
} 

area();


echo "<br>";
echo "<br>";
// PHP FUNCTION ARGUMENTS
function stateName($sname){
    echo "$sname, Nigeria. <br>";
}
stateName("Abuja");
stateName("Plateau");
stateName("Abuja");
stateName("Abia");
stateName("Bauchi");
stateName("Gombe");


echo "<br>";
echo "<br>";
// PHP FUNCTION (Returning Values)
function sum(int $x, int $y){
    $z= $x + $y;
    return $z;
}

echo "5 + 10 =" . sum(5, 10);


echo "<br>";
echo "<br>";
// PHP FUNCTION (String Functions)
echo strlen("Hello world!");

echo "<br>";
echo "<br>";
// PHP FUNCTION
echo str_word_count("Hello World! Good Morning");


echo "<br>";
echo "<br>";
// PHP FUNCTION
echo strrev("Hello World!");


echo "<br>";
echo "<br>";
// PHP FUNCTION
echo strpos("Hello World!","World");

echo "<br>";
echo "<br>";
// PHP FUNCTION
echo str_replace("Hello","Dolly","Hello World!");

echo "<br>";
echo "<br>";
// PHP FUNCTION
echo strtolower("HELLO WORLD");

echo "<br>";
echo "<br>";
// PHP FUNCTION
echo strtoupper("hello world");

echo "<br>";
echo "<br>";
// PHP FUNCTION (DATE FUNCTION)
echo "Today is " .date("Y/m/d"). "<br>";
echo "Today is " .date("Y.m.d"). "<br>";
echo "Today is " .date("Y-m-d"). "<br>";
echo "Today is " .date("l");

echo "<br>";
echo "<br>";
// GLOBAL VARIABLES
$x = 5;
$y = 10;

function myTest(){
    $GLOBALS['y'] = $GLOBALS['x'] + $GLOBALS['y'];
}
myTest();
echo $y;

echo "<br>";
echo "<br>";
echo $_SERVER['PHP_SELF'];

echo "<br>";
echo "<br>";
echo $_SERVER['GATEWAY_INTERFACE'];

echo "<br>";
echo "<br>";
echo $_SERVER['SERVER_ADDR'];

echo "<br>";
echo "<br>";
echo $_SERVER['SERVER_NAME'];

echo "<br>";
echo "<br>";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_REQUEST['fname']);

    if(empty($name)){
        echo "Name is empty";
    }else {
        echo $name;
    }
}


echo "<br>";
echo "<br>";
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $name =$_GET['fname'];

    if(empty($name)){
        echo "Name is empty";
    }else {
        echo $name;
    }
}


echo "<br>";
echo "<br>";
// COOKIE
setcookie("user_name","Guru99",time()+ 3600, '/');
if (count($_COOKIE) > 0) {
    echo "Cookies are enabled.";
}else {
    echo "Cookies are disabled.";
}
echo "the cookie has been set for 60 seconds";

$cookie_name = "user";
$cookie_value = "John Doe";
setcookie($cookie_name, $cookie_value, time()+ (86400 * 30), "/");

echo "<br>";
echo "<br>";
if (!isset($_COOKIE[$cookie_name])) {
    echo "Cookie named" . $cookie_name ." is not set!";
}else {
echo  "Cookie" .$cookie_name . "is set!<br>";
echo "Value is: " .$_COOKIE[$cookie_name];

}

echo "<br>";
echo "<br>";
// CREATING A SESSION
session_start();
$_SESSION["favcolor"] = "green";
$_SESSION["favanimal"] = "cat";
echo "Session variables are set.";


session_destroy();

echo "<br>";
echo "<br>";
// HANDLING ERROR
// $denominator = 0;
// echo 2/$denominator;

echo "<br>";
echo "<br>";
// HANDLING ERROR
$denominator = 0;
if ($denominator !=0) {
    echo 2/$denominator;
}else {
    echo "Cannot divide by zero";// you can also use the die statement. die(follow with the error message you want to display)

}


echo "<br>";
echo "<br>";
function my_error_handler($error_no, $error_msg){
    echo "Error number: [$error_no]";
    echo "Error Description: [$error_msg]";
}
set_error_handler("my_error_handler");
$test = 2;

if ($test>1) {
    trigger_error("An error occured");
}


echo "<br>";
echo "<br>";
function checkNum($number){
    if($number>1) {
        throw new Exception("Value must be 1 or below");
    }
    return true;
}
try {
    checkNum(2);
    echo'If you see this, the number is 1 or below';
    
}

catch(Exception $e) {
    echo 'Message: '.$e->getMessage();
}

echo "<br>";
echo "<br>";
// REGULAR EXPRESSION FUNCTION
$str = "create a database";
$pattern = "/database/i";
echo preg_match($pattern, $str);


echo "<br>";
echo "<br>";
// REGULAR EXPRESSION FUNCTION FOR CHECKING EMAIL
$myemail = "name@company.com";
if (preg_match("/^[a-zA_Z0-9._-]+@[a-zA-Z0-9-]+\.[a-zA-Z.]{2,5}$/",$myemail)) {
    echo $myemail ." is a valid email address";
}else {
    echo $myemail . " is an invalid email address";
}

echo "<br>";
echo "<br>";
// REGULAR EXPRESSION FUNCTION (PREG_MATCH_ALL)
$str = "The rain in SPAIN falls mainly on the plains.";
$pattern = "/ain/i";
echo preg_match_all($pattern, $str);

echo "<br>";
echo "<br>";
// REGULAR EXPRESSION FUNCTION (PREG_MATCH_REPLACE)
$str = "Visit Microsoft!";
$pattern = "/microsoft/i";
echo preg_replace($pattern, "NCWD", $str);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="" method="GET">
    <label for="fname">First Name</label>
        <input type="password" name="fname" placeholder="First Name">
</form>    


</body>
</html>