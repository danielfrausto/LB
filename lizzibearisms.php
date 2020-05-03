<?php
	$Lizzibearisms = json_decode(file_get_contents("lizzibearisms-v2.json"),true);
    //echo $Lizzibearisms;
    $randIndex = array_rand($Lizzibearisms);
    //echo($Lizzibearisms[$randIndex]["text"]);
    echo $Lizzibearisms[$randIndex]["text"];
?>