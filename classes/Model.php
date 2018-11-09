<?php
/**
 * Created by IntelliJ IDEA.
 * User: JoelLuong
 * Date: 6/11/2018
 * Time: 7:38 PM
 */

abstract class Model
{
    protected $dbh;
    protected $stmt;
    private $error;

    public function __construct() {
        // $this->dbh = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME, DB_USER, DB_PASS);
        // Set DSN
        $dsn = 'mysql:host='. DB_HOST . ';dbname='. DB_NAME;
        //$this->dbh = new PDO($dsn, DB_USER, DB_PASS);
        // Set Options
//        $options = array(
//            PDO::ATTR_PERSISTENT		=> true,
//            PDO::ATTR_ERRMODE		=> PDO::ERRMODE_EXCEPTION
//        );
        // Create new PDO
        try {
            $this->dbh = new PDO($dsn, DB_USER, DB_PASS);
        } catch(PDOEception $e){
            $this->error = $e->getMessage();
        }
    }

    public function query($query){
        $this->stmt = $this->dbh->prepare($query);
    }

    public function bind($param, $value, $type = null){
        if(is_null($type)){
            switch(true){
                case is_int($value):
                    $type = PDO::PARAM_INT;
                    break;
                case is_bool($value):
                    $type = PDO::PARAM_BOOL;
                    break;
                case is_null($value):
                    $type = PDO::PARAM_NULL;
                    break;
                default:
                    $type = PDO::PARAM_STR;
            }
        }
        $this->stmt->bindValue($param, $value, $type);
    }

    public function execute(){
        return $this->stmt->execute();
    }

    public function resultSet(){
        $this->execute();
        return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function lastInsertId(){
        return $this->dbh->lastInsertId();
    }
}