<?php
// Q1 変数と文字列

$name = '吉田';
echo '私の名前は「'. $name .'」です。';

// Q2 四則演算

$num = 4*5;
echo $num . "\n";
echo $num / 2;

// Q3 日付操作

$current_time = date('Y年m月d日 H時i日s秒');
echo '現在時刻は、' . $current_time . 'です';

// Q4 条件分岐-1 if文

$device = 'windows';
if ($device == 'windows') {
    echo "使用OSは、windowsです。";
} else {
    if ($device == 'mac') {
        echo "使用OSは、macです。";
    } else {
        echo "どちらでもありません。";
    }
}

// Q5 条件分岐-2 三項演算子

$age = 15;
$result = $age < 18 ? '未成年です。': '成人です。';
echo $result;


// Q6 配列

$kantou = ['東京都','群馬県','千葉県','栃木県','茨城県','神奈川県'];
echo $kantou[3] . 'と' . $kantou[4] . 'は関東地方の都道府県です';

// Q7 連想配列-1

$kanto = [
    "東京都" => "新宿区",
    "神奈川県" => "横浜市",
    "千葉県" => "千葉市",
    "埼玉県" => "さいたま市",
    "栃木県" => "宇都宮市",
    "群馬県" => "前橋市",
    "茨城県" => "水戸市"
];

foreach($kanto as $city){
    echo $city . "\n";
}


// Q8 連想配列-2

$kanto = [
    "東京都" => "新宿区",
    "神奈川県" => "横浜市",
    "千葉県" => "千葉市",
    "埼玉県" => "さいたま市",
    "栃木県" => "宇都宮市",
    "群馬県" => "前橋市",
    "茨城県" => "水戸市"
];

foreach($kanto as $pref => $city){
    if($pref == "埼玉県"){
        echo $pref . "の県庁所在地は" . $city. "です。\n";
    }
}

// Q9 連想配列-3

$kanto = [
    "東京都" => "新宿区",
    "神奈川県" => "横浜市",
    "千葉県" => "千葉市",
    "埼玉県" => "さいたま市",
    "栃木県" => "宇都宮市",
    "群馬県" => "前橋市",
    "茨城県" => "水戸市"
];


$kanto["愛知県"] = "";
$kanto["大阪府"] = "";

foreach ($kanto as $pref => $city) {
    if ($city == "") {
        echo $pref . "は関東地方ではありません。\n";
    } else {
        echo $pref . "の県庁所在地は、" . $city . "です。\n";
    }
}

// Q10 関数-1

function hello($name){
    return $name ."さん、こんにちは。";
}

echo hello('金谷'). "\n";
echo hello('安藤');

// Q11 関数-2

function calcTaxInPrice($price){
    $taxInPrice = $price*1.1;
    return $price . "円の商品の税込価格は" . $taxInPrice . "円です。";
}

echo calcTaxInPrice('1000');

// Q12 関数とif文

function distinguishNum($num){
    if($num % 2 == 0){
        return $num . "は偶数です。";
    }elseif($num % 2 == 1){
        return $num . "は奇数です。";
    }
}

echo distinguishNum(11). "\n";
echo distinguishNum(24);

// Q13 関数とswitch文

function evaluateGrade($grade){
    switch($grade){
        case 'A':
        case 'B':
            return '合格です。';
            break;

        case 'C':
            return '合格ですが追加課題があります。';
            break;
        
        case 'D':
            return '不合格です。';
            break;
        
        default:
            return '判定不明です。講師に問い合わせてください。';
            break;

    }
}

echo evaluateGrade('A'). "\n";
echo evaluateGrade('D');


?>