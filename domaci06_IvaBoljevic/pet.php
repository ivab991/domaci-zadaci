<?php
session_start();

if (isset($_POST['petName']) && !empty($_POST['petName'])) {
    $petName = $_POST['petName'];
    $_SESSION['petName'] = $petName;
    header("Location: result.php");
}

?>

<!doctype html>

<html>

<head>
    <title>Pet Page</title>
</head>

<body>

    <h1><b>Harry Potter Quiz!</b></h1>

    <div>
        <form action="pet.php" method="POST"> What pet would you bring with you in Hogwarts? <br /><br />

            <div>
                <input type="radio" name="petName" value="Owl"> Owl <br>
                <input type="radio" name="petName" value="Cat"> Cat <br>
                <input type="radio" name="petName" value="Spider"> Spider <br>
                <input type="radio" name="petName" value="Toad"> Toad <br> <br>
                <input type="submit" name="submit" value="Continue">
            </div>
    </div>

</body>

</html>