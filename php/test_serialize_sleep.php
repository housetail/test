<?php
class Connection 
{
    public $link;
    public $server, $username, $password, $db;
    
    public function __construct($server, $username, $password, $db)
    {
            $this->server = $server;
            $this->username = $username;
            $this->password = $password;
            $this->db = $db;
            $this->connect();
    }
        
    private function connect()
    {
            $this->link = array($this->server, $this->username, $this->password);
    }
        
    public function __sleep()
    {
            return array('server', 'username', 'password', 'db');
    }
    
    public function __wakeup()
    {
            $this->connect();
    }
}

$con = new Connection('localhost', 'root', 'root007', 'test');
$con->server = '127.0.0.1';
var_dump($con);
$sleepCon = serialize($con);
var_dump($sleepCon);
$wakeupCon = unserialize($sleepCon);
var_dump($wakeupCon);

