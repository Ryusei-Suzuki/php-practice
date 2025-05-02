<?php
// Q1 tic-tac問題

for ($i = 1; $i <= 100; $i++){
  if (($i % 4 == 0) && ($i % 5 == 0)){
    echo 'tic-tac' . "\n";
  } elseif ($i % 4 == 0){
    echo 'tic' . "\n";
  } elseif ($i % 5 == 0){
    echo 'tac' . "\n";
  } else {
    echo $i . "\n";
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

$ageList = [25, 30, 18];

// 問題1
echo $personalInfos[1]['name'] . 'さんの電話番号は' . $personalInfos[1]['tel'] . 'です。' . "\n";

// 問題2
$numQ2 = 1;
foreach ($personalInfos as $x){
  echo $numQ2 . '番目の' . $x['name'] . 'のメールアドレスは' . $x['mail'] . 'で、電話番号は' . $x['tel'] . 'です。' . "\n";
  $numQ2++;
}

// 問題3　変数名かえる
foreach ($personalInfos as $x => $y){
  $personalInfos[$x]['age'] = $ageList[$x];
}

var_dump($personalInfos);


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

$suzuki = new Student(150, '鈴木');
echo '学籍番号' . $suzuki -> studentId . '番の生徒は' . $suzuki -> studentName . 'です。';


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

    public function attend($attendId)
    {
        echo $this -> studentName . 'は' . $attendId . 'の授業に出席しました。学籍番号' . $this -> studentId;
    }
}

$yamada = new Student(120, '山田');
var_dump($yamada);
$yamada->attend('PHP');



// Q5 定義済みクラス
// 問題1
$today = new DateTime();
$newDate = $today -> modify('-1 month');
echo $newDate -> format('Y-m-d');

// 問題2
$today = new DateTime('2025-5-1');
$terget = new DateTime('1992-4-25');
$interval = $today -> diff($terget);
echo $interval -> format('あの日から%a日経過しました。');

?>