<?php

//Variabelen aanmaken
$task2 = "Lancering in: ";
$counter = 20;

//Deze variabele wordt gemaakt om het weg te schrijven van de zin
$countdown = "";

//Loop aanmaken
while($counter != 0)
{
    $counter--;
    if($counter != 0)
    {
        $countdown = $task2 . $counter . "". "";
    }
    else
    {
        $countdown = $task2 . $counter;
    }
}
//het wegschrijven
$task2 = $task2 . $countdown;


//For loop die hetzelfde doet als de while loop
$forCountdown = "";
$task3 = "lancering in: ";

for($tell = 19; $tell = -1; $tell--)
{
    if($tell != 0)
    {
        $forCountdown = $task3 . $tell;
    }
    else
    {
        $forCountdown = $task3 . $tell;
    }
}

//Weg schrijven
$task3 = $task3 . $forCountdown;

//Taak 4
$counter = 1;
$task4 = "";
while($counter != 7)
{
    $task4 = $task4."<h".$counter.">Dit is de ".$counter."e iteratie</h".$counter.">";
    $counter ++;
}

//taak 5
//tweede for loop, die het hetzelfde
$task5 = "<table><tr>";
for($tel = 1; $tel != 11; $tel ++)
{
    $task5 = $task5."<td>Dit is de ".$tel."e iteratie</td>";
}
$task5 = $task5."</tr></table>";

//derde while loop en telt af met jaren
$task6 = "";
$age = 18;
while($age != 0)
{
    $jaar = $age + 2001;
    if ($age == 18)
    {
        $task6 = $task6."<p>In ".$jaar." ben ik ".$age." jaar oud</p>";
    }
    else if ($age != 0)
    {
        $task6 = $task6."<p>In ".$jaar." was ik ".$age." jaar oud</p>";
    }
    else
    {
        $task6 = $task6."<p>In ".$jaar." ben ik geboren</p>";
    }

    $age = $age - 1;
}

//derde for loop doet hetzelfde als de vorige maar dan met extra situaties.
$task7 = "";
for ($time = 18; $time != -1; $time--)
{
    $year = $time + 2001;
    if ($time == 0)
    {
        $task7 = $task7."<p>in ".$year." ben ik geboren en was ik een baby</p> ";
    }
    else if($time == 2)
    {
        $task7 = $task7."<p>in ".$year." was ik ".$time." jaar oud en werd ik een peuter.";
    }
    else if($time == 4)
    {
        $task7 = $task7."<p>in ".$year." was ik ".$time." jaar oud en werd ik een kleuter.";
    }
    else if($time == 8)
    {
        $task7 = $task7."<p>in ".$year." was ik ".$time." jaar oud en werd ik een tiener.";
    }
    else if($time == 12)
    {
        $task7 = $task7."<p>in ".$year." was ik ".$time." jaar oud en werd ik een puber.";
    }
    else if($time == 18)
    {
        $task7 = $task7."<p>in ".$year." was ik ".$time." jaar oud en werd ik een adolescent.";
    }
    else if($time == 20)
    {
        $task7 = $task7."<p>in ".$year." was ik ".$time." jaar oud en werd ik een volwassen.";
    }
    else
    {
        $task7 = $task7."<p>In ".$year." was ik ".$time." jaar oud</p>";
    }
}


