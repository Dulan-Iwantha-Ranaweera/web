<html>
    <head>
        <title>Tutorial 11 - PHP</title>
    </head>

    <body>
        <h3> QUESTION 01</h3>
        <?php
            $x = 6;
            $y = 4;
            $sum = $x + $y;
            $diff = $x - $y;
            $prod = $x * $y;
            $div = $x / $y;
            echo "Sum : $sum";
            echo "<br>Difference : $diff";
            echo "<br>Product : $prod";
            echo "<br>Division : $div";
        ?>
        <br><br>

        <h3>QUESTION 02</h3>
        <?php
            for($i = 5; $i < 16; $i++)
            {
                echo "<br>Count : $i";
            }
        ?>
        <br><br>

        <h3>QUESTION 03</h3>
        <?php
            $units = 120;
            $price;
            if($units > 150)
            {
                $price = $units*6.5;
            }
            else if($units > 100)
            {
                $price = $units*5.2;
            }
            else if($units > 50)
            {
                $price = $units*4;
            }
            else
            {
                $price = $units*3.5;
            }
            echo "No of Units : $units";
            echo "<br>Electricity Bill Price : $price";
        ?>
        <br><br>

        <h3>QUESTION 04</h3>
        <?php
            $number = 5;
            switch($number)
            {
                case '1' : echo "Monday"; break;
                case '2' : echo "Tuesday"; break;
                case '3' : echo "Wednesday"; break;
                case '4' : echo "Thursday"; break;
                case '5' : echo "Friday"; break;
                case '6' : echo "Saturday"; break;
                case '7' : echo "Sunday"; break;
                default : echo "Invalid Number"; break;
            }
        ?>
        <br><br>

        <h3>QUESTION 05</h3>
        <?php
            $fruits = array("Mango", "Orange", "Grapes");
            foreach($fruits as $x)
            {
                echo "$x  &nbsp;";
            }
        ?>
    </body>
</html>