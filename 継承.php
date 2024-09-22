<?php

//親クラス
class Vehicle
{
    public $color;

    public function setColor($color)
    {
        $this->color = $color;
    }
}

//子クラス
//親クラス[Vehicle]から継承する

class Car extends Vehicle
{
    public $model;

    public function setModel($model)
    {
        $this->model = $model;
    }
}

//Carクラスのインスタンスを作成
$myCar = new Car();
$myCar->setColor("red");    //親クラスのメソッド
$myCar->setModel("Toyota"); //子クラスのメソッド
echo $myCar->color . ":" . $myCar->model . "\n";
