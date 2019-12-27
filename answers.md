## About Me
1.

My name is mahita n.s from manjummel , completed btech in IT from toch institute of science and technolgy in 2015
My family consist of father,mother,brother and me.my father is a driving school master and mother is a housewife,
and my brother working in merchant navy.
after my graduation i have done a 6 month course in php.I have 2yrs experience in php,codeigniter and Mysql.

2.

I have knowledge in Windows and Linux environment .IDE used are NetBeans.editor is notepad++.

## Social Profile

 1. LinkedIn profile = Mahita n s , https://www.linkedin.com/in/mahita-n-s-b0ba78137/
 
 ## The real stuff.
 
 1. codeigniter,xampp,angular
 
 2. Write a function that takes a number and returns an array of its digits.
 
 <?php
 
  function Nreturn($num) 
{
  $array  = array_map('intval', str_split($num));
  var_dump($array);

}
 Nreturn(42345);
 
 
 4.Write a function that rotates an array by k elements
 
 <?php  

function Rotatearray(&$arr, $n) 
{ 
    $temp = $arr[0]; 
    for ($i = 0; $i < $n - 1; $i++) 
        $arr[$i] = $arr[$i + 1]; 
  
    $arr[$i] = $temp; 
} 
  

function lRotate(&$arr, $d, $n) 
{ 
    for ($i = 0; $i < $d; $i++) 
       Rotatearray($arr, $n); 
} 

function printArray(&$arr, $n) 
{ 
    for ($i = 0; $i < $n; $i++) 
        echo $arr[$i] . " "; 
} 
  

$arr = array( 1, 2, 3, 4, 5, 6, 7 ); 
$n = sizeof($arr); 
  
// Function calling 
lRotate($arr, 2, $n); 
printArray($arr, $n); 
  
?>





