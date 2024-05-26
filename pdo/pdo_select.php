<?php

$conn = new PDO("mysql:dbname=pi_univesp;host=localhost", "root", "");

$stmt = $conn->prepare("SELECT * FROM cadastro_cliente ORDER BY client_id");

$stmt->execute();

$results = $stmt->fetchAll(PDO::FETCH_ASSOC);

foreach ($results as $row)
{
    foreach ($row as $key => $value)
    {
        echo "<strong>".$key.":</strong>".$value."<br>";
    }
    echo "=====================================<br>";
}

