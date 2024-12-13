<?php

define('DIR_ROOT', __DIR__);
define('WAIT_QUEUE_FILE', '/tmp/wait_queue_file');

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
header("Access-Control-Allow-Headers: Content-Type, Authorization, X-Requested-With");

// OPTIONS-Anfragen sofort beenden
if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') {
    http_response_code(204);
    exit;
}
header('Content-Type: application/json');


$host = explode('.', $_SERVER['HTTP_HOST']);
$parsedUri = parse_url($_SERVER['REQUEST_URI']);
$routes = explode('/', !empty($parsedUri['path']) ? $parsedUri['path'] : '');

if (empty($host[0]) || empty($routes[1]) || !file_exists(__DIR__.'/'.strtolower($host[0]).'/routes/'.strtolower($routes[1]).'.php')) {
    http_response_code(400);
}


if ('POST' == $_SERVER['REQUEST_METHOD']) {
    $inputJSON = file_get_contents('php://input');
    $input = json_decode($inputJSON, true);

    if (json_last_error() !== JSON_ERROR_NONE || empty($input)) {
        http_response_code(400);
        exit();
    }
}

$wait_queue = [];
if (file_exists(WAIT_QUEUE_FILE)) {
    $wait_queue = file_get_contents(WAIT_QUEUE_FILE);
    $wait_queue = json_decode($wait_queue, true);

    if (json_last_error() !== JSON_ERROR_NONE) {
        http_response_code(400);
        exit();
    }
}

function getWaitQueue ($route) {
    global $wait_queue;
    return isset($wait_queue[$route]) ? $wait_queue[$route] : null;
}
function setWaitQueue ($route) {
    global $wait_queue;
    $wait_queue[$route] = time();
}


register_shutdown_function(function() {
    global $wait_queue;
    file_put_contents(WAIT_QUEUE_FILE, json_encode($wait_queue));
});

include __DIR__.'/'.strtolower($host[0]).'/routes/'.strtolower($routes[1]).'.php';



