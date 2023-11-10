<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>PHPの基礎を学ぼう_11章課題</title>
</head>
<body>
    <p>
        <?php
            // 連想配列を作成し、変数に代入する
            $vegetable = ['名前' => '玉ねぎ', '値段' => 200, '産地' => '北海道'];

            // 連想配列のキーと値を出力する
            foreach ($vegetable as $key => $value) {
                echo "{$key} : {$value}<br>";
            }
        ?>
    </p>
</body>
</html>