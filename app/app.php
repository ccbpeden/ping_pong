<?php
    date_default_timezone_set('America/Los_Angeles');
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/PingPongGenerator.php";

    session_start();

    if(empty($_SESSION['results'])){
        $_SESSION['results'] = array();
    }

    $app = new Silex\Application();

    $app->register(new Silex\Provider\TwigServiceProvider(), array(
    'twig.path' => __DIR__.'/../views'
    ));

    $app['debug'] = true;

    $app->get("/", function() use ($app) {
        DeleteAll();
        return $app['twig']->render('form.html.twig', array('results' => $_SESSION['results']));
    });

    $app->post("/view_ping_pong", function() use($app) {

        $outputArray = PingPongGenerator::makeOutputArray($_POST['number']);
        return $app['twig']->render('form.html.twig', array('results' => $outputArray));
    });

    return $app;
?>
