<?php 
include("dashboard.php");
function check()
{
    $n=10;
    $c=0;
    $q1=document.quiz.question1.value;
    $q2=document.quiz.question2.value;
    $result=document.getElementById('result');
    $quiz = document.getElementById('quiz');
    if ($q1=="Adib"){$c++;}
    if ($q2=="Watching Anime"){$c++;}
    $quiz.style.display="none";

    if($c<=1)
    {
        echo "Your result is".$c*$n."% it is bad";
    }
    else{
        echo "Your result is".$c*$n."% it is good";
    }
}
?>