<?php

class QueryManager {
    /* details for connecting to database, please don't touch */

    private $dbhost = "localhost";
    private $dbusername = "Witchidents";
    private $dbpassword = "Incident@Witchworld";
    private $dbname = "witchidents";

    /* contains the information about the connection and the database */
    private $mysqli;

    /* last sql statement */
    private $sql;

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
            $whereConditions = implode(" " . $operator . " ", $whereConditions);
            $whereConditions = "WHERE " . $whereConditions;
        } else {
            $whereConditions = "";
        }

        /* the sql code */
        $this->sql = "SELECT $colomnsString "
                . "FROM $tableName "
                . $whereConditions . ";";
        //echo $sql. "<br>";

        /* execute the query */
        $sqliResult = $this->mysqli->query($this->sql);

        /* set the results in teh returnArray */
        $returnArray = "";
        while ($row = mysqli_fetch_assoc($sqliResult)) {
            $returnArray[] = $row;
        }
        return $returnArray;
    }

    public function createEmptyRow($tableName) {
        /* the sql code */
        $this->sql = "INSERT INTO " . $tableName . " () "
                . "VALUES (); ";
        //echo $sql . "<br>";

        /* execute the query */
        $sqliResult = $this->mysqli->query($this->sql);

        /* return the id of the new row */
        if ($sqliResult) {
            return $this->mysqli->insert_id;
        } else {
            echo "Failed to create row in database<br>"
            //. "Query: $this->sql"
            ;
        }
    }

    public function update($properties, $tableName, $whereConditions = NULL, $operator = "AND") {
        if (isset($properties)) {
            $properties = implode(", ", $properties);
        } else {
            $properties = "";
        }

        /* convert the where conditions to a string */
        if (isset($whereConditions)) {
            $whereConditions = implode(" " . $operator . " ", $whereConditions);
            $whereConditions = "WHERE " . $whereConditions;
        } else {
            $whereConditions = "";
        }
        /* the sql code */
        $this->sql = "UPDATE " . $tableName . " "
                . " SET " . $properties . " "
                . $whereConditions . ";";

        /* execute the query */
        $sqliResult = $this->mysqli->query($this->sql);

        /* return true if succes */
        if ($sqliResult) {
            return true;
        } else {
            echo "Failed to execute update statement<br>"
            . "Query: $this->sql"
            ;
        }
    }

}
