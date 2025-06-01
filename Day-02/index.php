<!DOCTYPE html>
<html lang="en">
<body>
    <?php

        // Variables & Data types
        //String
        $name = "Ali Alizadah";
        //Or you can specific the type by casting
        settype($name, "string");
        $NAME = "Jamil Jamili";
        //These two variables aren't same.
        // Integer
        //Or you can specific the type by casting
        $age = 25;

        settype($age, "integer");
        // Double/Float
        $score = 89.9;
        //Boolean
        $isSingle = true;
        var_dump($name, $age, $score, $isSingle);

        echo "<h3> Name :$name Age:  $age Score: $score  isSingle $isSingle</h3>";

        //Array
        $names  = ["Ali", "Karim", "Kamal"];
        $name   = ["Ali", "Karim", "Kamal"];
        $ages   = [23, 32, 24];
        $scores = [88, 87, 98];

        //Object
        class Car
        {
            public $model;

        }
        $myCar        = new Car();
        $myCar->model =
            "The model of our car is :" . "Benz";
        echo $myCar->model;
        var_dump($myCar);

        //Null - A variable with no value.
        $x = null;
        var_dump($x);

        //Resource Special variables that hold references to external resources like database connection.
        $file = fopen("ex.txt");
        var_dump($file);

        //Constants define and const
        define("carColor", "blue");
        
    ?>
</body>
</html>
