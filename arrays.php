<?php
    #Array  - variable that can hold multiple values
    /**
     *  - indexed
     *  - associative
     *  - multi-dimensional
    */

    // Indexed arrays
    // arrays can be written using array() syntax, or by simply using a set of []
    $people = array('Kevin', 'Jeremy', 'Sara');
    $ids = array(23, 55, 12);
    $cars = ['Honda', 'Toyota', 'Ford'];
    // array items can be added/changed using the following syntax:
    $cars[3] = 'Chevy';
    // an item can be added to the end of the array using empty [] as well
    $cars[] = 'BMW';

    $string = 'Hello world';

    // count() returns the length of the array
    // echo count($cars);

    // print_r() prints the entire array
    // print_r($cars);

    // var_dump() displays more information about the variable, including the data type of each item and it's length, useful for debugging
    // var_dump($cars);
    // var_dump($string);
    
    // echo $people[0];
    // echo $ids[2];
    // echo $cars[4];

    // Associative arrays
    $people2 = array('Brad' => 35, 'Jose' => 32, 'William' => 37);
    $ids2 = [22 => 'Brad', 44 => 'Jose', 63 => 'William'];
    // syntax for adding an item to an assoc array:
    $people2['Jill'] = 42;

    // echo $people2['Jose'];
    // echo $ids2[22];
    // echo $people2['Jill'];
    // print_r($people2);
    // var_dump($people2);

    // Multi-Dimensional arrays
    $cars2 = array(
        // name of car - in stock - sold
        array('Honda', 20, 10), 
        array('Toyota', 30, 20), 
        array('Ford', 23, 12), 
    );

    // the first index given is the array we want to reference, the second index refers to the index of the array we've specified
    echo $cars2[1][2];  // will print 20


?>