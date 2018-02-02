<?php
    //PART 5
    # LOOPS - Execute code set number of times

    /*
        For
        While
        Do..While
        Foreach
    */
    # For Loop
    # @params - init, condition, increment

    /* for($i = 5; $i < 10; $i++) {
        echo 'Number '.$i;
        echo '<br>';
    } */

    #While loop
    # @params - condition
    /* $i = 0;
    while($i < 10) 
    {
        echo 'Number '.$i;
        echo '<br>';
        $i++;
    } */

    # Do..while
    # @params - condition
    /* $i = 0;
    do
    {
        echo $i;
        echo '<br>';
        $i++;
    }
    while($i < 10); */

    # Foreach Loop - For arrays
    /* $people = array('Brad', 'Jose', 'William');

    foreach($people as $person) {
        echo $person;
        echo '<br>';
    } */

    // Foreach loop - Associative array
    $people = array('Brad' => 'brad@gmail.com', 'Jose' => 'jose@gmail.com', 'William' => 'will@gmail.com');

    foreach($people as $person => $email ) {
        echo $person.':'.$email;
        echo '<br>';
    }

?>