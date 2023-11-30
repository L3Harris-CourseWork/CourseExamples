<?php

//  Author: Daniel Krutz
//  Description: Loops through an external API file that returns a list of people and their favorite foods.


// Read the contents of the JSON file
$jsonData = file_get_contents('InputJSONFiles/examplePeopleFood.json');

// Decode the JSON data into a PHP array
$data = json_decode($jsonData, true);

// Check if decoding was successful
if ($data === null) {
    die('Error decoding JSON data.');
}

// Create an associative array with names as keys and favorite foods as values
$keyValueArray = [];
foreach ($data['people'] as $person) {
    $keyValueArray[$person['name']] = $person['favorite_food'];
}

// Output the associative array as JSON
header('Content-Type: application/json');
echo json_encode($keyValueArray);


?>




