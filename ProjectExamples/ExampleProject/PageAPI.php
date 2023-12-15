<?php

// Add additional comments
// Add in additional building criteria (paragraphs, multiple choice boxes etc....)


$jsonData = get_file_by_id($_GET["id"]);


// Create a basic file for just getting the contents of a JSON file
function readJSONFile($url) {

	$JSON = file_get_contents($url);

	//$dan= "Krutz";

	echo $JSON;
	//return $JSON;
	//return $dan;
	//return var_dump($JSON);
	//return "dan";
}

// Call the JSON files using these functions.
//		This could likely be removed and the file calls made directly in the if statement.
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


// Get a random value from an external API.
function getRandomValue(){

// Make this a variable
	// https://l3harriscourseexamples.onrender.com/ProjectExamples/RandomAPI.php?action=get_RandomValue
	$extRandomURL = "https://l3harriscourseexamples.onrender.com/ProjectExamples/RandomAPI.php?action=get_RandomValue"; // make this a global variable
	$content = file_get_contents($extRandomURL);
	$result  = json_decode($content);
	return $result;
}




// If it is a dropdown list, take the random value that is being passed in to randomly determine what the contents of the dropdown list should be. This will help with dynamically creating the page.
function getDropDownInformation($rand){
$rand = 1;
	switch ($rand){
	    case "1":
	      $jsonData = getDropDownInformationState();
	      break;
	    case "2":
	      $jsonData = getDropDownInformationStooge();
	      break;
	    case "3":
	      $jsonData = getDropDownInformationMLB();
	      break;
	    case "4":
	      $jsonData = getDropDownInformationNFL();
	      break;
	    case "5":
	      $jsonData = getDropDownInformationNHL();
	      break;
	  }
}



function get_file_by_id($id){
	$rand = getRandomValue();
 	switch ($id){
    case "dropdown":
      $jsonData = getDropDownInformation($rand);
      break;
    case "multChoice":
      $jsonData = getMultChoiceInformation();
      break;
  	}
  //	echo "dan";
// 	return $jsonData;
// 	echo "krutz";

}


?>


