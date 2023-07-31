<html>
    <head>
        <title>Tutorial 13 - PHP</title>
    </head>

    <body>
        <?php
            $studentId = $_POST["sid"];
            $studentName = $_POST["snm"];
            $studentEmail = $_POST["sem"];
            $studentPassword = $_POST["spw"];

            $serverName = "localhost";
            $userName = "root";
            $password = "";
            $database = "university";

            $conn = new mysqli($serverName, $userName, $password, $database);

            if($conn->connect_error)
            {
                die("Database Connection Failed".$conn->connect_error);
            }

            $ins = "insert into students values('$studentId', '$studentName', '$studentEmail', '$studentPassword')";

            if($conn->query($ins) == TRUE)
            {
                echo "Data has been Added Successfully.";
            }
            else
            {
                echo "Record Unable to be Added".$conn->error;
            }
        ?>
    </body>
</html>