

<?php

/* Variables

? How to notate the type of file?
	- put it as the type in the top part of the file



dropdown list file: inputFiles/dropdownlist.json

- This file should only return the json files, not make any decisions. The decisions should be made by the other file.

 */

//shortOptions.json


// Create a basic file for just getting the contents of a JSON file
function readJSONFile($url) {

	$JSON = file_get_contents($url);

	// You can decode it to process it in PHP
	$data = json_decode($JSON);
	return var_dump($data);
}



// Simple functions to provide the 

function getDropDownInformationState() {
	return readJSONFile("inputFiles/dropDownListState.json");
}

function getDropDownInformationStooge() {
	return readJSONFile("inputFiles/dropDownListStooge.json");
}

function getDropDownInformationMLB() {
	return readJSONFile("inputFiles/dropDownListBaseball.json");
}

function getDropDownInformationNFL() {
	return readJSONFile("inputFiles/dropDownListNFL.json");
}

function getDropDownInformationNHL() {
	return readJSONFile("inputFiles/dropDownListNHL.json");
}


function getMultChoiceInformation() {
	return readJSONFile("inputFiles/shortOptions.json");
}


/*
http://localhost:8000/ProjectExamples/ExampleProject/PageAPI.php?id=state
http://localhost:8000/ProjectExamples/ExampleProject/PageAPI.php?id=stooge
http://localhost:8000/ProjectExamples/ExampleProject/PageAPI.php?id=mlb
http://localhost:8000/ProjectExamples/ExampleProject/PageAPI.php?id=nfl
http://localhost:8000/ProjectExamples/ExampleProject/PageAPI.php?id=nhl
http://localhost:8000/ProjectExamples/ExampleProject/PageAPI.php?id=mult1



>>> Next add in a few different file optoins

*/


$jsonData = get_file_by_id($_GET["id"]);

// 
function get_file_by_id($id)
{
  $file_info = array();

  // Normally this info would be pulled from a database.
  // Build JSON array to create the necessary data structure
  // There is probably a better way to dynamically build the File String using the input value, but this is simple and it works.
  switch ($id){
    case "state":
      $jsonData = getDropDownInformationState();
      break;
    case "stooge":
      $jsonData = getDropDownInformationStooge();
      break;
    case "mlb":
      $jsonData = getDropDownInformationMLB();
      break;
    case "nfl":
      $jsonData = getDropDownInformationNFL();
      break;
    case "nhl":
      $jsonData = getDropDownInformationNHL();
      break;
    case "mult1":
      $jsonData = getMultChoiceInformation();
      break;
  }

  return $jsonData;
}




//$data = json_decode($jsonData, true);
//if ($data === null) {
//    die('Error decoding JSON data.');
//}

?>


