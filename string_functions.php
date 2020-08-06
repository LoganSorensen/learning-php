<?php
    # substr()
    # returns a portion of a string

    // $output = substr('Hello', 1, 3);     // ell
    // $output = substr('Hello', -2);       // lo
    // echo $output;

    # strlen()
    # returns the length of a string

    // $output = strlen('Hello world');     // 11
    // echo $output;

    # strpos()
    # finds the first occurence of the specified substring

    // $output = strpos('Hello world', 'o');   // 4
    // echo $output;

    # strrpos()
    # finds the last occurence of the specified substring

    // $output = strrpos('Hello world', 'o');   // 7
    // echo $output;

    # trim()
    #strips whitespace

    // $text = 'Hello world              ';
    // var_dump($text);

    // $trimmed = trim($text);
    // var_dump($trimmed);

    # strtoupper()
    # makes everything uppercase

    // $output = strtoupper('Hello World');
    // echo $output;

    # strtolower()
    # makes everything uppercase

    // $output = strtolower('Hello World');
    // echo $output;

    # ucwords()
    # capitalize every word

    // $output = ucwords('hello world');
    // echo $output;

    # str_replace()
    # replace all occurences of a search string with a replacement

    // $text = 'Hello World';
    // $output = str_replace('World', 'Everyone', $text);
    // echo $output;

    # is_string()
    # check if string

    // $val = 'Hello';
    // $output = is_string($val);
    // echo $output;

    // $values = array(true, false, null, 'abc', 33, '33', 22.4, '22.4','', ' ', 0, '0');

    // foreach($values as $value) {
    //     if(is_string($value)){
    //         echo "{$value} is a string<br>";
    //     }
    // }

    # gzcompress()
    # compress a string

    $string = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime ullam quam, deleniti consequatur repudiandae iusto quae commodi nemo ex fugit quidem nihil consequuntur ab, illo omnis laudantium cumque sapiente voluptas?';

    $compressed = gzcompress($string);
    echo "$compressed<br>";

    $original = gzuncompress($compressed);
    echo $original;

?>