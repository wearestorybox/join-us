## About You.

1. Hi,
My name is Ancy E A. I have 2.4 years of experience as a php developer. I am currently working as a freelance php developer. Currently doing projects in codeigniter and laravel. Project in codeigniter name is parvinpardha, am e-commerce platform for selling pardhas online. Project in laravel is Task Management System( TMS) which enables to create task by various roles of employees and can be assigned to different employees in a company. Tasks can be montiored, can check people who are online and also tcheck ask status with communication with each other. I was commiting projects to cpanel.

Before that I was working in Digital Mesh kakkanad. There I was working with Yii2, laravel and experience with shopify. Main project handled was rensup.com which is an international project selling of Antiques, hardware sinks and toilets. I got chance to learn  mysql server queries and yii2 were the additional knowledge I learned from Digital Mesh. Project managemnet tools used were asana and jira. Codes were committed to bitbucket. Experience in working with wordpress for rensup.com.

In 2019  June, I started with calibroz Cyber Campus kalamassery. There I worked with Expense Tracker in codeigniter for forecasting expense of employees using algorithm. Then Api Integration for a mobile app(Android) RENTITT for register clients as caterers, event management and renters.
Next project handled was employee management system for handling employees for a platform in codeigniter.
I took Btech from KMEA Engineering College. Diploma from Govt polytechnic college kalamassery
Currently residing at Alapppuzha Mavelikkara. My father and mother are working as Govt employee. Brother working as Lawyer. Husband working as an accountant.
2. OS – Ubuntu 20.04
   IDE – Visual Studio Code
   Editor – notepad++ and sublime
## Social Profile
1. Github URL -  https://github.com/ancyea
2. LinkedIn profile - www.linkedin.com/in/ancy-ea-75912868

## The real stuff.
1. php 8.0
2. Write a function that takes a number and returns an array of its digits.
   <?php
    class Calculator {
            public function digitarray($num1) {     
                $array1 = str_split($num1);
                echo "<pre>"; 
                echo "Number is ".$num1;
                echo "<br>";
                echo "Resultant array is ";print_r($array1);
                
        } 
}

    $Db_process_obj = new Calculator;
    $Db_process_obj->digitarray(1234568942);
    ?>
3. Write function that translates a text to Pig Latin and back. English is translated to Pig Latin by taking the first letter of every word, moving it to the end of the word and adding ‘ay’. “Join with storybox” becomes “oinjay ithway toryboxsay”.

<?php
        class Calculator {
            public function piglatin($text1) {     
                $outputArr= preg_split("/[-\s:]/", $text1);
                echo "Original String is ".$text1;
                echo "<br>";
                echo "Converted String is ";
                    foreach ($outputArr as $w) {
                    $acronym = $w[0];
                    $piglatinWord = substr($w, 1).$acronym.'ay';
                    echo  $piglatinWord;
                    echo "\n";
                }
            }

            
        }

        $Db_process_obj = new Calculator;
        $Db_process_obj->piglatin("This is a string");
?>
4. Write a function that rotates an array by k elements. For example [1,2,3,4,5,6] rotated by two becomes [3,4,5,6,1,2]. Try solving this without creating a copy of the array.

<?php
class Calculator {
            public function rotate_elements(&$numarray,$key1) {     
                    $arlen = count($numarray);
                    if($key1 <= $arlen)
                    {
                        echo "Key is ".$key1;
                        echo "<br>";
                        echo "<pre>";
                        print_r($numarray);
                        for($i=0;$i<$key1;$i++)
                        {
                        array_push($numarray, array_shift($numarray));
                        }
                        echo "Rotated array is";
                        echo "<br>";
                        echo "<pre>";
                        print_r($numarray);
                }
                    else{
                        echo "Cannot rotate elements";
                    }
            }

    
}

$Db_process_obj = new Calculator;
$numarray = array(45,56,5,78,13);
$key1 = 3;
$Db_process_obj->rotate_elements($numarray,$key1);
?>

