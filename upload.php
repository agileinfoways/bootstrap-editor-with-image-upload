<?php 

$timestamp      = time(); //timestamp
$uploaddir      = "uploads/images/"; //location to store image
$filename       = $timestamp . $_FILES['file-0']['name'];
$filename       = strtolower($filename); //create image name with lower case
$final_location = "$uploaddir$filename";

move_uploaded_file($_FILES["file-0"]["tmp_name"], $final_location);
$successArray = array(
                    "error"=>0,
                    "response"=>"http://localhost/bootstrap-editor-with-image-upload/".$final_location
                );

echo json_encode($successArray);

/** If validation error then use following */
// $errorArray = array(
//                             "error"=>1,
//                             "response"=>"Your error message"
//                         );
//             echo json_encode($errorArray);


?>