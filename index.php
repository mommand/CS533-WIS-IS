<?php
// array
// Numeric, Associative, multidimentional
$arr_assoc = array(
			'id' => 1 ,
			'name' 	=> 'ahmad',
			'age'	=> '1989/5/24'
			 );

$arr_num   = array(1,'sd',3);

?>

  <ul>
 <?php
  for ($i=0; $i < count($arr_num) ; $i++) { 
  	 ?>
      <li><?php echo $arr_num[$i]; ?></li>
  	 <?php 
  }
 ?>
 </ul>
<?php 





?>