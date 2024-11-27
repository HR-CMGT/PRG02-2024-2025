<?php
//Init the database
$db = new \System\Databases\Database(DB_HOST, DB_USER, DB_PASS, DB_NAME);

//Get the records from the db
$album = \System\MusicCollection\Album::getById($_GET['id'], $db->getConnection());
