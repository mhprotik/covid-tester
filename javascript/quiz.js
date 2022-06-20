function check()
{
    var c=0;
    var q1=document.quiz.question1.value;
    var q2=document.quiz.question2.value;
    var q3=document.quiz.question3.value;
    var q4=document.quiz.question4.value;
    var q5=document.quiz.question5.value;
    var q6=document.quiz.question6.value;
    var q7=document.quiz.question7.value;
    var q8=document.quiz.question8.value;
    var q9=document.quiz.question9.value;
    var q10=document.quiz.question10.value;
    var result=document.getElementById('result');
    var quiz = document.getElementById('quiz');
    if (q1=="A"){c++}
    if (q2=="A"){c++}
    if (q3=="A"){c++}
    if (q4=="A"){c++}
    if (q5=="A"){c++}
    if (q6=="A"){c++}
    if (q7=="A"){c++}
    if (q8=="A"){c++}
    if (q9=="A"){c++}
    if (q10=="A"){c++}

    quiz.style.display="none";

    if(c<=5)
    {
        result.textContent=`Your result is ${c*10}% .Congratulations, you are safe.`;
    }
    else if(c>5 && c<=6)
    {
        result.textContent=`Your result is ${c*10}% .
        You should maintain precaution. Here is how you do it.
        Maintain social distance.
        Wash your hand with soap and water for 20 seconds.
        Do not touch surfaces out in public.
        Wear mask or cloth face covering when you are out in areas when it is hard to maintain social distance.
        Cover your mouth when you sneeze and use tissue or with your elbow and try not to touch your nose, eyes and mouth.`;


    }
    else{
        result.textContent=`Your result is ${c*10}% .You should go to a hospital!`;
    }
}
