<?php
    $user = array(
        "info" => array(
            "name" => "Anthony",
            "age" => 27,
            "location" => "Lubbock",
            "education_level" => "College"
            ),
            "Hobbies" => array(
                "Video Games",
                "Streaming",
                "Music"
            )
            );

            echo "My name is " . $user["info"]["name"] . ".\n";
            echo "I am " . $user["info"]["age"] . " years old. \n";
            echo "I live in " . $user["info"]['location']. ".\n";
            echo "My latest education level is " . $user['info']['education_level']. ".\n";

            echo "I enjoy " . $user["Hobbies"][0] . ", " . $user["Hobbies"][1] . ", " . $user["Hobbies"][2].".\n";
?>