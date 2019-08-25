<?php
$filename = $_GET["CreatureName"] . ".json";
strtolower($filename);
$filepath = "JSON/" . $filename;
if (file_exists($filepath)) {
    $json = file_get_contents($filepath);
    echo('<a href="index.html" <h1>Back</h1> </a> <br>');
    writeresponse($json);
    
}
else {
    echo('<a href="index.html" <h1>Back</h1></a> <br>');
    echo("FileDoesntExist");    
}
function writeresponse($rawjson){
     $decodedjson = json_decode($rawjson, true);
     $imgpath ='img/'. strtolower($decodedjson['CreatureName']);
     for ($i=1; $i <= $decodedjson['PageCount']; $i++) { 
         echo(' <img src="' . $imgpath . $i .'.jpg" >');
     }
}
?>