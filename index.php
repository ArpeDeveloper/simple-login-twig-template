<?php 
require_once './vendor/autoload.php';

$loader = new \Twig\Loader\FilesystemLoader('./views');
$twig = new \Twig\Environment($loader);

echo $twig->render('login.twig', [
	'submitButtonHTML' => '<input class="btn btn-primary" type="submit" value="Log In"/>',
	'loginHeaderText' => 'Log In',
	'isAdminLogin' => true,
	'totalSiteLogins' => '1.00'
]);