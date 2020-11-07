<?php

class Database
{
    private $hostname = "localhost";
    private $username = "root";
    private $password = "";
    private $dbname="filmografija";
    private $dblink;
    private $result;
    private $records;
    private $affected;

    function __construct($par_dbname)
    {
        $this->dbname = $par_dbname;
        $this->Connect();
    }

    function Connect(){
        $this->dblink = new mysqli($this->hostname, $this->username, $this->password, $this->dbname);
        if($this->dblink->connect_errno){
            printf("Konekcija neuspešna: %s\n", $this->dblink->connect_error);
            exit();
        }
        $this->dblink->set_charset("utf8");
    }

}

?>