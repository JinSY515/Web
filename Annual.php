<?php
    $year=isset($_GET['year'])? $_GET['year'] : date('Y');
    $month=isset($_GET['month'])? $_GET['month']:date('m');
    $date=isset($_GET['date'])? $_GET['date']:date('d'); 
    $today="$year-$month-$date";
    //년,월,일 변수 지정.
?>

<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/ui.css" type='text/css'>
    <script type="text/javascript" src="./js/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="./js/ui.js"></script>
    <title>To do list</title>
</head>
<body>
    <section id="layout">
        <header>
            <strong class="logo"><a href="To_do_list.php"><img src="images/diary.png"></a></strong>
            <li id="main"><a href="To_do_list.php">Main</a></li>
            <nav>
                <ul>
                    <li class="on"><a href="Annual.php">Annual</a></li>
                    <li><a href="Monthly.php?year=<?php echo $year;?>&month=<?php echo $month;?>">Monthly</a></li>
                    <li><a href="Weekly.php">Weekly</a></li>
                    <li><a href="Daily.php">Daily</a></li>
                    
                </ul>
            </nav>
        </header>
        <section id="container">
            
        </section>

        <footer>
            <p>HTML,CSS,JavaScript,PHP,MySQL<br>
            를 이용한 To do list/Diary 만들기</p>
            <p>Copyright(c)2021 JinSY515 <br>All Rights Reserved</p>
        </footer>
    </section>
    

</body>
</html>