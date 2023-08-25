<?php
namespace App;

class Database
{
    private $connect;

    function __construct()
    {
        $this->connect = mysqli_connect('localhost', 'root', '', 'RFKJWC');
    }

    // Get Data
    function getData()
    {
        $query = "SELECT * FROM sts_data";
        $result = mysqli_query($this->connect, $query);
        $all_data = mysqli_fetch_all($result, MYSQLI_ASSOC);
        return $all_data;
    }


    // Add New Data
    function addData($name, $phone, $email, $age, $gander, $religion, $qualification, $area)
    {
        $query = "INSERT INTO sts_data(name, phone, email, age, gander, religion, qualification, area)
        VALUES('$name', '$phone', '$email', '$age', '$gander', '$religion', '$qualification', '$area')";
        mysqli_query($this->connect, $query);
    }

    // UPDATE DATA

    // Step_1 Get Data From ID
    function getId($id)
    {
        $query = "SELECT * FROM sts_data WHERE id = $id";

        $result = mysqli_query($this->connect, $query);

        $id_data = mysqli_fetch_assoc($result);

        return $id_data;
    }

    // Step_2 Update Data
    function updateData($id, $name, $phone, $email, $age, $gander, $religion, $qualification, $area)
    {
        $query = "UPDATE sts_data 
        SET name = '$name',
        phone = '$phone',
        email = '$email',
        age = '$age',
        gander = '$gander',
        religion = '$religion',
        qualification = '$qualification',
        area = '$area' 
        WHERE id = $id";

        mysqli_query($this->connect, $query);
    }

    // Delete Data against ID
    function deleteData($std_id) {
        $query = "DELETE FROM sts_data 
        WHERE id = $std_id";
        mysqli_query($this->connect, $query);
    }


}
?>