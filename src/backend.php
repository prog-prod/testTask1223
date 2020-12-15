<?php

$data = [
    'ID' => $_POST['btn_ID'],
    'date' => $_POST['date'],
    'ip' => $_SERVER['REMOTE_ADDR']
];
$content = file_get_contents('click.log');

file_put_contents('click.log',$content."\n".json_encode($data));

echo json_encode($data);
