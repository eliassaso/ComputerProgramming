<!DOCTYPE html>
<html>

<body>

    <h1>PHP</h1>

    <?php

    print "<h2>1 - Syntax</h2>";
    print "<br>";
    print "Hola Mundo";
    print "<br>";
    echo "Hola Mundo con echo";
    print "<br>";
    echo "Hola Mundo con ECHO";
    print "<br>";
    echo "hola ", "mundo";
    // print "hola",

    print "<h2>*****</h2>";

    print "<h2>2 - Variables and types</h2>";
    print "<br>";
    $number = 123;
    $color = "red";
    var_dump($number);
    print "<br>";
    var_dump($color);
    print "<br>";
    print($color);
    ?>


    <h3>2.1 - String</h3>
    <?php

    $color = "red";
    echo "My car is " . $color . "<br>";

    print "<br>";
    echo "My dog is $color";
    // ECHO "My House is " . $COLOR . "<br>";
    /* echo "My House is " . $COLOR . "<br>";*/

    print "<h3>2.2 - number</h3>";
    $x = 1;
    $y = 2;
    echo $x + $y;

    print "<h3>2.3 - var_dump</h3>";
    print "<br>";
    $x = 10.12;
    var_dump($x);
    print "<br>";
    $cars = array("Axel", "Erving", "Hector");
    var_dump($cars);

    print "<br>";
    echo "name: ", print_r($cars);

    print "<br>";
    echo "name: ".$cars[1];
    print "<br>";
    echo "name: $cars[1]";

    print "<h3>2.4 - Object</h3>";

    class Car
    {
        private $color;
        private $modelo;

        public function __construct($color, $modelo){
            $this->color = $color;
            $this->modelo = $modelo;
        }

        public function message(){
            return "My car is a " . $this->color . " " . $this->modelo;
        }

    }

    $myCar = new Car("Toyota","2019");
    print "<br>";
    var_dump($myCar);
    print "<br>";
    echo $myCar->message();

    print "<h2>3 - String Utilities</h2>";
    echo strlen("elias");

    print "<br>";
    echo str_word_count("elias sanchez");

    print "<br>";
    echo strrev("elias sanchez");

    print "<br>";
    echo str_replace("sanchez", "solis" , "elias sanchez");
    print "<br>";
    echo str_replace("sanchez", "", "elias sanchez");

    print "<h2>4 - If</h2>";
    $x = 100;
    $y = 50;

    //if($x == 100 or $y == 50)
    if ($x == 100 || $y == 50)
    {
        echo "yes";
    } else {
        echo "no";
    }


    ?>



</body>

</html>