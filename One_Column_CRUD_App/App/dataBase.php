<?php
namespace Province;

class City
{
    private $conn;
    function __construct()
    {
        $this->conn = mysqli_connect("localhost", "root", "", "israr_crud");
    }


    // Create
    function addName($pn)
    {
        $query = "INSERT INTO P_Name(name) 
    VALUES ('$pn')";
        mysqli_query($this->conn, $query);
    }


    // Read
    function getName()
    {
        $query = "SELECT * FROM P_Name";
        return mysqli_query($this->conn, $query);
    }


    // get ID
    function getPid($p_id)
    {
        $query = "SELECT * FROM P_Name WHERE id = $p_id";
        $record = mysqli_query($this->conn, $query);
        $all_records = mysqli_fetch_assoc($record);
        return $all_records;
    }


    // Delete
    function deleteName($id)
    {
        $qry = "DELETE FROM P_Name WHERE id = $id";
        mysqli_query($this->conn, $qry);
    }


    // Update
    function updateName($id, $name)
    {
        $qry = "UPDATE P_Name 
        SET 
        name = '$name',
        WHERE id = $id";
        mysqli_query($this->conn, $qry);
    }
}


?>