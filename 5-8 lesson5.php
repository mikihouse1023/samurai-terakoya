<?php

$array = [5, 2, 7, 9, 8, 1, 3, 6, 4];

//関数[bubbleSort]の定義
function bubbleSort($array) //引数[$array]としてソートしたい配列を受け取る(コード下部にあります)
{
    $n = count($array);//配列の要素数を[count]関数で取得し、変数[$n]に保存する
    $swapCount = 0; //入れ替え関数をカウントするため、変数[$swapCount]を初期化する

    for ($i = 0; $i < $n; $i++) //外側のループ
    {
        for ($j = 0; $j < $n - 1 - $i; $j++) {
            if ($array[$j] > $array[$j + 1]) {
                // 交換
                $temp = $array[$j];
                $array[$j] = $array[$j + 1];
                $array[$j + 1] = $temp;

                // 交換回数のカウント
                $swapCount++;

                // 途中経過の表示
                echo "入れ替え{$swapCount}回目\n";
                print_r($array);
            }
        }
    }
    return $array;
}



$sortedArray = bubbleSort($array);

echo "結果\n";
print_r($sortedArray);

?>
