<?php


function get_file_by_id($id)
{
  $file_info = array();

  // Normally this info would be pulled from a database.
  // Build JSON array to create the necessary data structure
  switch ($id){
    case 1:
      $person_info = array("person_name" => "Jim Kelly", "person_age" => "12", "favorite_movie" => "Saving Private Ryan"); 
      break;
    case 2:
      $person_info = array("person_name" => "Jim Boheim", "person_age" => "44", "favorite_movie" => "Jurrasic Park");
      break;
    case 3:
      $person_info = array("person_name" => "Michael Jordan", "person_age" => "45", "favorite_movie" => "Goodfellas");
      break;
    case 4:
      $person_info = array("person_name" => "Carmelo Anthony", "person_age" => "44", "favorite_movie" => "Sound of Music");
      break;
  }

  return $file_info;
}


// Read the contents of the JSON file
$jsonData = file_get_contents('InputJSONFiles/ExampleFile1.json');

// Decode the JSON data into a PHP array
$data = json_decode($jsonData, true);

// Check if decoding was successful
if ($data === null) {
    die('Error decoding JSON data.');
}

// Create an associative array with names as keys and favorite foods as values
$keyValueArray = [];
foreach ($data['people'] as $person) {
    $keyValueArray[$person['name']] = $person['favorite'];
}

// Output the associative array as JSON
header('Content-Type: application/json');
echo json_encode($keyValueArray);


?>




