<?php
use System\MusicCollection\Album as Album;

//Set default empty album & load POST logic
$album = new Album('', '', '', '', '', '');
require_once dirname(__FILE__) . '/includes/post-data.php';

//Special check for add form only
if (isset($formData) && $_FILES['image']['error'] == 4) {
    $errors[] = 'Image cannot be empty';
}

//Database magic when no errors are found
if (isset($formData) && empty($errors)) {
    require_once dirname(__FILE__) . '/../classes/System/Utils/Image.php';

    //Store image & retrieve name for database saving
    $image = new \System\Utils\Image();
    $album->image = $image->save($_FILES['image']);

    //Init the database
    $db = new \System\Databases\Database(DB_HOST, DB_USER, DB_PASS, DB_NAME);

    //Save the record to the db
    if (Album::create($album, $db->getConnection())) {
        $success = 'Your new album has been added to the database!';

        //Override to see a new empty form
        $album = new Album('', '', '', '', '', '');
    } else {
        $errors[] = 'Database error info: ' . $db->getConnection()->errorInfo()[0];
    }
}
