<?php
class Mathoperations {

    public static function add($a,$b){
    return $a + $b;
    }
}

class Car{
    public $model;
    
    //コンストラクタ(インスタンスメソッドの一例)
    public function __construct($model){
    $this ->model = $model;
    }

//インスタンスメソッドの例
public function getModel(){
 return $this -> model;
}
}

$result = MathOperations ::add(5,3);//オブジェクト化せずに直接呼び出し

$myCar = new Car("Toyota");
$model = $myCar -> getModel(); //オブジェクト化後に呼び出し

?>