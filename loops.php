<?php
    # LOOPS - execture code a set number of times

    /**
     * For 
     * While
     * Do..While
     * Foreach
     */

    # For Loop
    # @params - init, condition, inc

    for($i = 0; $i < 10; $i++){
        // echo 'Number ' . $i;
        // adds a line break
        // echo '<br>';
    }

    # While loop
    # @params - condition

    // $i = 0;

    while($i < 10) {
        // echo $i;
        // echo '<br>';
        $i++;
    }

    # Do...While 
    # @params - condition

    $i = 0;

    do{
        // echo $i;
        // echo '<br>';
        $i++;
    }

    while($i < 10);

    # Foreach Loop - for arrays

    $people = ['Brad', 'Jose', 'William'];

    foreach($people as $person){
        // echo $person;
        // echo '<br>';
    }

    // foreach with an assoc array
    $people2 = ['Brad' => 'brad@gmail.com', 'Jose' => 'jose@gmail.com', 'William' => 'william@gmail.com'];

    foreach($people2 as $person => $email){
        // echo $person. ': '. $email;
        // echo '<br>';
    }

?>