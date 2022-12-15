<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title><?php echo self::titulo; ?></title>
    <link rel="stylesheet" type="text/css" href="<?php echo INCLUDE_PATH_FULL ?>css/style.css">
</head>
<body>
<header>
    <div class="center">
        <div class="logo">
            <h2>Danki Code</h2>
        </div>
        <nav class="menu">
            <?php
                foreach ($this->menuItems as $key => $value) {
                echo '<a href="'.INCLUDE_PATH.strtolower($value).'">' . $value . '</a>';
                }
            ?>
        </nav>
    </div>
</header>