<?php

class Database{
    protected $server;
    protected $user;
    protected $password;
    protected $db;

    public function __construct(){
        $this->server = "localhost";
        $this->user = "szymon";
        $this->password = "haslo";
        $this->db = "loki2";
    }


    public function get($sql){
        $conn = new mysqli($this->server, $this->user, $this->password , $this->db);
        $result = $conn->query($sql);
        $conn->close();
        return $result;

    }

}

?>