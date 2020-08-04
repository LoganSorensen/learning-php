<?php
    // single line comment
    # single line comment
    /*
        multiline
        comment
    */

    // the main difference between echo and print is that print returns a value, so it can be used in expressions
    // echo 'Hello World';
    // print 'Hello World';

    #VARIABLES
    /**
     *  - Prefix $
     *  - Start with a letter or an underscore
     *  - Only letters, numbers, and underscores
     *  - Case sensitive
     */

    #DATA TYPES
    /*
     * Strings
     * Integers
     * Floats
     * Booleans
     * Arrays
     * Objects
     * NULL
     * Resource
     */

    

    $output = 'Hello World!';
    $num1 = 4;
    $num2 = 10;
    $sum = $num1 + $num2;

    $string1 = 'Hello';
    $string2 = 'World';
    // the '\' is used to escape characters
    $string3 = 'They\'re here';

    // the + symbol doesn't concatenate strings in php, instead the . is used
    $greeting1 = $string1 .' '. $string2.'!';
    // double quotes are needed to parse the variables within, single quotes will render the variable names as part of a string
    $greeting2 = '$string1 $string2';
    $greeting3 = "$string1 $string2";

    
    $float1 = 4.4;
    $bool1 = true;

    // constant, only used if the data is never going to change, setting the third parameter to 'true' makes the constant name case-insensitive 
    define('GREETING', 'Hello Everyone', true);
    
    // echo $sum;
    // echo $string3;
    // echo $greeting1;
    // echo $greeting2;
    // echo $greeting3;
    // echo GREETING;
    // echo greeting;
?>