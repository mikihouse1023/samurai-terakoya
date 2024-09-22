<?php

class Car
{

    //プロパティ(属性)
    public $color;
    public $model;


//2:"コンストラクタ"を内側に追加
public function __construct($color,$model){
 $this -> color = $color;
 $this -> model = $model;
}


    //メソッド
    public function message()
    {
        return "My car is a " . $this->color . " " . $this->model . "!";
    }
}

$myCar = new Car("Blue","Ford"); //[$myCar]というオブジェクトを作成する。
echo $myCar -> message(). "\n";

$myCar->color = "Gray"; //プロパティ[color]に"Gray"という値を入力する。

$myCar->model = "Gelande"; //プロパティ[model]に"Gelande"という値を入力する。

echo $myCar->message(); //メソッド[message]を実行する。

/*コンストラクタ追加前
My car is a Gray Gelande */

/*コンストラクタ追加後
My car is a Blue Ford
My car is a Gray Gelande
*/


