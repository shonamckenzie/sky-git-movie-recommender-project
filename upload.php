<?php

const InputKey = 'data';	
const AllowedTypes = ['text/xml']; 

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (!empty($_FILES['data'])) {
        uploadData();  //call function to upload xml file
    }
    header("Location: index.php");  //return to home page
    exit();
}

function uploadData(){

if (empty($_FILES[InputKey])) {	
	die("File Missing!");
    }

if ($_FILES[InputKey]['error'] > 0) { 
	die("Data File Error!");
    }

if (!in_array($_FILES[InputKey]['type'], AllowedTypes)){ 
	die("File Type Not Allowed");
    }

//upload the files
$tmpFile = $_FILES[InputKey]['tmp_name'];
$dstFile = 'uploads/'.$_FILES[InputKey]['name']; 
echo "file uploaded";

if (!move_uploaded_file($tmpFile, $dstFile)) {  //ensures the temp file you're moving is the one you uploaded
	die("Error file did not upload to destination");
    }
}