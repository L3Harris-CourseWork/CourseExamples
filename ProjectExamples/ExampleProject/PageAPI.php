<?php

// The purpose of this API is to act as an intermediary to determing the json information to be returned by the example PageReader page.

$jsonData = get_file_by_id($_GET["id"]);






// -------------- Start paragraph gathering information 
function getParagraphInfo1() {
	return readJSONFile("inputFiles/para1.json");
}

function getParagraphInfo2() {
	return readJSONFile("inputFiles/para2.json");
}

function getParagraphInfo3() {
	return readJSONFile("inputFiles/para3.json");
}

function getParagraphInfo4() {
	return readJSONFile("inputFiles/para4.json");
}

function getParagraphInfo5() {
	return readJSONFile("inputFiles/para5.json");
}


function getParagraphInformation($rand){
//$rand = 1;
	switch ($rand){
	    case "1":
	      $jsonData = getParagraphInfo1();
	      break;
	    case "2":
	      $jsonData = getParagraphInfo2();
	      break;
	    case "3":
	      $jsonData = getParagraphInfo3();
	      break;
	    case "4":
	      $jsonData = getParagraphInfo4();
	      break;
	    case "5":
	      $jsonData = getParagraphInfo5();
	      break;
	  }
}




// -------------- Start dropdown gathering information 

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



// If it is a dropdown list, take the random value that is being passed in to randomly determine what the contents of the dropdown list should be. This will help with dynamically creating the page.
function getDropDownInformation($rand){
//$rand = 1;
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






// ----------------------- THE PRIMARY PAGE FUNCTIONS -----------------------

// Create a basic file for just getting the contents of a JSON file
function readJSONFile($url) {

	$JSON = file_get_contents($url);
	echo $JSON; // return the information to be read by the reader page
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

// The main function that drives the page
function get_file_by_id($id){
	$rand = getRandomValue();
 	switch ($id){
    case "dropdown":
      $jsonData = getDropDownInformation($rand);
      break;
    case "paragraphInfo":
      $jsonData = getParagraphInformation($rand);
      break;
    case "multChoice":
      $jsonData = getMultChoiceInformation();
      break;
  	}
}


?>


