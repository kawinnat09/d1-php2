<?php
    class Car{
        function testCar(){
            //$msg = "Thailand";
            $this->model = "UV"; 
        }

    }

    $newCar = new testCar();
    echo $newCar->model;
?>