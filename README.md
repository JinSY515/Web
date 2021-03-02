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
        <td></td>
        <td>O</td>
    </tr>
</table>
<hr>
<h5>Annual 페이지</h5>
<table>
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
</table>
<hr>
<h5>Monthly 페이지</h5>
<table>
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
</table>   