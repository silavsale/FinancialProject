<?php
    include('config.php');
    session_start();

    $user_check = $_SESSION['login_user'];

//    $sql = "SELECT CUST_ID FROM individual WHERE LAST_NAME = '$myusername' and BIRTH_DATE = '$mypassword'";

    $ses_sql = mysqli_query($db,"select LAST_NAME,FIRST_NAME from individual where LAST_NAME = '$user_check' ");

    $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);



    $ses_sql2 = mysqli_query($db,"select AVAIL_BALANCE from account where CUST_ID = '1' ");

    $row2 = mysqli_fetch_array($ses_sql2,MYSQLI_ASSOC);

//$aaaa =   (" SELECT t.id, t.name, t.slug, tr.description, tr.created_at, tr.updated_at
//  FROM terms AS t
//   INNER JOIN terms_relation AS tr
//   ON t.id = tr.term_id AND tr.taxonomy = \"categ\" ");

  $ses_sql3 = mysqli_query($db,"select a.STATUS, a.OPEN_DATE, a.PENDING_BALANCE, a.AVAIL_BALANCE, a.LAST_ACTIVITY_DATE from account AS a INNER JOIN individual AS i ON a.CUST_ID = i.CUST_ID");

    $row3 = mysqli_fetch_array($ses_sql3,MYSQLI_ASSOC);

   $login_session = $row['FIRST_NAME'];
    $login_sessionLN = $row['LAST_NAME'];

    $login_session2 = $row2['AVAIL_BALANCE'];

    $login_session3 = $row3['LAST_ACTIVITY_DATE'];

    $login_session4 = $row3['AVAIL_BALANCE'];
    $login_session5 = $row3['STATUS'];
    $login_session6 = $row3['OPEN_DATE'];
    $login_session7 = $row3['PENDING_BALANCE'];



    if(!isset($_SESSION['login_user'])){
        header("location:log.php");
    }
?>