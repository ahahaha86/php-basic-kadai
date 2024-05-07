<?php
// 連想配列を作成し変数に代入
$item = array(
    "名前" => "玉ねぎ",
    "値段" => 200,
    "産地" => "北海道"
);

// 連想配列の要素を出力
foreach ($item as $key => $value) {
    echo $key . ":" . $value . "<br>";
}
?>