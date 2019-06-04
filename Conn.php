<?php

class Conn implements IConn
{
    private $dbhost; // = '192.168.33.17'
    private $dbname; // = 'mysql'
    private $dbuser; // = 'doing'
    private $dbpass; // = 'doing'

    public function __construct($dbhost, $dbname, $dbuser, $dbpass)
    {
        $this->dbhost = $dbhost;
        $this->dbname = $dbname;
        $this->dbuser = $dbuser;
        $this->dbpass = $dbpass;
    }
    public function connect()
    {
        
        try{
            return new \PDO(
                "mysql:host={$this->dbhost};dbname={$this->dbname}",
                $this->dbuser,
                $this->dbpass
            );          
                     
        } catch ( \PDOException $e){
            echo "Error! Mensagem: ".$e->getMessage()." Code: ".$e->getCode();
            exit;
        }

    }
}
