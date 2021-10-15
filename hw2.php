<?php
require "movies (1).php";
function checkInput($movies)
{
    $age=readline();
    if (!is_numeric($age))
    {
        echo "Not numeric!";
        return False;
    }
    else
    {
        $age = +$age;
        if (is_int($age) && ($age >= 0))
        {
            checkAge($age,$movies);
        }
        else
        {
            echo "Not negative/float number!";
            return False;
        }
    }
}
function checkAge($age,$movies)
{
    $count=1;
    foreach($movies as $movie)
    {
        if ($age >= $movie['age_restriction'])
        {
            printMessage($count++  . formatTodo($movie));
        }
    }
}
function formatTodo(array $movie): string
{
    return ". {$movie['title']} ({$movie['release_year']}), {$movie['age_restriction']}+, Rating - {$movie['rating']}";
}
function printMessage(string $message): void
{

        echo $message . "\n";


}
checkInput($movies);



