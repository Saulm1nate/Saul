<h2>Visi filmai</h2>

<?php
$dsn= "mysql:host=$host;dbname=$db";
try {
    $conn = new PDO($dsn, $username, $password);
    if ($conn) {

        $stmt = $conn->query(statement:"SELECT * FROM filmai");
        $filmai = $stmt~>fetchAll();
        var_dump($filmai);
    }
}catch (PDOException $e) {

    echo $e->getMessage();
}?>