<html>
    <head>
        <title>Tutorial 13 - PHP</title>
    </head>

    <body>
        <?php
            $serverName = "localhost";
            $userName = "root";
            $password = "";
            $database = "university";

            $conn = new mysqli($serverName, $userName, $password, $database);

            if($conn->connect_error)
            {
                die("Database Connection Failed".$conn->connect_error);
            }

            $dis = "select * from students";

            $result = $conn->query($dis);

            if($result->num_rows > 0)
            {
                while($row = $result->fetch_assoc())
                {
                    echo "<b>ID:</b> " .$row["stuId"]. " &nbsp;&nbsp;<b>Name:</b> " .$row["stuName"]. " &nbsp;&nbsp;<b>Email:</b> " .$row["stuEmail"]. " &nbsp;&nbsp;<b>Password:</b> " .$row["stuPassword"]. "<br>";
                }
            }
            else
            {
                echo "There are no records to be displayed";
            }
        ?>
    </body>
</html>