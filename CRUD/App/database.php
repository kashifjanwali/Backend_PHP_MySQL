<?php 
    namespace App;

    class Databae
    {
        private $con;

        public function __cinstruct() 
        {
            $this->con = mysqli_connect("localhost", "root", "root", "crud");
        }

        // Create Data
        public function addData() {
            $query = "SELECT * FROM user_data";
            $result = mysqli_query($this->con, $query);
            $all_data = mysqli_fetch_assoc($result);
            return $all_data;
        }
    }
?>