<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\RegModel;
use App\Models\infoModel;

class ReportController extends BaseController
{

    private $user;
    private $info;

    public function __construct()
    {
   
        $this->user = new \App\Models\RegModel();
        $this->info = new \App\Models\infoModel();

    }

   
public function Damage()
{
    // Setting header to json
    header('Content-Type: application/json');

     // Database connection details
     $servername = "localhost";
     $username = "root";
     $password = "";
     $database = "agrisync";
 
         // Get the user ID from the session
         $userId = session()->get('user_id');
 
 
    // Create connection
    $conn = new \mysqli($servername, $username, $password, $database);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Query to calculate total damages for a specific user
    $query = "SELECT 
    MONTH(date) AS dt,
    SUM(typhoon) AS total_damage
  FROM 
    info
  GROUP BY 
    MONTH(date) 
  ORDER BY 
    dt";

    // Execute query
    $result = $conn->query($query);

    // Check if query execution was successful
    if ($result) {
        // Loop through the returned data
        $data = array();
        while ($row = $result->fetch_assoc()) {
            $data[] = $row;
        }

        // Free result set
        $result->free_result();

        // Close connection
        $conn->close();

        // Now print the data
        echo json_encode($data);
    } else {
        // Error occurred while executing the query
        echo "Error: " . $conn->error;
    }
}

   
public function HeavyRains()
{
    // Setting header to json
    header('Content-Type: application/json');

     // Database connection details
     $servername = "localhost";
     $username = "root";
     $password = "";
     $database = "agrisync";
 
         // Get the user ID from the session
         $userId = session()->get('user_id');
 
 
    // Create connection
    $conn = new \mysqli($servername, $username, $password, $database);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Query to calculate total damages for a specific user
    $query = "SELECT 
    MONTH(date) AS dt,
    SUM(heavy_rains) AS total_Heavy
  FROM 
    info
  GROUP BY 
    MONTH(date) 
  ORDER BY 
    dt";

    // Execute query
    $result = $conn->query($query);

    // Check if query execution was successful
    if ($result) {
        // Loop through the returned data
        $data = array();
        while ($row = $result->fetch_assoc()) {
            $data[] = $row;
        }

        // Free result set
        $result->free_result();

        // Close connection
        $conn->close();

        // Now print the data
        echo json_encode($data);
    } else {
        // Error occurred while executing the query
        echo "Error: " . $conn->error;
    }
}

   
public function Cans()
{
    // Setting header to json
    header('Content-Type: application/json');

     // Database connection details
     $servername = "localhost";
     $username = "root";
     $password = "";
     $database = "agrisync";
 
         // Get the user ID from the session
         $userId = session()->get('user_id');
 
 
    // Create connection
    $conn = new \mysqli($servername, $username, $password, $database);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Query to calculate total damages for a specific user
    $query = "SELECT 
    MONTH(date) AS dt,
    SUM(cans_damages) AS total_cans
  FROM 
    info
  GROUP BY 
    MONTH(date) 
  ORDER BY 
    dt";

    // Execute query
    $result = $conn->query($query);

    // Check if query execution was successful
    if ($result) {
        // Loop through the returned data
        $data = array();
        while ($row = $result->fetch_assoc()) {
            $data[] = $row;
        }

        // Free result set
        $result->free_result();

        // Close connection
        $conn->close();

        // Now print the data
        echo json_encode($data);
    } else {
        // Error occurred while executing the query
        echo "Error: " . $conn->error;
    }
}

}
