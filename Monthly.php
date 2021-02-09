<?php
    $year=isset($_GET['year'])? $_GET['year'] : date('Y');
    $month=isset($_GET['month'])? $_GET['month']:date('m');
    $date=isset($_GET['date'])? $_GET['date']:date('d'); 
    $today="$year-$month-$date";
    //년,월,일 변수 지정.
    $timestamp=strtotime("$year-$month-01");
    $start_day=date('w',$timestamp);
    $total_day=date('t',$timestamp);
    $total_week=ceil(($total_day+$start_day)/7);
   
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
                    <li class="on"><a href="Monthly.php?year=<?php echo $year;?>&month=<?php echo $month;?>">Monthly</a></li>
                    <li><a href="Weekly.php">Weekly</a></li>
                    <li><a href="Daily.php?year=<?php echo $year?>&month=<?php echo $month?>&date=<?php echo $date?>">Daily</a></li>
                    
                </ul>
            </nav>
        </header>
        <section id="container">
            <div class="content_box">
                <div class="controller">
                <?php echo "$year 년 $month 월" ?>
                <?php if ($month==1): ?>
                    <a href="Monthly.php?year=<?php echo $year-1?>&month=12">Prev</a>
        
                <?php else: ?>
                    <a href="Monthly.php?year=<?php echo $year?>&month=<?php echo $month-1?>">Prev</a>
                <?php endif ?>
                
                <?php if($month==12): ?>
                    <a href="Monthly.php?year=<?php echo $year+1?>&month=1">Next</a>
                <?php else: ?>
                    <a href="Monthly.php?year=<?php echo $year?>&month=<?php echo $month+1?>">Next</a>
                <?php endif ?>

                <a href="Monthly.php?year=<?php echo date("Y")?>&month=<?php echo date("m")?>">Today</a>
                </div>

                <table id="calendar">
                    <tr>
                        <th class="Day Sunday">Sun</th>
                        <th class="Day">Mon</th>
                        <th class="Day">Tue</th>
                        <th class="Day">Wed</th>
                        <th class="Day">Thu</th>
                        <th class="Day">Fri</th>
                        <th class="Day Saturday">Sat</th>
                        <th class="Week">Week</th>
                    </tr>
                
                <?php for($n=1, $i=0; $i<$total_week; $i++):?>
                    <tr>
                        <?php for($k=0; $k<7; $k++): ?>
                            <?php if($k%7==0): ?>

                                <td class="Day Sunday">
                                    <?php if(($n>1||$k>=$start_day) && ($total_day>=$n)): ?>
                                        <a href="Daily.php?year=<?php echo $year?>&month=<?php echo $month?>&date=<?php echo $n?>"><?php echo $n++ ?></a>
                                    <?php endif ?>
                                </td>
                            <?php elseif($k%7==6): ?>
                                <td class="Day Saturday">
                                <?php if(($n>1||$k>=$start_day) && ($total_day>=$n)): ?>
                                    <a href="Daily.php?year=<?php echo $year?>&month=<?php echo $month?>&date=<?php echo $n?>"><?php echo $n++ ?></a>
                                <?php endif ?>
                                </td>
                            <?php else: ?>
                                <td class="Day">
                                <?php if(($n>1||$k>=$start_day) && ($total_day>=$n)): ?>
                                    <a href="Daily.php?year=<?php echo $year?>&month=<?php echo $month?>&date=<?php echo $n?>"><?php echo $n++ ?></a>
                                <?php endif ?>
                                </td>
                            <?php endif ?>

                            <?php endfor; ?>
                            <td class="Week">
                                <a href="Weekly.php?year=<?php echo $year?>&month=<?php echo $month?>&week=<?php echo $i+1?>">W<?php echo $i+1?></a>
                            </td>
                    </tr>
                <?php endfor; ?>
                </table>
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