<?php
    $connection = mysqli_connect('localhost', 'root', '', 'newsapp');
    if($connection){
        echo "Connection established!" . '<br>';
    } else {
        die("Database connection failed!");
    };

    if(isset($_POST['submit'])){
        global $connection;
        $test_input = $_POST['email'];
        if (!filter_var($test_input, FILTER_VALIDATE_EMAIL)) {
            echo '<br>' . '<font color = red>Invalid Email format!</font>';
        } else {
            global $email;
            $email = $test_input;
            $name = $_POST['name'];

            mysqli_real_escape_string($connection, $email);
            mysqli_real_escape_string($connection, $name);

            $query = "INSERT INTO subscribers(email, name)";
            $query .= "VALUES ('$email', '$name')";
    
            $result = mysqli_query($connection, $query);
            if(!$result){
                die("Query failed!" . mysqli_error($connection));
            } else {
                echo '<br>' . '<font color = blue>Record Created!</font>';
            };
        };
    };
?>