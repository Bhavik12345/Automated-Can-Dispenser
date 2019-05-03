<?php

file_put_contents("Dispenser1_Single.txt", "");

$val = $_GET["data"];

$fileContent=$val;

$fileStatus=file_put_contents("Dispenser1_Single.txt",$fileContent,FILE_APPEND);

if($fileStatus != false)

{

                echo  "SUCCESS. Data written in file.";

}

else

{

                echo  "FAIL. Could not connect to file.";

}

?>