<?php

    $employees = array(
        array(
            "name" => "John Doe",
            "title" => "Programmer",
            "salary" => "60000",
        ),
        array(
            "name" => "Anthony Perez",
            "title" => "Programmer",
            "salary" => "72000"
        ),
        array(
            "name" => "Arthur Morgan",
            "title" => "Cowboy",
            "salary" => "12345"
        ),
        array(
            "name" => "Amy Twin",
            "title" => "Manager",
            "salary" => "132000"
        ),
    );

    foreach($employees as $employee){
        echo $employee['name'] . "(" . $employee['title'] . ") annual salary is $" . 
        $employee['salary'] . " and earns $" . ($employee['salary'] / 12) . "/mo \n";
    }
?>