<?php
    $year=isset($_GET['year'])? $_GET['year'] : date('Y');
    $month=isset($_GET['month'])? $_GET['month']:date('m');
    $date=isset($_GET['date'])? $_GET['date']:date('d'); 
    $today="$year-$month-$date";
    //년,월,일 변수 지정.
<<<<<<< Updated upstream
=======

    $conn=mysqli_connect(
        "localhost",
        "root", 
        "***********",
        "opentutorials");
    $sql="SELECT * FROM diary";
    $result=mysqli_query($conn,$sql);
    $list='';
    $diary_date="$year-$month-$date"; 
    $sql="SELECT * FROM diary WHERE diary_date='$diary_date'";
    $result=mysqli_query($conn,$sql);
        while($row=mysqli_fetch_array($result)){
            $escaped_to_do=htmlspecialchars($row['to_do']);
            $escaped_id=htmlspecialchars($row['id']);
            $m=sprintf("%02d",$month);
            $d=sprintf("%02d",$date);
            
            
            $del='
            <form action="Daily_delete.php" class="ali" method="POST">
                <input type="hidden" name="del" value="' .$escaped_id. '">
                <input type="submit"value="X" class="delete_btn">
                <input type="hidden" name="prev_page" value="?year='.$year.'&month='.$m.'&date='.$d.'">
            </form>';
            $chk='
            <div><form action="Daily_finish.php" class="ali" method="POST">
                <input type="hidden" name="chk" value="' .$escaped_id. '">
                <input type="submit" value="' .$escaped_to_do. '" class="check_btn">
                <input type="hidden" name="prev_page" value="?year='.$year.'&month='.$m.'&date='.$d.'">
            </form>     '.$del.'</div>';
            $list.='<li>'.$chk.'</li>';
        }
    

>>>>>>> Stashed changes
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
                    <li><a href="Annual.php">Annual</a></li>
                    <li><a href="Monthly.php?year=<?php echo $year;?>&month=<?php echo $month;?>">Monthly</a></li>
                    <li><a href="Weekly.php">Weekly</a></li>
                    <li class="on"><a href="Daily.php">Daily</a></li>
                    
                </ul>
            </nav>
        </header>
        <section id="container">
<<<<<<< Updated upstream
            
=======
            <div id="daily_day">
                    <?php if($date==1): ?>
                        <?php if($month==1): ?>
                            <a href="Daily.php?year=<?php echo $year-1?>&month=12&date=31">Prev</a>
                        <?php else: ?>
                            <?php
                                $max_day=date('t',mktime(0,0,0,$month-1,1,$year));
                            ?>
                            <a href="Daily.php?year=<?php echo $year?>&month=<?php echo sprintf("%02d",$month-1);?>&date=<?php echo $max_day?>">Prev</a>
                        <?php endif ?>
                        
                    <?php else: ?>
                        <a href="Daily.php?year=<?php echo $year?>&month=<?php echo sprintf("%02d",$month);?>&date=<?php echo sprintf("%02d",$date-1)?>">Prev</a>
                    <?php endif ?>
               
                <?php echo "$year 년 $month 월 $date 일"?>
                <?php
                    $max_day=date('t',mktime(0,0,0,$month,1,$year));
                ?>
                <?php if($date==$max_day): ?>
                        <?php if($month==12): ?>
                            <a href="Daily.php?year=<?php echo $year+1?>&month=1&date=1">Next</a>
                        <?php else: ?>
                            <a href="Daily.php?year=<?php echo $year?>&month=<?php echo sprintf("%02d",$month+1);?>&date=1">Next</a>
                        <?php endif ?>
                        
                    <?php else: ?>
                        <a href="Daily.php?year=<?php echo $year?>&month=<?php echo sprintf("%02d",$month);?>&date=<?php echo sprintf("%02d",$date+1)?>">Next</a>
                    <?php endif ?>
                    <a href="Daily.php?year=<?php echo date("Y")?>&month=<?php echo sprintf("%02d",date("m"))?>&date=<?php echo sprintf("%02d",date("d"))?>">Today</a>
            </div>
            <div id="input_box" class="daily_box">
                <form action="Daily_create.php" method="POST" class="box">
                    <fieldset>
                        <legend>To do list</legend>
                        <label><input type="text" name="to_do" placeholder="오늘의 할 일은?"></label><br>
                        <?php $diary_date="$year-$month-$date"; echo $diary_date?>
                        <input type="hidden" name="diary_date" value="<?php echo $diary_date?>">
                        <input type="hidden" name="prev_page" value="year=<?php echo $year?>&month=<?php echo sprintf("%02d",$month);?>&date=<?php echo sprintf("%02d",$date);?>">
                        <input type="hidden" name="finish_flag" value="0">
                        <input type="submit" value="추가">
                    </fieldset>
                </form>
                <br>
                <form action="Daily_diary_create.php" method="POST" class="box">
                    <fieldset>
                        <legend>Diary</legend>
                        <label><textarea name="today_record" placeholder="오늘의 기록"></textarea></label><br>
                        <input type="submit" value="기록">
                        <input type="hidden" name="diary_date" value="<?php echo $diary_date?>">

                    </fieldset>
                </form>
            </div>

            <div id="output_box" class="daily_box">
                <form class="box">
                    <fieldset>
                        <legend>Today's Plan</legend>
                        <ol>
                            <?php echo $list;?>
                        </ol>
                        
                    </fieldset>
    
                </form>
            </div>
>>>>>>> Stashed changes
        </section>

        <footer>
            <p>HTML,CSS,JavaScript,PHP,MySQL<br>
            를 이용한 To do list/Diary 만들기</p>
            <p>Copyright(c)2021 JinSY515 <br>All Rights Reserved</p>
        </footer>
    </section>
    

</body>
</html>