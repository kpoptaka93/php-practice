<?php
// Q1 tic-tac問題
for($i = 1; $i <= 100; $i++){
    if($i % 4 === 0 && $i % 5 === 0){
        echo 'tic-tac' ;
    }elseif($i % 4 === 0){
        echo "tic\n";
    }elseif($i % 5 === 0){
        echo "tac\n";
    }else
        echo $i . "\n";
}

// Q2 多次元連想配列

echo 'Bさんの電話番号は、' . $personalInfos[1]['tel'] . "です。\n";

foreach ($personalInfos as $x => $y){
    $num = $x + 1;
    
    echo $num . '番目の' . $y['name'] . 'のメールアドレスは' . $y['mail'] . 'で、電話番号は' . $y['tel'] . "です。\n";
    
}

 $ageList = [25, 30, 18];
 
foreach ($personalInfos as $x => $y){
    
    $personalInfos[$x]['age'] = $ageList[$x];
}

var_dump($personalInfos);





// Q3 オブジェクト-1
$yamada = new Student(120, '山田');

echo '学籍番号は' . $yamada->studentId . '番の生徒は' . $yamada->studentName . 'です。'; 



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

    public function attend($subject)
    {
        echo $this->studentName . 'は' . $subject . 'の授業に参加しました' . '学績番号:' . $this->studentId ; 


        $yamada->attend('PHP');
 


// Q5 定義済みクラス


$date = new DateTime('-1 month');

var_dump($date);



$today = new DateTime('now');
$past = new DateTime('1992-04-25'); 
$interval = $today->diff($past);



echo 'あの日から' . $interval->format('%a') . '日経過しました。';















?>
