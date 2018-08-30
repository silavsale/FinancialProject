<?php
    include('session.php');
?>
<html">

<head>
    <title>Account</title>
    <link rel="stylesheet" type="text/css" href="stylesheets/style.css">
</head>

<body bgcolor="#FFFFFF">

<div align="center">
    <h1>Welcome to IBANK</h1>
    <img src="img/dollar-icon-png-3548.png" alt="Smiley face" width="250" height="250">
    <br>
    <br>
    <div style="margin:30px">
        <!--        $login_session = $row['FIRST_NAME'];-->
        <!--        $login_sessionLN = $row['LAST_NAME'];-->
        <!---->
        <!--        $login_session2 = $row2['AVAIL_BALANCE'];-->
        <!---->
        <!--        $login_session3 = $row3['LAST_ACTIVITY_DATE'];-->
        <!---->
        <!--        $login_session4 = $row3['AVAIL_BALANCE'];-->
        <!--        $login_session5 = $row3['STATUS'];-->
        <!--        $login_session6 = $row3['OPEN_DATE'];-->
        <!--        $login_session7 = $row3['PENDING_BALANCE'];-->

        <p>First Name: <?php echo $login_session; ?></p>
        <p>Last Name: <?php echo $login_sessionLN; ?></p>
        <p>Available Balance $<?php echo $login_session2; ?></p>
        <p>Pending Balance $<?php echo $login_session7; ?></p>
        <p>Open Date <?php echo $login_session6; ?></p>
        <p>Status <?php echo $login_session5; ?></p>
        <p>Last Activity Date <?php echo $login_session3; ?></p>

    </div>

    <?php echo "<hr>"; ?>
    <h2><a href="transfer_founds.php">Transfer Founds</a></h2>

    <h2><a href="logout.php">Sign Out</a></h2>
</div>
<footer>
    <div style='text-align:center'> &copy; <?php echo date('Y'); ?> Natalia Li </p></div>
</footer>
</body>

</html>