<?php
// Q1
$name = '鈴木';
echo "私の名前は「" . $name . "」です。\n";


// Q2 四則演算　変数名修正。
$numcol = 5 * 4;   //Calculation：計算
echo $numcol . "\n" . $numcol / 2;



// Q3 日付操作
date_default_timezone_set('Asia/Tokyo');
echo "現在時刻は、" . date('Y年m月d日G時i分s秒') . "です。";



// Q4 条件分岐-1 if文  
$device = 'mac';

if (($device === 'windows') || ($device === 'mac')){
  echo "使用OSは" . $device . "です";
} else {
  echo "どちらでもありません";
}


// Q5 条件分岐-2 三項演算子
$age = 18;
$message = ($age < 18) ? '未成年です。' : '成人です。';
echo $message;


// Q6 配列
$kanto = ['東京都', '栃木県', '群馬県', '茨城県', '埼玉県', '千葉県', '神奈川県'];
echo $kanto[2] . 'と'. $kanto[3] . 'は関東地方の都道府県です。';



// Q7 連想配列-1　
$kanto = ['東京都'=> '新宿区', '栃木県' => '宇都宮市', '群馬県' => '前橋市', '茨城県' => '水戸市', '埼玉県' => 'さいたま市', '千葉県' => '千葉市', '神奈川県' => '横浜市'];
foreach ($kanto as $token => $kencho){
   echo $kencho . "\n"; 
}


// Q8 連想配列-2
$kanto = ['東京都'=> '新宿区', '栃木県' => '宇都宮市', '群馬県' => '前橋市', '茨城県' => '水戸市', '埼玉県' => 'さいたま市', '千葉県' => '千葉市', '神奈川県' => '横浜市'];
foreach ($kanto as $token => $kencho){
  if ($kencho == 'さいたま市'){
    echo $token . "の県庁所在地は、" . $kencho . "です。";
  }
}


// Q9 連想配列-3 
$kanto = ['東京都'=> '新宿区', '長野県' => '長野市', '栃木県' => '宇都宮市', '群馬県' => '前橋市', '茨城県' => '水戸市', '北海道' => '札幌市', '埼玉県' => 'さいたま市', '千葉県' => '千葉市', '神奈川県' => '横浜市'];
foreach ($kanto as $token => $kencho){
  if (($kencho !== '長野市') && ($kencho !== '札幌市')){
    echo $token . 'の県庁所在地は' . $token . 'です。' . "\n";
  } else {
    echo $token . 'は関東地方ではありません。' . "\n";
  }
}


// Q10 関数-1 
function hello($name){
    echo $name . 'さん、こんにちは。' . "\n";
}

$namelist = ['鈴木', '佐藤'];
$listcount = count($namelist);
for ($i = 0; $i < $listcount; $i++){
  hello($namelist[$i]);
}


// Q11 関数-2  税抜き価格の変数名を指定のものに変更、それに伴い関数名変更。
function calcTaxInPrice($Calprice){
  return $Calprice * 1.1;
}

$price = 1000;   
$taxInPrice = calcTaxInPrice($price);
echo $price . '円の商品の税込価格は' . $taxInPrice . "円です。" ;




// Q12 distinguishNumの返り値を表示結果に変更。
function distinguishNum($numjudge){
  $divnum = $numjudge % 2;
  if ($divnum === 0){
    return $numjudge . "は偶数です。";
  } else {
    return $numjudge . "は奇数です。";
  }
}

$num = 11;
echo distinguishNum($num);




// Q13 関数とswitch文   関数名変更
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

$firstjudge = 'B';
$secondjudge = 'X';

echo evaluateGrade($firstjudge);
echo evaluateGrade($secondjudge);

?>