<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php project</title>
</head>
<body>
    <!--php practice -->
    <?php
        echo "<h1>Variable Asingment</h1>";
        $a = 10;
        $b = 20;
        echo "the value of a is $a <br>";
        echo "the value of b is $b <br>";

        // arithmatic operator
        echo "<h1>Arithmatic operator</h1>";
        echo "The value of a + b is ";
        echo $a + $b;
        echo "<br>";
        echo "The value of a - b is ";    
        echo $a - $b;
        echo "<br>";
        echo "The value of a * b is ";
        echo $a * $b;
        echo "<br>";
        echo "The value of a / b is ";
        echo $a / $b;
        echo "<br>";
        echo "The value of a % b is ";
        echo $a % $b;
        echo "<br>";
        echo "The value of a ** b is ";
        echo $a ** $b;
        echo "<br>";

        // comparison oparetor
        echo "<h1>Comparison operator</h1>";
        echo "The value of a == b is ";
        // var_dump is used to print the data type and value
        echo var_dump($a == $b);
        echo "<br>";
        echo "The value of a != b is ";
        echo var_dump($a != $b);
        echo "<br>";
        echo "The value of a <> b is ";
        echo var_dump($a <> $b);
        echo "<br>";
        echo "The value of a > b is ";
        echo var_dump($a > $b);
        echo "<br>";
        echo "The value of a < b is ";
        echo var_dump($a < $b);
        echo "<br>";
        echo "The value of a >= b is ";
        echo var_dump($a >= $b);
        echo "<br>";
        echo "The value of a <= b is ";
        echo var_dump($a <= $b);
        echo "<br>";

        // increment AND decrement oparetor
        echo "<h1>Increment and decrement operator</h1>";
        echo "The value of a++ is ";
        echo $a++;
        echo "<br>";
        echo "The value of a-- is ";
        echo $a--;
        echo "<br>";
        echo "The value of ++a is ";
        echo ++$a;
        echo "<br>";
        echo "The value of --a is ";
        echo --$a;
        echo "<br>";

        // logical oparetor
        echo "<h1>Logical operator</h1>";
        echo "The value of (a==b) && (a<b) is ";
        echo var_dump(($a == $b) && ($a < $b));
        echo "<br>";
        echo "The value of (a==b) || (a<b) is ";
        echo var_dump(($a == $b) || ($a < $b));
        echo "<br>";
        echo "The value of !(a==b) is ";
        echo var_dump(!($a == $b));
        echo "<br>";

        // assignment oparetor
        echo "<h1>Assignment operator</h1>";
        $newVar = $a;
        $newVar += 2;
        echo "The value of newVar is ";
        echo $newVar;
        echo "<br>";
        $newVar -= 2;
        echo "The value of newVar is ";
        echo $newVar;
        echo "<br>";
        $newVar *= 2;
        echo "The value of newVar is ";
        echo $newVar;
        echo "<br>";
        $newVar /= 2;
        echo "The value of newVar is ";
        echo $newVar;
        echo "<br>";
        $newVar %= 2;
        echo "The value of newVar is ";
        echo $newVar;
        echo "<br>";

        // string oparetor
        echo "<h1>String operator</h1>";
        $str1 = "Hello";
        $str2 = "World";
        echo "The value of str1 . str2 is ";
        echo $str1 . $str2;
        echo "<br>";
        echo "The value of str1 .= str2 is ";
        echo $str1 .= $str2;
        echo "<br>";
 
        // array oparetor
        echo "<h1>Array operator</h1>";
        $arr1 = array('a', 'b', 'c');
        $arr2 = array('d', 'e', 'f');
        echo "The value of arr1 + arr2 is ";
        echo var_dump($arr1 + $arr2);
        echo "<br>";
        echo "The value of arr1 == arr2 is ";
        echo var_dump($arr1 == $arr2);
        echo "<br>";
        echo "The value of arr1 === arr2 is ";
        echo var_dump($arr1 === $arr2);
        echo "<br>";
        echo "The value of arr1 != arr2 is ";
        echo var_dump($arr1 != $arr2);
        echo "<br>";
        echo "The value of arr1 <> arr2 is ";
        echo var_dump($arr1 <> $arr2);
        echo "<br>";
        echo "The value of arr1 !== arr2 is ";
        echo var_dump($arr1 !== $arr2);
        echo "<br>";

        // conditional statement
        echo "<h1>Conditional statement</h1>";
        $age = 18;
        if($age > 18){
            echo "You can drink";
        }
        elseif($age == 18){
            echo "You are 18";
        }
        else{
            echo "You can't drink";
        }
        echo "<br>";

        // switch statement
        echo "<h1>Switch statement</h1>";
        $favColor = "red";
        switch($favColor){
            case "red":
                echo "Your favorite color is red";
                break;
            case "blue":
                echo "Your favorite color is blue";
                break;
            case "green":
                echo "Your favorite color is green";
                break;
            default:
                echo "Your favorite color is neither red, blue, nor green";
        }
        echo "<br>";

        // loop
        echo "<h1>Loop</h1>";
        $i = 0;

        echo "<h3>While loop</h3>";
        while($i < 10){
            echo $i;
            echo "<br>";
            $i++;
        }
        echo "<br>";

        $i = 0;
        echo "<h3>Do-while loop</h3>";
        do{
            echo $i;
            echo "<br>";
            $i++;
        }while($i < 10);
        echo "<br>";

        echo "<h3>For loop</h3>";
        for($i = 0; $i < 10; $i++){
            echo $i;
            echo "<br>";
        }
        echo "<br>";

        echo "<h3>Foreach loop</h3>";
        $arr = array("a", "b", "c", "d", "e");
        foreach($arr as $value){
            echo $value;
            echo "<br>";
        }
        echo "<br>";

        // function
        echo "<h1>Function</h1>";

        function print5(){
            echo "Hello";
        }
        print5();
        echo "<br>";
        function printNumber($num){
            echo $num;
        }
        printNumber(5);
        echo "<br>";
        function sum($num1, $num2){
            return $num1 + $num2;
        }
        echo sum(5, 6);
        echo "<br>";

        // class 
        echo "<h1>Class</h1>";
        
        class Car{
            public $name;
            public $color;
            public function __construct($name, $color){
                $this->name = $name;
                $this->color = $color;
            }
            public function message(){
                return "My car is a " . $this->color . " " . $this->name . ".";
            }
        }
        $myCar = new Car("Volvo", "red");
        echo $myCar->message();
        echo "<br>";

    ?>

 //

</body>
</html>
