<?php
$filename = $_GET["Creaturename"] + ".json";
strtolower($filename);
$filepath = "JSON/" + $filename;
if (file_exists($filename)) {
    
}
else {
    echo("FileDoesntExist");
}
?>