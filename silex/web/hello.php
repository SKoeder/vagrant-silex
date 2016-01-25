<?php
echo "Hello World! <br>";
echo "The server time is " . time() . ".<br><hr/>";

for ($i = 0; $i < 10; $i++)
{
    echo $i . " is ";
    
    echo $i % 2 == 0 ? "even" : "odd";
/*  if ($i % 2 == 0)
    {
        echo"even";
    }
    else 
    {
        echo"odd";
    }
*/
    echo"<br>";
}
echo"<hr/>";

$capital = array(
    "Germany" => "Berlin",
    "France" => "Paris",
    "Belgium" => "Brussels");

foreach ($capital as $key => $value)
{
    echo"The capital of $key is " . $value . ".<br>";
}

