<?php

//var_dump($_POST);

    if($_POST) {
        $password = $_POST['password'];
        $passwordAgain = $_POST['passwordAgain'];
        if( $password !=  $passwordAgain) {
            echo "Lozinka se ne poklapa!";
            return false;
        }
    }
?>
    
<html>
    <head>
        <title>Registracija</title>
    </head>
    <body>
        <div>
            <table border="1" style="width:100%">
                <thead>
                    <tr>
                        <th>Ime</th> 
                        <td><?= $_POST['name'] ?></td>
                    </tr>
                    <tr>
                        <th>Prezime</th> 
                        <td><?= $_POST['surname'] ?></td>
                    </tr> 
                    <tr> 
                        <th>E-Mail Adresa</th>
                        <td><?= $_POST['email'] ?></td>
                    </tr>
                    <tr>
                        <th>Broj telefona</th>
                        <td>
                            <?php
                                require_once 'f_hide_number.php';

                                echo fHideNum($_POST['telephone']);
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <th>Slika</th>
                        <td><img src="<?php echo $_POST['image'];?>" width="100"></td>
                    </tr>
                    </tr>
                </thead>
            </table>
        </div>
    </body>
</html>