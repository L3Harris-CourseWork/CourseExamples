<?php


//  Author: Daniel Krutz
//  Description: This page returns a simple random value that may be used by other applications.


// Function that will return a random value
function get_RandomValue()
{
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
    }
}

//return JSON array
exit(json_encode($value));


?>