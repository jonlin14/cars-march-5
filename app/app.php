<?php

    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/car.php";

    session_start();

    if (empty($_SESSION['list_of_cars']))
    {
        $_SESSION['list_of_cars'] = array();
    }

    $app = new Silex\Application();

    $app->register(new Silex\Provider\TwigServiceProvider(), array (
        'twig.path' => __DIR__.'/../views'
    ));

    $app->get("/", function() use ($app) {
        return $app['twig']->render('cars.php', array('car' => Car::getAll()));
    });

    $app->post("/matching", function() use ($app) {
        $car = new Car($_POST['price'], $_POST['miles']);
        $car->save();
        $cars=array();
        foreach ($cars as $car)
        {
            if ($this->price > $_POST['price'])
            array_push($cars_matching, $this);
            return $cars_matching;
        return $app['twig']->render('create_car.php', array('cars' => $cars_matching));

    }});


    $app->post("/delete_car", function() use ($app) {
        Car::deleteAll();
        return $app['twig']->render('delete_car.php');
    });

    return $app;



?>
