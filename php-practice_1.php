<?php
// Q1 変数と文字列
$nameQ1 = '鈴木';
echo "私の名前は「" . $nameQ1 . "」です。\n";


// Q2 四則演算
$numQ2 = 5 * 4;
echo "$numQ2\n";
echo $numQ2 / 2;



// Q3 日付操作
date_default_timezone_set('Asia/Tokyo');
echo "現在時刻は、" . date("Y") . "年" . date("m") . "月" . date("d") . "日" . date("G") . "時" . date("i") . "分" . date("s") . "秒です。";



// Q4 条件分岐-1 if文
$deviceQ4 = 'mac';

if (($deviceQ4 !== 'windows') && ($deviceQ4 !== 'mac')){
  echo "どちらでもありません";
} 
    
if ($deviceQ4 == 'mac') {
        echo "使用OSは" . $deviceQ4 . "です";
} 
    
if ($deviceQ4 == 'windows') {
      echo "使用OSは" . $deviceQ4 . "です";
}


// Q5 条件分岐-2 三項演算子
$ageQ1 = 18;
$messageQ1 = ($ageQ1 < 18) ? '未成年です。' : '成人です。';
echo $messageQ1;


// Q6 配列
$kantoQ6 = ['東京都', '栃木県', '群馬県', '茨城県', '埼玉県', '千葉県', '神奈川県'];
echo $kantoQ6[2] . 'と'. $kantoQ6[3] . 'は関東地方の都道府県です。';



// Q7 連想配列-1
$kantoQ7 = ['東京都'=> '新宿区', '栃木県' => '宇都宮市', '群馬県' => '前橋市', '茨城県' => '水戸市', '埼玉県' => 'さいたま市', '千葉県' => '千葉市', '神奈川県' => '横浜市'];
foreach ($kantoQ7 as $x => $y){
  echo "$y\n";
}


// Q8 連想配列-2
$kantoQ8 = ['東京都'=> '新宿区', '栃木県' => '宇都宮市', '群馬県' => '前橋市', '茨城県' => '水戸市', '埼玉県' => 'さいたま市', '千葉県' => '千葉市', '神奈川県' => '横浜市'];
foreach ($kantoQ8 as $x => $y){
  if ($y == 'さいたま市'){
    echo $x . "の県庁所在地は、" . $y . "です。";
  }
}


// Q9 連想配列-3
$kantoQ9 = ['東京都'=> '新宿区', '長野県' => '長野市', '栃木県' => '宇都宮市', '群馬県' => '前橋市', '茨城県' => '水戸市', '北海道' => '札幌市', '埼玉県' => 'さいたま市', '千葉県' => '千葉市', '神奈川県' => '横浜市'];
foreach ($kantoQ9 as $x => $y){
  if (($y !== '長野市') && ($y !== '札幌市')){
    echo $x . 'の県庁所在地は' . $x . 'です。' . "\n";
  } else {
    echo $x . 'は関東地方ではありません。' . "\n";
  }
}


// Q10 関数-1
function hello($nameQ10){
    echo $nameQ10 . 'さん、こんにちは。' . "\n";
}

$namelistQ10 = ['鈴木', '佐藤'];
$listcount = count($namelistQ10);
for ($i = 0; $i < $listcount; $i++){
  hello($namelistQ10[$i]);
}


// Q11 関数-2
function calcTaxInPrice($price){
  return $price * 1.1;
}

$default = 1000;
$taxInPrice = calcTaxInPrice($default);
echo $default . 'の商品の税込価格は' . $taxInPrice . "円です。" ;



// Q12 関数とif文
function distinguishNum($numjudge){
  return $numjudge % 2;
}

$numQ12 = 11;
$numresult = distinguishNum($numQ12);
if ($numresult == 0){
  echo $numQ12 . "は偶数です。";
} else {
  echo $numQ12 . "は奇数です。";
}


// Q13 関数とswitch文
function evaluateGrade($grade){
  switch ($grade){
    case 'A':
    case 'B':
      return '合格です。' . "\n";
      break;
    case 'C':
      return '合格ですが追加課題があります。' . "\n";
      break;
    case 'D':
      return '不合格です。' . "\n";
      break;
    default:
      return '判定不明です。講師に問い合わせてください。' . "\n";
  }
}

$judgeQ13_1 = 'B';
$judgeQ13_2 = 'X';

echo evaluateGrade($judgeQ13_1);
echo evaluateGrade($judgeQ13_2);

?>