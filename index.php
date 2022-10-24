<?php

require_once "bootstrap.php";

$request = $_SERVER['REQUEST_URI'];

if (isset($_GET['delete'])) {
    $del = $_GET['delete'];
} else {
    $del = NULL;
}
if (isset($_GET['id'])) {
    $idz = $_GET['id'];
} else {
    $idz = NULL;
}
$head = '';
if (isset($_GET['headline'])){
    $head = $_GET['headline'];
} else {
    $ids = NULL;
}
if (isset($_GET['update'])) {
    $upd = $_GET['update'];
} else {
    $upd = NULL;
}
$prefix = '/app6';
switch ($request) {

    case $prefix . '/':
        require __DIR__ . '/src/views/home.php';
        break;
    case $prefix . ' ':
        require __DIR__ . '/src/views/home.php';
        break;
    case $prefix . '/home':
        require __DIR__ . '/src/views/home.php';
        break;
    case $prefix . '/home?id=' . $idz:
        require __DIR__ . '/src/views/home.php';
        break;
    case $prefix . '/admin':
        require __DIR__ . '/src/views/admin.php';
        break;
    case $prefix . '/admin?action=logout':
        require __DIR__ . '/src/views/admin.php';
        break;
    case $prefix . '/admin?update=' . $upd:
        require __DIR__ . '/src/views/admin.php';
        break;
    case $prefix . '/admin?delete=' . $del:
        require __DIR__ . '/src/views/admin.php';
        break;
    case $prefix . '/admin?headline=' . $head . '&content=':
        require __DIR__ . '/src/views/admin.php';
        break;
    case $prefix . '/?id=' . $idz:
        require __DIR__ . '/src/views/home.php';
        break;

    default:
        http_response_code(404);
        require __DIR__ . '/src/views/404.php';
        break;
}