<?php

include 'connection.php';
include '../constant.php';

session_destroy();
header('Location: '. BASE_URL);