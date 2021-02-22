<?php
$year=isset($_GET['year'])? $_GET['year'] : date('Y');
$month=isset($_GET['month'])? $_GET['month']:date('n');
$date=isset($_GET['date'])? $_GET['date']:date('d'); 
$today="$year-$month-$date";
$timestamp=strtotime("$year-$month-01");
$start_day=date('w',$timestamp);
$total_day=date('t',$timestamp);
$total_week=ceil(($total_day+$start_day)/7);
$conn=mysqli_connect('localhost','root','***********','opentutorials');
settype($_POST['del'],'integer');
$filtered=array(
    'del'=>mysqli_real_escape_string($conn,$_POST['del']),
    'prev_page'=>mysqli_real_escape_string($conn,$_POST['prev_page'])
);

$sql="
    DELETE
        FROM diary
        WHERE id={$filtered['del']}
";

$result=mysqli_query($conn, $sql);
if($result==false){
    echo '저장하는 과정에서 문제가 생겼습니다. 관리자에게 문의해주세요.';
    error_log(mysqli_error($conn));
}
else{
    header('Location:Daily.php'.$filtered['prev_page']);
}

?>


