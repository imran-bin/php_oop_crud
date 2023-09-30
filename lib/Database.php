<?php

include_once '../config/config.php';
 class Database {

    public $host = HOST;
    public $user = USER;
    public $pass = PASSWORD;
    public $dtabase = DATABSE;
    public $link;
    public $error;


    public function __construct(){
        $this->dbconnect();   
    }
    public function dbconnect(){
        $this->link = mysqli_connect($this->host, $this->user, $this->pass, $this->dtabase);
        if (!$this->link)
            $this->error = "Database connection failed";
        return false;
    }
 }


?>