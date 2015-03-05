<?php

class Car
{
    private  $model;
    private $price;
    private $miles;

    function __construct($model, $price )
    {
        $this->model = $model;
        $this->price = $price;

    }

    function worthBuying($max_price)
    {
        return $this->price < ($max_price + 100);
    }

    function setPrice($new_price)
    {
        $this->price = (float) $new_price;
        if ($float_price !=0) {
            $formatted_price = number_format($float_price, 2);
            $this->price = $float_price;
        }
    }
    function getPrice()
    {
        return $this->price;
    }
    function setMiles($new_miles)
    {
        $this->miles = (float) $new_miles;
        if ($float_miles !=0) {
            $this->miles = $float_miles;
        }
    }
    function getMiles()
    {
        return $this->miles;
    }


    function setModel($new_model)
    {
        $this->model = $new_model;
    }
    function getModel()
    {
        return $this->model;
    }

    function save()
    {
        array_push($_SESSION['list_of_cars'], $this);
    }



    static function deleteAll()
    {
        $_SESSION['list_of_cars'] = array();
    }
    static function getAll()
    {
        return $_SESSION['list_of_cars'];
    }

}

  $first_car = new Car("2014 Porsche 911", 114991, 7864, "red", "4wd", "images/porsche.jpg");
  $second_car = new Car("2011 Ford F450", 55995, 14241, "blue", "2wd", "images/ford.jpg");
  $third_car = new Car("2013 Lexus RX 350", 44700, 20000, "gold", "no wheel drive", "images/lexus.jpg");
  $fourth_car = new Car("Mercedes Benz CLS550", 39900, 37979, "brown", "8wd", "images/mercedes.jpg");

 ?>
