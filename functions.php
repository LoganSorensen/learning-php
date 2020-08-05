<?php
    #FUNCTION - block of code that can be repeatedly called

    /*
     * Camel Case - myFunction()
     * Lower Case - my_function()
     * Pascal Case - MyFunction()
    */

    // Create simple function
    function simpleFunction(){
        echo 'Hello World';
    }

    // run simple function
    // simpleFunction();

    // Function with param
    // parameters can be set to a default value in case they aren't passed in by the function call
    function sayHello($name = 'World'){
        echo "Hello $name<br>";
    }

    // sayHello('Joe');
    // sayHello('Bob');
    // sayHello();

    // Return Value
    function addNumbers($num1, $num2){
        return $num1 + $num2;
    }

    // echo addNumbers(2,3);

    // Passing args by reference

    $myNum = 10;

    // arg passed in by value (default behavior)
    function addFive($num){
        $num += 5;
    }

    // arg passed in by reference using the & (modifies the original value)
    function addTen(&$num){
        $num += 10;
    }

    addFive($myNum);    // value of $myNum will still be 10
    echo "Value: $myNum<br>";  
    addTen($myNum);     // value of $myNum will now be 20
    echo "Value by reference: $myNum<br>"   

?>