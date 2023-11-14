<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>PHPの基礎を学ぼう_16章課題</title>
</head>
<body>
    <?php
        //「Food」クラスを作成
        class Food {
            private $name;
            private $price;

            // プロパティに値を代入する
            public function __construct(string $name, int $price) {
                $this->name = $name;
                $this->price = $price;
            }

            //「price」プロパティの値を出力する
            public function show_price() {
                echo $this->price . '<br>';
            }
        }

        //「Animal」クラスを作成
        class Animal {
            private $name;
            private $height;
            private $weight;

            // プロパティに値を代入する
            public function __construct(string $name, int $height, int $weight) {
                $this->name = $name;
                $this->height = $height;
                $this->weight = $weight;
            }

            //「height」 プロパティの値を出力する
            public function show_height() {
                echo $this->height . '<br>';
            }
        }

        // インスタンスを作成
        $food = new Food('potato', 250);
        // インスタンスを出力
        print_r($food);
        echo '<br>';

        // インスタンスを作成
        $animal = new Animal('dog', 60, 5000);
        // インスタンスを出力
        print_r($animal);
        echo '<br>';

        $food->show_price();
        $animal->show_height();
    ?>
</body>
</html>