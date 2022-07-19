<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
        This is our first php website

        <?php
            echo " hello world, this is printed using php";
            echo "<br>";
        ?>
        <?php
            echo " hello world, this is printed using php";
            echo "<br>";
        ?>
        <?php
            echo " hello world, this is printed using php";

            $x=34;
            $y=45;
            echo $x;
            echo $y;

            echo $x+$y;
            echo "<br>";

            // Operators in PHP
            
            // Arithmetic Operator
            echo "the value of x and y is ";
            echo $x+$y;
            // similarly for -,*,/

            // for new line
            echo "<br>";


            // Assignment operator
            $z=$x;
            echo "The value of  new variable is ";
            echo $z;
            echo "<br>";
            // $z+=1;
            // $z-=1;
            // $z*=1;
            // $z/=1;


            // Comparison operators
            echo "<h1>Comparison Operators</h1>";
            echo "<br>";
            /*

            the return boolean values

            {>,<,>=,<=,!=,==}

             */

            echo "The value of 1==4 is ";
            // for variables type , value etc use var_dump
            echo var_dump(1==4);
            echo "<br>";

            echo "The value of 1!=4 is ";
            // for variables type , value etc use var_dump
            echo var_dump(1!=4);
            echo "<br>";

            echo "The value of 1<=4 is ";
            // for variables type , value etc use var_dump
            echo var_dump(1<=4);
            echo "<br>";

            echo "The value of 1>=4 is ";
            // for variables type , value etc use var_dump
            echo var_dump(1>=4);
            echo "<br>";


            // Increment and decrement operators
            echo $x++;
            echo "<br>";
            echo ++$x;
            echo "<br>";
            echo $y--;
            echo "<br>";
            echo --$y;
            echo "<br>";

            // pre increment/decrement: update then use
            // post increment/decrement: use and then update


            // Logical Opeartor
            // {and,&&,or,||,xor,!}

            $myVar = true and true;
            echo var_dump($myVar);
            echo "<br>";
            $myVar = false and true;
            echo var_dump($myVar);
            echo "<br>";
            $myVar = true or true;
            echo var_dump($myVar);
            echo "<br>";
            $myVar = true or false;
            echo var_dump($myVar);
            echo "<br>";

            // Data type in PhP

            /*

            i.String
            ii.Integer
            iii.Float
            iv.Boolean
            v.Array
            vi.Object

            */

            echo "<br>Data Types<br>";
            $var="Mansi V Jain";
            echo var_dump($var);
            echo "<br>";
            $var=45;
            echo var_dump($var);
            echo "<br>";
            $var=45.7;
            echo var_dump($var);
            echo "<br>";
            $var=true;
            echo var_dump($var);
            echo "<br>";

            // constants : cannot be changes
            define('Pi',3.14);
            echo Pi;
            echo "<br>";
        ?>

    </div>
</body>
</html>