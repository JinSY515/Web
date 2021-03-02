# Web
html, css, javascript, php, MySQL 등 천천히 만들어보는 1인 프로젝트

<h3>기능 목록</h3>

<h5>메인 화면 / 전체 화면</h5>
<table>
    <tr>
        <th>구분</th>
        <th>핵심 기능</th>
        <th>세부 기능</th>
        <th>비고</th>
        <th>구현 여부</th>
    </tr>
    <tr>
        <td>메인화면 To do list.php</td>
        <td>페이지 이동</td>
        <td>좌측의 내비게이션 선택 시 대응하는 페이지로 이동</td>
        <td>jQuery + php 페이지 이동 기능</td>
        <td>O</td>
    </tr>
    <tr>
        <td>메인화면을 제외한 모든 페이지</td>
        <td>페이지 이동</td>
        <td>좌측 상단의 main버튼 클릭 시 메인화면으로 이동, 현재 페이지 표시</td>
        <td>jQuery + php 페이지 이동 기능, 메인화면에서는 존재하지 않음</td>
        <td>O</td>
    </tr>
    <tr>
        <td>전체 페이지</td>
        <td>날짜 구현</td>
        <td>###.php?year=YYYY&month=MM&day=DD로 표현</td>
        <td>이 양식을 바탕으로 페이지 이동</td>
        <td>O</td>
    </tr>
</table>
<hr>
<h5>Annual 페이지</h5>
<table>
    <tr>
        <th>구분</th>
        <th>핵심 기능</th>
        <th>세부 기능</th>
        <th>비고</th>
        <th>구현 여부</th>
    </tr>
    <tr>
        <td>Annual.php</td>
        <td>페이지 이동</td>
        <td>연도 선택, 대응하는 Monthly.php로 이동</td>
        <td>jQuery + php 페이지 이동 기능</td>
        <td>X</td>
    </tr>
    <tr>
        <td>Annual.php</td>
        <td>페이지 이동</td>
        <td>각 월을 클릭 시 대응하는 Monthly.php로 이동</td>
        <td>jQuery + php 페이지 이동 기능</td>
        <td>O</td>
    </tr>
    <tr>
        <td>Annual.php</td>
        <td>페이지 꾸미기</td>
        <td>Annual 페이지 꾸미기</td>
        <td>CSS</td>
        <td>X(아이디어 조합중)</td>
    </tr>
</table>
<hr>
<h5>Monthly 페이지</h5>
<table>
    <tr>
        <th>구분</th>
        <th>핵심 기능</th>
        <th>세부 기능</th>
        <th>비고</th>
        <th>구현 여부</th>
    </tr>
    <tr>
        <td>Monthly.php</td>
        <td>달력 연월 표현</td>
        <td>컨트롤러에 따라 날짜 변환</td>
        <td></td>
        <td>O</td>
    </tr>
    <tr>
        <td>Monthly.php</td>
        <td>달력 표현_prev 버튼</td>
        <td>이전 달로 이동</td>
        <td></td>
        <td>O</td>
    </tr>
    <tr>
        <td>Monthly.php</td>
        <td>달력 표현_next 버튼</td>
        <td>다음 달로 이동</td>
        <td></td>
        <td>O</td>
    </tr>
    <tr>
        <td>Monthly.php</td>
        <td>달력 표현_today 버튼</td>
        <td>오늘이 있는 달로 이동</td>
        <td></td>
        <td>O</td>
    </tr>
    <tr>
        <td>Monthly.php</td>
        <td>날짜 클릭 기능</td>
        <td>각 날짜 클릭 시 선택한 날짜의 Daily 기록 파트로 이동</td>
        <td>li 기능 + php 이동 기능</td>
        <td>O</td>
    </tr>
    <tr>
        <td>Monthly.php</td>
        <td>오늘 할 일 하트</td>
        <td>달력에 각 날짜에 기록된 할일 목록 개수 표시</td>
        <td>li 기능 + MySQL 연동 + MySQL 날짜 기준으로 개수 불러오기</td>
        <td>O</td>
    </tr>
    <tr>
        <td>Monthly.php</td>
        <td>오늘 할 일 목록</td>
        <td>하트 클릭 시 우측의 노트에 기록된 할 일 목록 표시</td>
        <td>li 기능 + MySQL 연동 + MySQL 날짜 기준으로 할 일 불러오기</td>
        <td>O</td>
    </tr>
    <tr>
        <td>Monthly.php</td>
        <td>페이지 이동</td>
        <td>각 Week로 이동</td>
        <td>php 페이지 이동</td>
        <td>O</td>
    </tr>
