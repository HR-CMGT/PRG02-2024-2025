<?php
//Init the database
$db = new \System\Databases\Database(DB_HOST, DB_USER, DB_PASS, DB_NAME);

//Get the record from the db
$album = \System\MusicCollection\Album::getById($_GET['id'], $db->getConnection());

//Only execute delete when confirmed
if (isset($_GET['continue'])) {
    //Init image class
    require_once dirname(__FILE__) . '/../classes/System/Utils/Image.php';
    $image = new \System\Utils\Image();

    //Delete the record from the db
    $album->delete($db->getConnection());

    //Remove image
    $image->delete($album->image);

    //Redirect to homepage after deletion & exit script
    header('Location: index.php');
    exit;
}
