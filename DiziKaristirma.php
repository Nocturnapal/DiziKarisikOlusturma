<?php 

$mapped_arr=array_map(function($e){
global $planets;
if($e=="")
{
    return null;
} else {
    return $e;
}
          
},$planets);

$filtered_arr=array_filter($mapped_arr,function($e){
      
      return $e !=null ? $e : false;

});


function randomArr($i)
{
     global $filtered_arr;
     $result=array_flip($filtered_arr);
     return array_rand($result,$i);
}
echo "<pre>";
print_r(randomArr(2));
print_r(randomArr(3));
print_r(randomArr(2));
print_r(randomArr(4));
print_r(randomArr(5));

?>
