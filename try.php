<?php
require_once 'vendor/autoload.php';

$class = new \FlashMeesage\FlashMeesage();
$class->addMessage('You have logged in.', 'success');
$class->addMessage('You have logged out.', 'success');
$class->addMessage('Can\'t find the post.', 'error');

var_dump($class->getMessages());