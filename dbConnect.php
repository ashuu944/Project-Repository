<?php

class database {

    public $servername = 'localhost';
    public $username = 'root';
    public $password = '';
    public $dbname = 'project_repository';
    public $conn;

// Create connection

    function connect() {
        $this->conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);
        return $this->conn;
    }

}

// Check connection
//if ($conn->connect_error) {
//    die("Connection failed: " . $conn->connect_error);
//}
//echo "Connected successfully";
//}
?>