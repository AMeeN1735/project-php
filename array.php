<?php 





//array  fill   ملى المصفوفه

// $array = array_fill(2 ,15 , array("osama" , "ahmed" ,"ali"));

//    echo "<pre>";
//    print_r($array);
//    echo "</pre>"
//araay _fill
// $array = array_fill(2 ,15 , array("osama" , "ahmed" ,"ali"));

//    echo "<pre>";
//    print_r($array);
//    echo "</pre>"





   //array pop
//    $dell= array ("html" ,"css" , "js" ,"python" ,"php " ,"c++");
//    echo "<pre>";

//    print_r($dell);
//    echo "</pre>";
   
//    $deel= array_pop($dell);
//    echo "<pre>";

//    print_r($dell);
//    echo "</pre>";
//    echo  $deel;




//frist delet array
// $dell= array ("html" ,"css" , "js" ,"python" ,"php " ,"c++");
//    echo "<pre>";

//    print_r($dell);
//    echo "</pre>";
   
//    $deel= array_shift($dell);
//    echo "<pre>";

//    print_r($dell);
//    echo "</pre>";
//    echo  $deel;




//adddd array
// $dell= array ("html" ,"css" , "js" ,"python" ,"php " ,"c++");
//    echo "<pre>";

//    print_r($dell);
//    echo "</pre>";
   
//    $deel= array_unshift($dell , "c#" , "xml" );
//    echo "<pre>";

//    print_r($dell);
//    echo "</pre>";
//    echo  $deel;




// مصفوفه ترابطيه
// $aray= array("ahmed" , "ali", "aseel" , "noaman");
// echo "<br";
// echo "<pre";
// print_r($aray);
// echo "</pre>";
// array_keys($aray);
// echo '<pre>';
// echo '<br>';




// تقسيم  المصفوفه باستخدام array_chunk   وبعض دوال المصفوفات   
// $section=["ag"=>"osama", "ad" =>"esmaill", "as"=>"ebrahem" , "az"=>"kassem"];
// echo '<pre>';
// print_r(array_chunk($section ,2 , true ));
// // print_r($section);
// echo '</pre';

// echo '<pre>';
// print_r(array_change_key_case($section , CASE_UPPER));
// echo '</pre';


// $keys= ["A", "B" , "C" , "D" ];
// $values= ["Ahmed", "saaed" , "kasem", "solyman"];
// echo '<pre>';
// print_r(array_combine($keys ,$values));
// echo '</pre>';

// $cont= ["A" , "A" , "M" , "A" , "N"];
// echo '<pre>';
// print_r(array_count_values($cont));
// echo '</pre>';




//دوال ال array  tفي index
// $values= ["Ahmed", "saaed" , "kasem", "solyman" , "amaar" ,["eman" , "salwa"]] ;
// echo '<pre>';
// print_r($values);

// print_r(array_reverse($values , true));
// echo '</pre>';

// $section=["ag"=>"osama", "ad" =>"esmaill", "as"=>"ebrahem" , "az"=>"kassem"];
// echo '<pre>';
// print_r(array_flip($section));
// echo '</pre>';

// $serch=[ "2" ,5 , 6 ,0 ,1 ,2];
// if(in_array("2" , $serch , true)){
// echo "the element is found";

// }
// '<br>';
// $cours =["js"=>100 , "php" =>40 ,"python" =>80 , "c++"=>200];
// if(array_key_exists("c++",$cours)){
//    echo "the course is found and price is : " .$cours["c++"];
// }
// '<br>';





//للبحث عن عنصر
// $value= ["Ahmed", "saaed" , "kasem","ameen" ,"solyman" , "amaar" ,"ameen","eman" , "salwa"] ;
// echo '<pre>';
// print_r(array_keys($value));
// echo '</pre>';
// echo '<pre>';
// print_r(array_keys($value , "ameen$"));
//  echo '</pre>';





// الجمع والضرب في  array
// $pro=[10 ,2, 4 , 7 ];
// echo array_sum($pro);
// "<pre>";
// "<br";
// // echo array_product($pro);
// '</pre>';
// echo array_product($pro);
// "</br";
// echo array_product($pro);







//دالة الدمج في المصفوفات array_merge

$mergg=["one"=>"php", "tow"=>"python" , "three"=>"css"];
$mergee=["one"=>"html" , "four"=>"js"];
echo '<pre>'; 
print_r(array_merge($mergg ,$mergee));
echo '</pre>';

$merg1=[10 =>"c++" , 20 =>"hava" , 30 =>"php"];
$merg2=[40 =>"python", 50 =>"go"];

echo '<pre>'; 
print_r(array_merge($merg1,$merg2 ));
echo '</pre>';


$rep=[10 =>"c++" , 20 =>"hava" , 30 =>"php"];
$rep2=[40 =>"python", 10 =>"go"];

echo '<pre>'; 
print_r(array_replace($rep,$rep2));
echo '</pre>';


$num=["A","B","C","D"];
echo $num[array_rand($num)] ,"<br>";
// shuffle($num);


?>