<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <div class="container">
        My first php website
        <?php
            echo "HELLO ";
            // single line comment

            /* Multi
            line 
            comment */
            // PHP is dynamically typed
            // php is not case senistive
            $variable1=5 ;
            $variable2=2 ;
            echo "<br>";
            echo $variable1 ;
            echo "<br>";
            echo $variable2 ;
            echo "<br>";

            // Operators
            // arithmetic
            echo "The value of variable1 + variable2 is ";
            echo "<br>";
            echo $variable1+$variable2;
            echo "<br>";
            echo "The value of variable1 - variable2 is ";
            echo "<br>";
            echo $variable1-$variable2;
            echo "<br>";
            echo "The value of variable1 * variable2 is ";
            echo "<br>";
            echo $variable1*$variable2;
            echo "<br>";
            echo "The value of variable1 / variable2 is ";
            echo "<br>";
            echo $variable1/$variable2;
            echo "<br>";
            // Assignment
            $newVar = $variable1;
            // $newVar += 1;
            // $newVar -= 1;
            // $newVar *= 2;
            $newVar /= 2;
            echo "The value of new variable is ";
            echo $newVar;
            echo "<br>";

            // Comparision
            echo "The value of 1==4 is ";
            echo var_dump(1==4);
            echo "<br>";
            echo "The value of 1!=4 is ";
            echo var_dump(1!=4);
            echo "<br>";
            echo "The value of 1>=4 is ";
            echo var_dump(1>=4);
            echo "<br>";
            echo "The value of 1<=4 is ";
            echo var_dump(1<=4);
            echo "<br>";

            // Increment/Decrement
            echo $variable1++;
            echo "<br>";
            echo $variable1;
            // echo $variable1--;
            // echo ++$variable1;
            // echo --$variable1;

            // logical
            // and (&&)
            // or (||)
            // xor
            // !
            echo "<br>";
            // $my_var = (true) and (true);
            $my_var = (false) and (true);
            // $my_var = (true) and (true);
            // $my_var = (true) and (true);
            echo var_dump($my_var);
        ?>
    </div>
</body>
</html>