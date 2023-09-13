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
    function getID($id)
    {
        $query = "SELECT * FROM P_Name WHERE id = $id";
        $run_query = mysqli_query($this->conn, $query);
        $all_names = mysqli_fetch_assoc($run_query);
        return $all_names;
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
        SET name = '$name'
        WHERE id = $id";
        mysqli_query($this->conn, $qry);
    }
}


?>