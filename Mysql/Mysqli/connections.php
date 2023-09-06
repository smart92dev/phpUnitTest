<?php

$mysqli = new mysqli(
    'localhost',
    'root',
    '',
    'world'
);

if ($mysqli->connect_errno) {
    echo 'There was an error connecting to the database'. $mysqli->connect_error;
    exit;
}

# If the connection to the database is OK, the following codes will be executed

$mysqli->set_charset('utf8');