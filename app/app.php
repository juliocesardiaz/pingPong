<?php 
	require_once __DIR__."/../vendor/autoload.php";
	require_once __DIR__."/../src/PingPong.php";
	
	$app = new Silex\Application ();
	
	$app->register(new Silex\Provider\TwigServiceProvider(), array(
		'twig.path' => __DIR__.'/../views'
	));
	
	$app->get("/", function() use ($app){
		return $app ['twig']->render('form.html.twig');
	});
	
	$app->get("/view_ping_pong", function() use ($app) {
		$myPingPong = new PingPong;
		$pingPong = $myPingPong->makePingPong($_GET['number']);
		return $app['twig']->render('pingPong.html.twig', array('result' => $pingPong));
	});
	return $app;
?>