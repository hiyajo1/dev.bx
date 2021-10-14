<?php
require "movies (1).php";
function checkAge($movies)
{
    $r_age=readline();
    if (is_numeric($r_age))
    {
        if ((intval($r_age) == $r_age) && ($r_age >= 0))
        {
            $count=0;
            foreach($movies as $movie)
            {

                if ($r_age >= $movie['age_restriction'])
                {
                    printMessage($count++  . formatTodo($movie));
                }
            }
        }
        else
        {
            echo "Not negative/float number!";
        }
    }
    else
    {
        echo "Not numeric!";
    }
}
function formatTodo(array $movie): string
{
    return ". {$movie['title']} ({$movie['release_year']}), {$movie['age_restriction']}+, Rating-{$movie['rating']}";
}
function printMessage(string $message): void
{

        echo $message . "\n";


}
checkAge($movies);



