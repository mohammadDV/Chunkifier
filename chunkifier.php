<?php

ini_set("display_errors",1);

require_once "classes/Chunk.php";
require_once "helper.php";

// Require config file
$config = require_once "config.php";
// Validate the file
$file   = validateFile($argv[1] ?? "","File");
// Validate the directory
$dir    = validateDir($argv[2] ?? "");

// Initialize chunk class
$chunkClass = new Chunk($file,$dir,$config);
// Create a Directory
$chunkClass->createDir();
// Chunking the file
$chunkClass->handleData();

if(!empty($chunkClass->message)){
    // display error 
    displayMessage($chunkClass->message);
}

// Specify the file type
echo $chunkClass->getTypeFile();

