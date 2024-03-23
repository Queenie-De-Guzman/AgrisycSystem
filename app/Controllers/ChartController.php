<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\infoModel;

class ChartController extends BaseController
{  
    
    private $user;
    private $info;

    public function __construct()
    {
   
        $this->user = new \App\Models\RegModel();
        $this->info = new \App\Models\infoModel();

    }
    
    public function TotalDamage()
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
        SUM(total_damages) as
         total FROM info WHERE
          user_id = $userId";
    
        // Execute query
        $result = $conn->query($query);
    
        // Check if query execution was successful
        if ($result) {
            // Fetch the result as an associative array
            $row = $result->fetch_assoc();
    
            // Get the total damages
            $totalDamages = $row['total'];
    
            // Free result set
            $result->free_result();
    
            // Close connection
            $conn->close();
    
            // Now print the total damages
            echo json_encode(['total_damages' => $totalDamages]);
        } else {
            // Error occurred while executing the query
            echo "Error: " . $conn->error;
        }   
    }
    
public function calculateFarmers()
{
    // Setting header to JSON
    header('Content-Type: application/json');

    // Database connection details
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "agrisync";

    // Create connection
    $conn = new \mysqli($servername, $username, $password, $database);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    
        // Get the user ID from the session
        $userId = session()->get('user_id');

    // SQL query to count the number of farmers for a specific user
    $query = "SELECT 
    COUNT(*) AS numFarmers 
    FROM info WHERE
     user_id = $userId";

    // Execute query
    $result = $conn->query($query);

    // Check if query execution was successful
    if ($result) {
        // Fetch the result as an associative array
        $data = $result->fetch_assoc();

        // Close connection
        $conn->close();

        // Now print the number of farmers
        echo json_encode($data);
    } else {
        // Error occurred while executing the query
        echo json_encode(['error' => "Error: " . $conn->error]);
    }
}
public function calculatestanding()
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
    $query = "SELECT SUM(standing_crop) 
    as totalcrop
     FROM info 
     WHERE user_id = $userId";

    // Execute query
    $result = $conn->query($query);

    // Check if query execution was successful
    if ($result) {
        // Fetch the result as an associative array
        $row = $result->fetch_assoc();

        // Get the total damages
        $totalcrop= $row['totalcrop'];

        // Free result set
        $result->free_result();

        // Close connection
        $conn->close();

        // Now print the total damages
        echo json_encode(['standing_crop' => $totalcrop]);
    } else {
        // Error occurred while executing the query
        echo "Error: " . $conn->error;
    }   
}


public function calculatecrop()
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
    $query = "SELECT SUM(cans_damages)
     as damages
      FROM info 
      WHERE user_id = $userId";

    // Execute query
    $result = $conn->query($query);

    // Check if query execution was successful
    if ($result) {
        // Fetch the result as an associative array
        $row = $result->fetch_assoc();

        // Get the total damages
        $damages= $row['damages'];

        // Free result set
        $result->free_result();

        // Close connection
        $conn->close();

        // Now print the total damages
        echo json_encode(['cans_damages' => $damages]);
    } else {
        // Error occurred while executing the query
        echo "Error: " . $conn->error;
    }   
}

// seedling
public function ed()
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
    $query = "SELECT 
    MONTH(date) AS dt,
    SUM(cans) AS total_seedling
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

public function totalcrop()
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

    $query = "SELECT 
    MONTH(expected_date) AS mon,
    SUM(expected_area) AS total_expected_area,
    SUM(expected_volumn) AS total_expected_volume
  FROM 
    info
  WHERE 
    user_id = $userId
  GROUP BY 
    MONTH(expected_date) 
  ORDER BY 
    mon";
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



public function totaltransplate()
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
    $query = "SELECT 
    MONTH(transplate_date) AS dt,
    SUM(standing_crop) AS total_standing_crop
  FROM 
    info
  WHERE 
    user_id = $userId
  GROUP BY 
    MONTH(transplate_date) 
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



public function totallocation()
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

    // Use prepared statements to prevent SQL injection
    $query = $conn->prepare("SELECT city, COUNT(city) AS city_count FROM info WHERE user_id = ? GROUP BY city");
    $query->bind_param("i", $userId);
    $query->execute();

    // Check if the query execution was successful
    if ($query) {
        // Get the result set
        $result = $query->get_result();

        // Initialize an array to store locations and their counts
        $city= [];

        // Loop through the result set
        while ($row = $result->fetch_assoc()) {
            // Add each location and its count to the array
            $city[] = [
                'city' => $row['city'],
                'count' => $row['city_count'],
            ];
        }

        // Close the prepared statement
        $query->close();

        // Close connection
        $conn->close();

        // Now print the locations and their counts as JSON
        echo json_encode(['city' => $city]);
    } else {
        // Error occurred while executing the query
        // Log the error or handle it accordingly
        error_log("Error: " . $conn->error);

        // Close connection
        $conn->close();

        echo json_encode(['error' => 'An error occurred while processing your request.']);
    }
}

}
