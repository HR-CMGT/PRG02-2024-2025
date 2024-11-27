<?php
//Init the database
$db = new \System\Databases\Database(DB_HOST, DB_USER, DB_PASS, DB_NAME);

//Get the record from the db
$album = \System\MusicCollection\Album::getById($_GET['id'], $db->getConnection());

//Override logic for POST
require_once dirname(__FILE__) . '/includes/post-data.php';

//Database magic when no errors are found
if (isset($formData) && empty($errors)) {
    //If image is not empty, process the new image file
    if ($_FILES['image']['error'] != 4) {
        //Init image class
        require_once dirname(__FILE__) . '/../classes/System/Utils/Image.php';
        $image = new \System\Utils\Image();

        //Remove old image
        $image->delete($album->image);

        //Store new image & retrieve name for database saving (override current image name)
        $album->image = $image->save($_FILES['image']);
    }

    //Save the record to the db
    if ($album->update($db->getConnection())) {
        $success = 'Your album has been updated in the database!';
    } else {
        $errors[] = 'Database error info: ' . $db->getConnection()->errorInfo()[0];
    }
}
