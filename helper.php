<?php

function displayMessage($message,$stop = true){
    echo $message;
    !$stop ?: exit(100);
}

function validateFile(string $file) : string {
    
    if(!file_exists($file)) {
        displayMessage("File not found :" . $file);
    }

    if(filesize($file) > 1048576) {
        displayMessage("File is too large :" . $file);
    }
    
    return $file;
}

function validateDir(string $dir) : string {
    if(empty($dir)) {
        displayMessage("Directory not found :" . $dir);
    }
    
    return trim($dir,"/");
}
