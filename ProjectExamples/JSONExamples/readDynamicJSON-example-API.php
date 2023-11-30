<?php

//  Author: Daniel Krutz
//  Description: Reads a random JSON file and then returns this information.


// >> Option is to develop an additional page or two that read this API to demonstrate one of the benefits of using shared APIs.



function get_file_by_id($id)
{
  $file_info = array();

  // Normally this info would be pulled from a database.
  // Build JSON array to create the necessary data structure
  // There is probably a better way to dynamically build the File String using the input value, but this is simple and it works.
  switch ($id){
    case 1:
      $jsonData = file_get_contents('InputJSONFiles/ExampleFile1.json');
      break;
    case 2:
      $jsonData = file_get_contents('InputJSONFiles/ExampleFile2.json');
      break;
    case 3:
      $jsonData = file_get_contents('InputJSONFiles/ExampleFile3.json');
      break;
  }

  return $jsonData;
}


// Read the contents of the JSON file
//$jsonData = file_get_contents('InputJSONFiles/ExampleFile3.json'); // Leave this basic link in for testing purposes down the road if you want to point to the file directly.
$jsonData = get_file_by_id($_GET["id"]);


// Decode the JSON data into a PHP array
$data = json_decode($jsonData, true);

// Check if decoding was successful
if ($data === null) {
    die('Error decoding JSON data.');
}

// Create an associative array with names as keys and favorite items as values
$keyValueArray = [];
foreach ($data['people'] as $person) {
    $keyValueArray[$person['name']] = $person['favorite'];
}

// Output the associative array as JSON
header('Content-Type: application/json');
echo json_encode($keyValueArray);

?>
