




<?php




<br>
<?php



<?php


echo $myval;

# การสร้าง Array ใน PHP
$myarray = Array(1,2,3,4);
$myarray2 = [1,2,3,4];
$myarray3[] = 1;
$myarray3[] = 2;
$myarray3[2] = 3;
$myarray3[] = 4;

echo $myarray[0];
echo "<br>"
print_r($myarray2);
var_dump($myarray3);
?>

<?php
<?php
$myarray4 = [
    "name" => "John",
    "age" => 30,
    "city" => "New York";
    0,
    1
];
print_r($myarray4);
foreach ($myarray4 as $key => $value){
    echo "<br>Key: " . $key . " Value: " . $value;
}
foreach ($myarray4 as $value){
    echo "<br>Value: " . $value;
}
$myval = "A";
$myVal = "F";
for($i=0; $i<10; $i++){
    echo $myval++;
    echo "<br>";
}
function myFunction(){
    return "My Function Called";
}

echo MYfuncTION();

$a = 10;
if(a < 10){
    echo "a < 10";
}
else if($a == 10)
    echo "a == 10";
else {
    echo "a > 10";
}
?>

@endsection
