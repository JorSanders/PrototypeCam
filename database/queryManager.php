<?php

class QueryManager {
    /* details or connecting to database, please don't touch */

    private $dbhost = "localhost";
    private $dbusername = "Witchidents";
    private $dbpassword = "Incident@Witchworld";
    private $dbname = "witchidents";
    /* contrains the information about the connection and the database */
    private $mysqli;

    public function __construct() {
        $this->connect();
    }

    /* makes connecttion to the database */

    private function connect() {
        $this->mysqli = new mysqli($this->dbhost, $this->dbusername, $this->dbpassword, $this->dbname);
    }

    public function select($colomnNames, $tableName) {
        $returnArray;
        /* convert the array to a string */
        $colomnsString = implode(", ", $colomnNames);

        /* the sql code */
        $sql = "SELECT $colomnsString FROM $tableName";

        /* execute the query */
        $sqliResult = $this->mysqli->query($sql);

        /* set the results in teh returnArray */
        while ($row = mysqli_fetch_assoc($sqliResult)) {
            $returnArray[] = $row;
        }

        return $returnArray;
    }

}
