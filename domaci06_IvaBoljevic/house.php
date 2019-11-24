<?php
session_start();

if (isset($_POST['houseName']) && !empty($_POST['houseName'])) {
  $houseName = $_POST['houseName'];
  $_SESSION['houseName'] = $houseName;
  header('Location: professor.php');
}

//Adding You must select an answer
// else {
//   echo "<font color='red'><b>You must select an answer!</b></font>";
// }

?>

<!doctype html>

<html>

<head>
  <title>House Page</title>
</head>

<body>
  <h1><b>Harry Potter Quiz!</b></h1>
  <div>
    <form action="house.php" method="POST"> Please choose your house! <br /> <br />

      <div>
        <table>
          <tr>
            <td>
              <input type="radio" name="houseName" value="Gryffindor"> Gryffindor <br>
              <img src="HP_Houses/Gryffindor.jpg" alt="Gryffindor" width="100" />
            </td>
            <td>
              <input type="radio" name="houseName" value="Slytherin"> Slytherin <br>
              <img src="HP_Houses/Slytherin.jpg" alt="Slytherin" width="100" />
            </td>
          </tr>

          <tr>
            <td>
              <input type="radio" name="houseName" value="Ravenclaw"> Ravenclaw <br>
              <img src="HP_Houses/Ravenclaw.jpg" alt="Ravenclaw" width="100" />
            </td>
            <td>
              <input type="radio" name="houseName" value="Hufflepuff"> Hufflepuff <br>
              <img src="HP_Houses/Hufflepuff.jpg" alt="Hufflepuff" width="100" />
            </td>
          </tr>
        </table>
      </div>
      <br />

      <input type="submit" name="submit" value="Continue">

    </form>
  </div>
</body>

</html>