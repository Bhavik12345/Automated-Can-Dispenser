<?php

file_put_contents("Dispenser1_All.txt", "");

$val = $_GET["data"];

$fileContent=$val;

$fileStatus=file_put_contents("Dispenser1_All.txt",$fileContent,FILE_APPEND);

if($fileStatus != false)

{

                echo  "SUCCESS. Data written in file.";

}

else

{

                echo  "FAIL. Could not connect to file.";

}

?>