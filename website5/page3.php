<?php
$user = ['name' => 'Brad', 'email' => 'test@test.com', 'age' => 35];

// serialization allows arrays to be stored in cookies
$user = serialize($user);

setCookie('user', $user, time() + (86400 * 30));

// need to unserialize in order to extract values from the array
$user = unserialize($_COOKIE['user']);

echo $user['name'];