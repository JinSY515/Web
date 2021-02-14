<?php
    $year=isset($_GET['year'])? $_GET['year'] : date('Y');
    $month=isset($_GET['month'])? $_GET['month']:date('m');
    $week=isset($_GET['week'])? $_GET['week']:date('W');
    $date=isset($_GET['date'])? $_GET['date']:date('d'); 
    $today="$year-$month-$date";
    //년,월,일 변수 지정.
    $timestamp=strtotime("$year-$month-01");
    $start_day=date('w',$timestamp);
    $total_day=date('t',$timestamp);
    $total_week=ceil(($total_day+$start_day)/7);
    $conn=mysqli_connect(
        "localhost",
        "root", 
        "***********",
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
            $list=$list."<li>{$escaped_to_do}</li>";
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
                    <li class="on"><a href="Monthly.php?year=<?php echo $year;?>&month=<?php echo sprintf("%02d",$month);?>">Monthly</a></li>
                    <li><a href="Weekly.php">Weekly</a></li>
                    <li><a href="Daily.php?year=<?php echo $year?>&month=<?php echo sprintf("%02d",$month);?>&date=<?php echo sprintf("%02d",$date)?>">Daily</a></li>
                    
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
                    <a href="Monthly.php?year=<?php echo $year?>&month=<?php echo sprintf("%02d",$month-1);?>">Prev</a>
                <?php endif ?>
                
                <?php if($month==12): ?>
                    <a href="Monthly.php?year=<?php echo $year+1?>&month=1">Next</a>
                <?php else: ?>
                    <a href="Monthly.php?year=<?php echo $year?>&month=<?php echo sprintf("%02d",$month+1);?>">Next</a>
                <?php endif ?>

                <a href="Monthly.php?year=<?php echo date("Y")?>&month=<?php echo sprintf("%02d",date("m"))?>">Today</a>
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
                                        <a href="Daily.php?year=<?php echo $year?>&month=<?php echo sprintf("%02d",$month);?>&date=<?php echo sprintf("%02d",$n)?>"><?php echo $n?></a>
                                        <?php 
                                            $date_selected=sprintf("%02d",$n);
                                            $count_record="SELECT * FROM diary WHERE diary_date='$year-$month-$date_selected'";
                                            $result_cnt=mysqli_query($conn,$count_record);
                                            $count=mysqli_num_rows($result_cnt);
                                        ?>
                                        <?php if($count>0): echo "<div id=\"heart\"><p><a href=\"Monthly.php?year=$year&month=$month&date=$date_selected\">$count</a></p></div>"?>
                                        <?php endif ?>
                                        <?php $n++;?>
                                    <?php endif ?>
                                </td>
                            <?php elseif($k%7==6): ?>
                                <td class="Day Saturday">
                                <?php if(($n>1||$k>=$start_day) && ($total_day>=$n)): ?>
                                    <a href="Daily.php?year=<?php echo $year?>&month=<?php echo sprintf("%02d",$month);?>&date=<?php echo sprintf("%02d",$n)?>"><?php echo $n?></a>
                                    <?php 
                                            $date_selected=sprintf("%02d",$n);
                                            $count_record="SELECT * FROM diary WHERE diary_date='$year-$month-$date_selected'";
                                            $result_cnt=mysqli_query($conn,$count_record);
                                            $count=mysqli_num_rows($result_cnt);
                                    ?>
                                    <?php if($count>0): echo "<div id=\"heart\"><p><a href=\"Monthly.php?year=$year&month=$month&date=$date_selected\">$count</a></p></div>"?>
                                    <?php endif ?>
                                    <?php $n++;?>
                                <?php endif ?>
                                
                                </td>
                            <?php else: ?>
                                <td class="Day">
                                <?php if(($n>1||$k>=$start_day) && ($total_day>=$n)): ?>
                                    <a href="Daily.php?year=<?php echo $year?>&month=<?php echo sprintf("%02d",$month);?>&date=<?php echo sprintf("%02d",$n)?>"><?php echo $n?></a>
                                    <?php 
                                            $date_selected=sprintf("%02d",$n);
                                            $count_record="SELECT * FROM diary WHERE diary_date='$year-$month-$date_selected'";
                                            $result_cnt=mysqli_query($conn,$count_record);
                                            $count=mysqli_num_rows($result_cnt);
                                    ?>
                                    <?php if($count>0): echo "<div id=\"heart\"><p><a href=\"Monthly.php?year=$year&month=$month&date=$date_selected\">$count</a></p></div>"?>
                                    <?php endif ?>
                                    <?php $n++;?>
                                <?php endif ?>

                                </td>
                            <?php endif ?>

                            <?php endfor; ?>
                            <td class="Week">
                                <?php $week=$i+1;?>
                                <a href="Weekly.php?year=<?php echo $year?>&month=<?php echo sprintf("%02d",$month);?>&week=<?php echo $week?>">W<?php echo $week?></a>
                            </td>
                    </tr>
                <?php endfor; ?>
                </table>
                <div class="show_box">
                    <div class="to_do_list">
                        <h3><?php echo "$month/$date To Do List"?></h3>
                        <ol>
                            <?php echo $list;?> 
                        </ol>
                    </div>
                </div>
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