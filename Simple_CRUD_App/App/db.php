<?php
namespace Pak;

class MostCent
{
    private $conn;

    function __construct()
    {
        $this->conn = mysqli_connect("localhost", "root", "", "pak_top_betters");
    }


    // READ
    function getRecord()
    {
        $query = "SELECT * FROM most_odi_cents";
        $record = mysqli_query($this->conn, $query);
        $all_records = mysqli_fetch_all($record, MYSQLI_ASSOC);
        return $all_records;
    }

    
    // CREATE
    function addRecord($p_rank, $p_name, $p_cent)
    {
        $query = "INSERT INTO most_odi_cents(p_rank, p_name, p_cent)
        VALUES('$p_rank', '$p_name', '$p_cent')";
        mysqli_query($this->conn, $query);
    }

    function getPid($p_id)
    {
        $query = "SELECT * FROM most_odi_cents WHERE p_id = $p_id";
        $record = mysqli_query($this->conn, $query);
        $all_records = mysqli_fetch_assoc($record);
        return $all_records;
    }

    function updateRecord($p_id, $p_rank, $p_name, $p_cent)
    {
        $query = "UPDATE most_odi_cents
        SET p_rank = '$p_rank',
        p_name = '$p_name',
        p_cent = '$p_cent'
        WHERE p_id = $p_id";
        mysqli_query($this->conn, $query);
    }

    function deleteRecord($p_id) {
        $query = "DELETE FROM most_odi_cents WHERE p_id = $p_id";
        mysqli_query($this->conn, $query);
    }
}
?>