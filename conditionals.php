<?php
    # CONDITIONALS

    /*
     * ==
     * === - evaluates data type
     * <
     * >
     * !=
     * !==
    */

    $num = 6;

    if($num == 5){
        // echo 'passed';
    } else if($num == 6){
        // echo 'num is 6';
    } else {
        // echo 'did not pass';
    }

    # NESTING IF

    $num = 5;

    if($num > 4){
        if($num < 10) {
            // echo "$num passed";
        }
    }

    /*
        LOGICAL OPERATORS
        and &&
        or  ||
        xor
    */

    if($num > 4 XOR $num < 10){
        // echo "$num passed";
    } else {
        // echo "$num failed";
    }

    # SWITCH

    $favColor = 'green';

    switch($favColor){
        case 'red':
            echo 'Your favorite color is red';
        break;
        case 'blue':
            echo 'Your favorite color is blue';
        break;
        case 'green':
            echo 'Your favorite color is green';
        break;
        default:
            echo 'Your favorite color something else';
    }

?>