<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>PHP Project</h1>
    <?php echo" Welcome to php";?>
</body>
</html>
<br>
PHP comments
<br>
<?php
#single line comment # start hoy
//product price calculation start
$first_price =10;//storing first price
$second_price =20;//storing second price
$total_price = $first_price + $second_price;//calculating total price
echo $total_price;
//product price calculation end

/*first comment
second comment*/ # multiline comment
?>
<br>
PHP Constants
<br>
<?php
define("NAME","Jenia");
define("AMOUNT", 20 );
echo NAME; 
echo "<br>";
echo AMOUNT;
?>
<br>
<?PHP
define( "NAMEE", "Raj");
$amount = 20;
echo "Your amount is: $amount";
?>
<br>
<?php
define("NAMEEE", "Jenii");
$amountt =20;
$text ="amountt";
echo "your amount is : ". $$text;
?>
<br>
PHP Echo Vs Print
<br>
<?php
echo"Raj"
?>
<br>
<?php
echo 45;
?>
<br>
<?php
// print 45;
// echo print er theke first tai echo bebohar kora hoy and jokhon print bebohar kori tokhon o kichu return kore but echo return kore na. ex:
$test =1;
$test = print("Hello"); //1
?>
<br>
<?php
echo "Hello","I","am","Jenia";
echo "<br>";
echo $test ;
?>
<br>
<?php
echo '<h1 class ="text-color"> Jenia<h1>';
?>
<br>
<?php
echo "<h1 class =\"text-color\"> Jenia<h1>";
?>
<?php
$name = "Jenia";
echo "<h1>" .$name ."</h1>";
echo "<h1> $name </h1>";
?>
<br>
Data Types
<br>
<?php
$name = 22.22;//string
echo $name;
?>
<br>
<?php
$name = "Raj";
$name = '';
echo $name;
?>
<br>
<?php
$amount = 100;
$amount = null;
?>
<br>
PHP VAR DUMP
<br>
<?php
$name ="Raj";
var_dump($name); //echo er poriborte vardum
?>
<br>
<?php
$name ="Rajdip";
$num = 20;
var_dump($name);
var_dump($num);
?>
<br>
<?php
$name ="Rajdip";
$num = 20;
$is_admin =  true;
var_dump($name);
echo "<br>";
var_dump($num);
echo "<br>";
var_dump($is_admin); //ekta variable ei dite pari ex: var_dump ($name, $num)
?>
<br>
Printf  1
<br>
<?php
$name = "Jenia";
$new_name =  ucwords($name);
echo "Hello $new_name";
//printf("Hello $name");
?>
<br>
<?php
$name = "Jenia";
//$new_name =  ucwords($name);
//echo "Hello $new_name";
//echo "Hello $new_name";
printf("Hello $name");
?>
<br>
<?php
$name = "Jenia";
//$new_name =  ucwords($name);
//echo "Hello ucwords($name)";
//echo "Hello " .ucwords($name);
printf("Hello  %s" ,$name);
?>
<br>
<?php
$name = "Jenia";
$school_name ="test1";
//$new_name =  ucwords($name);
//echo "Hello ucwords($name)";
//echo "Hello " .ucwords($name);
printf("Hello  %s My school Name : %s" ,$name, $school_name);
?>
<br>
PRINTF CLASS 2
<br>
<?php
$amount =100;
printf ("Amount: %d", $amount);
?>
<br>
<?php
$amount =10.25;// . dile %f(floating dite hobe)(intiger  %d)(string %s) (%5 holo binary value) (octal er jonno %o)
printf ("Amount: %f", $amount);
?>
<br>
<?php
$amount =100;
printf ("Amount: %d", $amount);
?>
<br>
<?php
$test =97;//(ascii value)
printf ("Amount: %c", $test);//(ascii test a %C value dite hoy)
?>
<br>
<br>
<?php
$test =10;
$test2 = 20;
printf ("Amount: %d Another Amount is: %d", $test, $test2);
?>
<br>
<?php
$first_name = "Raj";
$last_name ="Majumdar";
printf("Your First Name: %s And Last Name: %s", $first_name, $last_name);
?>
<br>
<?php
$amount = 10.25356;
printf('Your amount is: %.0f', $amount);
?>
<br>
<?php
$name ="Rajdip"; //right align . output 10 ta show korbe. word na thakle space dekhabe. left align dile left side  a space dekhabe
printf("[%10s]", $name);
?>
<br>
<?php
$name ="Rajdip"; //right align . output 10 ta show korbe. word na thakle space dekhabe. left align dile left side  a space dekhabe. left align er jonno - dite hobe
printf("[%-10s]", $name);
?>
<br>
<?php
$name ="Rajdip"; //right align . output 10 ta show korbe. word na thakle space dekhabe. left align dile left side  a space dekhabe. left align er jonno - dite hobe. '* diye dile output a gap ba space gulo star diye vorat hoye jabe
printf("[%'*10s]", $name);
?>
<br>
ARITHMATIC OPERATOR
==========
+
-
*
/
%
**
<br>
<?php
$num = 3+5;
echo ($num);
?>
<br>
<?php
$num = 3+5;
var_dump($num);
?>
<br>
<?php
$num = 7-5;
echo($num);
?>
<br>OR<br>
<?php
$first_num = 9;
$second_num = 7;
$num = $first_num - $second_num ;// * DIYE GUN BUJHAY . / DIYE VAGFOL. % DIYE VAGSESH. **(EXPOTENTIAL OPERATOR) DIYE POWER BUJHAY
echo($num);
?>
<br>
ASSIGNMENT OPERATOR 
/*
=
+=
-=
*=
/=
%=
*/
<br>