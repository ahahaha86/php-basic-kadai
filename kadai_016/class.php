<?php
// Food クラスの定義
class Food
{
    public $name;
    public $price;

    // コンストラクタ
    function __construct($name, $price)
    {
        $this->name = $name;
        $this->price = $price;
    }

    // priceプロパティの値を出力するメソッド
    function show_price()
    {
        echo "Price: " . $this->price . "<br>";
    }
}


// Animal クラスの定義
class Animal
{
    public $name;
    public $height;
    public $weight;

    // コンストラクタ
    function __construct($name, $height, $weight)
    {
        $this->name = $name;
        $this->height = $height;
        $this->weight = $weight;
    }

    // heightプロパティの値を出力するメソッド
    function show_height()
    {
        echo "Height: " . $this->height . "<br>";
    }
}

//Food クラスのインスタンス化と出力
$food_instance = new Food("Apple", 100);
echo print_r($food_instance);
echo "<br>";

// Animal クラスのインスタンス化と出力
$animal_instance = new Animal("Lion", 120, 200);
echo print_r($animal_instance);
echo "<br>";

// メソッドへのアクセス
echo $food_instance->show_price();

echo $animal_instance->show_height();
