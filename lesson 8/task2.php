Задание 1
<p>
    <?php $a = mt_rand(-99, 100);
    $b = mt_rand(-99, 100);

    echo "a = {$a};<br>
      b = {$b};<br>";

    if ($a >= 0 && $b >= 0) {
        $c = $a - $b;
        echo "Разность чисел равна: {$c}";
    } elseif ($a < 0 && $b < 0) {
        $c = $a * $b;
        echo "Произведение чисел равно: {$c}";
    } else {
        $c = $a + $b;
        echo "Сумма чисел равна: {$c}";
    }
    ?>
</p>
Задание 2
<p>
    <?php
    $a = mt_rand(0, 15);
    switch ($a) {
        case 0: echo $a++ . ", ";
        case 1: echo $a++ . ", ";
        case 2: echo $a++ . ", ";
        case 3: echo $a++ . ", ";
        case 4: echo $a++ . ", ";
        case 5: echo $a++ . ", ";
        case 6: echo $a++ . ", ";
        case 7: echo $a++ . ", ";
        case 8: echo $a++ . ", ";
        case 9: echo $a++ . ", ";
        case 10: echo $a++ . ", ";
        case 11: echo $a++ . ", ";
        case 12: echo $a++ . ", ";
        case 13: echo $a++ . ", ";
        case 14: echo $a++ . ", ";
        case 15: echo $a++ . ".";
    }
    ?>
</p>
Задание 3
<p>
    <?php
    $a = mt_rand(1, 10);
    $b = mt_rand(1, 10);
    echo "a = {$a};<br>
      b = {$b};<br>";
    echo mathOperation($a, $b);
    function add($a, $b) {
        return $a + $b;
    }
    function reduce($a, $b) {
        return $a - $b;
    }
    function divide($a, $b) {
        return ($b == 0) ? "Ошибка" : $a / $b;
    }
    function multiply($a, $b) {
        return $a * $b;
    }
    function mathOperation($a, $b, $operation = 'add') {
        if ($operation) {
            switch($operation) {
                case "add": return "Сумма чисел: " . add($a, $b) ."<br>";
                case "reduce": return "Разность чисел: " . reduce($a, $b) ."<br>";
                case "divide": return "Частное чисел: " . divide($a, $b) ."<br>";
                case "multiply": return "Произведение чисел: " . multiply($a, $b);
                default: return "Неверная операция";
            }
        }
        return "Сумма чисел: " . add($a, $b) ."<br>" .
            "Разность чисел: " . reduce($a, $b) ."<br>" .
            "Частное чисел: " . divide($a, $b) ."<br>" .
            "Произведение чисел: " . multiply($a, $b);
    }
    ?>
</p>
Задание 4
<p>
    <html>
    <head>
        <title>Домашняя работа</title>
        <meta charset="utf-8">
    </head>
    <body>
    <?php
    $year = date('Y');
    echo <<<"html"
$year
html;
    ?>
    </body>
    </html>

</p>
Задание 5
<p>
    <?php
    $a = 0;
    do {
        if ($a == 0) {
            echo $a . " - это ноль<br>";
        } elseif ($a & 1 != 0) {
            echo $a . " - нечетное число<br>";
        } else {
            echo $a . " - четное число<br>";
        }
        $a++;
    } while ($a <= 10);
    ?>
</p>
Задание 6
<?
$arrayObl = [
    "Московская область" => ["Москва", "Зеленоград", "Красногорск"],
    "Ленинградская область" => ["Санкт-Петербург", "Всеволожск", "Павловск", "Кронштадт"],
    "Рязанская область" => ["Рязань", "Скопин", "Ряжск", "Кораблино"]
];
foreach ($arrayObl as $obl => $city) {      //Перебор массива для вывода каждой обл и города
    echo "<br>" . $obl . ": <br>";                   //эхнули каждую область
    foreach ($city as $cityName) {          //цикл в цикле для вывода городов в областях.
        echo  " " .  $cityName . ", "; //вывод городов
    }
}
?>
<p>
    Задание 7
</p>
<p>
    <?php
    $string = "Транслитерация строк";
    echo $string . "<br>";

    $alfabet = [
        'а' => 'a', 'б' => 'b', 'в' => 'v',
        'г' => 'g', 'д' => 'd', 'е' => 'e',
        'ё' => 'e', 'ж' => 'zh', 'з' => 'z',
        'и' => 'i', 'й' => 'y', 'к' => 'k',
        'л' => 'l', 'м' => 'm', 'н' => 'n',
        'о' => 'o', 'п' => 'p', 'р' => 'r',
        'с' => 's', 'т' => 't', 'у' => 'u',
        'ф' => 'f', 'х' => 'h', 'ц' => 'c',
        'ч' => 'ch', 'ш' => 'sh', 'щ' => 'sch',
        'ь' => '-', 'ы' => 'y', 'ъ' => '-',
        'э' => 'e', 'ю' => 'yu', 'я' => 'ya'
    ];

    $result = "";
    for ($i = 0; $i < mb_strlen($string); $i++) {
        $letter = mb_substr($string, $i, 1);
        if (isset($alfabet[mb_strtolower($letter)])) {
            if ($letter === mb_strtolower($letter)) {
                $latin_letter = $alfabet[$letter];
            } else {
                $latin_letter = mb_strtoupper($alfabet[mb_strtolower($letter)]);
            }
        } else {
            $latin_letter = $letter;
        }
        $result .= $latin_letter;
    }
    echo $result;
    ?>
</p>
Задание 8
<p>
<?php
$menu = [
    [
        "title" => "Главная",
        "href" => "/"
    ],
    [
        "title" => "Каталог",
        "href" => "/catalog/",
        "subitems" => [
            [
                "title" => "Автомобили",
                "href" => "/catalog/goods/"
            ],
            [
                "title" => "Самолоеты",
                "href" => "/catalog/goods/",
                "subitems" => [
                    [
                        "title" => "Военные",
                        "href" => "/catalog/goods/"
                    ],
                    [
                        "title" => "Гражданские",
                        "href" => "/catalog/goods/"
                    ]
                ]
            ]
        ]
    ],
    [
        "title" => "Корабли",
        "href" => "/catalog/goods/"
    ],
];

$result = "<ul>";
$result .= menuRender($menu);
$result .= "</ul>";

echo $result;


function menuRender($menu_array){
    $result = "";

    foreach($menu_array as $item){
        $result .= "<li><a href='{$item['href']}'>{$item['title']}</a>";

        if(isset($item["subitems"])){
            $result .= "<ul>";
            $result .= menuRender($item["subitems"]);
            $result .= "</ul>";
        }

        $result .= "</li>";
    }

    return $result;
}
?>