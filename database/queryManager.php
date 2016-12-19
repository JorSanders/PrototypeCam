<?php

class QueryManager {
    /* details for connecting to database, please don't touch */
    private $dbhost = "localhost";
    private $dbusername = "Witchidents";
    private $dbpassword = "Incident@Witchworld";
    private $dbname = "witchidents";
    /* contains the information about the connection and the database */
    private $mysqli;

    public function __construct() {
        $this->connect();
    }

    /* makes connecttion to the database */

    private function connect() {
        $this->mysqli = new mysqli($this->dbhost, $this->dbusername, $this->dbpassword, $this->dbname);
    }

    public function select($colomnNames, $tableName, $whereConditions = NULL, $operator = "AND") {
        /* convert the column names  to a string */
        $colomnsString = implode(", ", $colomnNames);

        /* convert the where conditions to a string */
        if (isset($whereConditions)) {
            $whereConditions = implode(" ". $operator . " ", $whereConditions);
            $whereConditions = "WHERE " . $whereConditions;
        } else {
            $whereConditions = "";
        }

        /* the sql code */
        $sql = "SELECT $colomnsString FROM $tableName $whereConditions";
        
        //echo $sql. "<br>";

        /* execute the query */
        $sqliResult = $this->mysqli->query($sql);

        $returnArray = "";
        
        /* set the results in teh returnArray */
        while ($row = mysqli_fetch_assoc($sqliResult)) {
            $returnArray[] = $row;
        }
        return $returnArray;
    }
    
    public function createEmptyRow($tableName){
         /* the sql code */
        $sql = "INSERT INTO " . $tableName . " () "
                . "OUTPUT INSERTED.ID "
                . "DEFAULT VALUES ()";
        
        echo $sql. "<br>";

        /* execute the query */
        $result = $this->mysqli->query($sql);
        $id = $this->mysqli->insert_id;
        
        
        echo "id: " . $id . "<br>" 
                . "result " . $result ;
    }

}
