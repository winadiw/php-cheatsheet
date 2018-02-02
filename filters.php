<!-- PART 14 - Filters and Validation -->
<?php 
    // // Check for posted data, INPUT_GET for GET
    // if(filter_has_var(INPUT_POST, 'data')) {
    //     echo 'Data Found';
    // } else {
    //     echo 'No Data';
    // }

    //VALIDATE EMAIL
    // if(filter_has_var(INPUT_POST, 'data')) {
    //     $email = $_POST['data'];
    //     // Remove illegal chars
    //     $email = filter_var($email, FILTER_SANITIZE_EMAIL);
    //     echo $email.'<br>';

    //     if(filter_var($email, FILTER_VALIDATE_EMAIL)) {
    //         echo 'Email is valid';
    //     }
    //     else {
    //         echo 'Email is NOT valid';
    //     }
    // } 

    # FILTER_VALIDATE_BOOLEAN
    # FILTER_VALIDATE_EMAIL
    # FILTER_VALIDATE_FLOAT
    # FILTER_VALIDATE_INT
    # FILTER_VALIDATE_IP
    # FILTER_VALIDATE_REGEXP
    # FILTER_VALIDATE_URL

    # FILTER_SANITIZE_EMAIL
    # FILTER_SANITIZE_ENCONDED
    # FILTER_SANITIZE_NUMBER_FLOAT
    # FILTER_SANITIZE_NUMBER_INT
    # FILTER_SANITIZE_SPECIAL_CHARS
    # FILTER_SANITIZE_STRING
    # FILTER_SANITIZE_URL

    /* $var = 23;
    if(filter_var($var, FILTER_VALIDATE_INT)) {
        echo $var. ' is a number';
    } else {
        echo $var. ' is  not a number';
    } */

    // $var = '33k2jj32j3232j3j2k3j';
    // var_dump(filter_var($var, FILTER_SANITIZE_NUMBER_INT));

    // $var = '<script>alert(1)</script>';
    // echo filter_var($var, FILTER_SANITIZE_SPECIAL_CHARS);
    //var_dump(filter_var($var, FILTER_SANITIZE_SPECIAL_CHARS));

  /*   $filters = array(
        "data" => FILTER_VALIDATE_EMAIL,
        "data2" => array(
            "filter" => FILTER_VALIDATE_INT,
            "options" => array(
                "min_range" => 1,
                "max_range" => 100
            )
        )
    );

    print_r(filter_input_array(INPUT_POST, $filters)); */

    $arr = array(
        "name" => "winadi wiratama",
        "age" => "130",
        "email" => "winadiw@gmail.com"
    );

    $filters = array( 
        "name" => array(
            "filter" => FILTER_CALLBACK,
            "options" => "ucwords"
        ),
        "age " => array(
            "filter" => FILTER_VALIDATE_INT,
            "options" => array(
                "min_range" => 1,
                "max_range" => 120
            )
        ),
        "email" => FILTER_VALIDATE_EMAIL
    );

    print_r(filter_var_array($arr, $filters));
?>

<form method="post" action="<?php $_SERVER['PHP_SELF']; ?>">
    <input type="text" name="data">
    <input type="text" name="data2">
    <button type="submit">Submit</button>
</form>