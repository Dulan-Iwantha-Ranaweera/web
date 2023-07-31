<html>
    <head>
        <title>Tutorial 12 - PHP</title>
    </head>

    <body>
        <?php
            $firstName = $_POST["fnm"];
            $lastName = $_POST["lnm"];
            $userName = $_POST["usnm"];
            $password = $_POST["pw"];
            $gender = $_POST["gen"];
            $acYear = $_POST["acyear"];
            $phoneNumber = $_POST["phno"];
        ?>

        <table border="1" align="center">
            <tr>
                <td><b>First Name</b></td>
                <td>
                    <?php
                        echo "$firstName";
                    ?>
                </td>
            </tr>
            <tr>
                <td><b>Last Name</b></td>
                <td>
                    <?php
                        echo "$lastName";
                    ?>
                </td>
            </tr>
            <tr>
                <td><b>Username</b></td>
                <td>
                    <?php
                        echo "$userName";
                    ?>
                </td>
            </tr>
            <tr>
                <td><b>Password</b></td>
                <td>
                    <?php
                        echo "$password";
                    ?>
                </td>
            </tr>
            <tr>
                <td><b>Gender</b></td>
                <td>
                    <?php
                        echo "$gender";
                    ?>
                </td>
            </tr>
            <tr>
                <td><b>Academic Year</b></td>
                <td>
                    <?php
                        echo "$acYear";
                    ?>
                </td>
            </tr>
            <tr>
                <td><b>Phone No</b></td>
                <td>
                    <?php
                        echo "$phoneNumber";
                    ?>
                </td>
            </tr>
        </table>
    </body>
</html>