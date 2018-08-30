<?php
    include('session.php');
?>
<html">

<head>
    <title>Welcome </title>
    <link rel="stylesheet" type="text/css" href="stylesheets/style.css">

</head>

<body bgcolor="#FFFFFF">

<div align="center">
    <div style="margin:30px">

        <h1>Welcome <?php echo $login_session; ?></h1>

    </div>

    <?php echo "<hr>"; ?>

    <h2 class=""><a href="account_summary.php">Account Summary</a></h2>

    <h2><a href="logout.php">Sign Out</a></h2>
</div>
<footer>
    <div style='text-align:center'> &copy; <?php echo date('Y'); ?> Natalia Li </p></div>
</footer>
</body>

</html>