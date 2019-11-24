<?php

session_start();

if (isset($_POST['name'])) {
    $name = $_POST['name'];
    $_SESSION['name'] = $name;
    header('Location: house.php');
}

?>

<!doctype html>

<html>

<head>
    <title>Welcome Page</title>
</head>

<body>

    <h1><b>Welcome to Harry Potter Quiz!</b></h1>
    </div>

    </br>
    <div></div>
    <form action="welcome.php" method="POST"> Please enter your name: <br />
        <input type="text" name="name" /><br /><br />
        <input type="submit" name="submit" value="Continue">
    </form>
    </div>
</body>

</html>