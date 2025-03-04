<?php
// Q1 tic-tac問題

$numbers = range(1, 100);

foreach($numbers as $num){
    if($num % 4 == 0){
        echo 'tic'. "\n";
    }elseif($num % 5 == 0){
        echo 'tac'. "\n";
    }elseif($num % 20 == 0){
        echo 'tic-tac'. "\n";
    }else{
        echo $num. "\n";
    }
}

// Q2 多次元連想配列

$personalInfos = [
    [
        'name' => 'Aさん',
        'mail' => 'aaa@mail.com',
        'tel'  => '09011112222'
    ],
    [
        'name' => 'Bさん',
        'mail' => 'bbb@mail.com',
        'tel'  => '08033334444'
    ],
    [
        'name' => 'Cさん',
        'mail' => 'ccc@mail.com',
        'tel'  => '09055556666'
    ],
];

//問題１

foreach($personalInfos as $info){
    if($info['name'] == 'Bさん'){
        echo $info['name'] . 'の電話番号は' . $info['tel'] . 'です。';
    }
}


//問題２

$number = 1; 

foreach($personalInfos as $info){
    echo $number . '番目の' . $info['name'] . 'のメールアドレスは' . $info['mail'] . 'で、電話番号は' . $info['tel'] . 'です。' . "\n";
    $number++;
}


//問題３

$ageList = [25, 30, 18];

foreach ($personalInfos as $key => &$info) {
    $info['age'] = $ageList[$key]; 
}



// Q3 オブジェクト-1

class Student
{
    public $studentId;
    public $studentName;

    public function __construct($id, $name)
    {
        $this->studentId = $id;
        $this->studentName = $name;
    }

    public function attend()
    {
        echo '授業に出席しました。';
    }
}

$yamada = new Student(120, '山田');

echo '学籍番号' . $student->studentId . '番の生徒は' . $student->studentName . 'です。';



// Q4 オブジェクト-2

class Student
{
    public $studentId;
    public $studentName;

    public function __construct($id, $name)
    {
        $this->studentId = $id;
        $this->studentName = $name;
    }

    public function attend($language)
    {
        echo $this->studentName. 'は'. $language. 'の授業に参加しました。学籍番号:'.$this->studentId;
    }
}

$yamada = new Student(120, '山田');
$yamada->attend('PHP');

// Q5 定義済みクラス

// 問題１

$date = new DateTime();
echo $date->modify('-1 months')->format('Y-m-d');


// 問題２
$day = new DateTime('1992-4-25');
$today = new DateTime();
$diff = $day->diff($today);
echo 'あの日から'. $diff->days. '日経過しました。';



?>