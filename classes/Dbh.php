<?php

class Dbh {
    public $host = '127.0.0.1' ;
    public   $user = 'root' ;
    public $db = 'zuriphp' ;
    public  $password = '';

    function connect() {
        $conn = mysqli_connect( $host,  $user, $password, $db );
        return $conn;
    }
}

