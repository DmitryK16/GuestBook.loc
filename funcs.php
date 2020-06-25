<?php



function save_mess() {
    $file = 'gb.txt';
    $str = $_POST['name'] . '|' . $_POST['text'] . '|' . date('Y-m-d H:i:s') . "\n***\n";
    file_put_contents($file, $str, FILE_APPEND);
}

function get_mess() {
    $file = 'gb.txt';
    return file_get_contents($file);
}

function array_mess($messages){
    $messages = explode("\n***\n", $messages);
    array_pop($messages);
    return array_reverse($messages);
}

function get_format_massage($message) {
    return explode('|', $message);
}

function print_arr($arr){
    echo '<pre>' . print_r($arr, true) . '</pre>';
}

