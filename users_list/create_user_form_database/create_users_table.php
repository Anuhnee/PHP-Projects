<?php
    $host = "Simpaticos-iMac.cev.cevmultimedia.com";
    $username = "root";
    $password = "71025211Dew";
    $database = "users_list";

    try{
        $conn = new PDOStatement("mysql:host=$host;dbname=$database", $username, $password);

        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $sql = "CREATE TABLE users (
            id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY,
            firstname VARCHAR(30) NOT NULL,
            lastname VARCHAR(30) NOT NULL,
            email VARCHAR(30) NOT NULL
            )";

            $conn->execute($sql);
    }
    catch(PDOException $e)
    {
        echo "Connection failed: " . $e->getMessage();
    }
?>
