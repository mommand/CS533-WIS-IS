<?php
 // global scope
 // $x = 5;

 // function myfun(){
 //  // scope local
 //  global $x;
 //  $x= 5;
 //  echo $x."<br>";
 // }
 // myfun();
 // echo "outside of function".$x."<br>";
 // $y = 10;
 // $r = 12;
 // function fun2(){
 //   $result = $GLOBALS['y'] + $GLOBALS['r'];
 //   echo $result."<br>";
 // }
 // fun2();
// Numeric Array
// Associative Array
// Multidimentional

$num_arr = array(1,'Ahmad', 60);
$num_arr[3] = 'Male';
// print_r($num_arr);
// echo "<br>";
// var_dump($num_arr);

// echo $num_arr[0]."<br>";
// echo $num_arr[1];
// for
// foreach
// while
// do while
// for($i = 0; $i<count($num_arr); $i++){
//     echo $num_arr[$i]."<br>";
// }
// foreach ($num_arr as $key => $value) {
//     echo $value."<br>";
// }

$assoc_arr = array(
  'id' => 1 ,
  'name'  => 'Ahmad',
  'score' => 60,
  'age'   => 30,
  'gender'=> 'male' 
);
// var_dump($assoc_arr);
// echo $assoc_arr['id'];
// foreach ($assoc_arr as $val) {
//       echo $val."<br>";
// }

// mutidimentional

$std_arr = array(
   array(1,'ahmad',32,'male', array('kabul',5,21,223)),
   array(2,'Ali',33,'male'),
   array(3,'Mariam',24,'Female')
 );
echo $std_arr[0][4][1];







?>