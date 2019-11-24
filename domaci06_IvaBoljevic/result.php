<?php
session_start();

?>

<!doctype html>

<html>

<head>
    <title>Result Page</title>
</head>

<body>
    <h1><b>Harry Potter Quiz</b></h1>

    <h2><b>Result</b></h2>

    <div>

        <table border="1" style="width:400">
            <thead>
                <tr>
                    <th>Name</th>
                    <td> <?= $_SESSION['name'] ?></td>
                </tr>

                <tr>
                    <th>House</th>
               <td>
                   <?php
                   if($_SESSION['houseName'] == 'Gryffindor') {
                       echo $_SESSION['houseName'] . "<br>" . "<img src='HP_Houses/Gryffindor.jpg' width='100'/>";
                   } elseif($_SESSION['houseName'] == 'Slytherin') {
                       echo $_SESSION['houseName'] . "<br>" . "<img src='HP_Houses/Slytherin.jpg' width='100'/>";
                   } elseif($_SESSION['houseName'] == 'Ravenclaw') {
                       echo $_SESSION['houseName'] . "<br>" . "img src='HP_Houses/Ravenclaw.jpg' width='100'/>";
                   } elseif($_SESSION['houseName'] == 'Hufflepuff') {
                       echo $_SESSION['houseName'] . "<br>". "<img src='HP_Houses/Hufflepuff.jpg' width='100'/>";
                   }
                   ?>
               </td>
                </tr>

                <tr>
                    <th>Professor</th>
                <td> <?= $_SESSION['professorName'] ?></td>
                </tr>

                <tr>
                    <th>Pet</th>
                    <td> <?= $_SESSION['petName'] ?></td>
                </tr>
            </thead>
        </table>
                </div>
</body>
</html>


