<?php

namespace Province;

class City
{
    private $conn;
    function __construct()
    {
        $this->conn = mysqli_connect("localhost", "root", "", "israr_crud");
    }


    function addName($pn)
    {
        $query = "INSERT INTO P_Name(name) 
    VALUES ('$pn')";
        mysqli_query($this->conn, $query);
    }


    function getName()
    {
        $query = "SELECT * FROM P_Name";
        return mysqli_query($this->conn, $query);
    }


    function getPid($p_id)
    {
        $query = "SELECT * FROM P_Name WHERE p_id = $p_id";
        $record = mysqli_query($this->conn, $query);
        $all_records = mysqli_fetch_assoc($record);
        return $all_records;
    }
}


?>