</table>
<hr>
<h5>Weekly 페이지(고민 중)</h5> 
<table>
    <tr>
        <th>구분</th>
        <th>핵심 기능</th>
        <th>세부 기능</th>
        <th>비고</th>
        <th>구현 여부</th>
    </tr>
    <tr>
        <td>Weekly.php</td>
        <td>페이지 이동</td>
        <td>이전/다음/이번 주 이동</td>
        <td>php 페이지 이동</td>
        <td>X</td>
    </tr>
    <tr>
        <td>Weekly.php</td>
        <td>일주일 표현</td>
        <td>요일별 칸 만들기</td>
        <td></td>
        <td>O</td>
    </tr>
    <tr>
        <td>Weekly.php</td>
        <td>MySQL 연동</td>
        <td>주의 요일별 다이어리 불러오기</td>
        <td>sql</td>
        <td>X</td>
    </tr>
</table>

<hr>
<h5>Daily 페이지</h5>
<table>
    <tr>
        <th>구분</th>
        <th>핵심 기능</th>
        <th>세부 기능</th>
        <th>비고</th>
        <th>구현 여부</th>
    </tr>
    <tr>
        <td>Daily.php</td>
        <td>날짜 표현_prev 버튼</td>
        <td>이전 날로 이동</td>
        <td></td>
        <td>O</td>
    </tr>
    <tr>
        <td>Daily.php</td>
        <td>날짜 표현_next 버튼</td>
        <td>다음 날로 이동</td>
        <td></td>
        <td>O</td>
    </tr>
    <tr>
        <td>Daily.php</td>
        <td>날짜 표현_today 버튼</td>
        <td>오늘로 이동</td>
        <td></td>
        <td>O</td>
    </tr>
    <tr>
        <td>Daily.php</td>
        <td>MySQL 연동</td>
        <td>To do list를 저장할 데이터베이스</td>
        <td>id(INT), to_do(varchar), diary_date(yyyy-mm-dd), finish_flag(0/1)</td>
        <td>O</td>
    </tr>
    <tr>
        <td>Daily.php</td>
        <td>To do list 저장</td>
        <td>To do list의 날짜, 할 일, 이전 페이지 주소, 완료 여부 전달</td>
        <td>form method="POST"로 전달</td>
        <td>O</td>
    </tr>
    <tr>
        <td>Daily_create.php</td>
        <td>To do list 저장</td>
        <td>To do list의 날짜, 할 일, 이전 페이지 주소, 완료 여부 전달받아 데이터베이스에 저장</td>
        <td>sql INSERT INTO 기능, 안전성을 위해 filter해서 저장<br>
            이전 페이지 주소는 별도의 페이지로 넘어가지 않고 header로 지정하기 위함</td>
        <td>O</td>
    </tr>
    <tr>
        <td>Daily.php</td>
        <td>저장된 To do list 목록 보기</td>
        <td>오늘의 To do list MySQL에서 불러와서 나열</td>
        <td>diary_date로 불러오기</td>
        <td>O</td>
    </tr>
    <tr>
        <td>Daily.php</td>
        <td>To do list 삭제</td>
        <td>삭제할 To do list의 id, 이전 페이지 주소 전달</td>
        <td>form method="POST"로 전달</td>
        <td>O</td>
    </tr>
    <tr>
        <td>Daily_delete.php</td>
        <td>To do list 삭제</td>
        <td>삭제할 To do list의 id 전달받아 삭제</td>
        <td>sql DELETE FROM 기능<br>이전 페이지 주소는 별도의 페이지로 넘어가지 않고 header로 지정하기 위함</td>
        <td>O</td>
    </tr>
    <tr>
        <td>Daily.php</td>
        <td>To do list 완료 체크</td>
        <td>리스트에 있는 할 일 목록에 hover하면 색 변화<br>클릭 시 완료한 할 일의 finish_flag를 0에서 1로 바꿈</td>
        <td></td>
        <td>O</td>
    </tr>
    <tr>
        <td>Daily_finish.php</td>
        <td>To do list 완료 체크</td>
        <td>체크할 할 일의 id를 전달받아 finish_flag 업데이트</td>
        <td>sql UPDATE 기능</td>
        <td>O</td>
    </tr>
    <tr>
        <td>Daily.php</td>
        <td>To do list 완료 체크 표시</td>
        <td>끝낸 할 일 시각적으로 표시</td>
        <td></td>
        <td>X</td>
    </tr>
    <tr>
        <td>Daily.php</td>
        <td>다이어리 입력</td>
        <td>짧은 일기 입력 및 저장</td>
        <td>MySQL에 또다른 데이터베이스 칸 만들어야 함</td>
        <td>X</td>
    </tr>
    
</table>