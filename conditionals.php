<?php
    # CONDITIONALS

    /*
     * ==
     * === - evaluates data type
     * <
     * >
     * !=
     * !== - evaluates data type
    */

    $num = 6;

    if($num == 5){
        // echo "$num passed";
    } else if($num == 6){
        // echo 'num is 6';
    } else {
        // echo "$num did not pass";
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
        xor  - exclusive or, will run if only one of the statements is true, not both
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
        case 'green' && 1 === 1:
            echo 'Your favorite color is green';
        break;
        default:
            echo 'Your favorite color something else';
    }

?>