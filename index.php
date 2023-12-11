<?php
$passowod = '2arlinhos1234';


$options = [
    'cost' => 30
];

echo password_hash($passowod, PASSWORD_BCRYPT, $options);
?>