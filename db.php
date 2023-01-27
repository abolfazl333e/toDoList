<?php

class DB
{

    private $servername;
    private $username;
    private $password;
    private $dbname;

    public function __construct()
    {
        $this->servername = "localhost";
        $this->username = "kingaboo_nodemcu";
        $this->password = "F&4ijK9q8UKW";
        $this->dbname = "kingaboo_nodemcu";
    }

    public  function connect()
    {
        return $conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);

    }

}
$connect = new DB;

$connect->connect();