
<!--
 based on the random page API, provide the reader



X) Create functions that for now just spit out the items
x) Call the random page API that will randomly spit out functions to show - maybe have it be like a random number generator.
-) Verify that the items being output (JSON format) is correct



-->

<?php

/* Variables

dropdown list file: inputFiles/dropdownlist.json



 */



function getDropDownInformation() {

	$url = 'inputFiles/dropdownlist.json';
	$JSON = file_get_contents($url);

	// echo the JSON (you can echo this to JavaScript to use it there)
//	echo $JSON;

	// You can decode it to process it in PHP
	$data = json_decode($JSON);
	return var_dump($data);


}


?>



<!DOCTYPE html>
<html>
    <head>
        <title>PHP Test</title>
    </head>
    <body>



<?php 
getDropDownInformation();
?>

    </body>
</html>