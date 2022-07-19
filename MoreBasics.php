<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>

        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        .container{
            max-width: 80%;;
            background-color:rosybrown;
            color: white;
            margin: auto;
            padding: 23px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Lets Learn about php</h1>
        This is a container
        <?php

        $age=34;
        if($age>18){
            echo "<br>";
            echo "You can go to the party";
            echo "<br>";
        }
        else{
            echo "<br>";
            echo "You cannot go to the party";
            echo "<br>";
        }

        $languages = array("Python","c++","java");
        echo $languages[0];
        echo "<br>";

        echo count($languages);
        echo "<br>";

        // Loops
        // while loop
        $a=0;
        while ($a <= 10) {
            echo "The value of a is: ";
            echo $a++;
            echo "<br>";
        }
        
        $a=0;
        while ($a < count($languages)) {
            echo "Language: ";
            echo $languages[$a++];
            echo "<br>";
        }

        // for loop

        for($i=0;$i<count($languages);$i++){
            echo "Language: ";
            echo $languages[$i];
            echo "<br>";
        }

        // do while(checks condition after first iteration): first execution takes place no matter what

        // for each loop

        foreach ($languages as  $value) {
            echo "The value from for each is: ";
            echo $value;
            echo "<br>";
        }

        // Functions: code that can be run multiple times

        function print5(){
            echo "FIVE";
            echo "<br>";
        }

        print5();
        print5();
        print5();
        print5();
        
        ?>
    </div>
</body>
</html>