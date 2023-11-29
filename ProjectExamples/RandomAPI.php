<?php

// Function that will return a random value
function get_RandomValue()
{
  //normally this info would be pulled from a database.
  //build JSON array
//  $app_list = array(array("id" => 1, "name" => "Prof A"), array("id" => 2, "name" => "Prof 2"), array("id" => 3, "name" => "Prof 3"), array("id" => 4, "name" => "Prof 4")); 

//  return $app_list;
	return rand(1,5);
}

// Define the possible URLs which the page can be accessed from
$possible_url = array("get_RandomValue");

// Create a default error string
$value = "An error has occurred";


// Determine which information should be returned by the API
if (isset($_GET["action"]) && in_array($_GET["action"], $possible_url))
{
  switch ($_GET["action"])
    {
      case "get_RandomValue":
        $value = get_RandomValue();
        break;
     // case "get_person":
     //   if (isset($_GET["id"]))
     //     $value = get_person_by_id($_GET["id"]);
     //   else
     //     $value = "Missing argument";
     //   break;
    }
}

//return JSON array
exit(json_encode($value));




?>