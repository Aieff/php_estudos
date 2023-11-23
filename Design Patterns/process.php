<?php

    include_once("db.php");
    include_once("DAO/CarDAO.php");

    $carDao = new CarDAO($conn);

    $brand = $_POST['brand'];
    $km = $_POST['km'];
    $cor = $_POST['color'];

    $newCar = new Car();

    $newCar -> setBrand($brand);
    $newCar -> setBrand($km);
    $newCar -> setBrand($cor);

    $carDao -> create($newCar);

    header("Location: index.php");