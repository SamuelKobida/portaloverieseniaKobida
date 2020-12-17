<?php
namespace classes;
class DB
{
    private $host="localhost";
    private $username="root";
    private $password="";
    private $dbName="";
    private $port;

    private $connection;

    public function __construct($host,$username,$password,$dbName,$port=3306)
    {
        $this->host=$host;
        $this->username=$username;
        $this->password=$password;
        $this->dbName=$dbName;
        $this->port=$port;

        try{
            $connection = new \PDO("mysql:host=".$this->host.";dbname=".$this->dbName.";port=".$this->port,$this->username,$this->password);
            $connection->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
            $this->connection=$connection;
        }catch (\PDOException $exception){echo "si v keli";}
    }
    public function getConnection(){
        return $this->connection;
    }
    public function setConnection($connectio){
        if($connectio instanceof \PDO){
            $this->connection=$connectio;
        }

    }
    public function getTabItems(){
        $sql="SELECT * FROM tab ORDER BY id";
        $stmt=$this->connection->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }
}