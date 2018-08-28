<?php

    if (!isset($page_title)) {
        $page_title = 'My money';
    }
?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" media="all" href="<?php echo url_for('/stylesheets/style.css') ?>"/>
    <title>Finance - <?php echo h($page_title); ?></title>
</head>
<body>
<header>
    <h1>Finance</h1>
</header>