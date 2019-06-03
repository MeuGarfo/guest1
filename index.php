<?php
//basic
require 'basic/basic.php';
inc([
    'auth',
    'controller',
    'db',
    'env',
    'error',
    'method',
    'segment',
    'view'
]);
//regras
error();
$controller=segment(2);
switch($controller){
    case false:
    controller("home");
    break;
    case 'signup':
    controller("signup");
    break;
    default:
    view('404');
    break;
}
