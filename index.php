 <?php
 error_reporting(0);
    // output the server host
    echo $_SERVER['HTTP_HOST'] . "<br>"; //will output 'localhost'
    //outputs the request type
    echo $_SERVER['REQUEST_METHOD'] ."<br>";
    // returns the url of the file
    echo $_SERVER['REQUEST_URI'] ."<br>";
    // remote address
    echo $_SERVER['REMOTE_ADDR'] ."<br>";
 ?>