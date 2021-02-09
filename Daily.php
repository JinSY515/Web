
<?php
    $year=isset($_GET['year'])? $_GET['year'] : date('Y');
    $month=isset($_GET['month'])? $_GET['month']:date('n');
    $date=isset($_GET['date'])? $_GET['date']:date('d'); 
    $today="$year-$month-$date";
    $timestamp=strtotime("$year-$month-01");
    $start_day=date('w',$timestamp);
    $total_day=date('t',$timestamp);
    $total_week=ceil(($total_day+$start_day)/7);
    //년,월,일 변수 지정.

    $conn=mysqli_connect(
        "localhost",
        "root", 
        "***********", //비밀번호
        "opentutorials");
    $sql="SELECT * FROM diary";
    $result=mysqli_query($conn,$sql);
    $list='';
    $diary_date="$year-$month-$date"; 
    $sql="SELECT to_do FROM diary WHERE diary_date='$diary_date'";
    $result=mysqli_query($conn,$sql);
    if(mysqli_num_rows($result)>0){
        while($row=mysqli_fetch_array($result)){
            $escaped_to_do=htmlspecialchars($row['to_do']);
            $list=$list."<li>{$escaped_to_do}.........<a href=\"#\">수정</a> <a href=\"#\">완료!</a> <a href=\"#\">삭제</a></li>";
        }
    }

 

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
                    <li><a href="Monthly.php?year=<?php echo $year;?>&month=<?php echo sprintf("%02d",$month);?>">Monthly</a></li>
                    <li><a href="Weekly.php">Weekly</a></li>
                    <li class="on"><a href="Daily.php?year=<?php echo $year?>&month=<?php echo sprintf("%02d",$month);?>&date=<?php echo sprintf("%02d",$date);?>">Daily</a></li>
                    
                </ul>
            </nav>
        </header>
        <section id="container">
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
                        
                        <input type="submit" value="추가">
                    </fieldset>
                    <fieldset>
                        <legend>Diary</legend>
                        <label><textarea placeholder="오늘의 기록"></textarea></label><br>
                        <input type="submit" value="기록">
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
        </section>

        <footer>
            <p>HTML,CSS,JavaScript,PHP,MySQL<br>
            를 이용한 To do list/Diary 만들기</p>
            <p>Copyright(c)2021 JinSY515 <br>All Rights Reserved</p>
        </footer>
    </section>
    

</body>
</html>