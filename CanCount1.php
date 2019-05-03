<?php

file_put_contents("CanCount1.txt", "");

$val = $_GET["data"];

$fileContent=$val;

$fileStatus=file_put_contents("CanCount1.txt",$fileContent,FILE_APPEND);

if($fileStatus != false)

{

                echo  "SUCCESS. Data written in file.";

}

else

{

                echo  "FAIL. Could not connect to file.";

}

?>