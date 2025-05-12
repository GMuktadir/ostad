<?php
//GOLAM MUKTADIR
//---------------Module 2--------------------
// Project 1: Terminal-Based Quiz application
//-------------------------------------------
$score=0;
echo"=======Quiz application===========\n";
//Question no:1
echo "1. What is the name of national bird of Bangladesh ?\n";
echo "[a] Crow\n[b] Pegion\n[c] Magpie\n";
echo "option:";
$choice=trim(fgets(STDIN));
if($choice=='a'){
    echo "Wrong answer !";
    
}elseif($choice=='b'){
    echo "Wrong answer !";
}elseif($choice=='c'){
    echo "Correct answer..";
    $score++;
}
else{
    echo "Wrong option..";
}
//Question no:2
echo "\n2. What is the sum of interior angles in a triangle ? \n";
echo "[a] 90 degree \n[b] 180 degree\n[c] 120 degree\n";
echo "option:";
$choice=trim(fgets(STDIN));
if($choice=='a'){
    echo "Wrong answer !";
}elseif($choice=='b'){
    echo "Correct answer..";
    $score++;
}elseif($choice=='c'){
    echo "Wrong answer !";
}
// Question no:3
echo "\n3. Which one of the following is not a prime number ?\n";
echo "[a] 51\n[b] 83\n[c] 29\n";
echo "option:";
$choice=trim(fgets(STDIN));
if($choice=='a'){
    echo "Correct answer..";
    $score++;
}elseif($choice=='b'){
    echo "Wrong answer !";
}elseif($choice=='c'){
    echo "Wrong answer !";
}
//Result
echo"\n----Quiz is finished----\n";
echo "\nResult: You got $score out of 3";

?>