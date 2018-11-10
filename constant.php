<?php
    const BASE_URL = 'http://localhost/komikuku-web-apps/index.php';
    const ASSET_URL = 'http://localhost/komikuku-web-apps/';
    $GLOBALS['uri_segment'] = explode('/', parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));
