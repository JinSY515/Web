<?php
$year=isset($_GET['year'])? $_GET['year'] : date('Y');
$month=isset($_GET['month'])? $_GET['month']:date('n');
$date=isset($_GET['date'])? $_GET['date']:date('d'); 
$today="$year-$month-$date";
$timestamp=strtotime("$year-$month-01");
$start_day=date('w',$timestamp);
$total_day=date('t',$timestamp);
$total_week=ceil(($total_day+$start_day)/7);
$conn=mysqli_connect('localhost','root','***********','opentutorials'); //비밀번호

$filtered=array(
    'to_do'=>mysqli_real_escape_string($conn,$_POST['to_do']),
    'diary_date'=>mysqli_real_escape_string($conn,$_POST['diary_date']),
    'prev_page'=>mysqli_real_escape_string($conn,$_POST['prev_page'])
);

$sql="
    INSERT INTO diary
        (to_do,diary_date)
        VALUES(
            '{$filtered['to_do']}',
            '{$filtered['diary_date']}'
        )
";

$result=mysqli_query($conn, $sql);
if($result==false){
    echo '저장하는 과정에서 문제가 생겼습니다. 관리자에게 문의해주세요.';
    error_log(mysqli_error($conn));
}
else{
    header('Location:Daily.php?'.$filtered['prev_page']);
}


?>