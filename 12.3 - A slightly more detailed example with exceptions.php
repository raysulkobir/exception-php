<?php
class ServerLoadException extends Exception{}
class NetWorkException extends Exception{}
class DiskSpaceException extends Exception{}

interface NetWorkStorage{
    function connect();
}

class MySqlStorage implements NetWorkStorage{
    function connect(){
       throw new ServerLoadException;
    }
}

class PostGreSqlStorage implements NetWorkStorage{
    function connect(){
        echo "Connecting to PostgreSQL";
    }
}

class MSSQLStorage implements NetWorkStorage{
    function connect(){
       throw new DiskSpaceException;
    }
}



class ConnectionPool{
    private $storage;

    function __construct(){
        $this->storage = array();
    }

    function addStoreage(NetWorkStorage $storage){
        // $this->storage[] = $storage;
        array_push($this->storage, $storage);
    }
}

$n = new ConnectionPool()
