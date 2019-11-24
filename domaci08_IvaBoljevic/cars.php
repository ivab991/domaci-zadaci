<?php

$host = "127.0.0.1";
$username = "root";
$password = "";
$databaseName = "domaci8";

$dbConnection = new mysqli($host, $username, $password, $databaseName);
if ($dbConnection->connect_error) {
    die("Failed to connect to database: ($dbConnection->connect_error)");
}

$sql = "SELECT * FROM cars";
$result = $dbConnection->query($sql);

?>

<html>

<head>
    <title>Table of cars</title>
</head>

<body>
<h1>Table of cars</h1>

<div>
    <table border="1" style="width:100">
    <thead>
        <tr>
            <th>ID</th>
            <th>Manufacturer</th>
            <th>Model</th>
            <th>Transmission</th>
            <th>Engine cubic</th>
            <th>Fuel type</th>
            <th>House Power</th>
        </tr>
    </thead>
<tbody>
    <?php while($cars = $result->fetch_assoc()): ?>
        <tr>
            <td><?= $cars['id'] ?></td>
            <td><?= $cars['manufacturer'] ?></td>
            <td><?= $cars['model'] ?></td>
            <td><?= $cars['transmission'] ?></td>
            <td><?= $cars['engine_cubic'] ?></td>
            <td><?= $cars['fuel_type'] ?></td>
            <td><?= $cars['horse_power'] ?></td>
        </tr>
    <?php endwhile; ?>
</tbody>
    </table>

    </div>
</body>

</html>